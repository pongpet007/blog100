<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Splash extends CI_Controller {

	public function __construct(){
			
		parent::__construct();
		$this->load->model('Admin_model');	
		$this->load->model('Config_model');	

	}

	public function index()
	{
		
			$this->form_validation->set_rules('splash_expire','splash_expire','trim|required');
		
			if($this->form_validation->run()==FALSE){
				//if($this->input->post('username')){

				$this->session->set_flashdata('errors', validation_errors());
								
				$data["banner_id"] = '' ;
				
				$data["method"] = 'Add' ;
								
				$data['banner'] ='';
				
				$data['config'] = $this->Config_model->getOne(1);

				$data['contentview'] = "pages/splash";

				$this->load->view('layout/main',$data);
				
				
			}else{

				$splash_bg_type = ($this->input->post('splash_bg_type'));
				$splash_bg_value = ($this->input->post('splash_bg_value'));
				$splash = ($this->input->post('splash'));				
				$splash_expire = ($this->input->post('splash_expire'));
								
				$params = array('splash_bg_type'=>$splash_bg_type,	
								'splash_bg_value'=>$splash_bg_value,
								'splash'=>$splash,
								'splash_expire'=>$splash_expire,								
							);

				$this->db->where('id',1);
				$this->db->update('config',$params);

				

				if($_FILES['splash']['size']>0){

					 $filepath = "../assets/images/splash/splash.jpg"; 
					// echo $filepath ;
					move_uploaded_file($_FILES['splash']['tmp_name'], $filepath);
				}


				if($_FILES['bgpic']['size']>0){

					 $filepath = "../assets/images/splash/bg.jpg";
					// echo $filepath ;
					move_uploaded_file($_FILES['bgpic']['tmp_name'], $filepath);
				}

				redirect('Splash');
			}
	}



}

?>