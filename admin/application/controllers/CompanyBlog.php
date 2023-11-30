<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompanyBlog extends CI_Controller {


	function __construct(){
						
		parent::__construct();
		$this->load->model('Menu_admin_model');	
		$this->load->model('Menu_admin_type_model');	
		$this->load->model('Company_model');
		$this->load->model('Country_model');
		$this->load->model('Blog_model');
		$this->load->model('Blog_language_model');
	}

	public function index($com_id){

		$data = array();		
		$data["com_id"] = $com_id ;
		$data['company'] = $this->Company_model->getOne($com_id);
		
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
		$blogs = $this->Blog_model->getAll($com_id);
		foreach ($blogs as $blog) {
			$blog->languages = $this->Blog_language_model->getAll(array('blog_id'=>$blog->blog_id));
		}
		$data['blogs'] = $blogs;
		
		$data['contentview']  = 'pagecompany/blog_show';

		$this->load->view('layoutcompany/main',$data);
	}

	public function add($com_id){		
		
		$params = array(						
						'is_active'=>1,	
						'com_id'=>1,						
						'cby'=>$this->session->userdata('ssfullname'),
						'uby'=>$this->session->userdata('ssfullname'),
						'cdate'=> date('Y-m-d H:i:s'),
						'udate'=> date('Y-m-d H:i:s') );
			
		$this->db->insert('blog',$params);				
		
		$blog_id = $this->db->insert_id();

		$country_id = "";
		$country = $this->Country_model->getAll2($country_id);

		foreach ($country as  $countrynew) {
			$params = array(
					'blog_id'=>$blog_id,
					'country_id'=>$countrynew->country_id
			);
			$this->db->insert('blog_language',$params);
		}
		
		redirect("CompanyBlog/edit/1/$blog_id");

	}

	public function edit($com_id,$blog_id){

		$this->form_validation->set_rules('pos','pos','trim|required');		
					
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
			//////////////////////////// Language ////////////////////////////
			$countrys = $this->Country_model->getAll();		
			$arr = array('0'=>' -- All Country -- ');
			foreach ($countrys as $key => $value) {
				$arr[$value->country_id] = $value->short_name;
			}
			$data['countrys'] = $arr ;

			$countrys = $this->Country_model->getAll();					
			foreach ($countrys as $country) {
				$country->languages = $this->Blog_language_model->getAll(array('country_id'=>$country->country_id,'blog_id'=>$blog_id));				
			}			
			$data['languages'] = $countrys ;

			############################################################
			$data['com_id'] = $com_id;			
			$data['company'] = $this->Company_model->getOne($com_id);
			$data["blog_id"] = $blog_id ;

			$data["method"] = 'Edit' ;
						
			$data['contentview'] = 'pagecompany/blog_form';	

			$data['blog'] = $this->Blog_model->getOne($blog_id);
			// print_r($data['blog']);
			// exit();

			$this->load->view('layoutcompany/main',$data);				
			
		}else{

			
			$pos = $this->input->post('pos');
			$is_active = $this->input->post('is_active');

			$blog_url = str_replace(" ","-",strtolower($this->input->post('blog_url')));
			$blog_url = str_replace("×","-",$blog_url);
			$blog_url = str_replace(".","-",$blog_url);
			$blog_url = str_replace("+","-",$blog_url);
			$blog_url = str_replace("/","-",$blog_url);
			$blog_url = str_replace("---","-",$blog_url);
			$blog_url = str_replace("--","-",$blog_url);
			
			$params = array(						
							'blog_url'=>$blog_url,
							'pos'=>$pos,	
							'is_active'=>$is_active,							
							'uby'=>$this->session->userdata('ssfullname'),	
							'udate'=> date('Y-m-d H:i:s') );
		
			$this->db->where('blog_id', $blog_id);
			$this->db->update('blog',$params);
			
		
			if(isset($_FILES['picture_s'])&&$_FILES['picture_s']['size']>0){
				$filepath = "../images/blog/blog{$blog_id}_s.jpg";
				move_uploaded_file($_FILES['picture_s']['tmp_name'], $filepath);

				// mime_content_type($filepath) . "\n";
				// // print_r('expression');
				// exit();
				$filename2 = "blog". $blog_id ."_s.webp";
				// print_r($_FILES['picture_s']);exit();
				$jpg = imagecreatefromjpeg("../images/blog/blog{$blog_id}_s.jpg");
				
				$w=imagesx($jpg);
				$h=imagesy($jpg);
				// converter webp
				$webp=imagecreatetruecolor($w,$h);
				$backgroundColor = imagecolorallocatealpha($webp, 0, 0, 0, 127);
				imagefill($webp, 0, 0, $backgroundColor);
				imagecopy($webp,$jpg, 0, 0, 0, 0,$w,$h);
				imagewebp($webp, "../images/blog/{$filename2}", 100);
				imagedestroy($jpg);
				imagedestroy($webp);
			}
			exit();
			
			if(isset($_FILES['picture_l'])&&$_FILES['picture_l']['size']>0){
				$filepath = "../images/blog/blog{$blog_id}_l.jpg";
				move_uploaded_file($_FILES['picture_l']['tmp_name'], $filepath);
			}

			$this->session->set_flashdata('msg','Edit Complete');
		

			echo "<script>window.opener.location.reload();window.close();</script>";		
			
		}
	}

	public function delete($com_id,$blog_id){
		
		

		$filepath = "../images/blog/blog{$blog_id}_s.jpg";
		if(is_file($filepath)){
			unlink($filepath);
		}

		$filepath = "../images/blog/blog{$blog_id}_s.webp";
		if(is_file($filepath)){
			unlink($filepath);
		}
		
		$filepath = "../images/blog/blog{$blog_id}_l.jpg";
		if(is_file($filepath)){
			unlink($filepath);
		}
		$this->db->where('blog_id',$blog_id);
		$this->db->delete('blog_language');

		$this->db->where('blog_id',$blog_id);
		$this->db->delete('blog');


		$this->session->set_flashdata('msg','Delete Complete');

		echo "<script>window.opener.location.reload();window.close();</script>";	
	}
	
	public function getLanguageJson($language_id)
	{
		$language = $this->Blog_language_model->getOne($language_id);		
		echo json_encode($language);
	}
	public function savelanguage()
	{
		$languagemethod = $this->input->post('languagemethod');
		$country_id = $this->input->post('country_id');
		$blog_id = $this->input->post('blog_id');
		$language_id = $this->input->post('language_id');
		$meta_title = $this->input->post('meta_title');
		$meta_keyword = $this->input->post('meta_keyword');
		$meta_description = $this->input->post('meta_description');
		$blog_name = $this->input->post('blog_name');
		$blog_desc_short = $this->input->post('blog_desc_short');	
		$blog_desc = $this->input->post('blog_desc');

		$blog_tags = $this->input->post('blog_tags');			
		
		$blog_tags_url = str_replace(" ","-",strtolower($this->input->post('blog_tags')));
		$blog_tags_url = str_replace("×","-",$blog_tags_url);
		$blog_tags_url = str_replace(".","-",$blog_tags_url);
		$blog_tags_url = str_replace("+","-",$blog_tags_url);
		$blog_tags_url = str_replace("/","-",$blog_tags_url);
		$blog_tags_url = str_replace("---","-",$blog_tags_url);
		$blog_tags_url = str_replace("--","-",$blog_tags_url);


		if($languagemethod=='add'){
			$params = array();
			$params['country_id'] = $country_id;
			$params['blog_id'] = $blog_id;
			$params['meta_title'] = $meta_title;
			$params['meta_keyword'] = $meta_keyword;
			$params['meta_description'] = $meta_description;
			$params['blog_name'] = $blog_name;
			$params['blog_tags'] = $blog_tags;
			$params['blog_tags_url'] = $blog_tags_url;
			$params['blog_desc_short'] = $blog_desc_short;
			$params['blog_desc'] = $blog_desc;					
			$params['cdate'] = date('Y-m-d H:i:s');
			$params['udate'] = date('Y-m-d H:i:s');
			$params['cby'] = $this->session->userdata('ssfullname');
			$params['uby'] = $this->session->userdata('ssfullname');
			if($country_id > 0)
			$this->db->insert('blog_language',$params);
		}

		if($languagemethod=='edit'){
			$params = array();
			$params['country_id'] = $country_id;
			$params['meta_title'] = $meta_title;
			$params['meta_keyword'] = $meta_keyword;
			$params['meta_description'] = $meta_description;
			$params['blog_name'] = $blog_name;
			$params['blog_tags'] = $blog_tags;
			$params['blog_tags_url'] = $blog_tags_url;
			$params['blog_desc_short'] = $blog_desc_short;
			$params['blog_desc'] = $blog_desc;							
			$params['udate'] = date('Y-m-d H:i:s');			
			$params['uby'] = $this->session->userdata('ssfullname');

			if($country_id > 0){
				$this->db->where('language_id',$language_id);
				$this->db->update('blog_language',$params);
			}
			
		}		

		echo "save complete";
	}

	public function deletelanguage($language_id)
	{
		if($language_id > 0){
			$this->db->where('language_id',$language_id);
			$this->db->delete('blog_language');
		}
	}

}
 

?>