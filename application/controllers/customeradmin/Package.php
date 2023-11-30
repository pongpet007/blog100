<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Package extends CI_Controller {


	function __construct(){
						
		parent::__construct();
	
		$this->load->model('Package_model');
	}

	public function index(){

		
		$data = array();		
		
		$data['contentview']  = 'pages/package_show';		

		$data['packages'] = $this->Package_model->getAll();

		$this->load->view('layout/main',$data);
	}

	public function add(){
		
			// foreach ($_REQUEST as $key => $value) {
			// 	//echo "\$$key = \$this->input->post('$key');<br>";
			// 	echo "'$key'=>\$$key,	<br>";
			// }
			// exit();

			$this->form_validation->set_rules('name','name','trim|required');
			$this->form_validation->set_rules('price','price','trim|required');
		
			if($this->form_validation->run()==FALSE){
				//if($this->input->post('username')){

				$this->session->set_flashdata('errors', validation_errors());
								
				$data["package_id"] = '' ;
				
				$data["method"] = 'Add' ;
								
				$data['package'] ='';
				
				$data['contentview'] = 'pages/package_form';	
				
				$this->load->view('layout/main',$data);	
				
				
			}else{

				$name = $this->input->post('name');
				$price = $this->input->post('price');
			
				
				$params = array('name'=>$name,	
								'price'=>$price );

				
				$this->db->insert('package',$params);
				
				$package_id = $this->db->insert_id();
				
				if(isset($_FILES['picture'])&&$_FILES['picture']['size']>0){
					$filepath = "../assets/images/package/{$package_id}.jpg";
					 move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);
				}
				
				$this->session->set_flashdata('msg','Add Complete');
			
				echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";					
				
			}

	}

	public function edit($package_id){

		$this->form_validation->set_rules('name','name','trim|required');
		$this->form_validation->set_rules('price','price','trim|required');		
					
		if($this->form_validation->run()==FALSE){			

			$this->session->set_flashdata('errors', validation_errors());		

			$data["package_id"] = $package_id ;

			$data["method"] = 'Edit' ;
						
			$data['contentview'] = 'pages/package_form';	

			$data['package'] = $this->Package_model->getOne($package_id);
			// print_r($data['package']);
			// exit();

			$this->load->view('layout/main',$data);				
			
		}else{

			
			$name = $this->input->post('name');
			$price = $this->input->post('price');
			
			$params = array('name'=>$name,	
							'price'=>$price);

		
			$this->db->where('package_id', $package_id);
			$this->db->update('package',$params);
			
		
			if(isset($_FILES['picture'])&&$_FILES['picture']['size']>0){
				$filepath = "../assets/images/package/{$package_id}.jpg";
				move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);
			}
				

			$this->session->set_flashdata('msg','Edit Complete');
		

			echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";		
			
		}
	}

	public function delete($package_id){
		

		$filepath = "../assets/images/package/{$package_id}.jpg";
		if(is_file($filepath)){
			unlink($filepath);
		}
		
		$this->db->where('package_id',$package_id);
		$this->db->delete('package');

		$this->session->set_flashdata('msg','Delete Complete');

		echo "<script>alert('deleted');window.opener.location.reload();window.close();</script>";	
	}
	
}
 

?>