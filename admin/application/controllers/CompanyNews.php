<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompanyNews extends CI_Controller {
 

	function __construct(){
						
		parent::__construct();
		$this->load->model('Menu_admin_model');	
		$this->load->model('Menu_admin_type_model');	
		$this->load->model('News_model');
		$this->load->model('News_language_model');
		$this->load->model('Company_model');
		$this->load->model('Country_model');
	}

	public function index($com_id){

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
		$data['contentview']  = 'pagecompany/news_show';
		$data['company'] = $this->Company_model->getOne($com_id);
		$search['news_type'] = 1;

		$newss = $this->News_model->getAll($com_id,$search);
		foreach ($newss as $news) {
			$news->languages = $this->News_language_model->getAll(array('news_id'=>$news->news_id));
		}
		$data['newss'] = $newss;
		


		// print_r($this->db->last_query());
		// exit();
		$this->load->view('layoutcompany/main',$data);
	}

	public function add($com_id){
		
		$params = array(
						'news_type_id'=>1,
						'news_datetime'=>date('Y-m-d H:i:s'),
						'is_active'=>1,
						'com_id'=>1,															
						'cby'=>$this->session->userdata('ssfullname'),
						'udate'=> date('Y-m-d H:i:s'),
						'cdate'=> date('Y-m-d H:i:s')  );

		$this->db->insert('news',$params);		
		$news_id = $this->db->insert_id();

		$country_id = "";
		$country = $this->Country_model->getAll2($country_id);

		foreach ($country as  $countrynew) {
			$params = array(
					'news_id'=>$news_id,
					'country_id'=>$countrynew->country_id
			);
			$this->db->insert('news_language',$params);
		}
		
		redirect("CompanyNews/edit/1/$news_id");
			
	}

	public function edit($com_id,$news_id){

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
			
			//////////////////////////// Language ////////////////////////////
			$countrys = $this->Country_model->getAll();		
			$arr = array('0'=>' -- All Country -- ');
			foreach ($countrys as $key => $value) {
				$arr[$value->country_id] = $value->short_name;
			}
			$data['countrys'] = $arr ;

			$countrys = $this->Country_model->getAll();					
			foreach ($countrys as $country) {
				$country->languages = $this->News_language_model->getAll(array('country_id'=>$country->country_id,'news_id'=>$news_id));				
			}			
			$data['languages'] = $countrys ;
			/////////////////////////////////////////////////////////////////////
			$data["com_id"] = $com_id ;

			$data["news_id"] = $news_id ;

			$data["method"] = 'Edit' ;
			$data['company'] = $this->Company_model->getOne($com_id);			
			$data['contentview'] = 'pagecompany/news_form';	

			$data['news'] = $this->News_model->getOne($news_id);
			// print_r($data['news']);
			// exit();

			$this->load->view('layoutcompany/main',$data);				
			
		}else{

			$news_type_id = $this->input->post('news_type_id');
			// $news_url = $this->input->post('news_url');
			$news_datetime = $this->input->post('news_datetime');
			$is_active = $this->input->post('is_active');
			
			$news_url = str_replace(" ","-",strtolower($this->input->post('news_url')));
			$news_url = str_replace("×","-",$news_url);
			$news_url = str_replace(".","-",$news_url);
			$news_url = str_replace("+","-",$news_url);
			$news_url = str_replace("/","-",$news_url);
			$news_url = str_replace("---","-",$news_url);
			$news_url = str_replace("--","-",$news_url);

			$params = array(
							'news_type_id' => $news_type_id,
							'news_url'=>$news_url,	
							'news_datetime'=>$news_datetime,	
							'is_active'=>$is_active,								
							'uby'=>$this->session->userdata('ssfullname'),
							'udate'=> date('Y-m-d H:i:s') );

			
			$this->db->where('news_id', $news_id);
			$this->db->update('news',$params);
			
		
			if(isset($_FILES['picture'])&&$_FILES['picture']['size']>0){
				$filepath = "../images/news/{$news_id}.jpg";
				move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);
			}
				
			if ($_FILES['picture']['size']>0) {
				$this->load->library('ftp');

				$config['hostname'] = '27.254.96.231';
				$config['username'] = 'brand100';
				$config['password'] = 'Bra1212312121!@#$%^';
				$config['debug']        = TRUE;

				$domainname = $_SERVER['SERVER_NAME'];
				preg_match('/^(?:https?:\/\/)?(?:[^@\n]+@)?(?:www\.)?([^:\/\n?]+)/', $domainname , $matches);     
				$domainsnow = $matches[1];
				$domainsold = $this->Company_model->getDomainbyALLS($domainsnow);
        		// print_r($this->db->last_query());exit();
				foreach ($domainsold as $key => $new_domains) {
					$domains[] = $new_domains->com_website;
				}

				$this->ftp->connect($config);

				$filename = $news_id.'.jpg';
				$filename1 = '../images/news/'.$news_id.'.jpg';

				foreach ($domains as $domain) {
					$folder = "/domains/$domain/public_html/images/";
					if ($this->ftp->list_files($folder) === FALSE) {
						$this->ftp->mkdir($folder);
						$this->ftp->chmod($folder, 0777);
					}

					$folder = "/domains/$domain/public_html/images/news/";
					if ($this->ftp->list_files($folder) === FALSE) {
						$this->ftp->mkdir($folder);
						$this->ftp->chmod($folder, 0777);
					}
            // $_FILES['picture']["tmp_name"];
					$this->ftp->upload($filename1, $folder.$filename);
				}

				$this->ftp->close();

				echo "transfer complete";
			}
			
			$this->session->set_flashdata('msg','Edit Complete');
		

			echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";		
			
		}
	}

	public function delete($com_id,$news_id){
		$this->db->where('news_id',$news_id);
		$this->db->delete('news_language');

		$this->db->where('news_id',$news_id);
		$this->db->delete('news');

		$filepath = "../images/news/{$news_id}.jpg";
		if(is_file($filepath)){
			unlink($filepath);
		}
		$this->session->set_flashdata('msg','Delete Complete');

		echo "<script>alert('deleted');window.opener.location.reload();window.close();</script>";	
	}
	
	public function getLanguageJson($language_id)
	{
		$language = $this->News_language_model->getOne($language_id);		
		echo json_encode($language);
	}
	public function savelanguage()
	{
		$languagemethod = $this->input->post('languagemethod');
		$country_id = $this->input->post('country_id');
		$news_id = $this->input->post('news_id');
		$language_id = $this->input->post('language_id');
		$meta_title = $this->input->post('meta_title');
		$meta_keyword = $this->input->post('meta_keyword');
		$meta_description = $this->input->post('meta_description');
		$news_name = $this->input->post('news_name');
		$news_desc_short = $this->input->post('news_desc_short');	
		$news_desc = $this->input->post('news_desc');			
		
		$news_tags = $this->input->post('news_tags');

		$news_tags_url = str_replace(" ","-",strtolower($this->input->post('news_tags')));
		$news_tags_url = str_replace("×","-",$news_tags_url);
		$news_tags_url = str_replace(".","-",$news_tags_url);
		$news_tags_url = str_replace("+","-",$news_tags_url);
		$news_tags_url = str_replace("/","-",$news_tags_url);
		$news_tags_url = str_replace("---","-",$news_tags_url);
		$news_tags_url = str_replace("--","-",$news_tags_url);


		if($languagemethod=='add'){
			$params = array();
			$params['country_id'] = $country_id;
			$params['news_id'] = $news_id;
			$params['meta_title'] = $meta_title;
			$params['meta_keyword'] = $meta_keyword;
			$params['meta_description'] = $meta_description;
			$params['news_name'] = $news_name;
			$params['news_tags'] = $news_tags;
			$params['news_tags_url'] = $news_tags_url;
			$params['news_desc_short'] = $news_desc_short;
			$params['news_desc'] = $news_desc;					
			$params['cdate'] = date('Y-m-d H:i:s');
			$params['udate'] = date('Y-m-d H:i:s');
			$params['cby'] = $this->session->userdata('ssfullname');
			$params['uby'] = $this->session->userdata('ssfullname');
			if($country_id > 0)
			$this->db->insert('news_language',$params);
		}

		if($languagemethod=='edit'){
			$params = array();
			$params['country_id'] = $country_id;
			$params['meta_title'] = $meta_title;
			$params['meta_keyword'] = $meta_keyword;
			$params['meta_description'] = $meta_description;
			$params['news_name'] = $news_name;
			$params['news_tags'] = $news_tags;
			$params['news_tags_url'] = $news_tags_url;
			$params['news_desc_short'] = $news_desc_short;
			$params['news_desc'] = $news_desc;							
			$params['udate'] = date('Y-m-d H:i:s');			
			$params['uby'] = $this->session->userdata('ssfullname');

			if($country_id > 0){
				$this->db->where('language_id',$language_id);
				$this->db->update('news_language',$params);
			}
			
		}		

		echo "save complete";
	}

	public function deletelanguage($language_id)
	{
		if($language_id > 0){
			$this->db->where('language_id',$language_id);
			$this->db->delete('news_language');
		}
	}

}
 

?>