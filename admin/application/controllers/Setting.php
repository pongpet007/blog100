<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {
	private $fields = array();
	public function __construct(){
		
		parent::__construct();
		$this->load->model('Menu_admin_model');	
		$this->load->model('Menu_admin_type_model');	
		$this->load->model('Company_model');	
		$this->load->model('Package_model');	
		$this->load->model('Directory_model');	
		$this->load->model('Companytype_model');	
		$this->load->model('Amphur_model');	
		$this->load->model('Province_model');	
		$this->load->model('Theme_model');	
	
	}
		

	public function edit(){
		$id = 1;	

		$this->form_validation->set_rules('id','id','trim|required');		
					
		if($this->form_validation->run()==FALSE){			

			$this->session->set_flashdata('errors', validation_errors());			
			
			$data["id"] = $id ;
			$data["method"] = 'Edit' ;
			$data['com_id'] = $id;
			$data['fields'] =$this->fields;

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
						
			///////////////////////////////////////////////////////////			
			$themes = $this->Theme_model->getAll();		
			$arr = array('0'=>' -- Theme -- ');
			foreach ($themes as $key => $value) {
				$arr[$value->theme_id] = $value->theme_name;
			}
			$data['themes'] = $arr ;			
			///////////////////////////////////////////////////////////
			$company = $this->Company_model->getOne($id);
			$data['company'] =$company;
			///////////////////////////////////////////////////////////
			$data['contentview'] = 'pagecompany/setting_form';	
			

			$this->load->view('layoutcompany/main',$data);				
			
		}else{


			$is_pdpa = $this->input->post('is_pdpa');
			$header_id = $this->input->post('header_id');
			$footer_id = $this->input->post('footer_id');
			$theme_id = $this->input->post('theme_id');
			$packageBG = $this->input->post('packageBG');

			$display_product_limit = $this->input->post('display_product_limit');
			$display_index_product_limit = $this->input->post('display_index_product_limit');

			$cat_type = $this->input->post('cat_type');
			$PackageBG_Hover = $this->input->post('PackageBG_Hover');
			$package_text_color = $this->input->post('package_text_color');

			$category_color = $this->input->post('category_color');
			$button_color = $this->input->post('button_color');
			$link_color_hover = $this->input->post('link_color_hover');

			
			$packageProductLimit = $this->input->post('packageProductLimit');
		
			$css = $this->input->post('css');					
			
			$i_encode = json_encode($this->input->post());

			$params = array(
							'is_pdpa'=>$is_pdpa,
							'header_id'=>$header_id,
							'footer_id'=>$footer_id,
							'header_footer_json'=>$i_encode,
							'theme_id'=>$theme_id,
							'display_product_limit'=>$display_product_limit,	
							'display_index_product_limit'=>$display_index_product_limit,
							'packageBG'=>$packageBG,
							'cat_type'=>$cat_type,
							'PackageBG_Hover'=>$PackageBG_Hover,
							'package_text_color'=>$package_text_color,	
							
							'category_color'=>$category_color,	
							'button_color'=>$button_color,	
							'link_color_hover'=>$link_color_hover,	

							'packageProductLimit'=>$packageProductLimit,	
							'css'=>$css,
							'uby'=>$this->session->userdata('ssfullname'),
							'udate'=> date('Y-m-d H:i:s')				
							);
			
		
			$this->db->where('com_id', $id);
			$this->db->update('company',$params);

			$this->session->set_flashdata('msg','Edit Complete');
						
			if($_FILES['bgfooter']['size']>0){
				$filepath = "../images/bgfooter.png";
				move_uploaded_file($_FILES['bgfooter']['tmp_name'], $filepath);

			}



			echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";				
			
		}
	}

	

}

?>