<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompanyEbook extends CI_Controller {


	function __construct(){
						
		parent::__construct();
		$this->load->model('Menu_admin_model');	
		$this->load->model('Menu_admin_type_model');	
		$this->load->model('Company_ebook_model');
		$this->load->model('Company_ebook_language_model');
		$this->load->model('Company_model');
		$this->load->model('Country_model');
	}

	public function index($com_id){

		$data = array();
		$data["com_id"] = $com_id ;
		$data['contentview']  = 'pagecompany/ebook_show';
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
		$ebooks = $this->Company_ebook_model->getAll($com_id);
		foreach ($ebooks as $ebook) {
			$ebook->languages = $this->Company_ebook_language_model->getAll(array('ebook_id'=>$ebook->ebook_id));
		}
		$data['ebooks'] = $ebooks;


		$data['company'] = $this->Company_model->getOne($com_id);
		$this->load->view('layoutcompany/main',$data);
	}

	public function add($com_id){		
				
		$params = array(
						'is_active'=>1,				
						'com_id'=>1,	
						'cby'=>$this->session->userdata('ssfullname'),
						'cdate'=> date('Y-m-d H:i:s'),
						'udate'=> date('Y-m-d H:i:s') );
		
		$this->db->insert('company_ebook',$params);
		$ebook_id = $this->db->insert_id();
		redirect("CompanyEbook/edit/1/$ebook_id");		

	}


	public function edit($com_id,$ebook_id){

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
			############################################################
			//////////////////////////// Language ////////////////////////////
			$countrys = $this->Country_model->getAll();		
			$arr = array('0'=>' -- All Country -- ');
			foreach ($countrys as $key => $value) {
				$arr[$value->country_id] = $value->short_name;
			}
			$data['countrys'] = $arr ;

			$countrys = $this->Country_model->getAll();					
			foreach ($countrys as $country) {
				$country->languages = $this->Company_ebook_language_model->getAll(array('country_id'=>$country->country_id,'ebook_id'=>$ebook_id));				
			}			
			$data['languages'] = $countrys ;
			##########################################################
			$data["com_id"] = $com_id ;

			$data["ebook_id"] = $ebook_id ;

			$data["method"] = 'Edit' ;
						
			$data['contentview'] = 'pagecompany/ebook_form';	

			$data['ebook'] = $this->Company_ebook_model->getOne($ebook_id);
			// print_r($data['ebook']);
			// exit();
			$data['company'] = $this->Company_model->getOne($com_id);
			$this->load->view('layoutcompany/main',$data);				
			
		}else{

			$link = $this->input->post('link');
			$link2 = $this->input->post('link2');
			$is_active = $this->input->post('is_active');
					
			
			$params = array('is_active'=>$is_active,
							'link'=>$link,
							'link2'=>$link2,
							'uby'=>$this->session->userdata('ssfullname'),
							'udate'=> date('Y-m-d H:i:s') );

		
			$this->db->where('ebook_id', $ebook_id);
			$this->db->update('company_ebook',$params);
			
		
			if(isset($_FILES['picture'])&&$_FILES['picture']['size']>0){
				$filepath = "../images/ebook/{$ebook_id}.jpg";
				move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);
			}
				

			$this->session->set_flashdata('msg','Edit Complete');
		

			echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";		
			
		}
	}

	public function delete($com_id,$ebook_id){
		$this->db->where('ebook_id',$ebook_id);
		$this->db->delete('company_ebook_language');

		$this->db->where('ebook_id',$ebook_id);
		$this->db->delete('company_ebook');

		$filepath = "../images/ebook/{$ebook_id}.jpg";
		if(is_file($filepath)){
			unlink($filepath);
		}
		$this->session->set_flashdata('msg','Delete Complete');

		echo "<script>alert('deleted');window.opener.location.reload();window.close();</script>";	
	}
	
	public function getLanguageJson($language_id)
	{
		$language = $this->Company_ebook_language_model->getOne($language_id);		
		echo json_encode($language);
	}
	public function savelanguage()
	{
		$languagemethod = $this->input->post('languagemethod');
		$country_id = $this->input->post('country_id');
		$ebook_id = $this->input->post('ebook_id');
		$language_id = $this->input->post('language_id');
		$meta_title = $this->input->post('meta_title');
		$meta_keyword = $this->input->post('meta_keyword');
		$meta_description = $this->input->post('meta_description');
		$ebook_name = $this->input->post('ebook_name');		
		$ebook_desc = $this->input->post('ebook_desc');			
		

		if($languagemethod=='add'){
			$params = array();
			$params['country_id'] = $country_id;
			$params['ebook_id'] = $ebook_id;
			$params['meta_title'] = $meta_title;
			$params['meta_keyword'] = $meta_keyword;
			$params['meta_description'] = $meta_description;
			$params['ebook_name'] = $ebook_name;
			$params['ebook_desc'] = $ebook_desc;					
			$params['cdate'] = date('Y-m-d H:i:s');
			$params['udate'] = date('Y-m-d H:i:s');
			$params['cby'] = $this->session->userdata('ssfullname');
			$params['uby'] = $this->session->userdata('ssfullname');
			if($country_id > 0)
			$this->db->insert('company_ebook_language',$params);
		}

		if($languagemethod=='edit'){
			$params = array();
			$params['country_id'] = $country_id;
			$params['meta_title'] = $meta_title;
			$params['meta_keyword'] = $meta_keyword;
			$params['meta_description'] = $meta_description;
			$params['ebook_name'] = $ebook_name;			
			$params['ebook_desc'] = $ebook_desc;							
			$params['udate'] = date('Y-m-d H:i:s');			
			$params['uby'] = $this->session->userdata('ssfullname');

			if($country_id > 0){
				$this->db->where('language_id',$language_id);
				$this->db->update('company_ebook_language',$params);
			}
			
		}		

		echo "save complete";
	}

	public function deletelanguage($language_id)
	{
		if($language_id > 0){
			$this->db->where('language_id',$language_id);
			$this->db->delete('company_ebook_language');
		}
	}


}
 

?>