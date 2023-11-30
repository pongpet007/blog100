<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompanyProductSpec extends CI_Controller {


	function __construct(){
						
		parent::__construct();
		$this->load->model('Menu_admin_model');	
		$this->load->model('Menu_admin_type_model');	
		$this->load->model('Company_product_spec_model');		
		$this->load->model('Company_model');		
		$this->load->model('Slide_model');		
		$this->load->model('Directory_product_model');		
	}

	public function index($com_id,$pro_id){
		
		$search['pro_id'] = $pro_id;
		
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
		$data["com_id"] = $com_id ;
		$data["pro_id"] = $pro_id ;						
		$data['specs'] = $this->Company_product_spec_model->getAll(50,0,$search);
		$data['search'] = $search;		
		$data['company'] = $this->Company_model->getOne($com_id);
		$data['contentview']  = 'pagecompany/product_spec_show';
		$this->load->view('layoutcompany/main',$data);
	}

	

	public function add($com_id,$pro_id,$multiple=1){
		
			

			$this->form_validation->set_rules('id','id','trim|required');
		
			if($this->form_validation->run()==FALSE){
				//if($this->input->post('username')){

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
				$data["multiple"] = $multiple;
				$data["com_id"] = $com_id ;
				$data["pro_id"] = $pro_id ;
				$data["spec_id"] = '' ;
				
				$data["method"] = 'Add' ;

								
				$data['spec'] ='';
				
				$data['contentview'] = 'pagecompany/product_spec_form';	
				$data['company'] = $this->Company_model->getOne($com_id);
				$this->load->view('layoutcompany/main',$data);	
				
				
			}else{

				// foreach ($_REQUEST as $key => $value) {
				// 	//echo "\$$key = \$this->input->post('$key');<br>";
				// 	//echo "'$key'=>\$$key,	<br>";
				// 	echo "$key <br>";
				// }
				// exit();
				
				//print_r($this->input->post());
				
				$label_en = $this->input->post('label_en');
				$value_en  = $this->input->post('value_en');
				$label_th  = $this->input->post('label_th');
				$value_th  = $this->input->post('value_th');
				
				for ($i=0; $i < sizeof($label_en); $i++) { 
					$params = array('label_en'=>$label_en[$i],	
								'value_en'=>$value_en[$i],
								'label_th'=>$label_th[$i],
								'value_th'=>$value_th[$i],	
								'pro_id'=>$pro_id,
								'cdate'=>date('Y-m-d h:i:s'),
								'cby'=>$this->session->userdata('ssfullname')							
								);
					// print_r($params);
					// echo "<hr>";
							
					$this->db->insert('products_spec',$params);
				}

				$this->session->set_flashdata('msg','Add Complete');
				//exit();
				echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";							
			}

	}

	public function edit($com_id,$pro_id,$spec_id){

		$this->form_validation->set_rules('id','id','trim|required');
					
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
			$data["com_id"] = $com_id ;
			$data["pro_id"] = $pro_id ;
			$data["spec_id"] = $spec_id ;
			$data["method"] = 'Edit' ;

			$data['spec'] =$this->Company_product_spec_model->getOne($spec_id);
			$data['company'] = $this->Company_model->getOne($com_id);	
			$data['contentview'] = 'pagecompany/product_spec_form';	
				
			$this->load->view('layoutcompany/main',$data);		
			
		}else{


				$label_en = $this->input->post('label_en');
				$value_en  = $this->input->post('value_en');
				$label_th  = $this->input->post('label_th');
				$value_th  = $this->input->post('value_th');
								
				$params = array('label_en'=>$label_en,	
							'value_en'=>$value_en,
							'label_th'=>$label_th,
							'value_th'=>$value_th,							
							'udate'=>date('Y-m-d h:i:s'),
							'uby'=>$this->session->userdata('ssfullname')							
							);
			
			$this->db->where('spec_id', $spec_id);
			$this->db->update('products_spec',$params);

			$this->session->set_flashdata('msg','Edit Complete');
			
			echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";					
			
		}
	}

	public function delete($com_id,$pro_id,$spec_id){
		$this->db->where('spec_id',$spec_id);
		$this->db->delete('products_spec');
			
		$this->session->set_flashdata('msg','Delete Complete');

		echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";		
	}

}
 

?>