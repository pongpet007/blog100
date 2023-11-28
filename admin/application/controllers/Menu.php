<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {


	function __construct(){
						
		parent::__construct();
		$this->load->model('Menu_admin_model');	
		$this->load->model('Menu_admin_type_model');	
		$this->load->model('Country_model');	
		$this->load->model('Menu_model');	
		$this->load->model('Menu_language_model');	
		$this->load->model('Menu_type_model');	
		$this->load->model('Feature_model');	
		$this->load->model('Content_model');			
		$this->load->model('Company_ads_model');
		$this->load->model('Company_model');
	}

	public function index($com_id=1){

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

		$data['contentview']  = 'pagecompany/menu_show';

		$menus = $this->Menu_model->getMain();
		foreach ($menus as $menu) {
			$menu->languages = $this->Menu_language_model->getAll(array('menu_id'=>$menu->menu_id));			
			$menu->submenu = $this->Menu_model->getsub($menu->menu_id);
			foreach ($menu->submenu as $x) {
				$x->languages = $this->Menu_language_model->getAll(array('menu_id'=>$x->menu_id));
			}
		}
		$data['menus'] = $menus ;		
		$data['countrys'] = $this->Country_model->getAll();
		
		$data['company'] = $this->Company_model->getOne($com_id);
		$this->load->view('layoutcompany/main',$data);
	}

	public function add(){

			$params = array(
							'parent_id'=>"0",
							'cby'=>$this->session->userdata('ssfullname'),
							'cdate'=> date('Y-m-d H:i:s') 
							);
			$this->db->insert('menu',$params);
			
			$menu_id= $this->db->insert_id();
				
			$params = array(				
							'position'=>$menu_id);

			$this->db->where('menu_id', $menu_id);
			$this->db->update('menu',$params);

			$country_id = "";
			$country = $this->Country_model->getAll2($country_id);

			foreach ($country as  $countrynew) {
				$params = array(
								'menu_id'=>$menu_id,
								'country_id'=>$countrynew->country_id
								);
				$this->db->insert('menu_language',$params);
			}

			redirect("Menu/edit/$com_id/$menu_id");


	}

	

	public function edit($menu_id){

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
			$data["com_id"] = 1 ;

			$data["menu_id"] = $menu_id ;

			$data["method"] = 'Edit' ;

			// main menu
			$mainmenus = $this->Menu_model->getMain();		
			$arr = array('0'=>' -- Menu Parent -- ');
			foreach ($mainmenus as $mainmenu) {
				$arr[$mainmenu->menu_id] = $mainmenu->menu_name;
			}
			$data['mainmenus'] = $arr ;

			// menu type
			$menutypes = $this->Menu_type_model->getAll();		
			$arr = array('0'=>' -- Menu Type -- ');
			foreach ($menutypes as $menutype) {
				$arr[$menutype->menu_type_id] = $menutype->menu_type_name;
			}
			$data['menutypes'] = $arr ;
			
			$countrys = $this->Country_model->getAll();
			foreach ($countrys as $country) {
				$country->language = $this->Menu_language_model->getAll(array('menu_id'=>$menu_id,'country_id'=>$country->country_id));
			}
			$data['countrys'] = $countrys;
			// print_r($countrys);
			// exit();
			// Feture
			$features = $this->Feature_model->getAll();		
			$arr = array('0'=>' -- Feature -- ');
			foreach ($features as $feature) {
				$arr[$feature->feature_id] = $feature->feature_name;
			}
			$data['features'] = $arr ;
			
			// Content
			$contents = $this->Content_model->getAll();		
			$arr = array('0'=>' -- Content -- ');
			foreach ($contents as $content) {
				$arr[$content->content_id] = $content->content_name;
			}
			$data['contents'] = $arr ;

						
			$data['contentview'] = 'pagecompany/menu_form';	

			$data['menu'] = $this->Menu_model->getOne($menu_id);
			// print_r($data['ads']);
			// exit();
			$data['company'] = $this->Company_model->getOne(1);
			$this->load->view('layoutcompany/main',$data);				
			
		}else{

			
			$menu_name = $this->input->post('menu_name');

			$meta_title = $this->input->post('meta_title');
			$meta_keyword = $this->input->post('meta_keyword');
			$meta_description = $this->input->post('meta_description');

			$url = $this->input->post('url');
			$country_id = $this->input->post('country_id');
			
			$this->db->where('menu_id',$menu_id);
			$this->db->delete('menu_language');
			
			for ($i=0; $i < sizeof($country_id) ; $i++) { 
				$params = array(
							'menu_id'=>$menu_id ,
							'country_id'=>$country_id[$i] ,
							'menu_name'=>$menu_name[$i] ,
							'meta_title'=>$meta_title[$i] ,
							'meta_keyword'=>$meta_keyword[$i] ,
							'meta_description'=>$meta_description[$i] ,
							'url'=>$url[$i] ,
						);
				$this->db->insert('menu_language',$params);
			} 

			$parent_id = $this->input->post('parent_id');
			$menu_type_id = $this->input->post('menu_type_id');
			$target = $this->input->post('target');
			$content_id = $this->input->post('content_id');
			$feature_id = $this->input->post('feature_id');
			$is_header = $this->input->post('is_header');
			$is_footer = $this->input->post('is_footer');
			$is_active = $this->input->post('is_active');			
			
			$params = array(																					
							'parent_id'=>$parent_id,															
							'menu_type_id'=>$menu_type_id,	
							'target'=>$target,																						
							'content_id'=>$content_id,															
							'feature_id'=>$feature_id,															
							'is_header'=>$is_header,															
							'is_footer'=>$is_footer,		
							'is_active'=>$is_active,								
							'uby'=>$this->session->userdata('ssfullname'),							
							'udate'=> date('Y-m-d H:i:s') );

			$this->db->where('menu_id', $menu_id);
			$this->db->update('menu',$params);


				
			$this->session->set_flashdata('msg','Edit Complete');
		

			echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";		
			
		}
	}

	public function delete($menu_id){


		$this->db->where('menu_id',$menu_id);
		$this->db->delete('menu_language');

		$this->db->where('menu_id',$menu_id);
		$this->db->delete('menu');

		$this->session->set_flashdata('msg','Delete Complete');

		echo "<script>alert('deleted');window.opener.location.reload();window.close();</script>";	
	}
	
	public function moveup($position)
	{
		$sql = "select menu_id ,position from menu where position <= $position order by position desc limit 0,2 ";
		//echo "$sql <br/>";
		$table = $this->db->query($sql);
		$rows = $table->result();

		if(count($rows)==2)
		{
			$row1 = $rows[0];
			$row2 = $rows[1];
			$sql1 = "update menu set position = $row2->position  where menu_id= $row1->menu_id;";
			$sql2 = "update menu set position = $row1->position  where menu_id= $row2->menu_id;";
			//echo "$sql1<br />$sql2 <br/>";
			$this->db->query($sql1);
			$this->db->query($sql2);
			//exit();
			echo "<script>window.opener.location.reload();window.close();</script>";		
		}
		else
		{
			echo "Error ";
		}
	}

	public function movedown($position)
	{

		$sql = "select menu_id ,position from menu where position >= $position order by position  limit 0,2 ";
		
		$table = $this->db->query($sql);
		$rows = $table->result();
		
		if(count($rows)==2)
		{
			$row1 = $rows[0];
			$row2 = $rows[1];
			$sql1 = "update menu set position = $row2->position  where menu_id= $row1->menu_id;";
			$sql2 = "update menu set position = $row1->position  where menu_id= $row2->menu_id;";
			
			$this->db->query($sql1);
			$this->db->query($sql2);
			//echo "<br> $sql1<br />$sql2 <br/>";
			
			echo "<script>window.opener.location.reload();window.close();</script>";		
		}
		else
		{
			echo "Error ";
		}
	}

}
 

?>