<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdpa extends CI_Controller {
	
	function __construct(){
		parent::__construct();

		
		$this->load->model('Company_model');
		$this->load->model('Category_model');	
		$this->load->model('Country_model');	
		$this->load->model('Config_model');
		$this->load->model('Blog_model');			
		$this->load->model('Counter_model');
		$this->load->model('Products_model');
		$this->load->model('cms/Menu_model');

	}

	public function index(){

		$data['counter'] = $this->Counter_model->count();
		$data["categorys"] = $this->Category_model->getAll();
 		////////////////////// Theme ///////////////////////////////////
		$company = $this->Company_model->getOne(1);		
		$data['companyData'] = $company;
		
		$menu_id = "16";
		$menu_meta = $this->Menu_model->getOne($menu_id);
		$data['meta_title'] = $menu_meta->meta_title;
		$data['meta_keyword'] = $menu_meta->meta_keyword;
		$data['meta_description'] = $menu_meta->meta_description;

		$theme_path = $company->theme_path;
		$data['theme_path'] = $theme_path;
		$data["theme_assets_path"] = $company->theme_assets_path;
 		
 		$menus = $this->Menu_model->getMain();
		// echo $this->db->last_query();
		// exit();

		foreach ($menus as $menu) {
			$menu->submenu = $this->Menu_model->getsub($menu->menu_id);
		}
		$data['menus'] = $menus ;		
		$data['countrys'] = $this->Country_model->getAll();

		$data['lang'] = $this->session->userdata('site_lang');

		if ($data['lang']=221) {
			$data['language'] = "เปลี่ยนภาษา";
		}else{
			$data['language'] = "Change Language";
		}
		
		$data['footer_newss'] = $this->Blog_model->getAll(4,0,array('news_type_id'=>0));
		
		// $data['config'] = $this->Config_model->getConfig();		
		// $data['language'] = array('EN'=>'eng','TH'=>'ไทย');
		// $data['menuactive'] = 3;

		// $data['products']  = $this->Products_model->getPopular(5,0);	
		
				
		//echo $this->db->last_query();
		// print_r($this->session->userdata('site_lang'));
		// exit();
		
		$this->load->view($theme_path.'/pdpa/index',$data);

	}


}