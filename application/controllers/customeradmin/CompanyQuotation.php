<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompanyQuotation extends CI_Controller {


	function __construct(){
						
		parent::__construct();
	
		$this->load->model('customeradmin/Directory_model');		
		$this->load->model('customeradmin/Company_category_model');		
		$this->load->model('customeradmin/Company_product_model');		
		$this->load->model('customeradmin/Company_model');		
		$this->load->model('customeradmin/Slide_model');		
		$this->load->model('customeradmin/Directory_product_model');		
		$this->load->model('Quotation_model');		
	}

	public function index($com_id)
	{
		if(!$this->session->userdata("ssid"))
		{
			redirect("Store/index/$com_id");
		}
		
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