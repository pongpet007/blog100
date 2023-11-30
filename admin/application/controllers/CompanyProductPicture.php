<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompanyProductPicture extends CI_Controller {

	private $fields = array();

	function __construct(){

		parent::__construct();
		$this->load->model('Menu_admin_model');	
		$this->load->model('Menu_admin_type_model');	
		$this->load->model('Promotion_model');		
		$this->load->model('Company_product_model');		
		$this->load->model('Products_picture_model');	
		
		$this->load->model('Company_model');				

	}

	public function index($pro_id){
		
		$com_id = 1;		
		$search['com_id'] = $com_id;		
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
		$pictures = $this->Products_picture_model->getAll($pro_id);		
		$data['pictures'] = $pictures;
		$data['search'] = $search;
		$data['pro_id'] = $pro_id;
		$data['company'] = $this->Company_model->getOne($com_id);
		$data['contentview']  = 'pagecompany/product_picture_show';

		$this->load->view('layoutcompany/main',$data);
	}

	public function add($pro_id){

		$this->form_validation->set_rules('id','id','trim|required');

		$com_id = 1;

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
				############################################################		
			$data["com_id"] = $com_id ;
			$data["pro_id"] = $pro_id ;
			$data["pro_pic_id"] = "" ;
			$data["method"] = 'add' ;						
			$data['company'] = $this->Company_model->getOne($com_id);					
			// $data['product'] =$this->Company_product_model->getOne($pro_id);
			$data['picture'] = "";				
			$data['contentview'] = 'pagecompany/product_picture_form';	

			$this->load->view('layoutcompany/main',$data);		
			
		}else{


			$color = $this->input->post('color');				
			$params = array(
				'color'=>$color,	
				'pro_id'=>$pro_id,									
				'cdate'=>date('Y-m-d h:i:s'),
				'udate'=>date('Y-m-d h:i:s'),
				'cby'=>$this->session->userdata('ssfullname')							
			);
			
			$this->db->insert('products_picture',$params);

			$pro_pic_id= $this->db->insert_id();

			if($_FILES['picture1200']['size']>0){

				$img = pathinfo($_FILES['picture1200']['name']);
				$filename = "detail_".$pro_pic_id."_1200";
				$extension = $img["extension"];

				$foldertemp = "../images/product_new/";
				$temp_filepath = $foldertemp.$filename.'.'.$extension;

				move_uploaded_file($_FILES['picture1200']['tmp_name'], $temp_filepath);

				$f_type=$_FILES['picture1200']['type'];

				if (preg_match('/jpg|jpeg/i',$f_type)){
					$imageTmp=imagecreatefromjpeg($temp_filepath);
				}
				else if (preg_match('/png/i',$f_type)){
					$imageTmp=imagecreatefrompng($temp_filepath);
				}
				else if (preg_match('/gif/i',$f_type)){
					$imageTmp=imagecreatefromgif($temp_filepath);
				}
				else if (preg_match('/bmp/i',$f_type)){
					$imageTmp=imagecreatefrombmp($temp_filepath);   
				}else if (preg_match('/webp/i',$f_type)){
					$imageTmp=imagecreatefromwebp($temp_filepath);   
				}


				// $filepath = "../images/product_new/detail_". $pro_pic_id .'_1200.jpg';
				// move_uploaded_file($_FILES['picture1200']['tmp_name'], $filepath);

				// if ($filepath == "jpg") {
					// $imageTmp = imagecreatefromjpeg("../images/product_new/detail_{$pro_pic_id}_1200.jpg");
				// }else{
				// 	$imageTmp = imagecreatefrompng("../images/product_new/detail_{$pro_pic_id}_1200.jpg");
				// }
				$w=imagesx($imageTmp);
				$h=imagesy($imageTmp);

				// resize image
				$newsize = array("570","300","90"); 
				foreach ($newsize as $key => $new_newsize) {
					$new_w = $new_newsize;
					$new_h = floor(($h * $new_newsize)/$w);

					$dst_img = imagecreatetruecolor($new_w, $new_h);
					$backgroundColor = imagecolorallocatealpha($dst_img, 255, 255, 255, 1);
					imagefill($dst_img, 0, 0, $backgroundColor);
					imagecopyresampled($dst_img, $imageTmp, 0, 0, 0, 0, $new_w, $new_h, $w, $h);
					if($dst_img){			
						$folder = "../images/product_new/";
						$filename = "detail_{$pro_pic_id}_{$new_newsize}";
						$destination = $folder.$filename.'.jpg';
						imagejpeg($dst_img, $destination, 100);
					}
				}
				imagedestroy($imageTmp);

				$filename2 = "detail_". $pro_pic_id ."_300.webp";

				$imageTmp = imagecreatefromjpeg("../images/product_new/detail_{$pro_pic_id}_300.jpg");

				$w=imagesx($imageTmp);
				$h=imagesy($imageTmp);

				// converter webp
				$webp=imagecreatetruecolor($w,$h);
				$backgroundColor = imagecolorallocatealpha($webp, 0, 0, 0, 127);
				imagefill($webp, 0, 0, $backgroundColor);
				imagecopy($webp,$imageTmp, 0, 0, 0, 0,$w,$h);
				imagewebp($webp, "../images/product_new/{$filename2}", 100);

				imagedestroy($imageTmp);
				imagedestroy($webp);
			}

			// echo "Start upload ftp <br>";
        	// exit();
			$this->load->library('ftp');

			$config['hostname'] = '27.254.96.231';
			$config['username'] = 'brand100';
			$config['password'] = 'Bra1212312121!@#$%^';
			$config['debug']        = TRUE;

			$domainsnow = $_SERVER['SERVER_NAME'];
			$domainsold = $this->Company_model->getDomainbyALLS($domainsnow);

			foreach ($domainsold as $key => $new_domains) {
				$domains[] = $new_domains->com_website;
			}

			$this->ftp->connect($config);

			$filename = "detail_". $pro_pic_id ."_300.webp";
			$filename1 = '../images/product_new/detail_'.$pro_pic_id.'_300.webp';

			foreach ($domains as $domain) {
				$folder = "/domains/$domain/public_html/images/";
				if ($this->ftp->list_files($folder) === FALSE) {
					$this->ftp->mkdir($folder);
					$this->ftp->chmod($folder, 0777);
				}

				$folder = "/domains/$domain/public_html/images/product_new/";
				if ($this->ftp->list_files($folder) === FALSE) {
					$this->ftp->mkdir($folder);
					$this->ftp->chmod($folder, 0777);
				}
            // $_FILES['picture']["tmp_name"];
				$this->ftp->upload($filename1, $folder.$filename);
			}

			$this->ftp->close();

			echo "transfer complete";

			$this->session->set_flashdata('msg','Add Complete');

			echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";
		}		
	}
	

	public function edit($pro_id,$pro_pic_id){

		$this->form_validation->set_rules('id','id','trim|required');
		$com_id = 1;
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
				############################################################		
			$data["com_id"] = $com_id ;			
			$data["pro_pic_id"] = $pro_pic_id ;
			$data["method"] = 'Edit' ;						
			$data['company'] = $this->Company_model->getOne($com_id);				
			
			$data["pro_id"] = $pro_id ;
			$data['picture'] =$this->Products_picture_model->getOne($pro_pic_id);
			$data['contentview'] = 'pagecompany/product_picture_form';
			$this->load->view('layoutcompany/main',$data);		
			
		}else{


			$color = $this->input->post('color');				
			$params = array(
				'color'=>$color,									
				'udate'=>date('Y-m-d h:i:s'),
				'uby'=>$this->session->userdata('ssfullname')							
			);



			$this->db->where('pro_pic_id', $pro_pic_id);

			$this->db->update('products_picture',$params);

			if($_FILES['picture1200']['size']>0){
				
				$img = pathinfo($_FILES['picture1200']['name']);
				$filename = "detail_".$pro_pic_id."_1200";
				$extension = $img["extension"];

				$foldertemp = "../images/product_new/";
				$temp_filepath = $foldertemp.$filename.'.'.$extension;

				move_uploaded_file($_FILES['picture1200']['tmp_name'], $temp_filepath);

				$f_type=$_FILES['picture1200']['type'];

				if (preg_match('/jpg|jpeg/i',$f_type)){
					$imageTmp=imagecreatefromjpeg($temp_filepath);
				}
				else if (preg_match('/png/i',$f_type)){
					$imageTmp=imagecreatefrompng($temp_filepath);
				}
				else if (preg_match('/gif/i',$f_type)){
					$imageTmp=imagecreatefromgif($temp_filepath);
				}
				else if (preg_match('/bmp/i',$f_type)){
					$imageTmp=imagecreatefrombmp($temp_filepath);   
				}else if (preg_match('/webp/i',$f_type)){
					$imageTmp=imagecreatefromwebp($temp_filepath);   
				}

				$w=imagesx($imageTmp);
				$h=imagesy($imageTmp);

				// resize image
				$newsize = array("570","300","90"); 
				foreach ($newsize as $key => $new_newsize) {
					$new_w = $new_newsize;
					$new_h = floor(($h * $new_newsize)/$w);

					$dst_img = imagecreatetruecolor($new_w, $new_h);
					$backgroundColor = imagecolorallocatealpha($dst_img, 255, 255, 255, 1);
					imagefill($dst_img, 0, 0, $backgroundColor);
					imagecopyresampled($dst_img, $imageTmp, 0, 0, 0, 0, $new_w, $new_h, $w, $h);
					if($dst_img){			
						$folder = "../images/product_new/";
						$filename = "detail_{$pro_pic_id}_{$new_newsize}";
						$destination = $folder.$filename.'.jpg';
						imagejpeg($dst_img, $destination, 100);
					}
				}
				imagedestroy($imageTmp);

				$filename2 = "detail_". $pro_pic_id ."_300.webp";

				$imageTmp = imagecreatefromjpeg("../images/product_new/detail_{$pro_pic_id}_300.jpg");

				$w=imagesx($imageTmp);
				$h=imagesy($imageTmp);

				// converter webp
				$webp=imagecreatetruecolor($w,$h);
				$backgroundColor = imagecolorallocatealpha($webp, 0, 0, 0, 127);
				imagefill($webp, 0, 0, $backgroundColor);
				imagecopy($webp,$imageTmp, 0, 0, 0, 0,$w,$h);
				imagewebp($webp, "../images/product_new/{$filename2}", 100);

				imagedestroy($imageTmp);
				imagedestroy($webp);
			}
			
			// echo "Start upload ftp <br>";
        	// exit();
			$this->load->library('ftp');

			$config['hostname'] = '27.254.96.231';
			$config['username'] = 'brand100';
			$config['password'] = 'Bra1212312121!@#$%^';
			$config['debug']        = TRUE;

			$domainsnow = $_SERVER['SERVER_NAME'];
			$domainsold = $this->Company_model->getDomainbyALLS($domainsnow);

			foreach ($domainsold as $key => $new_domains) {
				$domains[] = $new_domains->com_website;
			}

			$this->ftp->connect($config);

			$filename = "detail_". $pro_pic_id ."_300.webp";
			$filename1 = '../images/product_new/detail_'.$pro_pic_id.'_300.webp';

			foreach ($domains as $domain) {
				$folder = "/domains/$domain/public_html/images/";
				if ($this->ftp->list_files($folder) === FALSE) {
					$this->ftp->mkdir($folder);
					$this->ftp->chmod($folder, 0777);
				}

				$folder = "/domains/$domain/public_html/images/product_new/";
				if ($this->ftp->list_files($folder) === FALSE) {
					$this->ftp->mkdir($folder);
					$this->ftp->chmod($folder, 0777);
				}
            // $_FILES['picture']["tmp_name"];
				$this->ftp->upload($filename1, $folder.$filename);
			}

			$this->ftp->close();

			echo "transfer complete";
			
			$this->session->set_flashdata('msg','Edit Complete');
			// echo $this->db->last_query();
			// exit();

			echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";					
			
		}
	}

	public function delete($pro_pic_id){
		$this->db->where('pro_pic_id',$pro_pic_id);
		$this->db->delete('products_picture');

		$filepath = "../images/product_new/detail_". $pro_pic_id .'90.jpg';
		if(is_file($filepath)){
			unlink($filepath);
		}
		$filepath = "../images/product_new/detail_". $pro_pic_id .'570.jpg';
		if(is_file($filepath)){
			unlink($filepath);
		}
		$filepath = "../images/product_new/detail_". $pro_pic_id .'1200.jpg';
		if(is_file($filepath)){
			unlink($filepath);
		}
		
		$this->session->set_flashdata('msg','Delete Complete');

		echo "<script>alert('deleted');window.opener.location.reload();window.close();</script>";		
	}

	
	
}


?>