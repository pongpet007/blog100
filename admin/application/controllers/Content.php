<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends CI_Controller {


	function __construct(){
						
		parent::__construct();
		$this->load->model('Menu_admin_model');	
		$this->load->model('Menu_admin_type_model');	
		$this->load->model('Company_ads_model');
		$this->load->model('Company_model');
		$this->load->model('Content_model');
		$this->load->model('Content_row_model');
		$this->load->model('Content_row_item_model');
		$this->load->model('Country_model');

	}

	public function index(){

		$data = array();
		//////////////////// Menu /////////////////////////////////
		$menu_types = $this->Menu_admin_type_model->getAll();
		foreach ($menu_types as $menu_type) {
			$menu_type->menu = $this->Menu_admin_model->getAll($menu_type->menu_admin_type_id);
		}

		$data['menu_admins'] =  $menu_types;
		$menuselected = $this->input->get('menuselected');
		if($menuselected > 0){
			$data['menuselected'] =  $this->Menu_admin_model->getOne($menuselected);				
		}
		############################################################
		$data['contents'] = $this->Content_model->getAll();
		$data['company'] = $this->Company_model->getOne(1);
		$data['countrys'] = $this->Country_model->getAll();	

		$data['contentview']  = 'pagecompany/content_show';
		$this->load->view('layoutcompany/main',$data);
	}

	public function add(){

		$params = array('uby'=>$this->session->userdata('ssfullname'),
						'udate'=> date('Y-m-d H:i:s') );
		$this->db->insert('content',$params);		
		$content_id = $this->db->insert_id();
		redirect("Content/edit/$content_id");
	}

	

	public function edit($content_id){

		$this->form_validation->set_rules('content_name','content_name','trim|required');			
					
		if($this->form_validation->run()==FALSE){			

			$this->session->set_flashdata('errors', validation_errors());			
			//////////////////// Menu /////////////////////////////////
			$menu_types = $this->Menu_admin_type_model->getAll();
			foreach ($menu_types as $menu_type) {
				$menu_type->menu = $this->Menu_admin_model->getAll($menu_type->menu_admin_type_id);
			}

			$data['menu_admins'] =  $menu_types;
			$menuselected = $this->input->get('menuselected');
			if($menuselected > 0){
				$data['menuselected'] =  $this->Menu_admin_model->getOne($menuselected);				
			}
			############################################################
			$data['countrys'] = $this->Country_model->getAll();	

			$data["content_id"] = $content_id ;

			$data["method"] = 'Edit' ;
			
			$data['content'] = $this->Content_model->getOne($content_id);

			$content_rows = $this->Content_row_model->getAll($content_id);
			foreach ($content_rows as $content_row) {
				$content_row->items = $this->Content_row_item_model->getAll($content_row->row_id);
			}

			$data['content_rows'] = $content_rows;
			$data['company'] = $this->Company_model->getOne(1);

			$data['contentview'] = 'pagecompany/content_form';	
			$this->load->view('layoutcompany/main',$data);				
			
		}else{

			
			$content_name = $this->input->post('content_name');
			$title = $this->input->post('title');
			$keyword = $this->input->post('keyword');
			$description = $this->input->post('description');
			
			
			$params = array(							
							'content_name'=>$content_name,								
							'title'=>$title,								
							'keyword'=>$keyword,								
							'description'=>$description,								
							'uby'=>$this->session->userdata('ssfullname'),
							'udate'=> date('Y-m-d H:i:s') );

		
			$this->db->where('content_id', $content_id);
			$this->db->update('content',$params);
				
			$this->session->set_flashdata('msg','Edit Complete');
		

			echo "<script>window.opener.location.reload();window.close();</script>";		
			
		}
	}

	public function delete($content_id){

		$sql = "select row_id from content_row where content_id = $content_id ";
		$query = $this->db->query($sql);
		$rows  = $query->result();	
		$arr=array();
		foreach ($rows as $row) {
			$arr[] = $row->row_id;
		}
		if(sizeof($arr)>0){
			$this->db->where_in('row_id',$arr);
			$this->db->delete('content_row_item');
		}
		

		$this->db->where('content_id',$content_id);
		$this->db->delete('content_row');

		$this->db->where('content_id',$content_id);
		$this->db->delete('content');

		
		$this->session->set_flashdata('msg','Delete Complete');

		echo "<script>window.opener.location.reload();window.close();</script>";	
	}

	
	
}
 

?>