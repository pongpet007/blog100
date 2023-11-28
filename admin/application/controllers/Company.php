<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {
	private $fields = array();
	public function __construct(){
		
		parent::__construct();
		$this->load->model('Menu_admin_model');	
		$this->load->model('Menu_admin_type_model');	
		$this->load->model('Company_model');	
		$this->load->model('Company_language_model');	
		$this->load->model('Country_model');	
		$this->load->model('Package_model');	
		$this->load->model('Directory_model');	
		$this->load->model('Companytype_model');	
		$this->load->model('Amphur_model');	
		$this->load->model('Province_model');	
		$this->load->model('Theme_model');	
	
	}
	public function sql()
	{
			$this->form_validation->set_rules('sqlexecute','sqlexecute','trim|required');			
		
			if($this->form_validation->run()==FALSE){
				$this->session->set_flashdata('errors', validation_errors());			
			
			$data["id"] = 1 ;
			$data["method"] = 'sql' ;
			$data['com_id'] = 1;
			$data['fields'] =$this->fields;

			$data['menu_admins'] =  $this->Menu_admin_model->getAll();
			
			
			$company = $this->Company_model->getOne(1);
			$data['company'] =$company;
			///////////////////////////////////////////////////////////

				
				// print_r($arr);
				// exit();
				$data['contentview'] = 'pagecompany/execute_form';	
				$this->load->view('layoutcompany/main',$data);	
				
				
			}else{
				
				$sqlexecute = $this->input->post('sqlexecute');	
				if(strlen($sqlexecute)>0){
					$this->db->query($sqlexecute) or die($this->db->error());
				}
				redirect("Company/Edit/1");
			}	

	}
	
	public function index()
	{
		// print_r($_SERVER['SERVER_NAME']);exit();
		$keyword = $this->input->get('keyword');
		$cat_id = $this->input->get('cat_id');
		$country_id = $this->input->get('country_id');

		$search['keyword'] = $keyword;
		$search['cat_id'] = $cat_id;
		$search['country_id'] = $country_id;

		
		if ($search['country_id']==null or $search['country_id']==0) {
			$search['country_id'] = 236;
		}

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
		
		$config = $this->config->item('pagination');
		
		$config["base_url"] = base_url() . "Company/index/";
		$config["total_rows"] = $this->Company_model->count($search);

		$config["per_page"] = 20;
		$config["uri_segment"] = 3;
		$config['reuse_query_string'] = true;

		$this->pagination->initialize($config);		
		$data["links"] = $this->pagination->create_links();
		
		$data['total_rows'] =  $config["total_rows"];
		$start = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;	
		
		$company = $this->Company_model->getAll($config["per_page"],$start,$search);

		foreach ($company as $company_new) {
			$company_new->languages = $this->Company_language_model->getAll(array('com_id'=>$company_new->com_id));	
		}

		$data['company'] = $company;
		// print_r($company);exit();

		// echo $this->db->last_query();
		// exit();
		$data['search'] = $search;

		$country_id = array('38', '46', '111', '120', '151', '221', '236', '243');
		$country = $this->Country_model->getAll2($country_id);

		$arr2 = array('-- Select Country --');
		foreach ($country as $countrys) {
			$arr2[$countrys->country_id] = $countrys->short_name;
		}				
		$data['country'] = $arr2;

		// $data['company'] = $this->Company_model->getOne($com_id);
		$data['contentview']  = 'pagecompany/company_show';

		$this->load->view('layoutcompany/main',$data);
	}

	public function add(){
		
		$params = array(								
						'com_website'=>""
						 );
		
		$this->db->insert('company',$params);

		$com_id = $this->db->insert_id();
				
		// $params = array('position'=>$brand_id);

		// $this->db->where('brand_id', $brand_id);
		// $this->db->update('company_brand',$params);

		$country_id = "";
		$country = $this->Country_model->getAll2($country_id);

		foreach ($country as  $countrynew) {
			$params = array(
					'com_id'=>$com_id,
					'country_id'=>$countrynew->country_id
			);
			$this->db->insert('company_language',$params);
		}

		redirect("Company/edit/$com_id");

	}

	public function edit($com_id){
		// Company 
		$id = $com_id;		
		$this->form_validation->set_rules('id','','trim|required');		
					
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
						
			/////////////////////////////// themes //////////////////////////////
			$themes = $this->Theme_model->getAll();		
			$arr = array('0'=>' -- Theme -- ');
			foreach ($themes as $key => $value) {
				$arr[$value->theme_id] = $value->theme_name;
			}
			$data['themes'] = $arr ;

			///////////////////////////// countrys  dropdown////////////////////////
			$countrys = $this->Country_model->getAll();		
			$arr = array('0'=>' -- All Country -- ');
			foreach ($countrys as $key => $value) {
				$arr[$value->country_id] = $value->short_name;
			}
			$data['countrys'] = $arr ;

			//////////////////////////// Language ////////////////////////////
			$countrys = $this->Country_model->getAll();					
			foreach ($countrys as $country) {
				$country->company_languages = $this->Company_language_model->getByCountry($com_id, $country->country_id);
			}			
			$data['languages'] = $countrys ;

			
			///////////////////////////////////////////////////////////

			$companytypes = $this->Companytype_model->getAll();				
			$arr = array('-- Company Type --');
			foreach ($companytypes as $key => $value) {
				$arr[$value->comtype_id] = $value->comtype_name;
			}
			$data['companytypes'] = $arr ;
			
			///////////////////////////////////////////////////////////

			$packages = $this->Package_model->getAll();
				
			$arr = array('-- Package --');
			foreach ($packages as $key => $value) {
				$arr[$value->package_id] = $value->name;
			}

			$data['packages'] = $arr ;
			///////////////////////////////////////////////////////////

			$company = $this->Company_model->getOne($id);
			$data['company'] =$company;
			///////////////////////////////////////////////////////////

			$provinces = $this->Province_model->getAll();				
			$arr = array('-- จังหวัด --');
			foreach ($provinces as $key => $value) {
				$arr[$value->province_id] = $value->province_name;
			}
			$data['provinces'] = $arr ;
			///////////////////////////////////////////////////////////

			if($company->province_id>0){
					
					$amphurs = $this->Amphur_model->getAll(array('province_id'=>$company->province_id));
					$arr = array('-- อำเภอ --');
					foreach ($amphurs as $key => $value) {
						$arr[$value->amphur_id] = $value->amphur_name;
					}

					$data['amphurs'] = $arr ;

			}
			else
			{
				$data['amphurs'] = array();
			}
		
			
			$data['contentview'] = 'pagecompany/company_form';	
			

			$this->load->view('layoutcompany/main',$data);				
			
		}else{


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

			$staff_count = $this->input->post('staff_count');
			$comtype_id = $this->input->post('comtype_id');
			$package_id = $this->input->post('package_id');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$dir_id = $this->input->post('dir_id');
			$com_website = $this->input->post('com_website');
			$province_id = $this->input->post('province_id');
			$amphur_id = $this->input->post('amphur_id');
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
			$google_anlytic = $this->input->post('google_anlytic');

			$facebook_messenger = $this->input->post('facebook_messenger');
			$location = $this->input->post('location');
			$instargram = $this->input->post('instargram');
			
			if(preg_match('/v=/',$youtube)){
				preg_match('/v=([0-9a-zA-Z]+)/', $youtube, $matches);
				$vid = $matches[1];
				$youtube = 'https://www.youtube.com/embed/'.$vid;
			}

			$twitter = $this->input->post('twitter');
			$line_id = $this->input->post('line_id');
			$packageProductLimit = $this->input->post('packageProductLimit');
							
			$css = $this->input->post('css');	
			
			$params = array('comtype_id'=>$comtype_id,
							'packageBG'=>$packageBG,
							'PackageBG_Hover'=>$PackageBG_Hover,
							'package_text_color'=>$package_text_color,
							'category_color'=>$category_color,		
							'staff_count'=>$staff_count,	
							'package_id'=>$package_id,	
							'username'=>$username,	
							'password'=>$password,	
							'dir_id'=>$dir_id,	
							'com_website'=>$com_website,	
							'province_id'=>$province_id,	
							'amphur_id'=>$amphur_id,	
							'com_zipcode'=>$com_zipcode,	
							'com_phone'=>$com_phone,
							'hotline'=>$hotline,							
							'com_fax'=>$com_fax,	
							'com_email'=>$com_email,	
							'url1'=>$url1,	
							'url2'=>$url2,	
							'ebookstore'=>$ebookstore,	
							'expire'=>$expire,	
							'latitude'=>$latitude,	
							'longitude'=>$longitude,	
							'facebook'=>$facebook,	
							'facebook_fanpage'=>$facebook_fanpage,	
							'facebookid'=>$facebookid,	
							'youtube'=>$youtube,	
							'google_anlytic'=>$google_anlytic,	
							'twitter'=>$twitter,	
							'line_id'=>$line_id,

							'instargram'=>$instargram,	
							'facebook_messenger'=>$facebook_messenger,	
							'location'=>$location,	
							'packageProductLimit'=>$packageProductLimit,								
							'css'=>$css,
							'uby'=>$this->session->userdata('ssfullname'),
							'udate'=> date('Y-m-d H:i:s')				
							);
					
			$this->db->where('com_id', $id);
			$this->db->update('company',$params);

						
			
			if($_FILES['icon']['size']>0){
				$filepath = "../images/icon.png";
				move_uploaded_file($_FILES['icon']['tmp_name'], $filepath);

			}

			if($_FILES['logo']['size']>0){

				$filename2 = "logo.webp";
				$img = pathinfo($_FILES['logo']['name']);
				$filename = "logo";
				$extension = $img["extension"];

				$foldertemp = "../images/logo/temp/";
				$temp_filepath = $foldertemp.$filename.'.'.$extension;

				move_uploaded_file($_FILES['logo']['tmp_name'], $temp_filepath);

				$f_type=$_FILES['logo']['type'];

				if (preg_match('/jpg|jpeg/i',$f_type)){
		        	$imageTmp=imagecreatefromjpeg($temp_filepath);
				}
			    else if (preg_match('/png/i',$f_type)){
			        $imageTmp=imagecreatefrompng($temp_filepath);
			    }
			    else if (preg_match('/gif/i',$f_type)){
			        $imageTmp=imagecreatefromgif($temp_filepath);
			    }
			    else if (preg_match('/bmp/i',$f_type)){
			        $imageTmp=imagecreatefrombmp($temp_filepath);   
			    }else if (preg_match('/webp/i',$f_type)){
			        $imageTmp=imagecreatefromwebp($temp_filepath);   
			    }
				$w=imagesx($imageTmp);
				$h=imagesy($imageTmp);

				// converter webp
				$webp=imagecreatetruecolor($w,$h);
				$backgroundColor = imagecolorallocatealpha($webp, 0, 0, 0, 127);
				imagefill($webp, 0, 0, $backgroundColor);
				imagecopy($webp,$imageTmp, 0, 0, 0, 0,$w,$h);
				imagewebp($webp, "../images/logo/{$filename2}", 100);

				imagedestroy($imageTmp);
				imagedestroy($webp);
				
			}
			

			if($_FILES['logo2']['size']>0){

				// $filepath = "../images/logo/logo_long.png";
				// move_uploaded_file($_FILES['logo2']['tmp_name'], $filepath);
				$filename2 = "logo_long.webp";
				$img = pathinfo($_FILES['logo2']['name']);
				$filename = "logo_long";
				$extension = $img["extension"];

				$foldertemp = "../images/logo/temp/";
				$temp_filepath = $foldertemp.$filename.'.'.$extension;

				move_uploaded_file($_FILES['logo2']['tmp_name'], $temp_filepath);

				$f_type=$_FILES['logo2']['type'];

				if (preg_match('/jpg|jpeg/i',$f_type)){
		        	$imageTmp=imagecreatefromjpeg($temp_filepath);
				}
			    else if (preg_match('/png/i',$f_type)){
			        $imageTmp=imagecreatefrompng($temp_filepath);
			    }
			    else if (preg_match('/gif/i',$f_type)){
			        $imageTmp=imagecreatefromgif($temp_filepath);
			    }
			    else if (preg_match('/bmp/i',$f_type)){
			        $imageTmp=imagecreatefrombmp($temp_filepath);   
			    }else if (preg_match('/webp/i',$f_type)){
			        $imageTmp=imagecreatefromwebp($temp_filepath);   
			    }

				$w=imagesx($imageTmp);
				$h=imagesy($imageTmp);

				// converter webp
				$webp=imagecreatetruecolor($w,$h);
				$backgroundColor = imagecolorallocatealpha($webp, 0, 0, 0, 127);
				imagefill($webp, 0, 0, $backgroundColor);
				imagecopy($webp,$imageTmp, 0, 0, 0, 0,$w,$h);
				imagewebp($webp, "../images/logo/{$filename2}", 100);

				imagedestroy($imageTmp);
				imagedestroy($webp);
			}
			

			if($_FILES['qrcode']['size']>0){
				$filepath = "../images/qrcode.png";
				move_uploaded_file($_FILES['qrcode']['tmp_name'], $filepath);

			}


			if($_FILES['map']['size']>0){
				$filepath = "../images/map/".$id.".jpg";
				move_uploaded_file($_FILES['map']['tmp_name'], $filepath);

			}

			if($_FILES['bg']['size']>0){
				$filepath = "../images/bg/".$id.".jpg";
				move_uploaded_file($_FILES['bg']['tmp_name'], $filepath);

			}
			
			if($_FILES['productbanner']['size']>0){
				$filepath = "../images/product-banner.jpg";
				move_uploaded_file($_FILES['productbanner']['tmp_name'], $filepath);

			}

			if($_FILES['bgfooter']['size']>0){
				$filepath = "../images/bgfooter.png";
				move_uploaded_file($_FILES['bgfooter']['tmp_name'], $filepath);

			}


			$this->session->set_flashdata('msg','Edit Complete');
		

			echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";				
			
		}
	}

	public function getAmphur($province_id)
	{
		$amphurs = $this->Amphur_model->getAll(array('province_id'=>$province_id));
				
		$arr = array('-- อำเภอ --');
		foreach ($amphurs as $key => $value) {
			$arr[$value->amphur_id] = $value->amphur_name;
		}

		echo json_encode(($arr));

	}

	public function delete($id){

		$this->db->where('com_id',$id);
		$this->db->delete('company');

		$filepath = "../images/logo/logo".$id.".jpg";
		
		if(is_file($filepath)){
			unlink($filepath);
		}
		
		$filepath = "../images/map/".$id.".jpg";
		
		if(is_file($filepath)){
			unlink($filepath);
		}

		$this->session->set_flashdata('msg','Delete Complete');

		redirect('Company');	
	}

	public function getLanguageJson($company_language_id)
	{
		$language = $this->Company_language_model->getOne($company_language_id);
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
		$com_name = $this->input->post('com_name');
		$com_address = $this->input->post('com_address');
		$com_desc_short = $this->input->post('com_desc_short');
		$com_desc = $this->input->post('com_desc');
		$company_language_id = $this->input->post('company_language_id');
		$languagemethod = $this->input->post('languagemethod');

		if($languagemethod=='add'){
			$params = array();
			$params['country_id'] = $country_id;
			$params['meta_title'] = $meta_title;
			$params['meta_keyword'] = $meta_keyword;
			$params['meta_description'] = $meta_description;
			$params['com_name'] = $com_name;
			$params['com_address'] = $com_address;
			$params['com_desc_short'] = $com_desc_short;
			$params['com_desc'] = $com_desc;
			$params['cdate'] = date('Y-m-d H:i:s');
			$params['udate'] = date('Y-m-d H:i:s');
			$params['cby'] = $this->session->userdata('ssfullname');
			$params['uby'] = $this->session->userdata('ssfullname');
			if($country_id > 0)
			$this->db->insert('company_language',$params);
		}

		if($languagemethod=='edit'){
			$params = array();
			$params['country_id'] = $country_id;
			$params['meta_title'] = $meta_title;
			$params['meta_keyword'] = $meta_keyword;
			$params['meta_description'] = $meta_description;
			$params['com_name'] = $com_name;
			$params['com_address'] = $com_address;
			$params['com_desc_short'] = $com_desc_short;
			$params['com_desc'] = $com_desc;			
			$params['udate'] = date('Y-m-d H:i:s');			
			$params['uby'] = $this->session->userdata('ssfullname');

			if($country_id > 0){
				$this->db->where('company_language_id',$company_language_id);
				$this->db->update('company_language',$params);
			}
			
		}		

		echo "save complete";
	}

	public function deletelanguage($company_language_id)
	{
		if($company_language_id > 0){
			$this->db->where('company_language_id',$company_language_id);
			$this->db->delete('company_language');
		}
	}

}

?>