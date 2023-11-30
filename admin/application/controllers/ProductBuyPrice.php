<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductBuyPrice extends CI_Controller {


	function __construct(){
						
		parent::__construct();	
		$this->load->model('Products_buy_category_model');					
		$this->load->model('Products_buy_price_model');					
		$this->load->model('Products_buy_price_item_model');					
		$this->load->model('Products_buy_model');				
		$this->load->model('Company_model');		
	}

	public function index($com_id){
		
		
		$data = array();
		$data["com_id"] = $com_id ;
		$data['prices'] = $this->Products_buy_price_model->getAll();
		$data['company'] = $this->Company_model->getOne($com_id);
		$data['contentview']  = 'pagecompany/products_buy_price_show';

		$this->load->view('layoutcompany/main',$data);
	}

	

	public function add($com_id){
		
			

			$this->form_validation->set_rules('pp_date','Date','trim|required|is_unique[products_buy_price.pp_date]',
				array('is_unique'=>'วันที่นี้มีอยู่แล้วในระบบไม่สามารถเพิ่มได้'));
			
		
			if($this->form_validation->run()==FALSE){
				//if($this->input->post('username')){

				$this->session->set_flashdata('errors', validation_errors());
				
				$data["com_id"] = $com_id ;
				$data["pbp_id"] = '' ;
				
				$data["method"] = 'Add' ;
								
				$data['price'] ='';

				$arr = array('-- All Category --');
				$mains = $this->Products_buy_category_model->getAll();
				foreach ($mains as $main) {
					$arr[$main->cat_id] = $main->cat_name_th." ($main->cat_name) ";				
				}				
				$data['categorys'] = $arr;

				$arr = array('-- All Price --');
				$prices = $this->Products_buy_price_model->getAll();
				foreach ($prices as $price) {
					$arr[$price->pbp_id] = $price->pp_date ;				
				}				
				$data['priceclones'] = $arr;
							
				////////////////////////////////////////////////////////////////////
				$pbp_id = $this->input->get("pbp_id");
				if($pbp_id > 0)
				{
					$product_items =$this->Products_buy_price_item_model->getAll($pbp_id);				
					$arr = array();
					foreach ($product_items as $product_item) {
						$arr[$product_item->pro_id] = $product_item;	
					}
					$data['price_items'] = $arr;
					$data['get_pbp_id'] = $pbp_id;
				}

				$data['products'] = $this->Products_buy_model->getAll(1000,0,array());	
				
				$data['contentview'] = 'pagecompany/products_buy_price_form';	
				$data['company'] = $this->Company_model->getOne($com_id);
				$this->load->view('layoutcompany/main',$data);	
				
				
			}else{


				$pp_date = $this->input->post('pp_date');
				$comment = $this->input->post('comment');				
				$is_show = $this->input->post('is_show');
				$price = $this->input->post('price');
				$pro_id = $this->input->post('pro_id');
				
				$params = array('pp_date'=>$pp_date,	
								'comment'=>$comment,	
								'is_show'=>$is_show,
								'udate'=> date('Y-m-d H:i:s'),
								'cdate'=> date('Y-m-d H:i:s') ,
								'cby'=>$this->session->userdata('ssfullname'),						
								'uby'=>$this->session->userdata('ssfullname')							
								);

				$this->db->insert('products_buy_price',$params);
				$pbp_id= $this->db->insert_id();		

				
				for ($i=0; $i < sizeof($price) ; $i++) { 
					$params = array(
									'pbp_id'=>$pbp_id,
									'pro_id'=>$pro_id[$i],
									'price'=>$price[$i],
								);					
					$this->db->insert('products_buy_price_item',$params);					
				}
				
				//////////////////////////////////////////////////////////
				$this->session->set_flashdata('msg','Add Complete');
				echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";				
				
			}

	}

	public function edit($com_id,$pbp_id){

		$this->form_validation->set_rules('pp_date','Date','trim|required');
					
		if($this->form_validation->run()==FALSE){			

			$this->session->set_flashdata('errors', validation_errors());			
			
			$data["com_id"] = $com_id ;

			$data["pbp_id"] = $pbp_id ;

			$data["method"] = 'Edit' ;
			
			////////////////////////////////////////////////////////////////////

			$arr = array('-- All Category --');
			$mains = $this->Products_buy_category_model->getAll();
			foreach ($mains as $main) {
				$arr[$main->cat_id] = $main->cat_name_th." ($main->cat_name) ";				
			}				
			$data['categorys'] = $arr;
			
			$arr = array('-- All Price --');
				$prices = $this->Products_buy_price_model->getAll();
				foreach ($prices as $price) {
					$arr[$price->pbp_id] = $price->pp_date ;				
				}				
			$data['priceclones'] = $arr;

			
			$data['company'] = $this->Company_model->getOne($com_id);	

			$data['price'] =$this->Products_buy_price_model->getOne($pbp_id);

			$data['products'] = $this->Products_buy_model->getAll(1000,0,array());	

			$product_items =$this->Products_buy_price_item_model->getAll($pbp_id);				
			$arr = array();
			foreach ($product_items as $product_item) {
				$arr[$product_item->pro_id] = $product_item;	
			}
			$data['price_items'] = $arr;
			

			$data['contentview'] = 'pagecompany/products_buy_price_form';	
				
			$this->load->view('layoutcompany/main',$data);		
			
		}else{

			
			$pp_date = $this->input->post('pp_date');
			$comment = $this->input->post('comment');				
			$is_show = $this->input->post('is_show');

			$price = $this->input->post('price');
			$pro_id = $this->input->post('pro_id');

			$params = array('pp_date'=>$pp_date,	
							'comment'=>$comment,	
							'is_show'=>$is_show,
							'udate'=> date('Y-m-d H:i:s'),											
							'uby'=>$this->session->userdata('ssfullname')							
							);

			$this->db->where('pbp_id', $pbp_id);
			$this->db->update('products_buy_price',$params);

			// delete item				
			$this->db->where('pbp_id', $pbp_id);
			$this->db->delete("products_buy_price_item");

			for ($i=0; $i < sizeof($price) ; $i++) { 
				$params = array(
								'pbp_id'=>$pbp_id,
								'pro_id'=>$pro_id[$i],
								'price'=>$price[$i],
							);					
				$this->db->insert('products_buy_price_item',$params);					
			}
			
			$this->session->set_flashdata('msg','Edit Complete');
			// echo $this->db->last_query();
			// exit();
			echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";					
			
		}
	}

	public function delete($com_id,$pbp_id){
		$this->db->where('pbp_id',$pbp_id);
		$this->db->delete('products_buy_price_item');

		$this->db->where('pbp_id',$pbp_id);
		$this->db->delete('products_buy_price');
	

		$this->session->set_flashdata('msg','Delete Complete');

		echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";		
	}


	
}
 

?>