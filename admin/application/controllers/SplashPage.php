<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SplashPage extends CI_Controller {


	function __construct(){
						
		parent::__construct();
		$this->load->model('Menu_admin_model');	
		$this->load->model('Menu_admin_type_model');	
		$this->load->model('Company_splash_model');
		$this->load->model('Company_model');
	}

	public function index(){
		$com_id = 1;
		$data = array();
		$data["com_id"] = $com_id ;
		//////////////////// Menu /////////////////////////////////
				$menu_types = $this->Menu_admin_type_model->getAll();
				foreach ($menu_types as $menu_type) {
					$menu_type->menu = $this->Menu_admin_model->getAll($menu_type->menu_admin_type_id);
				}

				$data['menu_admins'] =  $menu_types;
				$menuselected = $this->input->get('menuselected');
				if($menuselected > 0){
					$data['menuselected'] =  $this->Menu_admin_model->getOne($menuselected);				
				}
				############################################################
		
		$data['company'] = $this->Company_model->getOne($com_id);

		$data['contentview']  = 'pagecompany/splash_show';
		$data['splashs'] = $this->Company_splash_model->getAll();

		$this->load->view('layoutcompany/main',$data);
	}	

	public function add(){
		
		$com_id = 1;
		$this->form_validation->set_rules('splash_name','splash_name','trim|required');
	
		if($this->form_validation->run()==FALSE){
			//if($this->input->post('username')){

			$this->session->set_flashdata('errors', validation_errors());
			//////////////////// Menu /////////////////////////////////
				$menu_types = $this->Menu_admin_type_model->getAll();
				foreach ($menu_types as $menu_type) {
					$menu_type->menu = $this->Menu_admin_model->getAll($menu_type->menu_admin_type_id);
				}

				$data['menu_admins'] =  $menu_types;
				$menuselected = $this->input->get('menuselected');
				if($menuselected > 0){
					$data['menuselected'] =  $this->Menu_admin_model->getOne($menuselected);				
				}
				############################################################
			$data["com_id"] = $com_id ;

			$data["splash_id"] = '' ;
			
			$data["method"] = 'Add' ;
							
			$data['splash'] ='';
			
			$data['contentview'] = 'pagecompany/splash_form';	
			$data['company'] = $this->Company_model->getOne($com_id);
			$this->load->view('layoutcompany/main',$data);	
			
			
		}else{

			$splash_name    = $this->input->post('splash_name');
			$date_start = $this->input->post('date_start');
			$date_end = $this->input->post('date_end');
			
			$params = array('splash_name'=>$splash_name,	
							'date_start'=>$date_start,														
							'date_end'=>$date_end,							
							'cby'=>$this->session->userdata('ssfullname'),
							'udate'=> date('Y-m-d H:i:s'),
							'cdate'=> date('Y-m-d H:i:s')  );
			
			$this->db->insert('company_splash',$params);
			
			$gallery_id = $this->db->insert_id();
			
			if(isset($_FILES['picture'])&&$_FILES['picture']['size']>0){
				$filepath = "../images/splash/{$gallery_id}.jpg";
				 move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);
			}
			
			$this->session->set_flashdata('msg','Add Complete');
		
			echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";					
			
		}

	}

	public function edit($splash_id){

		$com_id = 1;
		$this->form_validation->set_rules('id','id','trim|required');			
					
		if($this->form_validation->run()==FALSE){			

			$this->session->set_flashdata('errors', validation_errors());			
			//////////////////// Menu /////////////////////////////////
				$menu_types = $this->Menu_admin_type_model->getAll();
				foreach ($menu_types as $menu_type) {
					$menu_type->menu = $this->Menu_admin_model->getAll($menu_type->menu_admin_type_id);
				}

				$data['menu_admins'] =  $menu_types;
				$menuselected = $this->input->get('menuselected');
				if($menuselected > 0){
					$data['menuselected'] =  $this->Menu_admin_model->getOne($menuselected);				
				}
				############################################################
			$data["com_id"] = $com_id ;

			$data["splash_id"] = $splash_id ;

			$data["method"] = 'Edit' ;
			$data['company'] = $this->Company_model->getOne($com_id);

			$data['contentview'] = 'pagecompany/splash_form';	
			
			$data['splash'] = $this->Company_splash_model->getOne($splash_id);
			// print_r($data['youtube']);
			// exit();

			$this->load->view('layoutcompany/main',$data);				
			
		}else{

			
			$splash_name    = $this->input->post('splash_name');
			$date_start = $this->input->post('date_start');
			$date_end = $this->input->post('date_end');			
			
			$params = array('splash_name'=>$splash_name,	
							'date_start'=>$date_start,														
							'date_end'=>$date_end,							
							'uby'=>$this->session->userdata('ssfullname'),
							'udate'=> date('Y-m-d H:i:s') );

		
			$this->db->where('splash_id', $splash_id);
			$this->db->update('company_splash',$params);
			
		
			if(isset($_FILES['picture'])&&$_FILES['picture']['size']>0){
				$filepath = "../images/splash/{$splash_id}.jpg";
				move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);
			}
				

			$this->session->set_flashdata('msg','Edit Complete');
		

			echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";		
			
		}
	}

	public function delete($splash_id){


		$this->db->where('splash_id',$splash_id);
		$this->db->delete('company_splash');

		$filepath = "../images/splash/{$splash_id}.jpg";
		if(is_file($filepath)){
			unlink($filepath);
		}


		$this->session->set_flashdata('msg','Delete Complete');

		echo "<script>alert('deleted');window.opener.location.reload();window.close();</script>";	
	}
	
}
 

?>