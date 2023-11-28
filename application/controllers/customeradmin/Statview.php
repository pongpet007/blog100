<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statview extends CI_Controller {

	public function __construct(){
			
		parent::__construct();
		$this->load->model('pagesthai/Province_model');	
		$this->load->model('pagesthai/Category_model');	
		$this->load->model('pagesthai/Position_model');	
		$this->load->model('pagesthai/Namecard_model');	
		$this->load->model('pagesthai/Amphur_model');	
		$this->load->model('pagesthai/Country_model');	
		$this->load->model('Company_brand_model');
		$this->load->model('Company_model');
		$this->load->model('Company_product_model');
		$this->load->model('Directory_model');
		$this->load->model('Company_category_model');
		$this->load->model('Counter_model');
	}

	public function index($com_id,$brand_show=1)
	{
		//$com_id = 1088;
		if(empty($com_id)){
			redirect(base_url());
		}
				
		$data['subdomain'] = SUBDOMAIN;

		$data['lang'] =  $this->session->userdata('site_lang');
		$data['menudirectorys'] = $this->Directory_model->getmain();
		
		

		$keyword = $this->input->post('keyword');
		$location = $this->input->post('location');
		$search_type = $this->input->post('search_type');

		$order = $this->input->get('order');
		$showitem = $this->input->get('showitem');
		$display = $this->input->get('display');
		$group = $this->input->get('group');

		$data['order'] = $order;
		$data['showitem'] = $showitem;
		$data['display'] = empty($display)?'list':$display;

		$search['keyword'] = $keyword;
		$search['location'] = $location;
		$search['search_type'] = $search_type;

		$data['links'] = '';
		$data['search'] = $search;
		$data['categorys'] = $this->Company_category_model->getAll($com_id);
		$data['menu_brands'] = $this->Company_brand_model->getAllMenu($com_id,6);
		#################################################
		$company = $this->Company_model->getOne($com_id);
		
		$data['title'] = $this->session->userdata('site_lang')=='EN'?$company->com_title_en:$company->com_title_th;
		$data['keyword'] = $company->metaKeyword;
		$data['description'] = $company->metaDescription;

		$data['company'] = $company;
		
		$data['com_id'] = $com_id;	
		
		$company_categorys = $this->Company_category_model->getAll($com_id);
		$data['company_categorys'] = $company_categorys;

		$data['product_menus'] = $this->Company_product_model->getAll(3 , 0 , array('keyword'=>'','com_id'=>$com_id));

		#################################################
		////////////////////////////// STAT ////////////////////////////////
		$mName = array('Jan','Feb','Mar','Apr',
				   'May','Jun','Jul','Aug',
				   'Sep','Oct','Nov','Dec');
	
		$today = date('m-Y');
			
		list($cm,$cy) = explode('-',$today);
		
		if(!empty($_REQUEST['m']))
			$m = $_REQUEST['m'];
		else
			$m=$cm;	
		
		if(!empty($_REQUEST['y']))
			$y = $_REQUEST['y'];
		else
			$y=$cy;	
			
		if(empty($_REQUEST['display']))
			$display = "month";
		else
			$display = $_REQUEST['display'];


		if($display=="year")
		{
			$sql ="select year(dt) as y ,count(ip) as c 
				from counter where com_id = $com_id			
				group by year(dt)
				";
			$query = $this->db->query($sql);
			$table = $query->result();
		}
		
		if($display=="month")
		{
			$sql="select month(dt) as m ,count(ip) as c 
			from counter 
			where year(dt) = $y and com_id = $com_id
			group by month(dt)
			";
			$query = $this->db->query($sql);
			$table = $query->result();
		}
		
		if($display=="day")
		{
			$sql = "
				select day(dt) as d ,count(ip) as c 
				from counter  
				where year(dt)= $y and month(dt)= $m and com_id = $com_id
				group by day(dt)
				";
			$query = $this->db->query($sql);
			$table = $query->result();
		}

		//echo $this->db->last_query();

		$data['table'] = $table; 
		$data['y'] = $y;
		$data['m'] = $m;
		$data['display'] = $display;
		$data['mName'] = $mName;
		
		$data['contentview'] = 'brandex/company/content/statview';
		$data['counter'] = $this->Counter_model->count($com_id);
		$this->load->view('brandex/company/layout',$data);

	}

	public function getCategory(){

		$categorys = $this->Category_model->getAll(1000,0);
		$listName = array();
		foreach ($categorys as $category) {
			$listName[] = $category->cat_name_th;
		}
			
		echo json_encode($listName);
	}

	public function getAmphur()
	{
		$province_id = $this->input->get('province_id');

		$amphurs = $this->Amphur_model->getAlls($province_id);
		$arr = array(0=>'-- select --');
		foreach ($amphurs as $amphur) {
			$arr[$amphur->amphur_id] = $amphur->amphur_name;
		}
		echo json_encode($arr);
	}

	public function getJSON()
	{
		$province_id = $this->input->get('province_id');

		if(empty($province_id)){
			echo json_encode(array());
		}	
		else
		{
			// Amphur
			$amphurs = $this->Amphur_model->getAll(array('province_id'=>$province_id));		
			$arr = array('0'=>' -- อำเภอ/เขต -- ');
			foreach ($amphurs as $key => $value) {
				$arr[$value->amphur_id] = $value->amphur_name;
			}
			echo json_encode($arr) ;
		}
	}
	
	public function add()
	{

				// foreach ($this->input->post() as $key => $value) {
				// // echo "$key = $value <br/> ";
				//  echo "\$$key = \$this->input->post('$key');<br/>";
				// //echo "\$this->form_validation->set_rules('$key','$key','trim|required');<br/>	";
				// // echo "'$key'=>\$$key,<br/>";
				//  }

				// exit();


			$this->form_validation->set_rules('cat_name_th','หมวดหมู่','trim|required');			
			$this->form_validation->set_rules('telephone','โทรศัพท์','trim|required');
			$this->form_validation->set_rules('fullname','ชื่อ','trim|required');
			$this->form_validation->set_rules('mobile','มือถือ','trim|required');
			//$this->form_validation->set_rules('website','website','trim|required');
			
			
			$this->session->set_userdata('form_data', $_REQUEST);
			
			if($this->form_validation->run()==FALSE){
				//if($this->input->post('username')){

				$this->session->set_flashdata('errors', validation_errors());
				
				
				$data["id"] = '' ;
				$data["method"] = 'Add' ;
				$data['namecard'] = NULL;

				// countrys
				$countrys = $this->Country_model->getAll();		
				$arr = array('0'=>'-- ประเทศ --');
				foreach ($countrys as $key => $value) {
					if($value->country_id==221)
						$arr[$value->country_id] = $value->short_name;
				}
				$data['countrys'] = $arr ;
				
				// Province
				$provinces = $this->Province_model->getAll(1000,0);		
				$arr = array('0'=>'--Select--');
				foreach ($provinces as $key => $value) {
					$arr[$value->province_id] = $value->province_name;
				}
				$data['provinces'] = $arr ;

				
				// $amphurs = $this->Amphur_model->getAll($search);		
				// $arr = array('0'=>' -- อำเภอ/เขต -- ');
				// foreach ($amphurs as $key => $value) {
				// 	$arr[$value->amphur_id] = $value->amphur_name;
				// }
				// $data['amphurs'] = $arr ;

				// $provinces = $this->Province_model->getAll1(1000,0);
				// 	$arr = array('0'=>'--Select--');
				// 	foreach ($provinces as $key => $value) {
				// 		$arr[$value->province_id] = $value->province_name;
				// 	}
				// $data['provinces'] = $arr ;

				$amphurs = $this->Amphur_model->getAll($search);
				
					$arr = array('0'=>'--Select--');
					foreach ($amphurs as $key => $value) {
						$arr[$value->amphur_id] = $value->amphur_name;
					}
				$data['amphurs'] = $arr ;


				// Position
				$positions = $this->Position_model->getAll();		
				$arr = array('0'=>' -- Position -- ');
				foreach ($positions as $key => $value) {
					$arr[$value->position_id] = $value->position_en;
				}
				$data['positions'] = $arr ;
				

				$data['contentview'] = 'pagecompany/namecard_form';		
				$this->load->view('layoutcompany/main',$data);	
				
				
			}else{


				$cat_name_th = $this->input->post('cat_name_th');				
				$country_id = "221";
				$province_id = $this->input->post('province_id');
				$amphur_id = $this->input->post('amphur_id');
				$position_id = $this->input->post('position_id');
				$company_name = $this->input->post('company_name');
				$company_name_en = $this->input->post('company_name_en');
				$fullname = $this->input->post('fullname');
				$fullname_en = $this->input->post('fullname_en');
				$telephone = $this->input->post('telephone');
				$mobile = $this->input->post('mobile');
				$email = $this->input->post('email');
				$website = $this->input->post('website');

				$category = $this->Category_model->checkExists($cat_name_th);
				$cat_id = $category->cat_id;
				
				if(sizeof($category)==0){
					$params = array('cat_name_th'=>$cat_name_th,
								'cby'=>$this->session->userdata('ssfullname'),
								'cdate'=> date('Y-m-d H:i:s') );

					$this->db->insert('category',$params);
				 
					$cat_id = $this->db->insert_id();			

				}
				// echo $cat_id;

				// exit();
					
				
				$params = array('cat_id'=>$cat_id,
								'country_id'=>$country_id,								
								'province_id'=>$province_id,								
								'amphur_id'=>$amphur_id,																
								'position_id'=>$position_id,
								'telephone'=>$telephone,
								'company_name'=>$company_name,
								'company_name_en'=>$company_name_en,
								'fullname'=>$fullname,
								'fullname_en'=>$fullname_en,
								'mobile'=>$mobile,
								'email'=>$email,
								'website'=>$website,
								'cby'=>$this->session->userdata('ssfullname'),
								'cdate'=> date('Y-m-d H:i:s') );

				$this->db->insert('namecard',$params);
				 
				$id = $this->db->insert_id();

				
				// if($this->db->affected_rows()==0){
				// 	echo $this->db->last_query(); 
				// 	exit();
				// }
				$this->session->set_flashdata('msg','Add Complete');
				// if($this->session->userdata('sslevel') == 1)
		  //       redirect('Report/proofsheet');  
		  //       else
		  //       redirect('Proofsheet');		
				echo "<script>alert('action complete');window.opener.location.reload();window.close();</script>";
				
			}

	}

	public function edit($id)
	{
			$this->form_validation->set_rules('cat_name_th','หมวดหมู่','trim|required');			
			$this->form_validation->set_rules('telephone','โทรศัพท์','trim|required');
			$this->form_validation->set_rules('fullname','ชื่อ','trim|required');
			$this->form_validation->set_rules('mobile','มือถือ','trim|required');
			//$this->form_validation->set_rules('website','website','trim|required');
			
			
			$this->session->set_userdata('form_data', $_REQUEST);
			
			if($this->form_validation->run()==FALSE){
				//if($this->input->post('username')){

				$this->session->set_flashdata('errors', validation_errors());
				
				
				$data["id"] = $id ;
				$data["method"] = 'edit' ;
				$data['namecard'] = NULL;
				
				// countrys
				$countrys = $this->Country_model->getAll();		
				$arr = array('0'=>'-- ประเทศ --');
				foreach ($countrys as $key => $value) {
					if($value->country_id==221)
						$arr[$value->country_id] = $value->short_name;
				}
				$data['countrys'] = $arr ;
				
				// Province
				$provinces = $this->Province_model->getAll(1000,0);		
				$arr = array('0'=>'--Select--');
				foreach ($provinces as $key => $value) {
					$arr[$value->province_id] = $value->province_name;
				}
				$data['provinces'] = $arr ;

				// Amphur
				$amphurs = $this->Amphur_model->getAll();		
				$arr = array('0'=>' -- อำเภอ/เขต -- ');
				foreach ($amphurs as $key => $value) {
					$arr[$value->amphur_id] = $value->amphur_name;
				}
				$data['amphurs'] = $arr ;

				// Position
				$positions = $this->Position_model->getAll();		
				$arr = array('0'=>' -- Position -- ');
				foreach ($positions as $key => $value) {
					$arr[$value->position_id] = $value->position_en;
				}
				$data['positions'] = $arr ;
				
				
				$data['namecard'] = $this->Namecard_model->getOne($id);
				$data['category'] = $this->Category_model->getOne($data['namecard']->cat_id);


				$data['contentview'] = 'pages/namecard_form';		
				$this->load->view('layout/main',$data);	
				
				
			}else{


				$cat_name_th = $this->input->post('cat_name_th');				
				$country_id = "221";
				$province_id = $this->input->post('province_id');
				$amphur_id = $this->input->post('amphur_id');
				$position_id = $this->input->post('position_id');
				$company_name = $this->input->post('company_name');
				$company_name_en = $this->input->post('company_name_en');
				$fullname = $this->input->post('fullname');
				$fullname_en = $this->input->post('fullname_en');
				$telephone = $this->input->post('telephone');
				$mobile = $this->input->post('mobile');
				$email = $this->input->post('email');
				$website = $this->input->post('website');

				$category = $this->Category_model->checkExists($cat_name_th);
				$cat_id = $category->cat_id;
				
				if(sizeof($category)==0){
					$params = array('cat_name_th'=>$cat_name_th,
								'cby'=>$this->session->userdata('ssfullname'),
								'cdate'=> date('Y-m-d H:i:s') );

					$this->db->insert('category',$params);
				 
					$cat_id = $this->db->insert_id();			

				}
				// echo $cat_id;

				// exit();
					
				
				$params = array('cat_id'=>$cat_id,
								'country_id'=>$country_id,								
								'province_id'=>$province_id,								
								'amphur_id'=>$amphur_id,																
								'position_id'=>$position_id,
								'telephone'=>$telephone,
								'company_name'=>$company_name,
								'company_name_en'=>$company_name_en,
								'fullname'=>$fullname,
								'fullname_en'=>$fullname_en,
								'mobile'=>$mobile,
								'email'=>$email,
								'website'=>$website,
								'uby'=>$this->session->userdata('ssfullname'),
								'udate'=> date('Y-m-d H:i:s') );

				$this->db->where('namecard_id',$id);
				$this->db->update('namecard',$params);
				 
				// $id = $this->db->insert_id();

				
				// if($this->db->affected_rows()==0){
				// 	echo $this->db->last_query(); 
				// 	exit();
				// }
				$this->session->set_flashdata('msg','Edit Complete');
				// if($this->session->userdata('sslevel') == 1)
		  //       redirect('Report/proofsheet');  
		  //       else
		  //       redirect('Proofsheet');		
				echo "<script>alert('action complete');window.opener.location.reload();window.close();</script>";
				
			}

	}

	public function delete($id)
	{
		$this->db->where('namecard_id',$id);
		$this->db->delete('namecard');

		$this->session->set_flashdata('msg','delete Complete');
		
		echo "<script>alert('action complete');window.opener.location.reload();window.close();</script>";
	}

}

?>