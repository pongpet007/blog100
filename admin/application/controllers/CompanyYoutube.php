<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompanyYoutube extends CI_Controller {


	function __construct(){
						
		parent::__construct();
		$this->load->model('Menu_admin_model');	
		$this->load->model('Menu_admin_type_model');	
		$this->load->model('Company_youtube_model');
		$this->load->model('Company_youtube_language_model');
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
		$data['contentview']  = 'pagecompany/youtube_show';
		$data['company'] = $this->Company_model->getOne($com_id);
		$youtubes = $this->Company_youtube_model->getAll($com_id);
		foreach ($youtubes as $youtube) {
			$youtube->languages = $this->Company_youtube_language_model->getAll(array('youtube_id'=>$youtube->youtube_id));
		}
		$data['youtubes'] = $youtubes;

		$this->load->view('layoutcompany/main',$data);
	}

	public function add($com_id){
					
			$params = array(
							'is_active'=>1,									
							'com_id'=>1,																
							'cby'=>$this->session->userdata('ssfullname'),
							'udate'=> date('Y-m-d H:i:s'),
							'cdate'=> date('Y-m-d H:i:s')  );
			
			$this->db->insert('company_youtube',$params);
			
			$youtube_id = $this->db->insert_id();
			
			$country = $this->Country_model->getAll2($country_id);

			foreach ($country as  $countrynew) {
				$params = array(
						'youtube_id'=>$youtube_id,
						'country_id'=>$countrynew->country_id
				);
				$this->db->insert('company_youtube_language',$params);
			}

			redirect("CompanyYoutube/edit/1/$youtube_id");

	}

	public function edit($com_id,$youtube_id){

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
				$country->languages = $this->Company_youtube_language_model->getAll(array('country_id'=>$country->country_id,'youtube_id'=>$youtube_id));				
			}			
			$data['languages'] = $countrys ;

			############################################################
			$data["com_id"] = $com_id ;

			$data["youtube_id"] = $youtube_id ;

			$data["method"] = 'Edit' ;
						
			$data['contentview'] = 'pagecompany/youtube_form';	
			$data['company'] = $this->Company_model->getOne($com_id);
			$data['youtube'] = $this->Company_youtube_model->getOne($youtube_id);
			// print_r($data['youtube']);
			// exit();

			$this->load->view('layoutcompany/main',$data);				
			
		}else{

			$youtube_url = $this->input->post('url');
			$is_active = $this->input->post('is_active');
			$media_type = $this->input->post('media_type');
			
			if(preg_match('/v=/',$youtube_url)){
				preg_match('/v=([0-9a-zA-Z\-_]+)/', $youtube_url, $matches);
				$vid = $matches[1];
				$youtube_url = 'https://www.youtube.com/embed/'.$vid;
			}

			
			$params = array('url'=>$youtube_url,	
							'is_active'=>$is_active,	
							'media_type'=>$media_type,							
							'uby'=>$this->session->userdata('ssfullname'),
							'udate'=> date('Y-m-d H:i:s') );

		
			$this->db->where('youtube_id', $youtube_id);
			$this->db->update('company_youtube',$params);
			
		
			if(isset($_FILES['picture'])&&$_FILES['picture']['size']>0){
				$filepath = "../images/youtube/{$youtube_id}.jpg";
				move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);
			}
				

			$this->session->set_flashdata('msg','Edit Complete');
		

			echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";		
			
		}
	}

	public function delete($com_id,$youtube_id){
		$this->db->where('youtube_id',$youtube_id);
		$this->db->delete('company_youtube_language');

		$this->db->where('youtube_id',$youtube_id);
		$this->db->delete('company_youtube');

		$filepath = "../images/youtube/{$youtube_id}.jpg";
		if(is_file($filepath)){
			unurl($filepath);
		}
		$this->session->set_flashdata('msg','Delete Complete');

		echo "<script>alert('deleted');window.opener.location.reload();window.close();</script>";	
	}

	public function getLanguageJson($language_id)
	{
		$language = $this->Company_youtube_language_model->getOne($language_id);		
		echo json_encode($language);
	}
	public function savelanguage()
	{
		$languagemethod = $this->input->post('languagemethod');
		$country_id = $this->input->post('country_id');
		$youtube_id = $this->input->post('youtube_id');
		$language_id = $this->input->post('language_id');
		$meta_title = $this->input->post('meta_title');
		$meta_keyword = $this->input->post('meta_keyword');
		$meta_description = $this->input->post('meta_description');
		$youtube_name = $this->input->post('youtube_name');
		$youtube_desc_short = $this->input->post('youtube_desc_short');	
		$youtube_desc = $this->input->post('youtube_desc');			
		

		if($languagemethod=='add'){
			$params = array();
			$params['country_id'] = $country_id;
			$params['youtube_id'] = $youtube_id;
			$params['meta_title'] = $meta_title;
			$params['meta_keyword'] = $meta_keyword;
			$params['meta_description'] = $meta_description;
			$params['youtube_name'] = $youtube_name;
			$params['youtube_desc_short'] = $youtube_desc_short;
			$params['youtube_desc'] = $youtube_desc;					
			$params['cdate'] = date('Y-m-d H:i:s');
			$params['udate'] = date('Y-m-d H:i:s');
			$params['cby'] = $this->session->userdata('ssfullname');
			$params['uby'] = $this->session->userdata('ssfullname');
			if($country_id > 0)
			$this->db->insert('company_youtube_language',$params);
		}

		if($languagemethod=='edit'){
			$params = array();
			$params['country_id'] = $country_id;
			$params['meta_title'] = $meta_title;
			$params['meta_keyword'] = $meta_keyword;
			$params['meta_description'] = $meta_description;
			$params['youtube_name'] = $youtube_name;
			$params['youtube_desc_short'] = $youtube_desc_short;
			$params['youtube_desc'] = $youtube_desc;							
			$params['udate'] = date('Y-m-d H:i:s');			
			$params['uby'] = $this->session->userdata('ssfullname');

			if($country_id > 0){
				$this->db->where('language_id',$language_id);
				$this->db->update('company_youtube_language',$params);
			}
			
		}		

		echo "save complete";
	}

	public function deletelanguage($language_id)
	{
		if($language_id > 0){
			$this->db->where('language_id',$language_id);
			$this->db->delete('company_youtube_language');
		}
	}

	
}
 

?>