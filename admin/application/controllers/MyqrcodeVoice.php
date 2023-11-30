<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyqrcodeVoice extends CI_Controller {


	function __construct(){
						
		parent::__construct();
	
		$this->load->library('Bdqrcode');
		$this->load->model('Qrcodevoice_model');		
	
	}

	

	public function index($qrcode_id){
			
		$data = array();		
		
		$data['voices'] = $this->Qrcodevoice_model->getAll($qrcode_id);
		$data["qrcode_id"] = $qrcode_id;
		$data['contentview']  = 'pages/qrcodevoice_show';

		$this->load->view('layout/main',$data);

	}
	
	public function add($qrcode_id){
		
			// foreach ($_REQUEST as $key => $value) {
			// 	//echo "\$$key = \$this->input->post('$key');<br>";
			// 	echo "'$key'=>\$$key,	<br>";
			// }
			// exit();

			$this->form_validation->set_rules('title_en','Title EN','trim|required');	
		    $this->form_validation->set_rules('title_th','Title TH','trim|required');	
			
			if($this->form_validation->run()==FALSE){
				

				$this->session->set_flashdata('errors', validation_errors());				
				
                $data["qrcode_id"] = $qrcode_id ;
                
				$data["qrcodevoice_id"] = '' ;
				
				$data["method"] = 'Add' ;
								
				$data['qrcodevoice'] ='';				
				
				$data['contentview'] = 'pages/qrcodevoice_form';	
				
				$this->load->view('layout/main',$data);					
				
			}else{

				$title_en = $this->input->post('title_en');
				$title_th = $this->input->post('title_th');
                $url = $this->input->post('url');                
				$params = array(
								'title_en'=>$title_en,	
								'title_th'=>$title_th,	
								'url'=>$url,														
								'qrcode_id'=>$qrcode_id,		
								'cby'=>$this->session->userdata('ssfullname'),
								'cdate'=> date('Y-m-d H:i:s'),
								'udate'=> date('Y-m-d H:i:s')
								 );

				
				$this->db->insert('qrcodevoice',$params);
				
				$qrcodevoice_id = $this->db->insert_id();
				
				$this->session->set_flashdata('msg','Add Complete');
			
				echo "<script>window.opener.location.reload();window.close();</script>";					
				
			}

	}

	public function edit($qrcode_id,$qrcodevoice_id){

		$this->form_validation->set_rules('title_en','Title EN','trim|required');	
		$this->form_validation->set_rules('title_th','Title TH','trim|required');	
					
		if($this->form_validation->run()==FALSE){			

			$this->session->set_flashdata('errors', validation_errors());		
			
            $data["qrcode_id"] = $qrcode_id ;
            
			$data["qrcodevoice_id"] = $qrcodevoice_id ;

			$data["method"] = 'Edit' ;

			$data['contentview'] = 'pages/qrcodevoice_form';	

			$qrcodevoice = $this->Qrcodevoice_model->getOne($qrcodevoice_id);	
			
			$data['qrcodevoice'] = 	$qrcodevoice;


			$this->load->view('layout/main',$data);				
			
		}else{

			
			$title_en = $this->input->post('title_en');
			$title_th = $this->input->post('title_th');
			$url = $this->input->post('url');		

			$params = array(
							'title_en'=>$title_en,	
							'title_th'=>$title_th,	
							'url'=>$url,														
							'uby'=>$this->session->userdata('ssfullname'),						
							'udate'=> date('Y-m-d H:i:s')
							 );

			$this->db->where('qrcodevoice_id', $qrcodevoice_id);
			$this->db->update('qrcodevoice',$params);
			
			$this->session->set_flashdata('msg','Edit Complete');
			echo "<script>window.opener.location.reload();window.close();</script>";		
			
		}
	}

	public function delete($qrcode_id,$qrcodevoice_id){
		
		$this->db->where('qrcodevoice_id',$qrcodevoice_id);
		$this->db->delete('qrcodevoice');
		
		$this->session->set_flashdata('msg','Delete Complete');

		echo "<script>window.opener.location.reload();window.close();</script>";	
	}
	
}
 

?>