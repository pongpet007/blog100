<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activities extends CI_Controller {


	function __construct(){
						
		parent::__construct();
	
		$this->load->model('Activities_model');
	}

	public function index(){

		$data = array();		
		
		$data['activitiess'] = $this->Activities_model->getAll();
		
		$data['contentview']  = 'pages/activities_show';

		$this->load->view('layout/main',$data);
	}

	public function add(){
		
			// foreach ($_REQUEST as $key => $value) {
			// 	//echo "\$$key = \$this->input->post('$key');<br>";
			// 	echo "'$key'=>\$$key,	<br>";
			// }
			// exit();

			$this->form_validation->set_rules('title_en','activities name EN','trim|required');	
		$this->form_validation->set_rules('title_th','activities name TH','trim|required');	
		
			if($this->form_validation->run()==FALSE){
				//if($this->input->post('username')){

				$this->session->set_flashdata('errors', validation_errors());				
				

				$data["activities_id"] = '' ;
				
				$data["method"] = 'Add' ;
								
				$data['activities'] ='';
				
				$data['contentview'] = 'pages/activities_form';	
				
				$this->load->view('layout/main',$data);	
				
				
			}else{

			$year = $this->input->post('year');
			$showdate_en = $this->input->post('showdate_en');
			$showdate_th = $this->input->post('showdate_th');
			$place_en = $this->input->post('place_en');
			$place_th = $this->input->post('place_th');
			$title_en = $this->input->post('title_en');
			$title_th = $this->input->post('title_th');
			$detail_th = $this->input->post('detail_th');
			$detail_en = $this->input->post('detail_en');
			$is_active = $this->input->post('is_active');
			
			$params = array(
							'year'=>$year,	
							'showdate_en'=>$showdate_en,	
							'showdate_th'=>$showdate_th,	
							'place_en'=>$place_en,	
							'place_th'=>$place_th,	
							'title_en'=>$title_en,	
							'title_th'=>$title_th,	
							'detail_th'=>$detail_th,	
							'detail_en'=>$detail_en,	
							'is_active'=>$is_active,							
							'cby'=>$this->session->userdata('ssfullname'),
							'uby'=>$this->session->userdata('ssfullname'),
							'cdate'=> date('Y-m-d H:i:s'),
							'udate'=> date('Y-m-d H:i:s') );

				
				$this->db->insert('activities',$params);
				
				$activities_id = $this->db->insert_id();
				
				if(isset($_FILES['picture_s'])&&$_FILES['picture_s']['size']>0){
				$filepath = "../images/activities/activities{$activities_id}_s.jpg";
				move_uploaded_file($_FILES['picture_s']['tmp_name'], $filepath);
			}
			if(isset($_FILES['picture_1'])&&$_FILES['picture_1']['size']>0){
				$filepath = "../images/activities/activities{$activities_id}_1.jpg";
				move_uploaded_file($_FILES['picture_1']['tmp_name'], $filepath);
			}
			if(isset($_FILES['picture_2'])&&$_FILES['picture_2']['size']>0){
				$filepath = "../images/activities/activities{$activities_id}_2.jpg";
				move_uploaded_file($_FILES['picture_2']['tmp_name'], $filepath);
			}
			if(isset($_FILES['picture_3'])&&$_FILES['picture_3']['size']>0){
				$filepath = "../images/activities/activities{$activities_id}_3.jpg";
				move_uploaded_file($_FILES['picture_3']['tmp_name'], $filepath);
			}
			if(isset($_FILES['picture_4'])&&$_FILES['picture_4']['size']>0){
				$filepath = "../images/activities/activities{$activities_id}_4.jpg";
				move_uploaded_file($_FILES['picture_4']['tmp_name'], $filepath);
			}
			if(isset($_FILES['picture_5'])&&$_FILES['picture_5']['size']>0){
				$filepath = "../images/activities/activities{$activities_id}_5.jpg";
				move_uploaded_file($_FILES['picture_5']['tmp_name'], $filepath);
			}
			if(isset($_FILES['picture_6'])&&$_FILES['picture_6']['size']>0){
				$filepath = "../images/activities/activities{$activities_id}_6.jpg";
				move_uploaded_file($_FILES['picture_6']['tmp_name'], $filepath);
			}
			if(isset($_FILES['picture_7'])&&$_FILES['picture_7']['size']>0){
				$filepath = "../images/activities/activities{$activities_id}_7.jpg";
				move_uploaded_file($_FILES['picture_7']['tmp_name'], $filepath);
			}
			if(isset($_FILES['picture_8'])&&$_FILES['picture_8']['size']>0){
				$filepath = "../images/activities/activities{$activities_id}_8.jpg";
				move_uploaded_file($_FILES['picture_8']['tmp_name'], $filepath);
			}
				
				$this->session->set_flashdata('msg','Add Complete');
			
				echo "<script>window.opener.location.reload();window.close();</script>";					
				
			}

	}

	public function edit($activities_id){

		$this->form_validation->set_rules('title_en','activities name EN','trim|required');	
		$this->form_validation->set_rules('title_th','activities name TH','trim|required');	
					
		if($this->form_validation->run()==FALSE){			

			$this->session->set_flashdata('errors', validation_errors());		
			
			

			$data["activities_id"] = $activities_id ;

			$data["method"] = 'Edit' ;
						
			$data['contentview'] = 'pages/activities_form';	

			$data['activities'] = $this->Activities_model->getOne($activities_id);
			// print_r($data['activities']);
			// exit();

			$this->load->view('layout/main',$data);				
			
		}else{

			
			$year = $this->input->post('year');
			$showdate_en = $this->input->post('showdate_en');
			$showdate_th = $this->input->post('showdate_th');
			$place_en = $this->input->post('place_en');
			$place_th = $this->input->post('place_th');
			$title_en = $this->input->post('title_en');
			$title_th = $this->input->post('title_th');
			$detail_th = $this->input->post('detail_th');
			$detail_en = $this->input->post('detail_en');
			$is_active = $this->input->post('is_active');
			
			$params = array(
							'year'=>$year,	
							'showdate_en'=>$showdate_en,	
							'showdate_th'=>$showdate_th,	
							'place_en'=>$place_en,	
							'place_th'=>$place_th,	
							'title_en'=>$title_en,	
							'title_th'=>$title_th,	
							'detail_th'=>$detail_th,	
							'detail_en'=>$detail_en,	
							'is_active'=>$is_active,	
							'uby'=>$this->session->userdata('ssfullname'),
							'udate'=> date('Y-m-d H:i:s') );

		
			$this->db->where('id', $activities_id);
			$this->db->update('activities',$params);
			
		
			if(isset($_FILES['picture_s'])&&$_FILES['picture_s']['size']>0){
				$filepath = "../images/activities/activities{$activities_id}_s.jpg";
				move_uploaded_file($_FILES['picture_s']['tmp_name'], $filepath);
			}
			if(isset($_FILES['picture_1'])&&$_FILES['picture_1']['size']>0){
				$filepath = "../images/activities/activities{$activities_id}_1.jpg";
				move_uploaded_file($_FILES['picture_1']['tmp_name'], $filepath);
			}
			if(isset($_FILES['picture_2'])&&$_FILES['picture_2']['size']>0){
				$filepath = "../images/activities/activities{$activities_id}_2.jpg";
				move_uploaded_file($_FILES['picture_2']['tmp_name'], $filepath);
			}
			if(isset($_FILES['picture_3'])&&$_FILES['picture_3']['size']>0){
				$filepath = "../images/activities/activities{$activities_id}_3.jpg";
				move_uploaded_file($_FILES['picture_3']['tmp_name'], $filepath);
			}
			if(isset($_FILES['picture_4'])&&$_FILES['picture_4']['size']>0){
				$filepath = "../images/activities/activities{$activities_id}_4.jpg";
				move_uploaded_file($_FILES['picture_4']['tmp_name'], $filepath);
			}
			if(isset($_FILES['picture_5'])&&$_FILES['picture_5']['size']>0){
				$filepath = "../images/activities/activities{$activities_id}_5.jpg";
				move_uploaded_file($_FILES['picture_5']['tmp_name'], $filepath);
			}
			if(isset($_FILES['picture_6'])&&$_FILES['picture_6']['size']>0){
				$filepath = "../images/activities/activities{$activities_id}_6.jpg";
				move_uploaded_file($_FILES['picture_6']['tmp_name'], $filepath);
			}
			if(isset($_FILES['picture_7'])&&$_FILES['picture_7']['size']>0){
				$filepath = "../images/activities/activities{$activities_id}_7.jpg";
				move_uploaded_file($_FILES['picture_7']['tmp_name'], $filepath);
			}
			if(isset($_FILES['picture_8'])&&$_FILES['picture_8']['size']>0){
				$filepath = "../images/activities/activities{$activities_id}_8.jpg";
				move_uploaded_file($_FILES['picture_8']['tmp_name'], $filepath);
			}
				

			$this->session->set_flashdata('msg','Edit Complete');
		

			echo "<script>window.opener.location.reload();window.close();</script>";		
			
		}
	}

	public function delete($activities_id){
		
		

		$filepath = "../images/activities/activities{$activities_id}_s.jpg";
		if(is_file($filepath)){
			unlink($filepath);
		}
		for($i=1;$i<=8;$i++){
			$filepath = "../images/activities/activities{$activities_id}_$i.jpg";
			if(is_file($filepath)){
				unlink($filepath);
			}
		}

		$this->db->where('id',$activities_id);
		$this->db->delete('activities');


		$this->session->set_flashdata('msg','Delete Complete');

		echo "<script>window.opener.location.reload();window.close();</script>";	
	}
	
}
 

?>