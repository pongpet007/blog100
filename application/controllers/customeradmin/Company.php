<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {

	public function __construct(){
			
		parent::__construct();
		$this->load->model('customeradmin/Company_model');	
		$this->load->model('customeradmin/Directory_model');	
		$this->load->model('customeradmin/Companytype_model');	
		$this->load->model('customeradmin/Package_model');	
		$this->load->model('Quotation_model');	
	} 

	public function index(){

		$data = array();
		$search = array();
		$comtype_id = $this->input->get('comtype_id');
		$keyword = $this->input->get('keyword');
		$dir_id = $this->input->get('dir_id');
		$search['comtype_id'] = $comtype_id ;  
		$search['keyword'] = $keyword ;  
		$search['dir_id'] = $dir_id ;  

		$companytypes = $this->Companytype_model->getAll();		
		$arr = array('0'=>' -- Company Type -- ');
		foreach ($companytypes as $key => $value) {
			$arr[$value->comtype_id] = $value->comtype_name;
		}
		$data['companytypes'] = $arr ;
		$dir_refs = $this->Directory_model->getmain();

		$arr = array('-- Directory --');

		foreach ($dir_refs as $key => $value) {
			$arr[$value->dir_id] = $value->dir_name_th;
			$dir_refs2 = $this->Directory_model->getsub($value->dir_id);
			foreach ($dir_refs2 as $key2 => $value2) {
				$arr[$value2->dir_id] = '----- '.$value2->dir_name_th;
			}
		}
		$data['directorys'] = $arr;

		$this->load->config('pagination',TRUE);
		$config = $this->config->item('pagination');
		$config["base_url"] = base_url() . "Company/index";
		$config["total_rows"] = $this->Company_model->count($search);
		$config["per_page"] = 10;
		$config["uri_segment"] = 3;
		$config['reuse_query_string'] = true;

		$this->pagination->initialize($config);		
		$data["links"] = $this->pagination->create_links();

		$data['total_rows'] =  $config["total_rows"];
		$start = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;	
		$data['companys'] = $this->Company_model->getAll($config["per_page"],$start,$search);
		$data['search'] = $search;
		$data['contentview']  = 'pagecompany/company_show';
		$this->load->view('layoutcompany/main',$data);
	}

	public function add(){

		$this->form_validation->set_rules('com_name_en','Comapny Name EN','trim|required');
		$this->form_validation->set_rules('com_name_th','Comapny Name TH','trim|required');
		$this->form_validation->set_rules('expire','Expire','trim|required');

		if($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('errors', validation_errors());

			$data["id"] = '' ;
			$data["method"] = 'Add' ;

			$data['company'] ='';
			$companytypes = $this->Companytype_model->getAll();
			$arr = array('-- Company Type --');
			foreach ($companytypes as $key => $value) {
				$arr[$value->comtype_id] = $value->comtype_name;
			}

			$data['companytypes'] = $arr ;
			$data['contentview'] = 'pages/company_form';	
			$this->load->view('layout/main',$data);	

		}else{
			$com_name_en = $this->input->post('com_name_en');
			$com_name_th = $this->input->post('com_name_th');
			$comtype_id = $this->input->post('comtype_id');
			$expire = $this->input->post('expire');

			$params = array('com_name_en'=>$com_name_en,	
							'com_name_th'=>$com_name_th,				
							'comtype_id'=>$comtype_id,				
							'expire'=>$expire,	
							'cby'=>$this->session->userdata('ssfullname'),
							'cdate'=> date('Y-m-d H:i:s')				
							);

			$this->db->insert('company',$params);
			$this->session->set_flashdata('msg','Add Complete');
			redirect('company');				
		}
	}

	public function edit($id){
		
		if(!$this->session->userdata("ssid")){
			redirect("customeradmin/user/login");
		}

		$this->form_validation->set_rules('com_address_th','Comapny Name EN','trim|required');
		$this->form_validation->set_rules('com_address_en','Comapny Name TH','trim|required');		

		if($this->form_validation->run()==FALSE){			
			$this->session->set_flashdata('errors', validation_errors());			
			$data["id"] = $id ;
			$data["method"] = 'Edit' ;
			$data['com_id'] = $id;
			$companytypes = $this->Companytype_model->getAll();

			$arr = array('-- Company Type --');
			foreach ($companytypes as $key => $value) {
				$arr[$value->comtype_id] = $value->comtype_name;
			}

			$data['companytypes'] = $arr ;
			
			// $dir_refs = $this->Directory_model->getmain();

			// $arr = array('-- Directory --');
			// foreach ($dir_refs as $key => $value) {
			// 	$arr[$value->dir_id] = $value->dir_name_th;
			// 	$dir_refs2 = $this->Directory_model->getsub($value->dir_id);
			// 	foreach ($dir_refs2 as $key2 => $value2) {
			// 		$arr[$value2->dir_id] = '----- '.$value2->dir_name_th;
			// 	}
			// }

			// $data['directorys'] = $arr;
			
			// $packages = $this->Package_model->getAll();

			// $arr = array('-- Package --');
			// foreach ($packages as $key => $value) {
			// 	$arr[$value->package_id] = $value->name;
			// }
			$search['com_id'] = $id;

			$data["countnew"] = $this->Quotation_model->countnew($search);
			
			$data['company'] = $this->Company_model->getOne($id);
			
			$data['contentview'] = 'pagecompany/company_form';	
			

			$this->load->view('layoutcompany/main',$data);				
			
		}else{

			$comtype_id = $this->input->post('comtype_id');
			$package_id = $this->input->post('package_id');
			$com_title_en = $this->input->post('com_title_en');
			$com_title_th = $this->input->post('com_title_th');
			$metaKeyword = $this->input->post('metaKeyword');
			$metaDescription = $this->input->post('metaDescription');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$dir_id = $this->input->post('dir_id');
			$com_website = $this->input->post('com_website');
			$com_name_en = $this->input->post('com_name_en');
			$com_name_th = $this->input->post('com_name_th');
			$com_desc_en = $this->input->post('com_desc_en');
			$com_desc_th = $this->input->post('com_desc_th');
			$com_address_en = $this->input->post('com_address_en');
			$com_address_th = $this->input->post('com_address_th');
			$com_zipcode = $this->input->post('com_zipcode');
			$com_phone = $this->input->post('com_phone');
			$hotline = $this->input->post('hotline');			
			$com_fax = $this->input->post('com_fax');
			$com_email = $this->input->post('com_email');
			$url1 = $this->input->post('url1');
			$url2 = $this->input->post('url2');
			$ebookstore = $this->input->post('ebookstore');
			$expire = $this->input->post('expire');
			$latitude = $this->input->post('latitude');
			$longitude = $this->input->post('longitude');
			$facebook = $this->input->post('facebook');
			$facebook_fanpage = $this->input->post('facebook_fanpage');
			$facebookid = $this->input->post('facebookid');
			$youtube = $this->input->post('youtube');
			// $youtube_id = $this->input->post('youtube_id');
			$twitter = $this->input->post('twitter');
			$line_id = $this->input->post('line_id');
			$packageProductLimit = $this->input->post('packageProductLimit');
			$workingreport_id = $this->input->post('workingreport_id');
			$google_anlytic = $this->input->post('google_anlytic');
			$params = array(
							// 'comtype_id'=>$comtype_id,	
							// 'packageBG'=>$packageBG,	
							// 'package_text_color'=>$package_text_color,	
							// 'packageBG_hd'=>$packageBG_hd,	
							// 'PackageBG_btn_cat'=>$PackageBG_btn_cat,
							// 'PackageBG_btn_submit'=>$PackageBG_btn_submit,	
							// 'PackageBG_btn_submit_hover'=>$PackageBG_btn_submit_hover,
							// 'brand_show'=>$brand_show,


							// 'package_id'=>$package_id,	
							// 'com_title_en'=>$com_title_en,	
							// 'com_title_th'=>$com_title_th,	
							// 'metaKeyword'=>$metaKeyword,	
							// 'metaDescription'=>$metaDescription,	
							// 'username'=>$username,	
							// 'password'=>$password,	
							// 'dir_id'=>$dir_id,	
							// 'com_website'=>$com_website,	
							'com_name_en'=>$com_name_en,	
							'com_name_th'=>$com_name_th,								
							'com_address_en'=>$com_address_en,	
							'com_address_th'=>$com_address_th,	
							'com_zipcode'=>$com_zipcode,	
							'com_phone'=>$com_phone,
							'hotline'=>$hotline,								
							'com_fax'=>$com_fax,	
							'com_email'=>$com_email,	
							'url1'=>$url1,	
							'url2'=>$url2,	
	
							'latitude'=>$latitude,	
							'longitude'=>$longitude,	
							'facebook'=>$facebook,	
							'facebook_fanpage'=>$facebook_fanpage,	
							'facebookid'=>$facebookid,	
							'youtube'=>$youtube,

							'twitter'=>$twitter,	
							'line_id'=>$line_id,	

							'uby'=>$this->session->userdata('ssfullname'),
							'udate'=> date('Y-m-d H:i:s')				
							);

			// print_r($params);
			// exit();
			$this->db->where('com_id', $id);
			$this->db->update('company',$params);

			$this->session->set_flashdata('msg','Edit Complete');
		

			redirect('customeradmin/Company/edit/'.$id);				
			
		}
	}

	public function delete($id){

		$this->db->where('com_id',$id);
		$this->db->delete('company');

		$filepath = "assets/images/logo/logo".$id.".jpg";
		
		if(is_file($filepath)){
			unlink($filepath);
		}

		$this->session->set_flashdata('msg','Delete Complete');

		redirect('Company');	
	}

}

?>