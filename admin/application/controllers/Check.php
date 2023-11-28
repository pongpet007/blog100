<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Check extends CI_Controller {


	function __construct(){
						
		parent::__construct();
	
		$this->load->model('Check_model');
	}

	public function Company()
	{
		$data = array();		
		
		$data['companys'] = $this->Check_model->getCompanys();
		
		$data['contentview']  = 'check/companys';

		$this->load->view('layout/main',$data);
	}

	public function Brand()
	{
		$data = array();		
		
		$data['brands'] = $this->Check_model->getBrands();
		
		$data['contentview']  = 'check/brands';

		$this->load->view('layout/main',$data);
	}

	public function Category()
	{
		$data = array();		
		
		$data['categorys'] = $this->Check_model->getCategorys();
		
		$data['contentview']  = 'check/categorys';

		$this->load->view('layout/main',$data);
	}

	public function Product(){

		$data = array();		
		
		$data['products'] = $this->Check_model->getProducts();
		
		$data['contentview']  = 'check/products';

		$this->load->view('layout/main',$data);
	}


}