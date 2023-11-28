<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('Company_model');	
		$this->load->model('Config_model');
		$this->load->model('Banner_model');
		$this->load->model('Slider_model');			
		$this->load->model('Youtube_model');			
		$this->load->model('Products_model');			
		$this->load->model('Category_model');
		$this->load->model('Country_model');			
		$this->load->model('News_type_model');			
		$this->load->model('Products_model');			
		$this->load->model('News_model');			
		$this->load->model('Counter_model');
		$this->load->model('cms/Menu_model');

	}

	public function index($tags="")
	{	
		// print_r(rawurldecode($tags));exit();
		$data['counter'] = $this->Counter_model->count();
		$data["categorys"] = $this->Category_model->getAll();
		$company = $this->Company_model->getOne(1);		
		$data['companyData'] = $company;

		$menu_id = "4";
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

		$data['footer_newss'] = $this->News_model->getAll(4,0,array('news_type_id'=>0));

		$search = array();
		$search['tags'] = rawurldecode($tags);
		
		$data['config'] = $this->Config_model->getConfig();		
		// print_r(rawurldecode($tags));exit();

		// $data['products']  = $this->Products_model->getPopular(5,0);	
		// $data['counter'] = $this->Counter_model->getCount();
		////////// Pagination ////////////////////////
		$this->load->config('pagination',TRUE);		
		$config = $this->config->item('pagination');	
		$config['full_tag_open'] = '<ul class="custom-pagination pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['cur_tag_open'] = '<li class="active"><a href="#" >';
		$config['cur_tag_close'] = '</a></li>';

		$config["base_url"] = base_url() . "News/index/";
		$config["total_rows"] = $this->News_model->record_count($search);
		$config["per_page"] = 16;
		$config["uri_segment"] = 3;
		$config['reuse_query_string'] = true;			
		$this->pagination->initialize($config);		
		$data["links"] = $this->pagination->create_links();
		$data['total_rows'] =  $config["total_rows"];
		$start = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;	
		
		$data['newss'] = $this->News_model->getAll($config["per_page"],$start,$search);
		// print_r($this->db->last_query());exit();
		/////////////////////// get products /////////////////////////////
		
		$cartarr = array();
		foreach ($this->cart->contents() as $carts) {
			$cartarr[]  = array($this->Products_model->getOne($carts['id']),$carts['qty'],$carts['rowid']);
		}
		$data['cartarr'] = $cartarr;


		$this->load->view($theme_path.'/news',$data);

	}
	

	public function detail($langu="",$news_url){
		// print_r($news_url);exit();
		$data['counter'] = $this->Counter_model->count();
		$data["categorys"] = $this->Category_model->getAll();
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
		$data['footer_newss'] = $this->News_model->getAll(4,0,array('news_type_id'=>0));
		
		// $data['config'] = $this->Config_model->getConfig();		
		// $data['language'] = array('EN'=>'eng','TH'=>'ไทย');
		// $data['menuactive'] = 3;

		// $data['products']  = $this->Products_model->getAll(5,0,array(),' click desc ');	
		//echo $this->db->last_query();
		
		$data['news'] = $this->News_model->getOne($news_url);
		// print_r($this->db->last_query());exit();
		// print_r($data['newss']);
		// exit();
		//echo $this->db->last_query();
		//exit();
		##################################################
		
		/////////////////////// get products /////////////////////////////
		
		$cartarr = array();
		foreach ($this->cart->contents() as $carts) {
			$cartarr[]  = array($this->Products_model->getOne($carts['id']),$carts['qty'],$carts['rowid']);
		}
		$data['cartarr'] = $cartarr;

		$this->load->view($theme_path.'/news_detail',$data);

	}


}