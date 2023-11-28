<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brand extends CI_Controller {


	function __construct(){
						
		parent::__construct();
	
		$this->load->model('Brand_model');
	}

	public function index(){

		$data = array();		
		
		$data['brands'] = $this->Brand_model->getAll();
		
		$data['contentview']  = 'pages/brand_show';

		$this->load->view('layout/main',$data);
	}

	public function add(){
		
			// foreach ($_REQUEST as $key => $value) {
			// 	//echo "\$$key = \$this->input->post('$key');<br>";
			// 	echo "'$key'=>\$$key,	<br>";
			// }
			// exit();

			$this->form_validation->set_rules('name_en','brand name en','trim|required');
			//$this->form_validation->set_rules('name_th','brand name th','trim|required');
		
			if($this->form_validation->run()==FALSE){
				//if($this->input->post('username')){

				$this->session->set_flashdata('errors', validation_errors());				
				

				$data["brand_id"] = '' ;
				
				$data["method"] = 'Add' ;
								
				$data['brand'] ='';
				
				$data['contentview'] = 'pages/brand_form';	
				
				$this->load->view('layout/main',$data);	
				
				
			}else{

				$name_en = $this->input->post('name_en');
				$name_th = $this->input->post('name_th');
				$is_active = $this->input->post('is_active');
				$brand_type_id = $this->input->post('brand_type_id');
				
				$params = array('name_en'=>$name_en,	
								'name_th'=>$name_th,		
								'brand_type_id'=>$brand_type_id,																
								'is_active'=>$is_active,									
								'cby'=>$this->session->userdata('ssfullname'),
								'cdate'=> date('Y-m-d H:i:s'),
								'udate'=> date('Y-m-d H:i:s')
								 );

				
				$this->db->insert('brand',$params);
				
				$brand_id = $this->db->insert_id();
				
				if(isset($_FILES['picture'])&&$_FILES['picture']['size']>0){
					$filepath = "../images/brand/{$brand_id}.jpg";
					 move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);
				}
				
				$this->session->set_flashdata('msg','Add Complete');
			
				echo "<script>window.opener.location.reload();window.close();</script>";					
				
			}

	}

	public function edit($brand_id){

		$this->form_validation->set_rules('name_en','brand name en','trim|required');	
					
		if($this->form_validation->run()==FALSE){			

			$this->session->set_flashdata('errors', validation_errors());		
			
			

			$data["brand_id"] = $brand_id ;

			$data["method"] = 'Edit' ;
						
			$data['contentview'] = 'pages/brand_form';	

			$data['brand'] = $this->Brand_model->getOne($brand_id);
			// print_r($data['brand']);
			// exit();

			$this->load->view('layout/main',$data);				
			
		}else{

			
			$name_en = $this->input->post('name_en');
				$name_th = $this->input->post('name_th');
				$is_active = $this->input->post('is_active');
				$brand_type_id = $this->input->post('brand_type_id');
				
				$params = array('name_en'=>$name_en,	
								'name_th'=>$name_th,			
								'brand_type_id'=>$brand_type_id,														
								'is_active'=>$is_active,							
								'uby'=>$this->session->userdata('ssfullname'),
								'udate'=> date('Y-m-d H:i:s') );

		
			$this->db->where('brand_id', $brand_id);
			$this->db->update('brand',$params);
			
		
			if(isset($_FILES['picture'])&&$_FILES['picture']['size']>0){
				$filepath = "../images/brand/{$brand_id}.jpg";
				move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);
			}
				

			$this->session->set_flashdata('msg','Edit Complete');
		

			echo "<script>window.opener.location.reload();window.close();</script>";		
			
		}
	}

	public function delete($brand_id){
		
		$this->db->where('brand_id',$brand_id);
		$this->db->delete('brand');

		$filepath = "../images/brand/{$brand_id}.jpg";
		if(is_file($filepath)){
			unlink($filepath);
		}
		$this->session->set_flashdata('msg','Delete Complete');

		echo "<script>window.opener.location.reload();window.close();</script>";	
	}
	
}
 

?>