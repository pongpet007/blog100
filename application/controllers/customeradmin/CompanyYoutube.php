<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   
   class CompanyYoutube extends CI_Controller {
   
   
   	function __construct(){
   
   		parent::__construct();
   
   		$this->load->model('customeradmin/Company_youtube_model');
   	}
   
   	public function index($com_id){
   
   		$data = array();
   		$data["com_id"] = $com_id ;
   		$data['contentview']  = 'pagecompany/youtube_show';
   
   		$data['youtubes'] = $this->Company_youtube_model->getAll($com_id);
   
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
   
   				$data["youtube_id"] = '' ;
   
   				$data["method"] = 'Add' ;
   
   				$data['youtube'] ='';
   
   				$data['contentview'] = 'pagecompany/youtube_form';
   
   				$this->load->view('layoutcompany/main',$data);
   
   
   			}else{
   
   				$youtube_url = $this->input->post('url');
   				$is_active = $this->input->post('is_active');
   
   				if(preg_match('/v=/',$youtube_url)){
   					preg_match('/v=([0-9a-zA-Z\-\_\=]+)/', $youtube_url, $matches);
   					$vid = $matches[1];
   					$youtube_url = 'https://www.youtube.com/embed/'.$vid;
   				}
   
   				$params = array('url'=>$youtube_url,
   								'is_active'=>$is_active,
   								'com_id'=>$com_id,
   								'cby'=>$this->session->userdata('ssfullname'),
   								'cdate'=> date('Y-m-d H:i:s') );
   
   
   				$this->db->insert('company_youtube',$params);
   
   				$youtube_id = $this->db->insert_id();
   
   				if(isset($_FILES['picture'])&&$_FILES['picture']['size']>0){
   					$filepath = "../assets/images/youtube/{$youtube_id}.jpg";
   					 move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);
   				}
   
   				$this->session->set_flashdata('msg','Add Complete');
   
   				echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";
   
   			}
   
   	}
   
   	public function edit($com_id,$youtube_id){
   
   		$this->form_validation->set_rules('id','id','trim|required');
   
   		if($this->form_validation->run()==FALSE){
   
   			$this->session->set_flashdata('errors', validation_errors());
   
   			$data["com_id"] = $com_id ;
   
   			$data["youtube_id"] = $youtube_id ;
   
   			$data["method"] = 'Edit' ;
   
   			$data['contentview'] = 'pagecompany/youtube_form';
   
   			$data['youtube'] = $this->Company_youtube_model->getOne($youtube_id);
   			// print_r($data['youtube']);
   			// exit();
   
   			$this->load->view('layoutcompany/main',$data);
   
   		}else{
   
   
   			$youtube_url = $this->input->post('url');
   			$is_active = $this->input->post('is_active');
   
   			if(preg_match('/v=/',$youtube_url)){
   				preg_match('/v=([0-9a-zA-Z\-]+)/', $youtube_url, $matches);
   				$vid = $matches[1];
   				$youtube_url = 'https://www.youtube.com/embed/'.$vid;
   			}
   
   
   			$params = array('url'=>$youtube_url,
   							'is_active'=>$is_active,
   							'uby'=>$this->session->userdata('ssfullname'),
   							'udate'=> date('Y-m-d H:i:s') );
   
   
   			$this->db->where('youtube_id', $youtube_id);
   			$this->db->update('company_youtube',$params);
   
   
   			if(isset($_FILES['picture'])&&$_FILES['picture']['size']>0){
   				$filepath = "../assets/images/youtube/{$youtube_id}.jpg";
   				move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);
   			}
   
   
   			$this->session->set_flashdata('msg','Edit Complete');
   
   
   			echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";
   
   		}
   	}
   
   	public function delete($com_id,$youtube_id){
   		$this->db->where('youtube_id',$youtube_id);
   		$this->db->delete('company_youtube');
   
   		$filepath = "../assets/images/youtube/{$youtube_id}.jpg";
   		if(is_file($filepath)){
   			unurl($filepath);
   		}
   		$this->session->set_flashdata('msg','Delete Complete');
   
   		echo "<script>alert('deleted');window.opener.location.reload();window.close();</script>";
   	}
   
   }
   
   
   ?>