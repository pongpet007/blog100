<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContentRowItem extends CI_Controller {


	function __construct(){

		parent::__construct();
		$this->load->model('Menu_admin_model');	
		$this->load->model('Menu_admin_type_model');	
		// $this->load->model('Company_ads_model');
		$this->load->model('Company_model');
		$this->load->model('Content_model');
		$this->load->model('Content_model');
		$this->load->model('Content_row_model');
		$this->load->model('Content_row_item_model');
		$this->load->model('Content_row_item_template_model');
		$this->load->model('Company_slide_model');
		$this->load->model('Country_model');

		
	}

	
	public function additem($row_id)
	{		
		$data["seltemplate_id"] = $this->input->get('template_id');
		
		$data["row_id"] = $row_id ;
		$data["item_id"] = '0' ;
		$data["method"] = 'additemsave' ;
		//////////////////// Menu /////////////////////////////////
		$menu_types = $this->Menu_admin_type_model->getAll();
		foreach ($menu_types as $menu_type) {
			$menu_type->menu = $this->Menu_admin_model->getAll($menu_type->menu_admin_type_id);
		}

		$data['menu_admins'] =  $menu_types;
		$menuselected = $this->input->get('menuselected');
		if($menuselected > 0){
			$data['menuselected'] =  $this->Menu_admin_model->getOne($menuselected);				
		}
		############################################################		
		$data['item'] = '';
		$data['countrys'] = $this->Country_model->getAll();	

		// templates
		$templates = $this->Content_row_item_template_model->getAll();		
		$arr = array('0'=>' -- Template -- ');
		foreach ($templates as $template) {
			$arr[$template->template_id] = $template->template_name;
		}
		$data['templates'] = $arr ;

		// slide
		$slide = $this->Company_slide_model->getAll();
		// echo $this->db->last_query();
		// exit();	
		$arr = array('0'=>' -- slide -- ');
		foreach ($slide as $slides) {
			$arr[$slides->slide_id] = $slides->slide_name;
		}
		$data['slide'] = $arr ;


		$data['company'] = $this->Company_model->getOne(1);
		$data['contentview'] = 'pagecompany/content_row_item_form';	
		
		$this->load->view('layoutcompany/main',$data);	
		
	}


	public function additemsave($row_id)
	{
		// foreach ($_REQUEST as $key => $value) {
		// 	echo "\$$key = \$this->input->post('$key');<br>";
		// 	//echo "'$key'=>\$$key,	<br>";
		// }
		// exit();

		$template_id = $this->input->post('template_id');		
		$row_id = $this->input->post('row_id');
		$posts = $this->input->post();

		$params = array('template_id'=>$template_id,																
			'row_id'=>$row_id );
		
		$this->db->insert('content_row_item',$params);
		
		$item_id = $this->db->insert_id();
		
		if($_FILES['picture']['size']>0){
			$path_parts = pathinfo($_FILES['picture']['name']);
			$ext = $path_parts['extension'];
			$filename = "item_". $item_id .".$ext";
			$filepath = "../images/item/$filename";			
			move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);

			$filename2 = "item_". $item_id .".webp";
			if ($ext == "jpg") {
				$jpg = imagecreatefromjpeg("../images/item/{$filename}");
			}else{
				$jpg = imagecreatefrompng("../images/item/{$filename}");
			}
			$w=imagesx($jpg);
			$h=imagesy($jpg);

			// converter webp
			$webp=imagecreatetruecolor($w,$h);
			$backgroundColor = imagecolorallocatealpha($webp, 0, 0, 0, 127);
			imagefill($webp, 0, 0, $backgroundColor);
			imagecopy($webp,$jpg, 0, 0, 0, 0,$w,$h);
			imagewebp($webp, "../images/item/{$filename2}", 100);

			imagedestroy($jpg);
			imagedestroy($webp);

			$posts['picture'] = $filename;	
		}

		if(isset($_FILES['picture2']['size'])){
			$path_parts2 = pathinfo($_FILES['picture2']['name']);
			$ext2 = $path_parts2['extension'];
			$filename2 = "mobile_item_". $item_id .".$ext2";
			$filepath2 = "../images/item/$filename2";			
			move_uploaded_file($_FILES['picture2']['tmp_name'], $filepath2);		
			$posts['picture2'] = $filename2;	
		}
		$jsondata = json_encode($posts);

		$this->db->where('item_id',$item_id);		
		$this->db->update('content_row_item',array('jsondata'=>$jsondata));		
		
		$this->session->set_flashdata('msg','Add Complete');
		redirect('Content/edit/1');
		// echo "<script> window.opener.location.reload(); window.close();</script>";		


	}

	public function edititem($item_id)
	{
		//////////////////// Menu /////////////////////////////////
		$menu_types = $this->Menu_admin_type_model->getAll();
		foreach ($menu_types as $menu_type) {
			$menu_type->menu = $this->Menu_admin_model->getAll($menu_type->menu_admin_type_id);
		}

		$data['menu_admins'] =  $menu_types;
		$menuselected = $this->input->get('menuselected');
		if($menuselected > 0){
			$data['menuselected'] =  $this->Menu_admin_model->getOne($menuselected);				
		}
		############################################################		

		$data['countrys'] = $this->Country_model->getAll();	



		$data["seltemplate_id"] = $this->input->get('template_id');
		
		$item = $this->Content_row_item_model->getOne($item_id);

		$data["row_id"] = $item->row_id ;
		$data["item_id"] = $item_id ;

		$data["method"] = 'edititemsave' ;
		
		$data['item'] = $item;
		

		// templates
		$templates = $this->Content_row_item_template_model->getAll();		
		$arr = array('0'=>' -- Template -- ');
		foreach ($templates as $template) {
			$arr[$template->template_id] = $template->template_name;
		}
		$data['templates'] = $arr ;

		// slide
		$slide = $this->Company_slide_model->getAll();

		$arr = array('0'=>' -- slide -- ');
		foreach ($slide as $slides) {
			$arr[$slides->slide_id] = $slides->slide_name;
		}
		$data['slide'] = $arr ;
		$data['countrys'] = $this->Country_model->getAll();	
		$data['company'] = $this->Company_model->getOne(1);
		$data['contentview'] = 'pagecompany/content_row_item_form';	
		
		$this->load->view('layoutcompany/main',$data);	
	}

	public function edititemsave($item_id)
	{
		$template_id = $this->input->post('template_id');		
		
		$posts = $this->input->post();
		$item = $this->Content_row_item_model->getOne($item_id);
		
		$posts['picture'] = '';	

		if(is_object($item)){
			$i = json_decode($item->jsondata);
			$filepath = "../images/item/$i->picture";	
			if(is_file($filepath)){
				$posts['picture'] = $i->picture;
			}			
		}

		$posts['picture2'] = '';
		if(is_object($item)){
			$i = json_decode($item->jsondata);
			$filepath2 = "../images/item/$i->picture2";	
			if(is_file($filepath2)){
				$posts['picture2'] = $i->picture2;
			}else{
				$posts['picture2'] = "";
			}			
		}
		
		if(isset($_FILES['picture']) && $_FILES['picture']['size']>0){
			$path_parts = pathinfo($_FILES['picture']['name']);
			$ext = $path_parts['extension'];
			$filename = "item_". $item_id .".$ext";
			$filepath = "../images/item/$filename";			
			move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);

			$filename2 = "item_". $item_id .".webp";
			if ($ext == "jpg") {
				$jpg = imagecreatefromjpeg("../images/item/{$filename}");
			}else{
				$jpg = imagecreatefrompng("../images/item/{$filename}");
			}
			$w=imagesx($jpg);
			$h=imagesy($jpg);

			// converter webp
			$webp=imagecreatetruecolor($w,$h);
			$backgroundColor = imagecolorallocatealpha($webp, 0, 0, 0, 127);
			imagefill($webp, 0, 0, $backgroundColor);
			imagecopy($webp,$jpg, 0, 0, 0, 0,$w,$h);
			imagewebp($webp, "../images/item/{$filename2}", 100);

			imagedestroy($jpg);
			imagedestroy($webp);
					
			$posts['picture'] = $filename;	
		}

		if(isset($_FILES['picture2']) && $_FILES['picture2']['size']>0){
			
			$path_parts2 = pathinfo($_FILES['picture2']['name']);
			// print_r($path_parts2);
			// exit();
			$ext2 = $path_parts2['extension'];
			$filename2 = "mobile_item_". $item_id .".$ext2";
			$filepath2 = "../images/item/$filename2";			
			move_uploaded_file($_FILES['picture2']['tmp_name'], $filepath2);		
			$posts['picture2'] = $filename2;	
		}

		
		$jsondata = json_encode($posts);		
		$params = array('template_id'=>$template_id,'jsondata'=>$jsondata);
		$this->db->where('item_id',$item_id);		
		$this->db->update('content_row_item',$params);		


		$this->session->set_flashdata('msg','Edit Complete');
		redirect('ContentRowItem/edititem/'.$item_id.'');
		// echo "<script>window.opener.location.reload();window.close();</script>";		
	}

	public function deleteitem($item_id)
	{
		$this->db->where('item_id', $item_id);
		$this->db->delete('content_row_item');
		echo "<script>window.opener.location.reload();window.close();</script>";	
	}
	
}


?>