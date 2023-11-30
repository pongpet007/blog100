<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slide extends CI_Controller {

	public function __construct(){
			
		parent::__construct();
		$this->load->model('Slide_model');	

	}

	public function index()
	{

		$data['slides'] = $this->Slide_model->getAll();

		$data['contentview'] = "pages/slide_show";

		$this->load->view('layout/main',$data);
	}

	public function add(){
		
			// foreach ($_REQUEST as $key => $value) {
			// 	//echo "\$$key = \$this->input->post('$key');<br>";
			// 	echo "'$key'=>\$$key,	<br>";
			// }
			// exit();

			$this->form_validation->set_rules('is_active','is active','trim|required');			
						
			if($this->form_validation->run()==FALSE){
				//if($this->input->post('username')){

				$this->session->set_flashdata('errors', validation_errors());
				
				
				$data["id"] = '' ;
				$data["method"] = 'Add' ;
				
				$data['slide'] ='';
				$data['contentview'] = 'pages/slide_form';	
				
				
				// print_r($arr);
				// exit();
				
				$this->load->view('layout/main',$data);	
				
				
			}else{		

				$link = $this->input->post('link');
				$is_active = $this->input->post('is_active');
				
				$params = array('link'=>$link,	
								'is_active'=>$is_active,																
								'com_id'=>0,																
								'cby'=>$this->session->userdata('ssfullname'),
								'cdate'=> date('Y-m-d H:i:s') );

				
				$this->db->insert('slide',$params);
				
				$slide_id = $this->db->insert_id();
				
				if(isset($_FILES['picture'])&&$_FILES['picture']['size']>0){
					$filepath = "../assets/images/slide/{$slide_id}.jpg";
					 move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);
				}
				
				$this->session->set_flashdata('msg','Add Complete');
			
				echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";
			}

	}

	public function edit($id){

		$this->form_validation->set_rules('is_active','is active','trim|required');			

		if($this->form_validation->run()==FALSE){			

			$this->session->set_flashdata('errors', validation_errors());			
			
			$data["id"] = $id ;
			$data["method"] = 'edit' ;
			
			
			$data['contentview'] = 'pages/slide_form';	
			$data['slide'] = $this->Slide_model->getOne($id);

			$this->load->view('layout/main',$data);				
			
		}else{

			
			$link = $this->input->post('link');
			$is_active = $this->input->post('is_active');
			
			
			$params = array('link'=>$link,	
							'is_active'=>$is_active,								
							'uby'=>$this->session->userdata('ssfullname'),
							'udate'=> date('Y-m-d H:i:s') );

		
			$this->db->where('slide_id', $id);
			$this->db->update('slide',$params);
			
			$slide_id = $id;

			if(isset($_FILES['picture'])&&$_FILES['picture']['size']>0){
				$filepath = "../assets/images/slide/{$slide_id}.jpg";
				move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);
			}
				

			$this->session->set_flashdata('msg','Edit Complete');
		

			echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";
			
		}
	}

	public function delete($id){
		$this->db->where('slide_id',$id);
		$this->db->delete('slide');

		$filepath = "../assets/images/slide/{$id}.jpg";
		if(is_file($filepath))
			unlink($filepath);
		
		$this->session->set_flashdata('msg','Delete Complete');

		echo "<script>alert('Deleted');window.opener.location.reload();window.close();</script>";
	}
}

?>