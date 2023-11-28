<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
			
		parent::__construct();
		$this->load->model('Admin_model');	
		$this->load->model('Config_model');	

	}

	public function index()
	{
		
		if(ENVIRONMENT=='production'){			
			if($_SERVER['HTTPS']!='on'){
				header("location:https://www.brandexdirectory.com/admin/");
				exit();
			}		
		}

			$this->form_validation->set_rules('aboutus_th','aboutus_th','trim|required');
		
			if($this->form_validation->run()==FALSE){
				//if($this->input->post('username')){

				$this->session->set_flashdata('errors', validation_errors());
								
				$data["banner_id"] = '' ;
				
				$data["method"] = 'Add' ;
								
				$data['banner'] ='';
				
				$data['config'] = $this->Config_model->getOne(1);

				$data['contentview'] = "pages/index";

				$this->load->view('layout/main',$data);
				
				
			}else{

				$aboutus_en = ($this->input->post('aboutus_en'));
				$aboutus_th = ($this->input->post('aboutus_th'));
				$request_en = ($this->input->post('request_en'));
				$request_th = ($this->input->post('request_th'));
				$qa_en = ($this->input->post('qa_en'));
				$qa_th = ($this->input->post('qa_th'));
				$webtheme_en = ($this->input->post('webtheme_en'));
				$webtheme_th = ($this->input->post('webtheme_th'));
				$ar_en = ($this->input->post('ar_en'));
				$ar_th = ($this->input->post('ar_th'));
				
				$params = array('aboutus_en'=>$aboutus_en,	
								'aboutus_th'=>$aboutus_th,
								'request_en'=>$request_en,
								'request_th'=>$request_th,
								'qa_en'=>$qa_en,
								'qa_th'=>$qa_th,
								'webtheme_en'=>$webtheme_en,
								'webtheme_th'=>$webtheme_th,
								'ar_en'=>$ar_en,
								'ar_th'=>$ar_th,
							);

				$this->db->where('id',1);
				$this->db->update('config',$params);

				redirect('Home');
				
			}
	}



}

?>