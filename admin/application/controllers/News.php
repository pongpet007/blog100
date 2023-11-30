<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {


	function __construct(){
						
		parent::__construct();
	
		$this->load->model('News_type_model');		
		$this->load->model('News_model');		
	}

	public function index(){

		$data = array();
		$search = array();
		$news_type = $this->input->get('news_type');		
		$search['news_type'] = $news_type ;  

		$data['search'] = $search;

		$news_types= $this->News_type_model->getAll();		
		$arr = array('0'=>' -- News Type -- ');
		foreach ($news_types as $key => $value) {
			$arr[$value->news_type_id] = $value->news_type_name_en;
		}
		$data['news_types'] = $arr ;

		$data['newss'] = $this->News_model->getAll(0,$search);
		$data['news'] = '';
		$data['contentview']  = 'pages/news_show';
		//print_r($data);

		$this->load->view('layout/main',$data);
	}

	public function add(){
		
			// foreach ($_REQUEST as $key => $value) {
			// 	//echo "\$$key = \$this->input->post('$key');<br>";
			// 	echo "'$key'=>\$$key,	<br>";
			// }
			// exit();

			$this->form_validation->set_rules('news_title','Title en','trim|required');
			$this->form_validation->set_rules('news_title_th','Title th','trim|required');		
		
			if($this->form_validation->run()==FALSE){
				//if($this->input->post('username')){

				$this->session->set_flashdata('errors', validation_errors());				
				
				$news_types= $this->News_type_model->getAll();		
				$arr = array('0'=>' -- News Type -- ');
				foreach ($news_types as $key => $value) {
					$arr[$value->news_type_id] = $value->news_type_name_en;
				}
				$data['news_types'] = $arr ;


				$data["news_id"] = '' ;
				
				$data["method"] = 'Add' ;
								
				$data['news'] ='';
				
				$data['contentview'] = 'pages/news_form';	
				
				$this->load->view('layout/main',$data);	
				
				
			}else{

				$news_from = $this->input->post('news_from');
				$news_to = $this->input->post('news_to');
				$news_url = $this->input->post('news_url');
				$news_title = $this->input->post('news_title');
				$news_title_th = $this->input->post('news_title_th');
				$news_desc = $this->input->post('news_desc');
				$news_desc_th = $this->input->post('news_desc_th');
				$news_type_id = $this->input->post('news_type_id');
				$is_active = $this->input->post('is_active');
				
				$params = array(
								'news_from'=>$news_from,	
								'news_to'=>$news_to,	
								'news_url'=>$news_url,	
								'news_title'=>$news_title,	
								'news_title_th'=>$news_title_th,
								'news_desc'=>$news_desc,
								'news_desc_th'=>$news_desc_th,
								'news_type_id'=>$news_type_id,
								'is_active'=>$is_active,									
								'cby'=>$this->session->userdata('ssfullname'),
								'cdate'=> date('Y-m-d H:i:s'),
								'udate'=> date('Y-m-d H:i:s')
								 );

				
				$this->db->insert('news',$params);
				
				$news_id = $this->db->insert_id();
				
				if(isset($_FILES['picture'])&&$_FILES['picture']['size']>0){
					$filepath = "../images/news/news{$news_id}_title.jpg";
					 move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);
				}

				if(isset($_FILES['picture2'])&&$_FILES['picture2']['size']>0){
					$filepath = "../images/news/news{$news_id}_1.jpg";
					 move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);
				}
				$this->session->set_flashdata('msg','Add Complete');
			
				echo "<script>window.opener.location.reload();window.close();</script>";					
				
			}

	}

	public function edit($news_id){

		$this->form_validation->set_rules('news_title','Title en','trim|required');
		$this->form_validation->set_rules('news_title_th','Title th','trim|required');		
					
		if($this->form_validation->run()==FALSE){			

			$this->session->set_flashdata('errors', validation_errors());		
			
			$news_types= $this->News_type_model->getAll();		
			$arr = array('0'=>' -- News Type -- ');
			foreach ($news_types as $key => $value) {
				$arr[$value->news_type_id] = $value->news_type_name_en;
			}
			$data['news_types'] = $arr ;

			$data["news_id"] = $news_id ;

			$data["method"] = 'Edit' ;
						
			$data['contentview'] = 'pages/news_form';	

			$data['news'] = $this->News_model->getOne($news_id);
			

			$this->load->view('layout/main',$data);				
			
		}else{

			
			$news_from = $this->input->post('news_from');
			$news_to = $this->input->post('news_to');
			$news_url = $this->input->post('news_url');
			$news_title = $this->input->post('news_title');
			$news_title_th = $this->input->post('news_title_th');
			$news_desc = $this->input->post('news_desc');
			$news_desc_th = $this->input->post('news_desc_th');
			$news_type_id = $this->input->post('news_type_id');
			$is_active = $this->input->post('is_active');
			
			$params = array(
							'news_from'=>$news_from,	
							'news_to'=>$news_to,	
							'news_url'=>$news_url,	
							'news_title'=>$news_title,	
							'news_title_th'=>$news_title_th,
							'news_desc'=>$news_desc,
							'news_desc_th'=>$news_desc_th,
							'news_type_id'=>$news_type_id,
							'is_active'=>$is_active,									
							'uby'=>$this->session->userdata('ssfullname'),							
							'udate'=> date('Y-m-d H:i:s')
							 );


		
			$this->db->where('news_id', $news_id);
			$this->db->update('news',$params);
			
		
			if(isset($_FILES['picture'])&&$_FILES['picture']['size']>0){
				$filepath = "../images/news/news{$news_id}_title.jpg";
				 move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);
			}

			if(isset($_FILES['picture2'])&&$_FILES['picture2']['size']>0){
				$filepath = "../images/news/news{$news_id}_1.jpg";
				 move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);
			}
				

			$this->session->set_flashdata('msg','Edit Complete');
		

			echo "<script>window.opener.location.reload();window.close();</script>";		
			
		}
	}

	public function delete($news_id){
		
		$this->db->where('news_id',$news_id);
		$this->db->delete('news');

		$filepath = "../images/news/news{$news_id}_title.jpg";
		if(is_file($filepath)){
			unlink($filepath);
		}

		$filepath = "../images/news/news{$news_id}_1.jpg";
		if(is_file($filepath)){
			unlink($filepath);
		}
		$this->session->set_flashdata('msg','Delete Complete');

		echo "<script>window.opener.location.reload();window.close();</script>";	
	}
	
}
 

?>