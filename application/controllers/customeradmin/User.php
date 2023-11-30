<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
			
		parent::__construct();
		$this->load->model('customeradmin/Admin_model');
		$this->load->model('Counter_model');	
		$this->load->model('Config_model');
		$this->load->model('Company_model');
		$this->load->model('cms/Menu_model');
		$this->load->model('Country_model');
		$this->load->model('Category_model');
	}


	public function index()
	{
		
	}
	

	public function login(){

			$data['lang'] = $this->session->userdata('site_lang');

			if ($data['lang']=221) {
				$data['language'] = "เปลี่ยนภาษา";
			}else{
				$data['language'] = "Change Language";
			}
			$this->form_validation->set_rules('username','Username','trim|required');	
			$this->form_validation->set_rules('password','Password','trim|required');	
			
			
			if($this->form_validation->run()==FALSE){
				
				$this->session->set_flashdata('errors', validation_errors());
				
				$data[] ='';
				////////////////////// Theme ///////////////////////////////////
				$company = $this->Company_model->getOne(1);	

				$data['companyData'] = $company;				
		
				$data['meta_title'] = $company->meta_title;
				$data['meta_keyword'] = $company->meta_keyword;
				$data['meta_description'] = $company->meta_description;

				$theme_path = $company->theme_path;
				$data['theme_path'] = $theme_path;		
				$data["theme_assets_path"] = $company->theme_assets_path;

				$categorys = $this->Category_model->getAll();

				$data['categorys'] = $categorys;	

				////////////////////// Menu ///////////////////////////////////
				$menus = $this->Menu_model->getMain();		
				foreach ($menus as $menu) {
					$menu->submenu = $this->Menu_model->getsub($menu->menu_id);
				}
				$data['menus'] = $menus ;		
				$data['countrys'] = $this->Country_model->getAll();
 
				$data['lang'] = $this->session->userdata('site_lang');
				$data['counter'] = $this->Counter_model->count();
				$data['pages'] = "login/index";
				$this->load->view($theme_path.'/login',$data);
				// $this->load->view('pagecompany/login',$data);	
				
			}else{				
				
				$username = $this->input->post('username');
		 		$password = $this->input->post('password');
		 		
				
				if($row = $this->Admin_model->checkLogin($username,$password)){
					// print_r($row);
					// exit();
					$this->session->set_userdata('ssid',$row->user_id);
					$this->session->set_userdata('ssusername',$row->username);
					$this->session->set_userdata('ssfullname',$row->fullname);
					$this->session->set_userdata('sslevel',$row->level);
					$this->session->set_userdata('com_id',1);
					$this->session->set_userdata('company_login_com_id',1);
					// $this->session->set_userdata('company_id',$row->com_id)
					// print_r($this->session->userdata('ssid',$row->user_id));
					// exit();
					redirect('customeradmin/Company/edit/1');

				}
				else{

					$this->session->set_flashdata('errors','Username or Password Invalid');
					
					$data[] = '';

					$this->load->view($theme_path.'/login',$data);
				}
				
			}
	}

	public function logout(){
		$this->session->unset_userdata('ssid'); 
		// $this->session->sess_destroy();
		redirect($this->session->userdata('site_lang_name').'/Home');
	}
}
