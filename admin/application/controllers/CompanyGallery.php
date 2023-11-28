<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompanyGallery extends CI_Controller {


	function __construct(){
						
		parent::__construct();
		$this->load->model('Menu_admin_model');	
		$this->load->model('Menu_admin_type_model');	
		$this->load->model('Company_gallery_model');
		$this->load->model('Company_gallery_language_model');
		$this->load->model('Company_gallery_image_language_model');
		$this->load->model('Company_gallery_category_model');
		$this->load->model('Company_model');
		$this->load->model('Country_model');
	}

	public function index($com_id){

		$data = array();
		$data["com_id"] = $com_id ;
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
		$data['contentview']  = 'pagecompany/gallery_show';
		$data['company'] = $this->Company_model->getOne($com_id);

		$gallerys = $this->Company_gallery_model->getAll();
		foreach ($gallerys as $gallery) {
			$gallery->languages = $this->Company_gallery_language_model->getAll(array('gallery_id'=>$gallery->gallery_id));
		}
		$data['gallerys'] = $gallerys;

		$this->load->view('layoutcompany/main',$data);
	}

	public function addimage($com_id,$id){

		$data = array();
		$data["com_id"] = $com_id ;
		$data["gallery_id"] = $id;
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
		$data['contentview']  = 'pagecompany/gallery_image_show';
		$data['company'] = $this->Company_model->getOne($com_id);
		$images = $this->Company_gallery_model->get_gallery_image_All($id);
		foreach ($images as $image) {
		$image->languages = $this->Company_gallery_image_language_model->getAll(array('image_id'=>$image->image_id));			
		}
		$data['gallerys'] = $images;
		$this->load->view('layoutcompany/main',$data);
	}

	public function addimageadd($com_id,$gallery_id){

		$this->form_validation->set_rules('id','id','trim|required');
		
		if($this->form_validation->run()==FALSE){
			//if($this->input->post('username')){

			$this->session->set_flashdata('errors', validation_errors());
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
			
			$data['countrys'] = $this->Country_model->getAll();	

			############################################################
			$data["com_id"] = $com_id ;

			$data["gallery_id"] = $gallery_id ;
				
			$data["method"] = 'Add' ;

			$data["image_id"] = $gallery_id  ;

			$data["methods"] = 'addimageadd' ;
								
			$data['gallery_image'] ='';
				
			$data['contentview'] = 'pagecompany/gallery_image_form';	
			$data['company'] = $this->Company_model->getOne($com_id);
			$this->load->view('layoutcompany/main',$data);	
				
				
		}else{

			$image_name    = $this->input->post('image_name');
			$country_id    = $this->input->post('country_id');
			$position = $this->input->post('position');
			
			$params = array(													
							'position'=>$position,
							'gallery_id'=>$gallery_id,
							'cby'=>$this->session->userdata('ssfullname'),
							'udate'=> date('Y-m-d H:i:s'),
							'cdate'=> date('Y-m-d H:i:s')  );

			$this->db->insert('company_gallery_image',$params);
			$image_id = $this->db->insert_id();
			
			for ($i=0; $i < sizeof($image_name) ; $i++) { 
				$params	= array(
							'image_id'=>$image_id,
							'country_id'=>$country_id[$i],
							'image_name'=>$image_name[$i],
							'cby'=>$this->session->userdata('ssfullname'),						
							'cdate'=> date('Y-m-d H:i:s')
						);
				$this->db->insert('company_gallery_image_language',$params);
			}
			
			if(isset($_FILES['picture'])&&$_FILES['picture']['size']>0){
				$filepath = "../images/gallery_images/{$image_id}.jpg";
				move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);
			}
				
			$this->session->set_flashdata('msg','Add Complete');
			
			echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";					
				
		}
	}

	public function addimagedelete($com_id,$gallery_id){
		$this->db->where('image_id',$gallery_id);
		$this->db->delete('company_gallery_image');

		$this->db->where('image_id',$gallery_id);
		$this->db->delete('company_gallery_image_language');
		

		$filepath = "../images/gallery_images/{$gallery_id}.jpg";
		
		if(is_file($filepath)){
			
			unlink($filepath);
		}

		$this->session->set_flashdata('msg','Delete Complete');

		echo "<script>alert('deleted');window.opener.location.reload();window.close();</script>";	
	}

	public function addimageedit($com_id,$image_id){

		$this->form_validation->set_rules('id','id','trim|required');
		
		if($this->form_validation->run()==FALSE){
			//if($this->input->post('username')){

			$this->session->set_flashdata('errors', validation_errors());
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

			$data['countrys'] = $this->Country_model->getAll();	

			############################################################
			$data["com_id"] = $com_id ;

			$data["image_id"] = $image_id ;
				
			$data["method"] = 'Edit' ;

			$data["methods"] = 'addimageedit' ;
			$gallery_images = $this->Company_gallery_model->getOneimage($image_id);				
			$gallery_images->languages = $this->Company_gallery_image_language_model->getAll(array('image_id'=>$image_id));
			$data['gallery_image'] =$gallery_images;
							
			$data['contentview'] = 'pagecompany/gallery_image_form';	
			$data['company'] = $this->Company_model->getOne($com_id);
			$this->load->view('layoutcompany/main',$data);	
				
				
		}else{

			$image_name    = $this->input->post('image_name');
			$country_id = $this->input->post('country_id');

			$position = $this->input->post('position');			
			$params = array(	
							'position'=>$position,
							'uby'=>$this->session->userdata('ssfullname'),
							'udate'=> date('Y-m-d H:i:s')
							 );
			
			$this->db->where('image_id', $image_id);
			$this->db->update('company_gallery_image',$params);

			$this->db->where('image_id',$image_id);
			$this->db->delete('company_gallery_image_language');
			
			for ($i=0; $i < sizeof($image_name) ; $i++) { 
				$params	= array(
							'image_id'=>$image_id,
							'country_id'=>$country_id[$i],
							'image_name'=>$image_name[$i],
							'cby'=>$this->session->userdata('ssfullname'),							
							'cdate'=> date('Y-m-d H:i:s')
						);
				$this->db->insert('company_gallery_image_language',$params);
			}

			if(isset($_FILES['picture'])&&$_FILES['picture']['size']>0){
				$filepath = "../images/gallery_images/{$image_id}.jpg";
				move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);
			}
				
			$this->session->set_flashdata('msg','Add Complete');
			
			echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";					
				
		}
	}

	public function add($com_id){
					
			$params = array('is_active'=>1,
							'cby'=>$this->session->userdata('ssfullname'),
							'udate'=> date('Y-m-d H:i:s'),
							'cdate'=> date('Y-m-d H:i:s')  );
			$this->db->insert('company_gallery',$params);			
			$gallery_id = $this->db->insert_id();		

			$country_id = "";
			$country = $this->Country_model->getAll2($country_id);

			foreach ($country as  $countrynew) {
				$params = array(
						'gallery_id'=>$gallery_id,
						'country_id'=>$countrynew->country_id
				);
				$this->db->insert('company_gallery_language',$params);
			}


			redirect("CompanyGallery/edit/1/$gallery_id");

	}

	public function edit($com_id,$gallery_id){

		$this->form_validation->set_rules('id','id','trim|required');			
					
		if($this->form_validation->run()==FALSE){			

			$this->session->set_flashdata('errors', validation_errors());			
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
			//////////////////////////// Language ////////////////////////////
			$countrys = $this->Country_model->getAll();		
			$arr = array('0'=>' -- All Country -- ');
			foreach ($countrys as $key => $value) {
				$arr[$value->country_id] = $value->short_name;
			}
			$data['countrys'] = $arr ;

			$countrys = $this->Country_model->getAll();					
			foreach ($countrys as $country) {
				$country->languages = $this->Company_gallery_language_model->getAll(array('country_id'=>$country->country_id,'gallery_id'=>$gallery_id));				
			}			
			$data['languages'] = $countrys ;

			$arr = array('-- Select Parent --');
			$mains = $this->Company_gallery_category_model->getMain($com_id);
			foreach ($mains as $main) {
				$arr[$main->cat_id] = $main->cat_name;
				$sub1s = $this->Company_gallery_category_model->getSub($com_id,$main->cat_id);
				if(count($sub1s)>0){
					foreach ($sub1s as $sub1) {
						$arr[$sub1->cat_id] = '&nbsp;&nbsp;&nbsp;|-'.$sub1->cat_name;
						$sub2s = $this->Company_gallery_category_model->getSub($com_id,$sub1->cat_id);
						if(count($sub2s)>0){
							foreach ($sub2s as $sub2) {
								$arr[$sub2->cat_id] = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-'.$sub2->cat_name;
							}
						}
					}
				}
			}				
			$data['categorys'] = $arr;

			############################################################
			$data["com_id"] = $com_id ;

			$data["gallery_id"] = $gallery_id ;

			$data["method"] = 'Edit' ;
						
			$data['contentview'] = 'pagecompany/gallery_form';	
			$data['company'] = $this->Company_model->getOne($com_id);
			$data['gallery'] = $this->Company_gallery_model->getOne($gallery_id);
			// print_r($data['youtube']);
			// exit();

			$this->load->view('layoutcompany/main',$data);				
			
		}else{

			
			$is_active = $this->input->post('is_active');
			$cat_id = $this->input->post('cat_id');
			$gallery_url = $this->input->post('gallery_url');
			
			$params = array(
							'cat_id'=>$cat_id,
							'gallery_url'=>$gallery_url,
							'is_active'=>$is_active,	
							'uby'=>$this->session->userdata('ssfullname'),
							'udate'=> date('Y-m-d H:i:s') );
		
			$this->db->where('gallery_id', $gallery_id);
			$this->db->update('company_gallery',$params);
					
			if(isset($_FILES['picture'])&&$_FILES['picture']['size']>0){
				$filepath = "../images/gallery/{$gallery_id}.jpg";
				move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);
			}				

			$this->session->set_flashdata('msg','Edit Complete');		

			echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";					
		}
	}

	public function delete($com_id,$gallery_id){

		$gallerys = $this->Company_gallery_model->get_gallery_image_All($gallery_id);
		$countgallerys = count($gallerys);
		if ($countgallerys>0) {
			foreach ($gallerys as $key => $newgallerys) {
				$this->db->where('image_id',$newgallerys->image_id);
				$this->db->delete('company_gallery_image');

				$filepath = "../images/gallery_images/{$newgallerys->image_id}.jpg";
				
				if(is_file($filepath)){
					
					unlink($filepath);
				}
			}
		}
		$this->db->where('gallery_id',$gallery_id);
		$this->db->delete('Company_gallery_language');

		$this->db->where('gallery_id',$gallery_id);
		$this->db->delete('company_gallery');

		$filepath = "../images/gallery/{$gallery_id}.jpg";
		if(is_file($filepath)){
			unlink($filepath);
		}

		$this->session->set_flashdata('msg','Delete Complete');
		echo "<script>alert('deleted');window.opener.location.reload();window.close();</script>";	
	}

	public function getLanguageJson($language_id)
	{
		$language = $this->Company_gallery_language_model->getOne($language_id);		
		echo json_encode($language);
	}
	public function savelanguage()
	{
		$languagemethod = $this->input->post('languagemethod');
		$country_id = $this->input->post('country_id');
		$gallery_id = $this->input->post('gallery_id');
		$language_id = $this->input->post('language_id');
		$meta_title = $this->input->post('meta_title');
		$meta_keyword = $this->input->post('meta_keyword');
		$meta_description = $this->input->post('meta_description');
		$gallery_name = $this->input->post('gallery_name');		
		$gallery_desc = $this->input->post('gallery_desc');			
		$gallery_desc_short = $this->input->post('gallery_desc_short');			
		

		if($languagemethod=='add'){
			$params = array();
			$params['country_id'] = $country_id;
			$params['gallery_id'] = $gallery_id;
			$params['meta_title'] = $meta_title;
			$params['meta_keyword'] = $meta_keyword;
			$params['meta_description'] = $meta_description;
			$params['gallery_name'] = $gallery_name;
			$params['gallery_desc'] = $gallery_desc;					
			$params['gallery_desc_short'] = $gallery_desc_short;					
			$params['cdate'] = date('Y-m-d H:i:s');
			$params['udate'] = date('Y-m-d H:i:s');
			$params['cby'] = $this->session->userdata('ssfullname');
			$params['uby'] = $this->session->userdata('ssfullname');
			if($country_id > 0)
			$this->db->insert('company_gallery_language',$params);
		}

		if($languagemethod=='edit'){
			$params = array();
			$params['country_id'] = $country_id;
			$params['meta_title'] = $meta_title;
			$params['meta_keyword'] = $meta_keyword;
			$params['meta_description'] = $meta_description;
			$params['gallery_name'] = $gallery_name;			
			$params['gallery_desc'] = $gallery_desc;							
			$params['gallery_desc_short'] = $gallery_desc_short;							
			$params['udate'] = date('Y-m-d H:i:s');			
			$params['uby'] = $this->session->userdata('ssfullname');

			if($country_id > 0){
				$this->db->where('language_id',$language_id);
				$this->db->update('company_gallery_language',$params);
			}
			
		}		

		echo "save complete";
	}

	public function deletelanguage($language_id)
	{
		if($language_id > 0){
			$this->db->where('language_id',$language_id);
			$this->db->delete('company_gallery_language');
		}
	}

	
}
 

?>