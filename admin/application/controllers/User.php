<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
			
		parent::__construct();
		$this->load->model('Admin_model');	

	}


	public function index()
	{
		
	}
	

	public function login(){

			
			$this->form_validation->set_rules('username','Username','trim|required');	
			$this->form_validation->set_rules('password','Password','trim|required');	
			
			
			if($this->form_validation->run()==FALSE){
				
				$this->session->set_flashdata('errors', validation_errors());
				
				$data[] ='';
				
				$this->load->view('pages/login',$data);	
				
			}else{				

				$username = $this->input->post('username');
				$password = $this->input->post('password');
				
				if($row = $this->Admin_model->checkLogin($username,$password)){

					$this->session->set_userdata('ssid',$row->user_id);
					$this->session->set_userdata('ssusername',$row->username);
					$this->session->set_userdata('ssfullname',$row->fullname);
					$this->session->set_userdata('sslevel',$row->level);
					 
					redirect('Company/index');

				}
				else{

					$this->session->set_flashdata('errors','Username or Password Invalid');
					
					$data[] = '';

					$this->load->view('pages/login',$data);	
				}
				
			}

	}

	public function logout(){

		$this->session->sess_destroy();
			
		redirect('Home');
	}

}
