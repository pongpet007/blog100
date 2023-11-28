<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exhibition extends CI_Controller {


	function __construct(){
						
		parent::__construct();
	
		$this->load->model('Exhibittion_model');
	}

	public function index(){


		$position = $this->input->get('position');

		$data = array();		
		
		$data['contentview']  = 'pages/sponsor-show';
		
		$data['position'] =  $position;

		$data['exhibittion'] = $this->Exhibittion_model->getAll();

		//echo $this->db->last_query();
		//exit();

		$this->load->view('layout/main',$data);	
	}

	public function add(){
		
			// foreach ($_REQUEST as $key => $value) {
			// 	//echo "\$$key = \$this->input->post('$key');<br>";
			// 	echo "'$key'=>\$$key,	<br>";
			// }
			// exit();

			$this->form_validation->set_rules('expire','expire','trim|required');
			$this->form_validation->set_rules('expire','expire','trim|required');

			if($this->form_validation->run()==FALSE){
				//if($this->input->post('username')){

				$this->session->set_flashdata('errors', validation_errors());
								
				$data["ban_id"] = '' ;
				
				$data["method"] = 'Add' ;
								
				$data['exhibition'] ='';
				
				$data['contentview'] = 'pages/sponsor-form';	
				
				$this->load->view('layout/main',$data);	
				
				
			}else{

				$text = $this->input->post('ban_text');
				$url = $this->input->post('ban_url');
				$expire = $this->input->post('expire');
				$status = $this->input->post('status');
				$start_date = $this->input->post('start_date');
				$end_date = $this->input->post('end_date');
				$status = $this->input->post('status');
				$params = array('ban_text'=>$text,	
								'ban_url'=>$url,																
								'expire'=>$expire,																
								'ban_showhide'=>$status,
								'start_date' => $start_date,
								'end_date' => $end_date,																
								'ban_type'=>7,																
								'udate'=> date('Y-m-d H:i:s') );

				
				$this->db->insert('exhibition',$params);
				
				$ban_id = $this->db->insert_id();
				
				if(isset($_FILES['picture'])&&$_FILES['picture']['size']>0){
					$filepath = "../assets/images/exhibition/banner{$ban_id}.gif";
					 move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);
				}
				
				$this->session->set_flashdata('msg','Add Complete');
			
				echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";					
				
			}

	}

	public function edit($ban_id){

		$this->form_validation->set_rules('expire','expire','trim|required');			
					
		if($this->form_validation->run()==FALSE){			

			$this->session->set_flashdata('errors', validation_errors());			
						

			$data["ban_id"] = $ban_id ;

			$data["method"] = 'Edit' ;
						
			$data['contentview'] = 'pages/sponsor-form';	

			$data['exhibition'] = $this->Exhibittion_model->getOne($ban_id);
			// print_r($data['banner']);
			// exit();

			$this->load->view('layout/main',$data);				
			
		}else{

			
			$text = $this->input->post('ban_text');
			$url = $this->input->post('ban_url');
			$expire = $this->input->post('expire');
			$status = $this->input->post('status');
			$start_date = $this->input->post('start_date');
			$end_date = $this->input->post('end_date');
			$status = $this->input->post('status');
			
			$params = array('ban_text'=>$text,	
								'ban_url'=>$url,																
								'expire'=>$expire,		
								'start_date ' => $start_date,
								'end_date' => $end_date,														
								'ban_showhide'=>$status,																
								'ban_type'=>7,																
								'udate'=> date('Y-m-d H:i:s') );

		
			$this->db->where('ban_id', $ban_id);
			$this->db->update('exhibition',$params);
			
		
			if(isset($_FILES['picture'])&&$_FILES['picture']['size']>0){
				$filepath = "../assets/images/exhibition/banner{$ban_id}.gif";
				move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);
			}
				

			$this->session->set_flashdata('msg','Edit Complete');
		

			echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";		
			
		}
	}

	public function delete($ban_id){
		

		$filepath = "assets/images/exhibition/banner{$ban_id->ban_id}.gif";
		if(is_file($filepath)){
			unlink($filepath);
		}
		
		$this->db->where('ban_id',$ban_id);
		$this->db->delete('exhibition');

		$this->session->set_flashdata('msg','Delete Complete');

		echo "<script>alert('deleted');window.opener.location.reload();window.close();</script>";	
	}
	
}
 

?>