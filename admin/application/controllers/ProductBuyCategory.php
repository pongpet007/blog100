<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductBuyCategory extends CI_Controller {


	function __construct(){
						
		parent::__construct();	
		$this->load->model('Products_buy_category_model');					
		$this->load->model('Company_model');		
	}

	public function index($com_id){
		
		
		$data = array();
		$data["com_id"] = $com_id ;
		$data['categorys'] = $this->Products_buy_category_model->getAll();
		$data['company'] = $this->Company_model->getOne($com_id);
		$data['contentview']  = 'pagecompany/products_buy_category_show';

		$this->load->view('layoutcompany/main',$data);
	}

	

	public function add($com_id){
		
			

			$this->form_validation->set_rules('cat_name','category name EN','trim|required');
			$this->form_validation->set_rules('cat_name_th','category name TH','trim|required');
		
			if($this->form_validation->run()==FALSE){
				//if($this->input->post('username')){

				$this->session->set_flashdata('errors', validation_errors());
				
				$data["com_id"] = $com_id ;
				$data["cat_id"] = '' ;
				
				$data["method"] = 'Add' ;
								
				$data['category'] ='';
								
				////////////////////////////////////////////////////////////////////
				
				$data['contentview'] = 'pagecompany/products_buy_category_form';	
				$data['company'] = $this->Company_model->getOne($com_id);
				$this->load->view('layoutcompany/main',$data);	
				
				
			}else{


				$cat_name = $this->input->post('cat_name');
				$cat_name_th = $this->input->post('cat_name_th');				
				$is_show = $this->input->post('is_show');
				
				$params = array('cat_name'=>$cat_name,	
								'cat_name_th'=>$cat_name_th,	
								'is_show'=>$is_show,
								'udate'=> date('Y-m-d H:i:s'),
								'cdate'=> date('Y-m-d H:i:s') ,
								'cby'=>$this->session->userdata('ssfullname'),						
								'uby'=>$this->session->userdata('ssfullname')							
								);

				$this->db->insert('products_buy_category',$params);
				$cat_id= $this->db->insert_id();						

				////////////////// Update orders ///////////////////////
				$params = array('orders'=>$cat_id);
				$this->db->where('cat_id', $cat_id);
				$this->db->update('products_buy_category',$params);

				////////////////////////////////////////////////////////
				$this->session->set_flashdata('msg','Add Complete');
				echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";				
				
			}

	}

	public function edit($com_id,$cat_id){

		$this->form_validation->set_rules('cat_name','category name EN','trim|required');
		$this->form_validation->set_rules('cat_name_th','category name TH','trim|required');
		
					
		if($this->form_validation->run()==FALSE){			

			$this->session->set_flashdata('errors', validation_errors());			
			
			$data["com_id"] = $com_id ;

			$data["cat_id"] = $cat_id ;

			$data["method"] = 'Edit' ;
			
			////////////////////////////////////////////////////////////////////
			$data['company'] = $this->Company_model->getOne($com_id);					
			$data['category'] =$this->Products_buy_category_model->getOne($cat_id);
				
			$data['contentview'] = 'pagecompany/products_buy_category_form';	
				
			$this->load->view('layoutcompany/main',$data);		
			
		}else{

			
			$cat_name = $this->input->post('cat_name');
			$cat_name_th = $this->input->post('cat_name_th');
			$is_show = $this->input->post('is_show');
			
			$params = array(
							'cat_name'=>$cat_name,	
							'cat_name_th'=>$cat_name_th,	
							'is_show'=>$is_show,	
							'udate'=>date('Y-m-d h:i:s'),
							'uby'=>$this->session->userdata('ssfullname')							
							);

			$this->db->where('cat_id', $cat_id);
			$this->db->update('products_buy_category',$params);
			
			$this->session->set_flashdata('msg','Edit Complete');
			// echo $this->db->last_query();
			// exit();
			echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";					
			
		}
	}

	public function delete($com_id,$cat_id){
		$this->db->where('cat_id',$cat_id);
		$this->db->delete('products_buy_category');
	

		$this->session->set_flashdata('msg','Delete Complete');

		echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";		
	}

	public function moveup($com_id,$orders)
	{
		$sql = "select cat_id ,orders from products_buy_category where orders <= $orders and com_id = $com_id order by orders desc limit 0,2 ";
		//echo "$sql <br/>";
		$table = $this->db->query($sql);
		$rows = $table->result();

		if(count($rows)==2)
		{
			$row1 = $rows[0];
			$row2 = $rows[1];
			$sql1 = "update products_buy_category set orders = $row2->orders  where cat_id= $row1->cat_id;";
			$sql2 = "update products_buy_category set orders = $row1->orders  where cat_id= $row2->cat_id;";
		
			// echo "$sql1 <hr> $sql2 ";
			// exit();
			$this->db->query($sql1);
			$this->db->query($sql2);
			//exit();
			echo "<script>window.opener.location.reload();window.close();</script>";		
		}
		else
		{
			echo "Error ";
		}
	}

	public function movedown($com_id,$orders)
	{

		$sql = "select cat_id ,orders from products_buy_category where orders >= $orders and com_id = $com_id order by orders  limit 0,2 ";
		
		$table = $this->db->query($sql);
		$rows = $table->result();
		
		if(count($rows)==2)
		{
			$row1 = $rows[0];
			$row2 = $rows[1];
			$sql1 = "update products_buy_category set orders = $row2->orders  where cat_id= $row1->cat_id;";
			$sql2 = "update products_buy_category set orders = $row1->orders  where cat_id= $row2->cat_id;";
			// echo "$sql1 <hr> $sql2 ";
			// exit();
			$this->db->query($sql1);
			$this->db->query($sql2);

			//echo "<br> $sql1<br />$sql2 <br/>";
			
			echo "<script>window.opener.location.reload();window.close();</script>";		
		}
		else
		{
			echo "Error ";
		}
	}

	
}
 

?>