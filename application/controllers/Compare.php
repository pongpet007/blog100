<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Compare extends CI_Controller {

	function __construct(){
		parent::__construct();

		if(!$this->session->has_userdata('site_lang')){
			$this->session->set_userdata('site_lang', 'EN');
		}
		$this->load->model('new_model/Company_model');
		$this->load->model('new_model/Product_model');
		$this->load->model('Company_customer_model');


		$this->load->model('Config_model');
		$this->load->model('News_model');
		$this->load->model('Company_ads_model');
		$this->load->model('Company_brand_model');
		$this->load->library('cart');
		
		$this->load->model('Counter_model');
		$this->load->model('Company_order_model');
		$this->load->model('Products_model');
		$this->load->model('main/Company_categorys_model');

}
	

	public function index()
	{

		/* start shopping cart */
	    $maintotal  = 0;
	    $countcartx = 0;
	    foreach ($this->cart->contents() as $key => $items) {
	        $maintotal = $maintotal + $items['subtotal'];
	        $countcartx++;
	    }

	    $data['maintotal']  = $maintotal;
	    $data['countcartx'] = $countcartx;
	    /* end shopping cart */
	    // print_r($this->cart->contents());
	    // exit();
	    $data['company'] = $this->Company_model->get_company();

		$countcompare = 0;
		

		if (isset($_SESSION["comparepro_id"])) { 
                  
        }else{ 
        	 
             redirect('Product');              
        } 

        foreach ($_SESSION["comparepro_id"] as $key => $compare) {
            $countcompare = $countcompare +1;
            $product_compare = $this->Product_model->getOnecompare($compare);
            
            if ($product_compare != "") {

            	$pro_ids[] = $product_compare->pro_id;
            	
	            $pro_price[] = $product_compare->pro_price;
	            $pro_name_th[] = $product_compare->pro_name_th;
	            $status[] = $product_compare->status;

	            $cat_name_th[] = $product_compare->cat_name_th;
	            $short_product_detail_th[] = $product_compare->short_product_detail_th;
	            $name_th[] = $product_compare->name_th;

            }else{
            	
            	$pro_ids = "-";
		        $pro_price = "-";
		        $pro_name_th = "-";
		        $status = "-";
		        $cat_name_th = "-";
		        $short_product_detail_th = "-";
		        $name_th = "-";
            }

            

            
        }



        $data['id'] = $pro_ids;
        if ($data['id']=="") {
        	redirect('Product');    
        }
        $data['pro_price'] = $pro_price;
        $data['pro_name_th'] = $pro_name_th;
        $data['status'] = $status;
        $data['cat_name_th'] = $cat_name_th;
        $data['short_product_detail_th'] = $short_product_detail_th;
        $data['name_th'] = $name_th;

        $data['countcompare'] = $countcompare;
        $data['counter'] = $this->Counter_model->count();
		$data['pages'] = "compare/index";
	    $this->load->view('theme_new/home', $data);

	}

	public function addcompare($pro_id)
	{
		
		$countsession = 0;
		foreach ($_SESSION["comparepro_id"] as  $items) { 
	        if ($items == $pro_id) {
	        	$countsession = $countsession+1;
	        }
	    }
	    if ($countsession==0) { 
	    	$_SESSION["comparepro_id"][] = $pro_id;
	    }
		
		redirect('Compare');

	}

	public function deletecompare($pro_id)
	{ 
		
		foreach ($_SESSION["comparepro_id"] as $key =>  $items) { 
	        if ($items == $pro_id) {
	        	$new_key = $key;
	        }
	    }
		unset($_SESSION["comparepro_id"]["$new_key"]); 
		redirect('Compare');

	}

	public function destroycompare()
	{
		
		unset($_SESSION["comparepro_id"]);
		$_SESSION["comparepro_id"]   = array();
		redirect('Product');
	}

}
