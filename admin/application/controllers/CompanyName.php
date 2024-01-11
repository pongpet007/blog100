<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompanyName extends CI_Controller {


	function __construct(){
						
		parent::__construct();
		$this->load->model('Menu_admin_model');	
		$this->load->model('Menu_admin_type_model');	
		$this->load->model('Company_brand_model');		
		$this->load->model('Company_brand_language_model');		
		$this->load->model('Company_model');		
		$this->load->model('Country_model');	
	}

	public function index(){
		$com_id = 1;
		
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
		$brands = $this->Company_brand_model->getAll($com_id);
		foreach ($brands as $brand) {
			$brand->languages = $this->Company_brand_language_model->getAll(array('brand_id'=>$brand->brand_id));

		}
		
		$data['brands'] = $brands;

		$data['company'] = $this->Company_model->getOne($com_id);
		$data['contentview']  = 'pagecompany/brand_show';

		$this->load->view('layoutcompany/main',$data);
	}

	public function add(){					
			
		$params = array('com_id'=> 1,		
						'is_active'=>1,									
						'uby'=>$this->session->userdata('ssfullname'),
						'cdate'=> date('Y-m-d H:i:s'),
						'udate'=> date('Y-m-d H:i:s')
						 );
		
		$this->db->insert('company_brand',$params);

		$brand_id = $this->db->insert_id();
				
		$params = array('position'=>$brand_id);

		$this->db->where('brand_id', $brand_id);
		$this->db->update('company_brand',$params);

		$country_id = "";
		$country = $this->Country_model->getAll2($country_id);

		foreach ($country as  $countrynew) {
			$params = array(
					'brand_id'=>$brand_id,
					'country_id'=>$countrynew->country_id
			);
			$this->db->insert('company_brand_language',$params);
		}

		redirect("CompanyBrand/edit/$brand_id");			
	
	}

	public function edit($brand_id){
		$com_id = 1;
		$this->form_validation->set_rules('btn_send','btn_send','trim|required');

			$keyword = $this->input->post('keyword');

			if($this->form_validation->run()==FALSE or !empty($keyword)){
				//if($this->input->post('username')){
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
				$this->session->set_flashdata('errors', validation_errors());

				//////////////////////////// Language ////////////////////////////
				$countrys = $this->Country_model->getAll();		
				$arr = array('0'=>' -- All Country -- ');
				foreach ($countrys as $key => $value) {
					$arr[$value->country_id] = $value->short_name;
				}
				$data['countrys'] = $arr ;

				$countrys = $this->Country_model->getAll();					
				foreach ($countrys as $country) {
					$country->brand_languages = $this->Company_brand_language_model->getAll(array('country_id'=>$country->country_id,'brand_id'=>$brand_id));									
				}			
				$data['languages'] = $countrys ;


				
				$data["com_id"] = $com_id ;				
				
				$data["method"] = 'edit' ;
								
				$data['brand_id'] =$brand_id;
				
				$data['contentview'] = 'pagecompany/brand_form';	
				
				$data['keyword'] = $keyword;

				$data['company'] = $this->Company_model->getOne($com_id);
				$data['brand'] = $this->Company_brand_model->getOne($brand_id);				
				$this->load->view('layoutcompany/main',$data);				
			
		}else{

			
				$is_active = $this->input->post('is_active');
				$position = $this->input->post('position');				
				$params = array('position'=>$position,
								'is_active'=>$is_active,							
								'uby'=>$this->session->userdata('ssfullname'),
								'udate'=> date('Y-m-d H:i:s') );

			$this->db->where('brand_id', $brand_id);
			$this->db->update('company_brand',$params);
			
		
			if(isset($_FILES['picture'])&&$_FILES['picture']['size']>0){
				$filepath = "../images/brand/{$brand_id}.jpg";
				move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);
			}

			$this->session->set_flashdata('msg','Edit Complete');
			echo "<script>window.opener.location.reload();window.close();</script>";					
		}
	}

	public function delete($brand_id){
		$this->db->where('brand_id',$brand_id);
		$this->db->delete('company_brand_language');


		$this->db->where('brand_id',$brand_id);
		$this->db->delete('company_brand');

		$this->session->set_flashdata('msg','Delete Complete');

		echo "<script>window.opener.location.reload();window.close();</script>";		
	}

	public function getLanguageJson($language_id)
	{
		$language = $this->Company_brand_language_model->getOne($language_id);		
		echo json_encode($language);
	}
	public function savelanguage()
	{
		
		$country_id = $this->input->post('country_id');
		$meta_title = $this->input->post('meta_title');
		$meta_keyword = $this->input->post('meta_keyword');
		$meta_description = $this->input->post('meta_description');
		$brand_name = $this->input->post('brand_name');
		$brand_desc = $this->input->post('brand_desc');		
		$brand_id = $this->input->post('brand_id');
		$language_id = $this->input->post('language_id');
		$languagemethod = $this->input->post('languagemethod');

		if($languagemethod=='add'){
			$params = array();
			$params['country_id'] = $country_id;
			$params['meta_title'] = $meta_title;
			$params['meta_keyword'] = $meta_keyword;
			$params['meta_description'] = $meta_description;
			$params['brand_name'] = $brand_name;
			$params['brand_desc'] = $brand_desc;
			$params['brand_id'] = $brand_id;		
			$params['cdate'] = date('Y-m-d H:i:s');
			$params['udate'] = date('Y-m-d H:i:s');
			$params['cby'] = $this->session->userdata('ssfullname');
			$params['uby'] = $this->session->userdata('ssfullname');
			if($country_id > 0)
			$this->db->insert('company_brand_language',$params);
		}

		if($languagemethod=='edit'){
			$params = array();
			$params['country_id'] = $country_id;
			$params['meta_title'] = $meta_title;
			$params['meta_keyword'] = $meta_keyword;
			$params['meta_description'] = $meta_description;
			$params['brand_name'] = $brand_name;
			$params['brand_desc'] = $brand_desc;		
			$params['udate'] = date('Y-m-d H:i:s');			
			$params['uby'] = $this->session->userdata('ssfullname');

			if($country_id > 0){
				$this->db->where('language_id',$language_id);
				$this->db->update('company_brand_language',$params);
			}
			
		}		

		echo "save complete";
	}

	public function deletelanguage($language_id)
	{
		if($language_id > 0){
			$this->db->where('language_id',$language_id);
			$this->db->delete('company_brand_language');
		}
	}

	
}
 

?>