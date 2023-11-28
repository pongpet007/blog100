<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Youtube extends CI_Controller {

	public function __construct(){
			
		parent::__construct();
			
		$this->load->model('Admin_model');
		$this->load->model('Company_youtube_model');
	}

	
	public function index(){
		$data = array();
		
		$data['youtubes'] = $this->Company_youtube_model->getAll();

		$data['contentview']  = 'pages/youtube_show';
		

		$this->load->view('layout/main',$data);
	}

	public function add(){		
			
			$this->form_validation->set_rules('title_en','Title EN','trim|required');			
						
			if($this->form_validation->run()==FALSE){

				$this->session->set_flashdata('errors', validation_errors());
				
				
				$data["id"] = '' ;
				$data["method"] = 'Add' ;				
				$data['youtube'] ='';
				$data['contentview'] = 'pages/youtube_form';	
								
				$this->load->view('layout/main',$data);					
				
			}else{

				$title_en = $this->input->post('title_en');
				$title_th = $this->input->post('title_th');
				$youtube_url = $this->input->post('url');
				$is_active = $this->input->post('is_active');
				
				if(preg_match('/v=/',$youtube_url)){
					preg_match('/v=([0-9a-zA-Z\-_]+)/', $youtube_url, $matches);
					$vid = $matches[1];
					$youtube_url = 'https://www.youtube.com/embed/'.$vid;
				}
			
				$params = array('url'=>$youtube_url,	
								'title_en'=>$title_en,																
								'title_th'=>$title_th,																
								'is_active'=>$is_active,																
								'com_id'=> 0 ,																
								'cby'=>$this->session->userdata('ssfullname'),
								'udate'=> date('Y-m-d H:i:s'),
								'cdate'=> date('Y-m-d H:i:s')  );

				
				$this->db->insert('company_youtube',$params);
				
				$youtube_id = $this->db->insert_id();
				
				if(isset($_FILES['picture'])&&$_FILES['picture']['size']>0){
					$filepath = "../images/youtube/{$youtube_id}.jpg";
					 move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);
				}
				

				$this->session->set_flashdata('msg','Add Complete');
			
				echo "<script>window.opener.location.reload();window.close();</script>";
			}

	}

	public function edit($youtube_id){

		$this->form_validation->set_rules('title_en','Directory EN','trim|required');
					
		if($this->form_validation->run()==FALSE){			

			$this->session->set_flashdata('errors', validation_errors());			
			
			$data["id"] = $youtube_id ;
			$data["method"] = 'Edit' ;			
			

			$data['contentview'] = 'pages/youtube_form';	
			$data['youtube'] = $this->Company_youtube_model->getOne($youtube_id);

			$this->load->view('layout/main',$data);				
			
		}else{

			
			$title_en = $this->input->post('title_en');
			$title_th = $this->input->post('title_th');
			$youtube_url = $this->input->post('url');
			$is_active = $this->input->post('is_active');
			
			if(preg_match('/v=/',$youtube_url)){
				preg_match('/v=([0-9a-zA-Z\-_]+)/', $youtube_url, $matches);
				$vid = $matches[1];
				$youtube_url = 'https://www.youtube.com/embed/'.$vid;
			}

			
			$params = array('url'=>$youtube_url,	
							'title_en'=>$title_en,	
							'title_th'=>$title_th,								
							'is_active'=>$is_active,								
							'uby'=>$this->session->userdata('ssfullname'),
							'udate'=> date('Y-m-d H:i:s') );

		
			$this->db->where('youtube_id', $youtube_id);
			$this->db->update('company_youtube',$params);
			
		
			if(isset($_FILES['picture'])&&$_FILES['picture']['size']>0){
				$filepath = "../images/youtube/{$youtube_id}.jpg";
				move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);
			}
				
			$this->session->set_flashdata('msg','Edit Complete');
		

			echo "<script>window.opener.location.reload();window.close();</script>";
			
		}
	}

	public function delete($youtube_id){
		
		$this->db->where('youtube_id',$youtube_id);
		$this->db->delete('company_youtube');

		$filepath = "../images/youtube/{$youtube_id}.jpg";
		if(is_file($filepath)){
			unurl($filepath);
		}

		$this->session->set_flashdata('msg','Delete Complete');

		echo "<script>window.opener.location.reload();window.close();</script>";
	}

}