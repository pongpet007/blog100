<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {
	
	function __construct(){
		parent::__construct();

		date_default_timezone_set('Asia/Bangkok');
		$this->load->model('Company_model');
		$this->load->model('Category_model');	
		$this->load->model('Country_model');	
		$this->load->model('Config_model');
		$this->load->model('Youtube_model');			
		$this->load->model('Counter_model');
		$this->load->model('Products_model');
		$this->load->model('cms/Menu_model');

	}

	public function sc()
	{
		phpinfo();
		echo "OK";
		$companys  = $this->Company_model->getAll(1000,0);
		
		echo $this->db->last_query();

		print_r($companys);
		foreach($companys as $company){
			print_r($company);
			exit();
		}
	}
	

	public function index()
	{
		$data['counter'] = $this->Counter_model->count();
		$data["categorys"] = $this->Category_model->getAll();
		////////////////////// Theme ///////////////////////////////////
		$company = $this->Company_model->getOne(1);		
		$data['companyData'] = $company;
		
		$menu_id = "7";
		$menu_meta = $this->Menu_model->getOne($menu_id);
		$data['meta_title'] = $menu_meta->meta_title;
		$data['meta_keyword'] = $menu_meta->meta_keyword;
		$data['meta_description'] = $menu_meta->meta_description;

		$theme_path = $company->theme_path;
		$data['theme_path'] = $theme_path;
		$data["theme_assets_path"] = $company->theme_assets_path;
		
		$data['lang'] = $this->session->userdata('site_lang');

		if ($data['lang']=221) {
			$data['language'] = "เปลี่ยนภาษา";
		}else{
			$data['language'] = "Change Language";
		}
		
		$menus = $this->Menu_model->getMain();
		// echo $this->db->last_query();
		// exit();

		foreach ($menus as $menu) {
			$menu->submenu = $this->Menu_model->getsub($menu->menu_id);
		}
		$data['menus'] = $menus ;		
		$data['countrys'] = $this->Country_model->getAll();

		
		$search = array();
		$data['config'] = $this->Config_model->getConfig();		
		
		// $data['products']  = $this->Products_model->getPopular(5,0);	
		// $data['counter'] = $this->Counter_model->getCount();
		////////// Pagination ////////////////////////
		$this->load->config('pagination',TRUE);		
		$config = $this->config->item('pagination');	

		$config['full_tag_open'] = '<ul class="custom-pagination pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['cur_tag_open'] = '<li class="active"><a href="#" >';
		$config['cur_tag_close'] = '</a></li>';

		$config["base_url"] = base_url() . "Blog/index/";
		$config["total_rows"] = $this->Youtube_model->record_count($search);
		$config["per_page"] = 100;
		$config["uri_segment"] = 3;
		$config['reuse_query_string'] = true;			
		$this->pagination->initialize($config);		
		$data["links"] = $this->pagination->create_links();
		$data['total_rows'] =  $config["total_rows"];
		$start = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;			
		$data['blogs'] = $this->Youtube_model->getAll($config["per_page"],$start);
		// print_r($this->db->last_query());exit();
		##################################################
		
		/////////////////////// get products /////////////////////////////
		
		$cartarr = array();
		foreach ($this->cart->contents() as $carts) {
			$cartarr[]  = array($this->Products_model->getOne($carts['id']),$carts['qty'],$carts['rowid']);
		}
		$data['cartarr'] = $cartarr;

		$this->load->view($theme_path.'/youtube',$data);

	}
	

	public function detail($langu="",$blog_id){

		$data['counter'] = $this->Counter_model->count();
		$data["categorys"] = $this->Category_model->getAll();
 		////////////////////// Theme ///////////////////////////////////
		$company = $this->Company_model->getOne(1);		
		$data['companyData'] = $company;
		$data['meta_title'] = $company->meta_title;
		$data['meta_keyword'] = $company->meta_keyword;
		$data['meta_description'] = $company->meta_description;

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
		
		$data['footer_newss'] = $this->Youtube_model->getAll(4,0,array('news_type_id'=>0));
		
		// $data['config'] = $this->Config_model->getConfig();		
		// $data['language'] = array('EN'=>'eng','TH'=>'ไทย');
		// $data['menuactive'] = 3;

		// $data['products']  = $this->Products_model->getPopular(5,0);	
		
				
		//echo $this->db->last_query();
		// print_r($this->session->userdata('site_lang'));
		// exit();
		$data['blog'] = $this->Youtube_model->getOne($blog_id);
		
		//echo $this->db->last_query();
		//exit();
		##################################################
		
		/////////////////////// get products /////////////////////////////
		
		$cartarr = array();
		foreach ($this->cart->contents() as $carts) {
			$cartarr[]  = array($this->Products_model->getOne($carts['id']),$carts['qty'],$carts['rowid']);
		}
		$data['cartarr'] = $cartarr;

		$this->load->view($theme_path.'/blog_detail',$data);

	}


}