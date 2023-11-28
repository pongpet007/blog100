<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function __construct(){
			
		parent::__construct();
			
		$this->load->model('Admin_model');
		$this->load->model('Page_model');
	}

	
	public function index(){
		$data = array();
		
		$data['pages'] = $this->Page_model->getAll();

		$data['contentview']  = 'pages/page_show';
		

		$this->load->view('layout/main',$data);
	}

	public function add(){
		
			
			$this->form_validation->set_rules('title_en','Directory EN','trim|required');
			
						
			if($this->form_validation->run()==FALSE){
				//if($this->input->post('username')){

				$this->session->set_flashdata('errors', validation_errors());
				
				
				$data["id"] = '' ;
				$data["method"] = 'Add' ;
				
				$data['page'] ='';
				$data['contentview'] = 'pages/page_form';	
				
				
				// print_r($arr);
				// exit();
				
				$this->load->view('layout/main',$data);	
				
				
			}else{

						

			$url_display = $this->input->post('url_display');
			$title_en = $this->input->post('title_en');
			$title_th = $this->input->post('title_th');
			$keyword = $this->input->post('keyword');
			$description = $this->input->post('description');
			$content_en = $this->input->post('content_en');
			$content_th = $this->input->post('content_th');				
		
			
			$params = array('url_display'=>$url_display,	
							'title_en'=>$title_en,	
							'title_th'=>$title_th,	
							'keyword'=>$keyword,	
							'description'=>$description,	
							'content_en'=>$content_en,	
							'content_th'=>$content_th,									
							'cdate'=> date('Y-m-d H:i:s'),
							'udate'=> date('Y-m-d H:i:s')
							 );


				
				$this->db->insert('page',$params);				

				$this->session->set_flashdata('msg','Add Complete');
			
				echo "<script>window.opener.location.reload();window.close();</script>";
			}

	}

	public function edit($id){

		$this->form_validation->set_rules('title_en','Directory EN','trim|required');
					
		if($this->form_validation->run()==FALSE){			

			$this->session->set_flashdata('errors', validation_errors());			
			
			$data["id"] = $id ;
			$data["method"] = 'Edit' ;			
			

			$data['contentview'] = 'pages/page_form';	
			$data['page'] = $this->Page_model->getOne($id);

			$this->load->view('layout/main',$data);				
			
		}else{

			
			$url_display = $this->input->post('url_display');
			$title_en = $this->input->post('title_en');
			$title_th = $this->input->post('title_th');
			$keyword = $this->input->post('keyword');
			$description = $this->input->post('description');
			$content_en = $this->input->post('content_en');
			$content_th = $this->input->post('content_th');				
		
			
			$params = array('url_display'=>$url_display,	
							'title_en'=>$title_en,	
							'title_th'=>$title_th,	
							'keyword'=>$keyword,	
							'description'=>$description,	
							'content_en'=>$content_en,	
							'content_th'=>$content_th,		
							'udate'=> date('Y-m-d H:i:s')
							 );

		
			$this->db->where('page_id', $id);
			$this->db->update('page',$params);
						
			$this->session->set_flashdata('msg','Edit Complete');
		

			echo "<script>window.opener.location.reload();window.close();</script>";
			
		}
	}

	public function delete($id){
		
		$this->db->where('page_id',$id);
		$this->db->delete('page');
		
	

		$this->session->set_flashdata('msg','Delete Complete');

		echo "<script>window.opener.location.reload();window.close();</script>";
	}

}