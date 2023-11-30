<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompanySlide extends CI_Controller {


	function __construct(){
						
		parent::__construct();
		$this->load->model('Menu_admin_model');	
		$this->load->model('Menu_admin_type_model');	
		$this->load->model('Company_slide_model');
		$this->load->model('Company_slide_language_model');
		$this->load->model('Company_slide_image_language_model');
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
		$data['contentview']  = 'pagecompany/slide_show';
		$data['company'] = $this->Company_model->getOne($com_id);

		$slides = $this->Company_slide_model->getAll();
		foreach ($slides as $slide) {
			$slide->languages = $this->Company_slide_language_model->getAll(array('slide_id'=>$slide->slide_id));
		}
		$data['slides'] = $slides;

		$this->load->view('layoutcompany/main',$data);
	}

	public function addimage($com_id,$id){

		$data = array();
		$data["com_id"] = $com_id ;
		$data["slide_id"] = $id;
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
		$data['contentview']  = 'pagecompany/slide_image_show';
		$data['company'] = $this->Company_model->getOne($com_id);
		// print_r($id);exit();
		$images = $this->Company_slide_model->get_slide_image_All($id);
		// print_r($this->db->last_query());exit();
		foreach ($images as $image) {
		$image->languages = $this->Company_slide_image_language_model->getAll(array('slide_image_id'=>$image->slide_image_id));			
		}
		$data['images'] = $images;
		// $data['slide'] = $this->Company_slide_model->get_slide_image_All($id);

		$this->load->view('layoutcompany/main',$data);
	}

	public function addimageadd($com_id,$slide_id,$slide_image_id=""){

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

			$data["slide_id"] = $slide_id ;
			$data["slide_image_id"] = "";		
			$data["method"] = 'Add' ;

			$data["methods"] = 'addimageadd' ;
								
			$data['slide_image'] ='';
				
			$data['contentview'] = 'pagecompany/slide_image_form';	
			$data['company'] = $this->Company_model->getOne($com_id);
			$this->load->view('layoutcompany/main',$data);	
				
				
		}else{

			$image_name    = $this->input->post('image_name');
			$country_id    = $this->input->post('country_id');
			$position = $this->input->post('position');

			
			$params = array(
							'position'=>$position,
							'slide_id'=>$slide_id,
							'cby'=>$this->session->userdata('ssfullname'),
							'udate'=> date('Y-m-d H:i:s'),
							'cdate'=> date('Y-m-d H:i:s')  );

			$this->db->insert('company_slide_image',$params);
				
			$slide_image_id = $this->db->insert_id();
			
						
			for ($i=0; $i < sizeof($image_name) ; $i++) { 
				$params	= array(
							'slide_image_id'=>$slide_image_id,
							'country_id'=>$country_id[$i],
							'image_name'=>$image_name[$i],
							'cby'=>$this->session->userdata('ssfullname'),						
							'cdate'=> date('Y-m-d H:i:s')
						);
				$this->db->insert('company_slide_image_language',$params);
			}

			if(isset($_FILES['picture'])&&$_FILES['picture']['size']>0){
				$filepath = "../images/slide_images/{$slide_image_id}.jpg";
				move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);
			}
				
			$this->session->set_flashdata('msg','Add Complete');
			
			echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";					
				
		}
	}

	public function addimagedelete($com_id,$slide_image_id){
		$this->db->where('slide_image_id',$slide_image_id);
		$this->db->delete('company_slide_image_language');

		$this->db->where('slide_image_id',$slide_image_id);
		$this->db->delete('company_slide_image');



		$filepath = "../images/slide_images/{$slide_image_id}.jpg";
		
		if(is_file($filepath)){
			
			unlink($filepath);
		}

		$this->session->set_flashdata('msg','Delete Complete');

		echo "<script>alert('deleted');window.opener.location.reload();window.close();</script>";	
	}

	public function addimageedit($com_id,$slide_id,$slide_image_id){

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

			$data["slide_id"] = $slide_id ;

			$data["slide_image_id"] = $slide_image_id ;
				
			$data["method"] = 'Edit' ;

			$data["methods"] = 'addimageedit' ;
			// $slide_images = $this->Company_slide_model->getOneimage($slide_image_id);		

			$slide_image = $this->Company_slide_model->getOneimage($slide_image_id);
			$slide_image->languages = $this->Company_slide_image_language_model->getAll(array('slide_image_id'=>$slide_image_id));
			$data['slide_image'] = $slide_image;
			
			$data['contentview'] = 'pagecompany/slide_image_form';	
			$data['company'] = $this->Company_model->getOne($com_id);
			$this->load->view('layoutcompany/main',$data);	
				
				
		}else{

			$image_name    = $this->input->post('image_name');
			$image_detail    = $this->input->post('image_detail');
			$country_id = $this->input->post('country_id');
			$position = $this->input->post('position');
			
			// $gallery_images = $this->Company_slide_model->getOneimage($slide_image_id);	
			// // print_r($gallery_images);
			// // exit();
			// $gallery_images = $gallery_images->slide_image_id;

			
			$params = array(			
							'position'=>$position,
							'cby'=>$this->session->userdata('ssfullname'),
							'udate'=> date('Y-m-d H:i:s'),
							'cdate'=> date('Y-m-d H:i:s')  );
			
			$this->db->where('slide_image_id', $slide_image_id);
			$this->db->update('company_slide_image',$params);

			$this->db->where('slide_image_id',$slide_image_id);
			$this->db->delete('company_slide_image_language');
			
			for ($i=0; $i < sizeof($image_name) ; $i++) { 
				$params	= array(
							'slide_image_id'=>$slide_image_id,
							'country_id'=>$country_id[$i],
							'image_name'=>$image_name[$i],
							'image_detail'=>$image_detail[$i],
							'cby'=>$this->session->userdata('ssfullname'),							
							'cdate'=> date('Y-m-d H:i:s')
						);
				$this->db->insert('company_slide_image_language',$params);
			}


			if(isset($_FILES['picture'])&&$_FILES['picture']['size']>0){
				$filepath = "../images/slide_images/{$slide_image_id}.jpg";
				// echo $filepath;
				
				move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);
			}
				
			$this->session->set_flashdata('msg','Add Complete');
			
			echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";					
				
		}
	}

	public function add($com_id){
		
			
				$params = array(
								'is_active'=>1,
								'cby'=>$this->session->userdata('ssfullname'),
								'udate'=> date('Y-m-d H:i:s'),
								'cdate'=> date('Y-m-d H:i:s')  );
				
				$this->db->insert('company_slide',$params);
				
				$slide_id = $this->db->insert_id();
				
				$country = $this->Country_model->getAll2($country_id);

				foreach ($country as  $countrynew) {
					$params = array(
							'slide_id'=>$slide_id,
							'country_id'=>$countrynew->country_id
					);
					$this->db->insert('company_slide_language',$params);
				}

				redirect("CompanySlide/edit/1/$slide_id");
				

	}

	public function edit($com_id,$slide_id){

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
				$country->languages = $this->Company_slide_language_model->getAll(array('country_id'=>$country->country_id,'slide_id'=>$slide_id));				
			}			
			$data['languages'] = $countrys ;

			############################################################
			$data["com_id"] = $com_id ;

			$data["slide_id"] = $slide_id ;

			$data["method"] = 'Edit' ;
						
			$data['contentview'] = 'pagecompany/slide_form';	
			$data['company'] = $this->Company_model->getOne($com_id);
			$data['slide'] = $this->Company_slide_model->getOne($slide_id);
			// print_r($data['youtube']);
			// exit();

			$this->load->view('layoutcompany/main',$data);				
			
		}else{

			
			$is_active = $this->input->post('is_active');
			
			$params = array(
							'is_active'=>$is_active,	
							'uby'=>$this->session->userdata('ssfullname'),
							'udate'=> date('Y-m-d H:i:s') );

		
			$this->db->where('slide_id', $slide_id);
			$this->db->update('company_slide',$params);
			
		
			if(isset($_FILES['picture'])&&$_FILES['picture']['size']>0){
				$filepath = "../images/slide/{$slide_id}.jpg";
				move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);
			}
				

			$this->session->set_flashdata('msg','Edit Complete');
		

			echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";		
			
		}
	}

	public function delete($com_id,$slide_id){

		$gallerys = $this->Company_slide_model->get_slide_image_All($slide_id);
		$countgallerys = count($gallerys);
		if ($countgallerys>0) {
			foreach ($gallerys as $key => $newgallerys) {
				$this->db->where('slide_image_id',$newgallerys->slide_image_id);
				$this->db->delete('company_slide_image');

				$filepath = "../images/slide_images/{$newgallerys->slide_image_id}.jpg";
				
				if(is_file($filepath)){
					
					unlink($filepath);
				}
			}
		}
		$this->db->where('slide_id',$slide_id);
		$this->db->delete('company_slide_language');

		$this->db->where('slide_id',$slide_id);
		$this->db->delete('company_slide');

		$filepath = "../images/slide/{$slide_id}.jpg";
		if(is_file($filepath)){
			unlink($filepath);
		}


		$this->session->set_flashdata('msg','Delete Complete');

		echo "<script>alert('deleted');window.opener.location.reload();window.close();</script>";	
	}

	public function getLanguageJson($language_id)
	{
		$language = $this->Company_slide_language_model->getOne($language_id);		
		echo json_encode($language);
	}
	public function savelanguage()
	{
		$languagemethod = $this->input->post('languagemethod');
		$country_id = $this->input->post('country_id');
		$slide_id = $this->input->post('slide_id');
		$language_id = $this->input->post('language_id');
		$meta_title = $this->input->post('meta_title');
		$meta_keyword = $this->input->post('meta_keyword');
		$meta_description = $this->input->post('meta_description');
		$slide_name = $this->input->post('slide_name');		
		$slide_desc = $this->input->post('slide_desc');			
		$slide_desc_short = $this->input->post('slide_desc_short');			
		

		if($languagemethod=='add'){
			$params = array();
			$params['country_id'] = $country_id;
			$params['slide_id'] = $slide_id;
			$params['meta_title'] = $meta_title;
			$params['meta_keyword'] = $meta_keyword;
			$params['meta_description'] = $meta_description;
			$params['slide_name'] = $slide_name;
			$params['slide_desc'] = $slide_desc;					
			$params['slide_desc_short'] = $slide_desc_short;					
			$params['cdate'] = date('Y-m-d H:i:s');
			$params['udate'] = date('Y-m-d H:i:s');
			$params['cby'] = $this->session->userdata('ssfullname');
			$params['uby'] = $this->session->userdata('ssfullname');
			if($country_id > 0)
			$this->db->insert('company_slide_language',$params);
		}

		if($languagemethod=='edit'){
			$params = array();
			$params['country_id'] = $country_id;
			$params['meta_title'] = $meta_title;
			$params['meta_keyword'] = $meta_keyword;
			$params['meta_description'] = $meta_description;
			$params['slide_name'] = $slide_name;			
			$params['slide_desc'] = $slide_desc;							
			$params['slide_desc_short'] = $slide_desc_short;							
			$params['udate'] = date('Y-m-d H:i:s');			
			$params['uby'] = $this->session->userdata('ssfullname');

			if($country_id > 0){
				$this->db->where('language_id',$language_id);
				$this->db->update('company_slide_language',$params);
			}
			
		}		

		echo "save complete";
	}

	public function deletelanguage($language_id)
	{
		if($language_id > 0){
			$this->db->where('language_id',$language_id);
			$this->db->delete('company_slide_language');
		}
	}

	
}
 

?>