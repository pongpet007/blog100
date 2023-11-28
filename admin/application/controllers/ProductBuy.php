<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductBuy extends CI_Controller {

	function __construct(){
						
		parent::__construct();			
		$this->load->model('Products_buy_category_model');
		$this->load->model('Products_buy_model');
		$this->load->model('Company_model');
	
	}

	public function index($com_id){
		
		$keyword = $this->input->get('keyword');
		$cat_id = $this->input->get('cat_id');

		$search['keyword'] = $keyword;
		$search['cat_id'] = $cat_id;
		$search['com_id'] = $com_id;
		
		$data = array();
		$data["com_id"] = $com_id ;

		////////////////////////////////////////////////////////////////	
		$arr = array('-- Select Category --');
		$mains = $this->Products_buy_category_model->getAll();
		foreach ($mains as $main) {
			$arr[$main->cat_id] = $main->cat_name_th." ($main->cat_name) ";
			
		}				
		$data['categorys'] = $arr;
		////////////////////////////////////////////////////////////////////
				
		$config = $this->config->item('pagination');
		
		$config["base_url"] = base_url() . "ProductBuy/index/$com_id";
		$config["total_rows"] = $this->Products_buy_model->count($search);
		// echo $this->db->last_query();
		// exit();
		$config["per_page"] = 20;
		$config["uri_segment"] = 4;
		$config['reuse_query_string'] = true;
		$this->pagination->initialize($config);		
		$data["links"] = $this->pagination->create_links();		
		$data['total_rows'] =  $config["total_rows"];
		$start = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;			
		$products = $this->Products_buy_model->getAll($config["per_page"],$start,$search);	
		$data['products'] = $products;
		// echo $this->db->last_query();
		// exit();
		$data['search'] = $search;
		$data['company'] = $this->Company_model->getOne($com_id);
		$data['contentview']  = 'pagecompany/product_buy_show';

		$this->load->view('layoutcompany/main',$data);
	}

	
	public function add($com_id){

		$this->form_validation->set_rules('pro_name_th','Product name TH','trim|required');		
					
		if($this->form_validation->run()==FALSE){		

			$this->session->set_flashdata('errors', validation_errors());		
						
			$data["com_id"] = $com_id ;
			$data["pro_id"] = "" ;
			$data["method"] = 'Add' ;

			////////////////////////////////////////////////////////////////	
			$arr = array('-- Select Category --');
			$mains = $this->Products_buy_category_model->getAll();
			foreach ($mains as $main) {
				$arr[$main->cat_id] = $main->cat_name_th." ($main->cat_name) ";				
			}				
			$data['categorys'] = $arr;
			////////////////////////////////////////////////////////////////////
				
			$data['company'] = $this->Company_model->getOne($com_id);					
			$data['product'] ="";
				
			$data['contentview'] = 'pagecompany/product_buy_form';	
				
			$this->load->view('layoutcompany/main',$data);		
			
		}else{


			
				$pro_name_en = $this->input->post('pro_name_en');
				$pro_name_th = $this->input->post('pro_name_th');				
				$remark = $this->input->post('remark');				
				$cat_id = $this->input->post('cat_id');
				$is_active = $this->input->post('is_active');				
				
				$params = array(
								'pro_name_en'=>$pro_name_en,	
								'pro_name_th'=>$pro_name_th,
								'cat_id'=>$cat_id,									
								'remark'=>$remark,									
								'is_active'=>$is_active,
								'cdate'=>date('Y-m-d h:i:s'),
								'cby'=>$this->session->userdata('ssfullname')							
								);			
			
			$this->db->insert('products_buy',$params);
			
			$this->session->set_flashdata('msg','Add Complete');
			// echo $this->db->last_query();
			// exit();

			echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";					
			
		}

	}

	public function edit($com_id,$pro_id){

		$this->form_validation->set_rules('pro_name_th','Product name TH','trim|required');
		
					
		if($this->form_validation->run()==FALSE){		

			$this->session->set_flashdata('errors', validation_errors());		
			
			$data['filename'] = $this->input->get('filename');
			$data["com_id"] = $com_id ;
			$data["pro_id"] = $pro_id ;
			$data["method"] = 'Edit' ;

			////////////////////////////////////////////////////////////////	
			$arr = array('-- Select Category --');
			$mains = $this->Products_buy_category_model->getAll();
			foreach ($mains as $main) {
				$arr[$main->cat_id] = $main->cat_name_th." ($main->cat_name) ";				
			}				
			$data['categorys'] = $arr;
			////////////////////////////////////////////////////////////////////
				
			$data['company'] = $this->Company_model->getOne($com_id);					
			$data['product'] =$this->Products_buy_model->getOne($pro_id);
				
			$data['contentview'] = 'pagecompany/product_buy_form';	
				
			$this->load->view('layoutcompany/main',$data);		
			
		}else{


			
				$pro_name_en = $this->input->post('pro_name_en');
				$pro_name_th = $this->input->post('pro_name_th');				
				$remark = $this->input->post('remark');				
				$cat_id = $this->input->post('cat_id');
				$is_active = $this->input->post('is_active');				
				
				$params = array(
								'pro_name_en'=>$pro_name_en,	
								'pro_name_th'=>$pro_name_th,
								'cat_id'=>$cat_id,									
								'remark'=>$remark,									
								'is_active'=>$is_active,
								'udate'=>date('Y-m-d h:i:s'),
								'uby'=>$this->session->userdata('ssfullname')							
								);			
				
			$this->db->where('pro_id', $pro_id);
			$this->db->update('products_buy',$params);

			//echo $pro_id;
			
			// if(isset($_FILES['picture1']) && $_FILES['picture1']['size']>0){
			// 	// print_r('eee');
			// 	// exit();
			// 	$filepath = "../images/product_new/pro_". $pro_id .'01.jpg';
			// 	// echo $filepath ;
			// 	move_uploaded_file($_FILES['picture1']['tmp_name'], $filepath);
			// }

			// if(isset($_FILES['picture2']) && $_FILES['picture2']['size']>0){

			// 	$filepath = "../images/product_new/pro_". $pro_id .'02.jpg';
			// 	// echo $filepath ;
			// 	move_uploaded_file($_FILES['picture2']['tmp_name'], $filepath);
			// }

			// if(isset($_FILES['picture3']) && $_FILES['picture3']['size']>0){

			// 	$filepath = "../images/product_new/pro_". $pro_id .'03.jpg';
			// 	// echo $filepath ;
			// 	move_uploaded_file($_FILES['picture3']['tmp_name'], $filepath);
			// }
	
			
			$this->session->set_flashdata('msg','Edit Complete');
			// echo $this->db->last_query();
			// exit();

			echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";					
			
		}
	}

	public function delete($com_id,$pro_id){
		$this->db->where('pro_id',$pro_id);
		$this->db->delete('products_buy');	

		$this->session->set_flashdata('msg','Delete Complete');

		echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";		
	}
	
}
 

?>