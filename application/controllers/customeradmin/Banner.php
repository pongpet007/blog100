<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends CI_Controller {


	function __construct(){
						
		parent::__construct();
	
		$this->load->model('Banner_model');
	}

	public function index(){

		$position = $this->input->get('position');

		$data = array();		
		
		$data['contentview']  = 'pages/banner_show';
		
		$data['position'] =  $position;

		$data['banners'] = $this->Banner_model->getByPosition($position);

		$this->load->view('layout/main',$data);
	}

	public function add(){
		
			// foreach ($_REQUEST as $key => $value) {
			// 	//echo "\$$key = \$this->input->post('$key');<br>";
			// 	echo "'$key'=>\$$key,	<br>";
			// }
			// exit();

			$this->form_validation->set_rules('expire','expire','trim|required');
		
			if($this->form_validation->run()==FALSE){
				//if($this->input->post('username')){

				$this->session->set_flashdata('errors', validation_errors());
								
				$data["banner_id"] = '' ;
				
				$data["method"] = 'Add' ;
								
				$data['banner'] ='';
				
				$data['contentview'] = 'pages/banner_form';	
				
				$this->load->view('layout/main',$data);	
				
				
			}else{

				$link = $this->input->post('link');
				$position = $this->input->post('position');
				$expire = $this->input->post('expire');
				$is_active = $this->input->post('is_active');
				
				$params = array('link'=>$link,	
								'position'=>$position,																
								'expire'=>$expire,																
								'is_active'=>$is_active,																
								'com_id'=>0,																
								'cby'=>$this->session->userdata('ssfullname'),
								'cdate'=> date('Y-m-d H:i:s') );

				
				$this->db->insert('banner',$params);
				
				$banner_id = $this->db->insert_id();
				
				if(isset($_FILES['picture'])&&$_FILES['picture']['size']>0){
					$filepath = "../assets/images/banner/{$banner_id}.jpg";
					 move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);
				}
				
				$this->session->set_flashdata('msg','Add Complete');
			
				echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";					
				
			}

	}

	public function edit($banner_id){

		$this->form_validation->set_rules('expire','expire','trim|required');			
					
		if($this->form_validation->run()==FALSE){			

			$this->session->set_flashdata('errors', validation_errors());			
						

			$data["banner_id"] = $banner_id ;

			$data["method"] = 'Edit' ;
						
			$data['contentview'] = 'pages/banner_form';	

			$data['banner'] = $this->Banner_model->getOne($banner_id);
			// print_r($data['banner']);
			// exit();

			$this->load->view('layout/main',$data);				
			
		}else{

			
			$link = $this->input->post('link');
			$position = $this->input->post('position');
			$expire = $this->input->post('expire');
			$is_active = $this->input->post('is_active');
			
			
			$params = array('link'=>$link,	
							'position'=>$position,								
							'expire'=>$expire,								
							'is_active'=>$is_active,								
							'uby'=>$this->session->userdata('ssfullname'),
							'udate'=> date('Y-m-d H:i:s') );

		
			$this->db->where('banner_id', $banner_id);
			$this->db->update('banner',$params);
			
		
			if(isset($_FILES['picture'])&&$_FILES['picture']['size']>0){
				$filepath = "../assets/images/banner/{$banner_id}.jpg";
				move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);
			}
				

			$this->session->set_flashdata('msg','Edit Complete');
		

			echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";		
			
		}
	}

	public function delete($banner_id){
		

		$filepath = "../assets/images/banner/{$banner_id}.jpg";
		if(is_file($filepath)){
			unlink($filepath);
		}
		
		$this->db->where('banner_id',$banner_id);
		$this->db->delete('banner');

		$this->session->set_flashdata('msg','Delete Complete');

		echo "<script>alert('deleted');window.opener.location.reload();window.close();</script>";	
	}
	
}
 

?>