<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends CI_Controller {

	function __construct(){
		parent::__construct();
		
		$this->load->model('Company_model');
		$this->load->model('Category_model');
		$this->load->model('Country_model');
		$this->load->model('News_model');	
		$this->load->model('Category_model');	
		$this->load->model('Config_model');
		$this->load->model('Banner_model');
		$this->load->model('Gallery_model');
		$this->load->model('Slider_model');
		$this->load->model('Counter_model');
		$this->load->model('Products_model');
		$this->load->model('Slide_model');
		$this->load->model('cms/Content_model');
		$this->load->model('cms/Content_row_model');
		$this->load->model('cms/Content_row_item_model');
		$this->load->model('cms/Content_row_item_template_model');
		$this->load->model('cms/Menu_model');

	}

	public function index($content_id)
	{
		
		
		$data = array();
		if ($content_id == 2) {
			$menu_id = "2";
		}elseif ($content_id == 3) {
			$menu_id = "8";
		}elseif ($content_id == 10) {
			$menu_id = "15";
			$data['menu_id'] = $menu_id;
		}else {
			$menu_id = "1";
			$data['menu_id'] = $menu_id;
		}
		$data['content_id'] = $content_id;
		$menu_meta = $this->Menu_model->getOne($menu_id);
		// print_r($this->db->last_query());exit();
		// print_r($menus);exit();
		$data['meta_title'] = $menu_meta->meta_title;
		$data['meta_keyword'] = $menu_meta->meta_keyword;
		$data['meta_description'] = $menu_meta->meta_description;

		$data['lang'] = $this->session->userdata('site_lang');

		if ($data['lang']=221) {
			$data['language'] = "เปลี่ยนภาษา";
		}else{
			$data['language'] = "Change Language";
		}
		
		$data["categorys"] = $this->Category_model->getAll();
		
		////////////////////// Theme ///////////////////////////////////
		$company = $this->Company_model->getOne(1);		
		$data['companyData'] = $company;
				
		$theme_path = $company->theme_path;
		$data['theme_path'] = $theme_path;
		$data["theme_assets_path"] = $company->theme_assets_path;
		
		$data['counter'] = $this->Counter_model->count();
		
		$menus = $this->Menu_model->getMain();
		foreach ($menus as $menu) {
			$menu->submenu = $this->Menu_model->getsub($menu->menu_id);
		}
		$data['menus'] = $menus ;		
		$data['countrys'] = $this->Country_model->getAll();

		$data['gallerys'] = $this->Gallery_model->getAll(10,0);
		#########################################################################

		///////////////////////// Get content home /////////////////////////////
		$homepage = $this->Content_model->getOne($content_id);
		// echo $this->db->last_query();
		// exit();
		// print_r($content_id);
		// exit();
		$homepagerows = $this->Content_row_model->getAll($homepage->content_id);

		foreach ($homepagerows as $row) {
			$row->items = $this->Content_row_item_model->getAll($row->row_id);			
		}
		$homepage->rows = $homepagerows;
		$data['homepage'] = $homepage;

		foreach ($homepage->rows as $row) {
			foreach ($row->items as $item) {
				if ($item->template_id==11) {
					$i2 = json_decode($item->jsondata);

					$data['imgss'.$i2->slide_id.''] = $this->Slide_model->getimageAll($i2->slide_id);
					// print_r($data['imgss']);exit();	
				}
			}
		}

		// print_r($data['imgss']);exit()

		$data['breadcrumb'] = $homepage->menu_name;
		
		$data['widget'] = $this->recaptcha->getWidget();
        $data['script'] = $this->recaptcha->getScriptTag();  

        /////////////////////// get products /////////////////////////////
		
		$cartarr = array();
		foreach ($this->cart->contents() as $carts) {
			$cartarr[]  = array($this->Products_model->getOne($carts['id']),$carts['qty'],$carts['rowid']);

		}
		
		$data['cartarr'] = $cartarr;


		$this->load->view($theme_path.'/content',$data);		

	}

}