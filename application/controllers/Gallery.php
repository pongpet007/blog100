<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {
	
	function __construct(){
		parent::__construct();

		$this->load->model('Company_model');
		$this->load->model('Category_model');
		$this->load->model('Country_model');		
		$this->load->model('Config_model');	
		$this->load->model('Gallery_category_model');			
		$this->load->model('Gallery_model');			
		$this->load->model('Counter_model');
		$this->load->model('cms/Menu_model');

	}

	public function index($langu="",$params= '')
	{
		$data['counter'] = $this->Counter_model->count();
		$data["categorys"] = $this->Category_model->getAll();
		////////////////////// Theme ///////////////////////////////////
		$company = $this->Company_model->getOne(1);		
		$data['companyData'] = $company;

		$menu_id = "6";
		$menu_meta = $this->Menu_model->getOne($menu_id);
		$data['meta_title'] = $menu_meta->meta_title;
		$data['meta_keyword'] = $menu_meta->meta_keyword;
		$data['meta_description'] = $menu_meta->meta_description;
		
		$theme_path = $company->theme_path;
		$data['theme_path'] = $theme_path;
		$data["theme_assets_path"] = $company->theme_assets_path;
		
		$data['lang'] = $this->session->userdata('site_lang');
		
		$gallery_categorys  = $this->Gallery_category_model->getAll();
		
		$data['gallery_categorys'] = $gallery_categorys;	

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
		if ($langu == 1) {
			$config["base_url"] = base_url() . "".$this->session->userdata('site_lang_name')."/portforio-category/".$params;
			$config["uri_segment"] = 4;
			$start = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
			$cats = $this->Gallery_category_model->getCatOne(rawurldecode($params));
			$data['checkactive'] = $cats->cat_id;
			$search['cat_id'] = $cats->cat_id;
		}else {
			$config["base_url"] = base_url() . "".$this->session->userdata('site_lang_name')."/portforio/";
			$config["uri_segment"] = 3;
			$start = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$data['checkactive'] = 0;
		}
		
		$config["total_rows"] = $this->Gallery_model->record_count($search);
		$config["per_page"] = 6;
		$config['reuse_query_string'] = true;			
		$this->pagination->initialize($config);		
		$data["links"] = $this->pagination->create_links();
		$data['total_rows'] =  $config["total_rows"];		
		$data['gallery'] = $this->Gallery_model->getAll($config["per_page"],$start,$search);
		##################################################
		
		$this->load->view($theme_path.'/gallery',$data);

	}
	

	public function detail($blog_id){
		// print_r($blog_id);exit();
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
		$data['footer_newss'] = $this->Gallery_model->getAll(4,0,array('news_type_id'=>0));
		
		$data['config'] = $this->Config_model->getConfig();		
		$data['language'] = array('EN'=>'eng','TH'=>'ไทย');
		$data['menuactive'] = 3;

		// $data['products']  = $this->Products_model->getPopular(5,0);	
		
				
		//echo $this->db->last_query();
		
		$gallery = $this->Gallery_model->getOne($blog_id);
		$data['gallery'] = $gallery;
		// print_r($gallery);exit();

		$data['galleryimages'] = $this->Gallery_model->getimageAll($gallery->gallery_id);
		// print_r($this->db->last_query());exit();
		// print_r($data['newss']);
		// exit();
		//echo $this->db->last_query();
		//exit();

		$this->load->view($theme_path.'/gallery_detail',$data);

	}


}