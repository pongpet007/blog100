<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompanyBrand extends CI_Controller {


	function __construct(){
						 
		parent::__construct();
	
		$this->load->model('customeradmin/Company_model');
		$this->load->model('customeradmin/Brand_model');
		$this->load->model('customeradmin/Brand_old_model');	
		$this->load->model('customeradmin/Company_brand_model');
	}

	public function index($com_id){

		$data = array();
		$data["com_id"] = $com_id ;
		
		$data['company'] = $this->Company_model->getOne($com_id);
		// $data['brands'] = $this->Brand_model->getAll($com_id);
		
		$data['brand_olds'] = $this->Brand_old_model->getAll($com_id);

		$data['brands'] = $this->Company_brand_model->getAll($com_id);
		
		// $data['company'] = $this->Company_model->getOne($com_id);
		// $data['brand_olds'] = $this->Brand_old_model->getAll($com_id);

		$data['contentview']  = 'pagecompany/brand_show';
		$this->load->view('layoutcompany/main',$data);
		
	}

	public function add($com_id){
			
		
			// foreach ($_REQUEST as $key => $value) {
			// 	//echo "\$$key = \$this->input->post('$key');<br>";
			// 	echo "'$key'=>\$$key,	<br>";
			// }
			// exit();

			$this->form_validation->set_rules('id','id','trim|required');
		
			if($this->form_validation->run()==FALSE){
				//if($this->input->post('username')){

				$this->session->set_flashdata('errors', validation_errors());
				
				$data["com_id"] = $com_id ;

				$data['company'] = $this->Company_model->getOne($com_id);

				$data["brand_id"] = '' ;
				
				$data["method"] = 'Add' ;
								
				$data['brand'] ='';
				
				$data['brands'] = $this->Company_brand_model->getNotUsed($com_id,array('keyword'=>$keyword));

				$data['contentview'] = 'pagecompany/brand_form';	
				
				$this->load->view('layoutcompany/main',$data);	
				
				
			}else{

				$chk_brand = $this->input->post('chk_brand');

				print_r($chk_brand);
				
				for ($i=0; $i <count($chk_brand) ; $i++) { 
					
				$params = array(
								'brand_ref_id'=>$chk_brand[$i],		
								'com_id'=>$com_id,											
								);

				
				$this->db->insert('company_brand',$params);

				}
				
				$this->session->set_flashdata('msg','Add Complete');
				
				echo "<script>window.opener.location.reload();window.close();</script>";				
				
			}

	}

	public function edit($com_id,$brand_id){

		$this->form_validation->set_rules('id','id','trim|required');			
					
		if($this->form_validation->run()==FALSE){			

			$this->session->set_flashdata('errors', validation_errors());			
			
			$data["com_id"] = $com_id ;

			$data['company'] = $this->Company_model->getOne($com_id);
			
			$data["brand_id"] = $brand_id ;

			$data["method"] = 'Edit' ;
						
			$data['contentview'] = 'pagecompany/brand_form';	

			$data['brand'] = $this->Brand_model->getOne($brand_id);
			// print_r($data['brand']);
			// exit();

			$this->load->view('layoutcompany/main',$data);				
			
		}else{

			
			$name_en = $this->input->post('name_en');
				$name_th = $this->input->post('name_th');
				$is_active = $this->input->post('is_active');
				
				$params = array('name_en'=>$name_en,	
								'name_th'=>$name_th,																
								'is_active'=>$is_active,							
								'uby'=>$this->session->userdata('company_login_com_name_en'),
								'udate'=> date('Y-m-d H:i:s') );

		
			$this->db->where('brand_id', $brand_id);
			$this->db->update('brand',$params);
			
		
			if(isset($_FILES['picture'])&&$_FILES['picture']['size']>0){
				$filepath = "assets/images/brand/{$brand_id}.jpg";
				move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);
			}
				

			$this->session->set_flashdata('msg','Edit Complete');
		

			echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";		
			
		}
	}

	public function delete($com_id,$company_brand_id){
		$this->db->where('company_brand_id',$company_brand_id);
		$this->db->delete('company_brand');

		$this->session->set_flashdata('msg','Delete Complete');

		echo "<script>window.opener.location.reload();window.close();</script>";		
	}
	
}
 

?>