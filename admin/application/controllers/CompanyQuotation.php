<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompanyQuotation extends CI_Controller {


	function __construct(){
						
		parent::__construct();
	
		$this->load->model('Directory_model');		
		$this->load->model('Company_category_model');		
		$this->load->model('Company_product_model');		
		$this->load->model('Company_model');		
		$this->load->model('Slide_model');		
		$this->load->model('Directory_product_model');		
		$this->load->model('Quotation_model');	
		$this->load->model('Menu_admin_model');
		$this->load->model('Menu_admin_type_model');
			
	}

	public function index($com_id)
	{
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
		$keyword = $this->input->post('keyword');
		$cat_id = $this->input->post('cat_id');

		$search['keyword'] = $keyword;
		$search['cat_id'] = $cat_id;
		$search['com_id'] = $com_id;
		

		$data["com_id"] = $com_id ;

		$data['company'] = $this->Company_model->getOne($com_id);

		// $categorys = $this->Company_category_model->getAll($com_id);
		// $arr = array('-- Category --');
		// foreach ($categorys as $category) {

		// 	$arr[$category->cat_id] = $category->cat_name_th." ($category->cat_name)";
		// }
		// $data['categorys'] = $arr;

		$search["com_id"]= $com_id;

		$config["total_rows"] = $this->Quotation_model->count($search);
		// echo $this->db->last_query();
		// exit();
		$config["base_url"] = base_url() . "/Store/quotation/$com_id";	
		$config["per_page"] = 20;
		$config["uri_segment"] = 5;
		$config['reuse_query_string'] = true;			
		$this->pagination->initialize($config);		
		$data["links"] = $this->pagination->create_links();		
		$data['countrows'] =  $config["total_rows"];
		$start = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;			
		$data['quotations'] = $this->Quotation_model->getAll($config["per_page"],$start,$search);		
		$data["countnew"] = $this->Quotation_model->countnew($search);


		$data['search'] = $search;
		
		$data['contentview']  = 'pagecompany/quotation_view';

		$this->load->view('layoutcompany/main',$data);



	}

	public function quotation_item($quotation_id)
	{
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
		$this->db->where('quotation_id',$quotation_id);
		$this->db->update('quotation',array('new_status'=>2));

		$quotation = $this->Quotation_model->getOne($quotation_id);
		$com_id = $quotation->com_id;
		$data['quotation'] = $quotation;
		
		$data["com_id"] = $com_id ;

		$data['company'] = $this->Company_model->getOne($com_id);

		$categorys = $this->Company_category_model->getAll($com_id);
		$arr = array('-- Category --');
		foreach ($categorys as $category) {

			$arr[$category->cat_id] = $category->cat_name_th." ($category->cat_name)";
		}
		$data['categorys'] = $arr;

		$search["com_id"]= $com_id;

		$config["total_rows"] = $this->Quotation_model->count($search);
		// echo $this->db->last_query();
		// exit();
		$config["base_url"] = base_url() . "/Store/quotation/$com_id";	
		$config["per_page"] = 20;
		$config["uri_segment"] = 5;
		$config['reuse_query_string'] = true;			
		$this->pagination->initialize($config);		
		$data["links"] = $this->pagination->create_links();		
		$data['countrows'] =  $config["total_rows"];
		$start = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;			
		$data['quotations'] = $this->Quotation_model->getAll($config["per_page"],$start,$search);		

		$data["countnew"] = $this->Quotation_model->countnew($search);
		

		$data['search'] = $search;
		
		$data['contentview']  = 'pagecompany/quotation_view_item';

		$this->load->view('layoutcompany/main',$data);



	}

	
}
 

?>