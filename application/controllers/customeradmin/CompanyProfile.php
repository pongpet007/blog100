<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompanyProfile extends CI_Controller {


	function __construct(){
						
		parent::__construct();
	
		$this->load->model('customeradmin/Company_model');
		$this->load->model('customeradmin/Company_profile_model');
	}

	public function index($com_id){

		$data = array();
		$data["com_id"] = $com_id ;

		$data['company'] = $this->Company_model->getOne($com_id);

		$data['contentview']  = 'pagecompany/company_profile_show';

		$data['company_profiles'] = $this->Company_profile_model->getAll($com_id);

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

				$data["company_profile_id"] = '' ;
				
				$data["method"] = 'Add' ;
								
				$data['company_profile'] ='';
				
				$data['contentview'] = 'pagecompany/company_profile_form';	
				
				$this->load->view('layoutcompany/main',$data);	
				
				
			}else{

				$profile_en = $this->input->post('profile_en');
				$profile_th = $this->input->post('profile_th');				
				$is_active = $this->input->post('is_active');
				
				$params = array('profile_en'=>$profile_en,	
								'profile_th'=>$profile_th,																
								'is_active'=>$is_active,																
								'com_id'=>$com_id,																
								'cby'=>$this->session->userdata('ssfullname'),
								'cdate'=> date('Y-m-d H:i:s') );

				

				$this->db->insert('company_profile',$params);
				
				// $company_profile_id = $this->db->insert_id();				
				
				
				$this->session->set_flashdata('msg','Add Complete');
			
				echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";					
				
			}

	} 

	public function edit($com_id,$company_profile_id){

		$this->form_validation->set_rules('id','id','trim|required');			
					
		if($this->form_validation->run()==FALSE){			

			$this->session->set_flashdata('errors', validation_errors());			
			
			$data["com_id"] = $com_id ;

			$data['company'] = $this->Company_model->getOne($com_id);

			$data["company_profile_id"] = $company_profile_id ;

			$data["method"] = 'Edit' ;
						
			$data['contentview'] = 'pagecompany/company_profile_form';	

			$data['company_profile'] = $this->Company_profile_model->getOne($company_profile_id);
			// print_r($data['company_profile']);
			// exit();

			$this->load->view('layoutcompany/main',$data);				
			
		}else{

			
		$profile_en = $this->input->post('profile_en');
				$profile_th = $this->input->post('profile_th');				
				$is_active = $this->input->post('is_active');
				
				$params = array('profile_en'=>$profile_en,	
								'profile_th'=>$profile_th,																
								'is_active'=>$is_active,	
								'uby'=>$this->session->userdata('ssfullname'),
								'udate'=> date('Y-m-d H:i:s') );
			
			$this->db->where('company_profile_id', $company_profile_id);
			$this->db->update('company_profile',$params);
			
						

			$this->session->set_flashdata('msg','Edit Complete');
		

			echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";		
			
		}
	}

	public function delete($com_id,$company_profile_id){
		$this->db->where('company_profile_id',$company_profile_id);
		$this->db->delete('company_profile');
		
		$this->session->set_flashdata('msg','Delete Complete');

		echo "<script>alert('deleted');window.opener.location.reload();window.close();</script>";	
	}
	
}
 

?>