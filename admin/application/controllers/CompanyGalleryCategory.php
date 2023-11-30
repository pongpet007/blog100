<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompanyGalleryCategory extends CI_Controller {
 

	function __construct(){
						
		parent::__construct();
		$this->load->model('Menu_admin_model');	
		$this->load->model('Menu_admin_type_model');	
		$this->load->model('Company_gallery_category_model');				
		$this->load->model('Company_gallery_category_language_model');				
		$this->load->model('Company_model');	
		$this->load->model('Country_model');	
	}

	public function index(){
		$com_id = 1;
		
		$data = array();
		$data["com_id"] = $com_id ;
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
		$cats = $this->Company_gallery_category_model->getMain($com_id);
		// print_r($this->db->last_query());exit();
		foreach ($cats as $cat) {
			$cat->languages = $this->Company_gallery_category_language_model->getAll(array('cat_id'=>$cat->cat_id));
		}
		$data['categorys'] = $cats;
		
		$data['company'] = $this->Company_model->getOne($com_id);
		$data['contentview']  = 'pagecompany/gallery_category_show';

		$this->load->view('layoutcompany/main',$data);
	}

	public function add(){
			
			$params = array(	
							'cat_ref'=>0,
							'is_show'=>1,									
							'com_id'=>1,
							'udate'=> date('Y-m-d H:i:s'),
							'cdate'=> date('Y-m-d H:i:s') ,
							'cby'=>$this->session->userdata('ssfullname')							
							);

			$this->db->insert('company_gallery_category',$params);
			$cat_id= $this->db->insert_id();
			////////////////// Update orders ////////////////////////
			$params = array('orders'=>$cat_id);
			$this->db->where('cat_id', $cat_id);
			$this->db->update('company_gallery_category',$params);

						
			$country_id = "";
			$country = $this->Country_model->getAll2($country_id);

			foreach ($country as  $countrynew) {
				$params = array(
							'cat_id'=>$cat_id,
							'country_id'=>$countrynew->country_id
							);
				$this->db->insert('company_gallery_category_language',$params);
			}
			
			redirect("CompanyGalleryCategory/edit/$cat_id");

	}

	public function edit($cat_id){

		$com_id = 1;
		$this->form_validation->set_rules('btn_send','btn_send','trim|required');
							
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

			$data["cat_id"] = $cat_id ;

			$data["method"] = 'Edit' ;
			
			////////////////////////////////////////////////////////////////	
			$arr = array('-- Select Parent --');
			$mains = $this->Company_gallery_category_model->getMain($com_id);
			foreach ($mains as $main) {
				$arr[$main->cat_id] = $main->cat_name;
				$sub1s = $this->Company_gallery_category_model->getSub($com_id,$main->cat_id);
				if(count($sub1s)>0){
					foreach ($sub1s as $sub1) {
						$arr[$sub1->cat_id] = '&nbsp;&nbsp;&nbsp;|-'.$sub1->cat_name;
						$sub2s = $this->Company_gallery_category_model->getSub($com_id,$sub1->cat_id);
						if(count($sub2s)>0){
							foreach ($sub2s as $sub2) {
								$arr[$sub2->cat_id] = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-'.$sub2->cat_name;
							}
						}
					}
				}
			}				
			$data['parents'] = $arr;

			//////////////////////////// Language ////////////////////////////
			$countrys = $this->Country_model->getAll();		
			$arr = array('0'=>' -- All Country -- ');
			foreach ($countrys as $key => $value) {
				$arr[$value->country_id] = $value->short_name;
			}
			$data['countrys'] = $arr ;

			$countrys = $this->Country_model->getAll();					
			foreach ($countrys as $country) {
				$country->category_languages = $this->Company_gallery_category_language_model->getAll(array('country_id'=>$country->country_id,'cat_id'=>$cat_id));				
			}			
			$data['languages'] = $countrys ;

			////////////////////////////////////////////////////////////////////
			$data['company'] = $this->Company_model->getOne($com_id);					
			$data['category'] =$this->Company_gallery_category_model->getOne($cat_id);

			$data['contentview'] = 'pagecompany/gallery_category_form';	

			$this->load->view('layoutcompany/main',$data);		
			
		}else{

				$cat_ref = $this->input->post('cat_ref');
				$is_show = $this->input->post('is_show');
				$orders = $this->input->post('orders');
				
				$cat_url = str_replace(" ","-",strtolower($this->input->post('cat_url')));
				$cat_url = str_replace("×","-",$cat_url);
				$cat_url = str_replace(".","-",$cat_url);
				$cat_url = str_replace("+","-",$cat_url);
				$cat_url = str_replace("/","-",$cat_url);
				$cat_url = str_replace("---","-",$cat_url);
				$cat_url = str_replace("--","-",$cat_url);

				$params = array(
								
								'cat_ref'=>$cat_ref,
								'cat_url'=>$cat_url,		
								'is_show'=>$is_show,
								'orders'=>$orders,	
								'udate'=>date('Y-m-d h:i:s'),
								'uby'=>$this->session->userdata('ssfullname')							
								);

			$this->db->where('cat_id', $cat_id);

			$this->db->update('company_gallery_category',$params);
							
			$this->session->set_flashdata('msg','Edit Complete');
			// echo $this->db->last_query();
			// exit();
			echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";					
			
		}
	}

	public function delete($cat_id){
		$this->db->where('cat_id',$cat_id);
		$this->db->delete('company_gallery_category_language');

		$this->db->where('cat_id',$cat_id);
		$this->db->delete('company_gallery_category');

		$this->session->set_flashdata('msg','Delete Complete');
		echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";		
	}

	public function moveup($orders)
	{
		$sql = "select cat_id ,orders from company_category where orders <= $orders order by orders desc limit 0,2 ";
		//echo "$sql <br/>";
		$table = $this->db->query($sql);
		$rows = $table->result();

		if(count($rows)==2)
		{
			$row1 = $rows[0];
			$row2 = $rows[1];
			$sql1 = "update company_category set orders = $row2->orders  where cat_id= $row1->cat_id;";
			$sql2 = "update company_category set orders = $row1->orders  where cat_id= $row2->cat_id;";
		
			// echo "$sql1 <hr> $sql2 ";
			// exit();
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

	public function movedown($orders)
	{

		$sql = "select cat_id ,orders from company_category where orders >= $orders order by orders  limit 0,2 ";
		
		$table = $this->db->query($sql);
		$rows = $table->result();
		
		if(count($rows)==2)
		{
			$row1 = $rows[0];
			$row2 = $rows[1];
			$sql1 = "update company_category set orders = $row2->orders  where cat_id= $row1->cat_id;";
			$sql2 = "update company_category set orders = $row1->orders  where cat_id= $row2->cat_id;";
			// echo "$sql1 <hr> $sql2 ";
			// exit();
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


	public function getLanguageJson($language_id)
	{
		$language = $this->Company_gallery_category_language_model->getOne($language_id);
		// print_r($language);
		echo json_encode($language);
	}
	public function savelanguage()
	{
		// foreach ($_REQUEST as $key => $value) {
		// 	echo "\$$key = \$this->input->post('$key');<br>";
		// 	//echo "'$key'=>$value,	<br>";
		// }
		// exit();

		$country_id = $this->input->post('country_id');
		$meta_title = $this->input->post('meta_title');
		$meta_keyword = $this->input->post('meta_keyword');
		$meta_description = $this->input->post('meta_description');
		$cat_name = $this->input->post('cat_name');
		$cat_short_name = $this->input->post('cat_name');		
		$cat_id = $this->input->post('cat_id');
		$language_id = $this->input->post('language_id');
		$languagemethod = $this->input->post('languagemethod');

		if($languagemethod=='add'){
			$params = array();
			$params['country_id'] = $country_id;
			$params['meta_title'] = $meta_title;
			$params['meta_keyword'] = $meta_keyword;
			$params['meta_description'] = $meta_description;
			$params['cat_name'] = $cat_name;
			$params['cat_short_name'] = $cat_short_name;
			$params['cat_id'] = $cat_id;		
			$params['cdate'] = date('Y-m-d H:i:s');
			$params['udate'] = date('Y-m-d H:i:s');
			$params['cby'] = $this->session->userdata('ssfullname');
			$params['uby'] = $this->session->userdata('ssfullname');
			if($country_id > 0)
			$this->db->insert('company_gallery_category_language',$params);
		}

		if($languagemethod=='edit'){
			$params = array();
			$params['country_id'] = $country_id;
			$params['meta_title'] = $meta_title;
			$params['meta_keyword'] = $meta_keyword;
			$params['meta_description'] = $meta_description;
			$params['cat_name'] = $cat_name;
			$params['cat_short_name'] = $cat_short_name;		
			$params['udate'] = date('Y-m-d H:i:s');			
			$params['uby'] = $this->session->userdata('ssfullname');

			if($country_id > 0){
				$this->db->where('language_id',$language_id);
				$this->db->update('company_gallery_category_language',$params);
			}
			
		}		

		echo "save complete";
	}

	public function deletelanguage($language_id)
	{
		if($language_id > 0){
			$this->db->where('language_id',$language_id);
			$this->db->delete('company_category_language');
		}
	}
}
 

?>