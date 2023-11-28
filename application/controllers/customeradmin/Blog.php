<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {


	function __construct(){
						
		parent::__construct();
	
		$this->load->model('customeradmin/Blog_model');
	}

	public function index(){

		$data = array();		
		
		$data['blogs'] = $this->Blog_model->getAll();
		
		$data['contentview']  = 'pages/blog_show';

		$this->load->view('layout/main',$data);
	}

	public function add(){
		
		// foreach ($_REQUEST as $key => $value) {
		// 	echo "\$$key = \$this->input->post('$key');<br>";
		// 	//echo "'$key'=>\$$key,	<br>";
		// }
		// exit();

		$this->form_validation->set_rules('title_en','blog name EN','trim|required');	
		$this->form_validation->set_rules('title_th','blog name TH','trim|required');	
	
		if($this->form_validation->run()==FALSE){
			//if($this->input->post('username')){

			$this->session->set_flashdata('errors', validation_errors());				
			

			$data["blog_id"] = '' ;
			
			$data["method"] = 'Add' ;
							
			$data['blog'] ='';
			
			$data['contentview'] = 'pages/blog_form';	
			
			$this->load->view('layout/main',$data);	
			
			
		}else{

			$title_en = $this->input->post('title_en');
			$title_th = $this->input->post('title_th');
			$is_active = $this->input->post('is_active');
			$detail_en = $this->input->post('detail_en');
			$detail_th = $this->input->post('detail_th');
			
			$params = array(						
							'title_en'=>$title_en,	
							'title_th'=>$title_th,	
							'detail_th'=>$detail_th,	
							'detail_en'=>$detail_en,	
							'is_active'=>$is_active,							
							'cby'=>$this->session->userdata('ssfullname'),
							'uby'=>$this->session->userdata('ssfullname'),
							'cdate'=> date('Y-m-d H:i:s'),
							'udate'=> date('Y-m-d H:i:s') );
				
			$this->db->insert('blog',$params);				
			
			$blog_id = $this->db->insert_id();

			if(isset($_FILES['picture_s'])&&$_FILES['picture_s']['size']>0){
				$filepath = "../images/blog/blog{$blog_id}_s.jpg";
				move_uploaded_file($_FILES['picture_s']['tmp_name'], $filepath);
			}
			if(isset($_FILES['picture_l'])&&$_FILES['picture_l']['size']>0){
				$filepath = "../images/blog/blog{$blog_id}_l.jpg";
				move_uploaded_file($_FILES['picture_l']['tmp_name'], $filepath);
			}

			$this->session->set_flashdata('msg','Add Complete');
			
			echo "<script>window.opener.location.reload();window.close();</script>";					
			
		}

	}

	public function edit($blog_id){

		$this->form_validation->set_rules('title_en','blog name EN','trim|required');	
		$this->form_validation->set_rules('title_th','blog name TH','trim|required');	
					
		if($this->form_validation->run()==FALSE){			

			$this->session->set_flashdata('errors', validation_errors());		
			
			

			$data["blog_id"] = $blog_id ;

			$data["method"] = 'Edit' ;
						
			$data['contentview'] = 'pages/blog_form';	

			$data['blog'] = $this->Blog_model->getOne($blog_id);
			// print_r($data['blog']);
			// exit();

			$this->load->view('layout/main',$data);				
			
		}else{

			
			$title_en = $this->input->post('title_en');
			$title_th = $this->input->post('title_th');
			$is_active = $this->input->post('is_active');
			$detail_en = $this->input->post('detail_en');
			$detail_th = $this->input->post('detail_th');
			
			$params = array(						
							'title_en'=>$title_en,	
							'title_th'=>$title_th,	
							'detail_th'=>$detail_th,	
							'detail_en'=>$detail_en,	
							'is_active'=>$is_active,														
							'uby'=>$this->session->userdata('ssfullname'),							
							'udate'=> date('Y-m-d H:i:s') );
		
			$this->db->where('blog_id', $blog_id);
			$this->db->update('blog',$params);
			
		
			if(isset($_FILES['picture_s'])&&$_FILES['picture_s']['size']>0){
				$filepath = "../images/blog/blog{$blog_id}_s.jpg";
				move_uploaded_file($_FILES['picture_s']['tmp_name'], $filepath);
			}
			
			if(isset($_FILES['picture_l'])&&$_FILES['picture_l']['size']>0){
				$filepath = "../images/blog/blog{$blog_id}_l.jpg";
				move_uploaded_file($_FILES['picture_l']['tmp_name'], $filepath);
			}

			$this->session->set_flashdata('msg','Edit Complete');
		

			echo "<script>window.opener.location.reload();window.close();</script>";		
			
		}
	}

	public function delete($blog_id){
		
		

		$filepath = "../images/blog/blog{$blog_id}_s.jpg";
		if(is_file($filepath)){
			unlink($filepath);
		}
		
		$filepath = "../images/blog/blog{$blog_id}_l.jpg";
		if(is_file($filepath)){
			unlink($filepath);
		}
		

		$this->db->where('blog_id',$blog_id);
		$this->db->delete('blog');


		$this->session->set_flashdata('msg','Delete Complete');

		echo "<script>window.opener.location.reload();window.close();</script>";	
	}
	
}
 

?>