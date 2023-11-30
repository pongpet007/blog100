<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompanySlide extends CI_Controller {


	function __construct(){
						
		parent::__construct();
	
		$this->load->model('customeradmin/Slide_model');
	}

	public function index($com_id){
		$data = array();
		$data["com_id"] = $com_id ;
		$data['contentview']  = 'pagecompany/slide_show';

		$data['slides'] = $this->Slide_model->getAll($com_id);

		$this->load->view('layoutcompany/main',$data);
	}

	public function add($com_id){
		
			// foreach ($_REQUEST as $key => $value) {
			// 	//echo "\$$key = \$this->input->post('$key');<br>";
			// 	echo "'$key'=>\$$key,	<br>";
			// }
			// exit();

			$this->form_validation->set_rules('id','id','trim|required');
		
			if($this->form_validation->run()==FALSE){
				//if($this->input->post('username')){

				$this->session->set_flashdata('errors', validation_errors());
				
				$data["com_id"] = $com_id ;
				$data["slide_id"] = '' ;
				
				$data["method"] = 'Add' ;
								
				$data['slide'] ='';
				
				$data['contentview'] = 'pagecompany/slide_form';	
				
				$this->load->view('layoutcompany/main',$data);	
				
				
			}else{

				$link = $this->input->post('link');
				$is_active = $this->input->post('is_active');
				
				$params = array('link'=>$link,	
								'is_active'=>$is_active,																
								'com_id'=>$com_id,																
								'cby'=>$this->session->userdata('ssfullname'),
								'cdate'=> date('Y-m-d H:i:s') );

				
				$this->db->insert('slide',$params);
				
				$slide_id = $this->db->insert_id();
				
				if(isset($_FILES['picture'])&&$_FILES['picture']['size']>0){
					$filepath = "../assets/images/slide/{$slide_id}_1920.jpg";
					 move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);
				}

				if(isset($_FILES['picture2'])&&$_FILES['picture2']['size']>0){
					$filepath = "../assets/images/slide/{$slide_id}_768.jpg";
					 move_uploaded_file($_FILES['picture2']['tmp_name'], $filepath);
				}
				
				$this->session->set_flashdata('msg','Add Complete');
			
				echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";					
				
			}

	}

	public function edit($com_id,$slide_id){

		$this->form_validation->set_rules('id','id','trim|required');			
					
		if($this->form_validation->run()==FALSE){			

			$this->session->set_flashdata('errors', validation_errors());			
			
			$data["com_id"] = $com_id ;

			$data["slide_id"] = $slide_id ;

			$data["method"] = 'Edit' ;
						
			$data['contentview'] = 'pagecompany/slide_form';	
			$data['slide'] = $this->Slide_model->getOne($slide_id);
			// print_r($data['slide']);
			// exit();

			$this->load->view('layoutcompany/main',$data);				
			
		}else{

			
			$link = $this->input->post('link');
			$is_active = $this->input->post('is_active');
			
			
			$params = array('link'=>$link,	
							'is_active'=>$is_active,								
							'uby'=>$this->session->userdata('ssfullname'),
							'udate'=> date('Y-m-d H:i:s') );

		
			$this->db->where('slide_id', $slide_id);
			$this->db->update('slide',$params);
			
		
			if(isset($_FILES['picture'])&&$_FILES['picture']['size']>0){
				$filepath = "../assets/images/slide/{$slide_id}_1920.jpg";
				 move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);
			}

			if(isset($_FILES['picture2'])&&$_FILES['picture2']['size']>0){
				$filepath = "../assets/images/slide/{$slide_id}_768.jpg";
				 move_uploaded_file($_FILES['picture2']['tmp_name'], $filepath);
			}
				

			$this->session->set_flashdata('msg','Edit Complete');
		

			echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";		
			
		}
	}

	public function delete($com_id,$slide_id){
		$this->db->where('slide_id',$slide_id);
		$this->db->delete('slide');

		$filepath = "../assets/images/slide/{$slide_id}.jpg";
		if(is_file($filepath)){
			unlink($filepath);
		}
		$this->session->set_flashdata('msg','Delete Complete');

		echo "<script>alert('deleted');window.opener.location.reload();window.close();</script>";	
	}
	
}
 

?>