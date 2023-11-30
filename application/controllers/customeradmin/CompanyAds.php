<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompanyAds extends CI_Controller {
 

	function __construct(){
						
		parent::__construct();
	
		$this->load->model('customeradmin/Company_ads_model');
		$this->load->model('customeradmin/Company_model');
	}

	public function index($com_id){

		$data = array();
		$data["com_id"] = $com_id ;
		$data['contentview']  = 'pagecompany/ads_show';
		$data['company'] = $this->Company_model->getOne($com_id);

		$data['adss'] = $this->Company_ads_model->getAll($com_id);

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

				$data["company_ads_id"] = '' ;
				
				$data["method"] = 'Add' ;
								
				$data['ads'] ='';
				
				$data['contentview'] = 'pagecompany/ads_form';	
				
				$this->load->view('layoutcompany/main',$data);	
				
				
			}else{

				$is_active = $this->input->post('is_active');
				
				$params = array('is_active'=>$is_active,																
								'com_id'=>$com_id,																
								'cby'=>$this->session->userdata('ssfullname'),
								'cdate'=> date('Y-m-d H:i:s') );

				
				$this->db->insert('company_ads',$params);
				
				$company_ads_id = $this->db->insert_id();
				
				if(isset($_FILES['picture'])&&$_FILES['picture']['size']>0){
					$filepath = "../assets/images/ads/{$company_ads_id}.jpg";
					 move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);
				}
				
				$this->session->set_flashdata('msg','Add Complete');
			
				echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";					
				
			}

	}

	public function edit($com_id,$company_ads_id){

		$this->form_validation->set_rules('id','id','trim|required');			
					
		if($this->form_validation->run()==FALSE){			

			$this->session->set_flashdata('errors', validation_errors());			
			
			$data["com_id"] = $com_id ;

			$data["company_ads_id"] = $company_ads_id ;

			$data["method"] = 'Edit' ;
						
			$data['contentview'] = 'pagecompany/ads_form';	

			$data['ads'] = $this->Company_ads_model->getOne($company_ads_id);
			// print_r($data['ads']);
			// exit();

			$this->load->view('layoutcompany/main',$data);				
			
		}else{

			
			$is_active = $this->input->post('is_active');
			
			
			$params = array('is_active'=>$is_active,								
							'uby'=>$this->session->userdata('ssfullname'),
							'udate'=> date('Y-m-d H:i:s') );

		
			$this->db->where('company_ads_id', $company_ads_id);
			$this->db->update('company_ads',$params);
			
		
			if(isset($_FILES['picture'])&&$_FILES['picture']['size']>0){
				$filepath = "../assets/images/ads/{$company_ads_id}.jpg";
				move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);
			}
				

			$this->session->set_flashdata('msg','Edit Complete');
		

			echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";		
			
		}
	}

	public function delete($com_id,$company_ads_id){
		$this->db->where('company_ads_id',$company_ads_id);
		$this->db->delete('company_ads');

		$filepath = "../assets/images/ads/{$company_ads_id}.jpg";
		if(is_file($filepath)){
			unlink($filepath);
		}
		$this->session->set_flashdata('msg','Delete Complete');

		echo "<script>alert('deleted');window.opener.location.reload();window.close();</script>";	
	}
	
}
 

?>