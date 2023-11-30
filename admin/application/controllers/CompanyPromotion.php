<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompanyPromotion extends CI_Controller {


	function __construct(){
						
		parent::__construct();
		$this->load->model('Menu_admin_model');	
		$this->load->model('Menu_admin_type_model');	
		$this->load->model('Promotion_model');
		$this->load->model('Promotion_language_model');
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
		$data['contentview']  = 'pagecompany/promotion_show';
		$data['company'] = $this->Company_model->getOne($com_id);
		
		$promotions = $this->Promotion_model->getAll();
		foreach ($promotions as $promotion) {
			$promotion->languages = $this->Promotion_language_model->getAll(array('promotion_id'=>$promotion->promotion_id));
		}		
		$data['promotions'] = $promotions;

		$this->load->view('layoutcompany/main',$data);
	}

	public function add($com_id){				
		$params = array(										
						'cby'=>$this->session->userdata('ssfullname'),
						'udate'=> date('Y-m-d H:i:s'),
						'cdate'=> date('Y-m-d H:i:s')  );

		$this->db->insert('promotion',$params);
		
		$promotion_id = $this->db->insert_id();
		redirect("CompanyPromotion/edit/1/$promotion_id");
	}

	public function edit($com_id,$promotion_id){

		$this->form_validation->set_rules('id','id','trim|required');			
					
		if($this->form_validation->run()==FALSE){			
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
				$country->languages = $this->Promotion_language_model->getAll(array('country_id'=>$country->country_id,'promotion_id'=>$promotion_id));				
			}			
			$data['languages'] = $countrys ;

			############################################################

			$this->session->set_flashdata('errors', validation_errors());			
			
			$data["com_id"] = $com_id ;

			$data["promotion_id"] = $promotion_id ;

			$data["method"] = 'Edit' ;
			$data['company'] = $this->Company_model->getOne($com_id);			
			$data['contentview'] = 'pagecompany/promotion_form';	

			$data['promotion'] = $this->Promotion_model->getOne($promotion_id);
			// print_r($data['promotion']);
			// exit();

			$this->load->view('layoutcompany/main',$data);				
			
		}else{

			
			$promotion_start = $this->input->post('promotion_start');
			$promotion_end = $this->input->post('promotion_end');
			
			$params = array(							
							'promotion_start'=>$promotion_start,											
							'promotion_end'=>$promotion_end,						
							'uby'=>$this->session->userdata('ssfullname'),
							'udate'=> date('Y-m-d H:i:s'),
							);

			
			$this->db->where('promotion_id', $promotion_id);
			$this->db->update('promotion',$params);
			
		
			if(isset($_FILES['picture'])&&$_FILES['picture']['size']>0){
				$filepath = "../images/promotion/{$promotion_id}.jpg";
				move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);
			}
				

			$this->session->set_flashdata('msg','Edit Complete');
		

			echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";		
			
		}
	}

	public function delete($com_id,$promotion_id){
		$this->db->where('promotion_id',$promotion_id);
		$this->db->delete('promotion_language');

		$this->db->where('promotion_id',$promotion_id);
		$this->db->delete('promotion');

		$filepath = "../images/promotion/{$promotion_id}.jpg";
		if(is_file($filepath)){
			unlink($filepath);
		}
		$this->session->set_flashdata('msg','Delete Complete');

		echo "<script>alert('deleted');window.opener.location.reload();window.close();</script>";	
	}
	
	public function getLanguageJson($language_id)
	{
		$language = $this->Promotion_language_model->getOne($language_id);
		// print_r($language);
		echo json_encode($language);
	}
	public function savelanguage()
	{
		// foreach ($_REQUEST as $key => $value) {
		// 	echo "\$$key = \$this->input->post('$key');<br>";
		// 	//echo "'$key'=>$value,	<br>";
		// }
		// exit();

		$country_id = $this->input->post('country_id');
		$meta_title = $this->input->post('meta_title');
		$meta_keyword = $this->input->post('meta_keyword');
		$meta_description = $this->input->post('meta_description');
		$promotion_name = $this->input->post('promotion_name');
		$promotion_desc = $this->input->post('promotion_desc');		
		$promotion_id = $this->input->post('promotion_id');
		$language_id = $this->input->post('language_id');
		$languagemethod = $this->input->post('languagemethod');

		if($languagemethod=='add'){
			$params = array();
			$params['country_id'] = $country_id;
			$params['meta_title'] = $meta_title;
			$params['meta_keyword'] = $meta_keyword;
			$params['meta_description'] = $meta_description;
			$params['promotion_name'] = $promotion_name;
			$params['promotion_desc'] = $promotion_desc;
			$params['promotion_id'] = $promotion_id;		
			$params['cdate'] = date('Y-m-d H:i:s');
			$params['udate'] = date('Y-m-d H:i:s');
			$params['cby'] = $this->session->userdata('ssfullname');
			$params['uby'] = $this->session->userdata('ssfullname');
			if($country_id > 0)
			$this->db->insert('promotion_language',$params);
		}

		if($languagemethod=='edit'){
			$params = array();
			$params['country_id'] = $country_id;
			$params['meta_title'] = $meta_title;
			$params['meta_keyword'] = $meta_keyword;
			$params['meta_description'] = $meta_description;
			$params['promotion_name'] = $promotion_name;
			$params['promotion_desc'] = $promotion_desc;							
			$params['udate'] = date('Y-m-d H:i:s');			
			$params['uby'] = $this->session->userdata('ssfullname');

			if($country_id > 0){
				$this->db->where('language_id',$language_id);
				$this->db->update('promotion_language',$params);
			}
			
		}		

		echo "save complete";
	}

	public function deletelanguage($language_id)
	{
		if($language_id > 0){
			$this->db->where('language_id',$language_id);
			$this->db->delete('promotion_language');
		}
	}

}
 

?>