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
		
			$this->form_validation->set_rules('aboutus_th','aboutus_th','trim|required');
		
			if($this->form_validation->run()==FALSE){
				//if($this->input->post('username')){

				$this->session->set_flashdata('errors', validation_errors());
								
				$data["banner_id"] = '' ;

				$data['company'] = $this->Company_model->getOne($com_id);				
				
				$data["method"] = 'Add' ;
								
				$data['banner'] ='';
				
				$data['config'] = $this->Config_model->getOne(1);

				$data['contentview'] = "pages/index";

				$this->load->view('layout/main',$data);
				
				
			}else{

				$aboutus_en = ($this->input->post('aboutus_en'));
				$aboutus_th = ($this->input->post('aboutus_th'));
				
				$params = array('aboutus_en'=>$aboutus_en,	
								'aboutus_th'=>$aboutus_th);

				$this->db->where('id',1);
				$this->db->update('config',$params);

				redirect('Home');
				
			}
	}



}

?>