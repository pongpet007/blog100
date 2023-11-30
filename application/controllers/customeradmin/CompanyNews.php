<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompanyNews extends CI_Controller {


	function __construct(){
						
		parent::__construct();
	
		$this->load->model('customeradmin/News_model');
		$this->load->model('customeradmin/Company_model');
	}

	public function index($com_id){
		if(!isset($_SERVER['company_login_com_id']))
		{
			redirect("Store/index/$com_id");
		}
		$data = array();
		$data["com_id"] = $com_id ;

		$data['company'] = $this->Company_model->getOne($com_id);

		$data['contentview']  = 'pagecompany/news_show';

		$data['newss'] = $this->News_model->getAll($com_id);

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

				$data['company'] = $this->Company_model->getOne($com_id);

				$data["news_id"] = '' ;
				
				$data["method"] = 'Add' ;
								
				$data['news'] ='';
				
				$data['contentview'] = 'pagecompany/news_form';	
				
				$this->load->view('layoutcompany/main',$data);	
				
				
			}else{

				$news_title = $this->input->post('news_title');
				$news_title_th = $this->input->post('news_title_th');
				$news_desc = $this->input->post('news_desc');
				$news_desc_th = $this->input->post('news_desc_th');
				$is_active = $this->input->post('is_active');
				
				$params = array('news_title'=>$news_title,	
								'news_title_th'=>$news_title_th,																
								'is_active'=>$is_active,																
								'com_id'=>$com_id,																
								'cby'=>$this->session->userdata('company_login_com_name_en'),
								'cdate'=> date('Y-m-d H:i:s') );

				if($news_desc!='')
					$params['news_desc']=$news_desc;	
				if($news_desc_th!='')
					$params['news_desc_th']=$news_desc_th;	


				$this->db->insert('news',$params);
				
				$news_id = $this->db->insert_id();
				
				if(isset($_FILES['picture'])&&$_FILES['picture']['size']>0){
					$filepath = "assets/images/news/{$news_id}.jpg";
					 move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);
				}
				
				$this->session->set_flashdata('msg','Add Complete');
			
				echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";					
				
			}

	}

	public function edit($com_id,$news_id){

		$this->form_validation->set_rules('id','id','trim|required');			
					
		if($this->form_validation->run()==FALSE){			

			$this->session->set_flashdata('errors', validation_errors());			
			
			$data["com_id"] = $com_id ;

			$data['company'] = $this->Company_model->getOne($com_id);

			$data["news_id"] = $news_id ;

			$data["method"] = 'Edit' ;
						
			$data['contentview'] = 'pagecompany/news_form';	

			$data['news'] = $this->News_model->getOne($news_id);
			// print_r($data['news']);
			// exit();

			$this->load->view('layoutcompany/main',$data);				
			
		}else{

			
			$news_title = $this->input->post('news_title');
			$news_title_th = $this->input->post('news_title_th');
			$news_desc = $this->input->post('news_desc');
			$news_desc_th = $this->input->post('news_desc_th');
			$is_active = $this->input->post('is_active');
			
			$params = array('news_title'=>$news_title,	
							'news_title_th'=>$news_title_th,									
							'is_active'=>$is_active,								
							'uby'=>$this->session->userdata('company_login_com_name_en'),
							'udate'=> date('Y-m-d H:i:s') );

			if($news_desc!='')
					$params['news_desc']=$news_desc;	
				if($news_desc_th!='')
					$params['news_desc_th']=$news_desc_th;	
		
			$this->db->where('news_id', $news_id);
			$this->db->update('news',$params);
			
		
			if(isset($_FILES['picture'])&&$_FILES['picture']['size']>0){
				$filepath = "assets/images/news/{$news_id}.jpg";
				move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);
			}
				

			$this->session->set_flashdata('msg','Edit Complete');
		

			echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";		
			
		}
	}

	public function delete($com_id,$news_id){
		$this->db->where('news_id',$news_id);
		$this->db->delete('news');

		$filepath = "assets/images/news/{$news_id}.jpg";
		if(is_file($filepath)){
			unlink($filepath);
		}
		$this->session->set_flashdata('msg','Delete Complete');

		echo "<script>alert('deleted');window.opener.location.reload();window.close();</script>";	
	}
	
}
 

?>