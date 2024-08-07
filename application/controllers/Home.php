<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->model('Brand_model');
		$this->load->model('Company_model');
		$this->load->model('Company_splash_model');
		$this->load->model('Products_model');
		$this->load->model('News_model');
		$this->load->model('Blog_model');
		$this->load->model('Banner_model');
		$this->load->model('Counter_model');
		$this->load->model('Country_model');
		$this->load->model('Category_model');
		$this->load->model('Gallery_model');
		$this->load->model('Slide_model');

		$this->load->model('Products_picture_model');

		$this->load->model('cms/Content_model');
		$this->load->model('cms/Content_row_model');
		$this->load->model('cms/Content_row_item_model');
		$this->load->model('cms/Content_row_item_template_model');
		$this->load->model('cms/Menu_model');
		
	}

	public function index()
	{	
		$domainname = $_SERVER['SERVER_NAME'];
		// if (strstr($domainname, "www")) {
		// 	$domainname = str_replace("www.","",$domainname);
		// }
		preg_match('/^(?:https?:\/\/)?(?:[^@\n]+@)?(?:www\.)?([^:\/\n?]+)/', $domainname , $matches);     
		$domainname = $matches[1];
		// echo $domainname;
		//korn
		$data = array();
		$company = $this->Company_model->getOneDomain($domainname);
		// print_r($this->db->last_query());exit();
		$data['meta_title'] = $company->meta_title;
		$data['meta_keyword'] = $company->meta_keyword;
		$data['meta_description'] = $company->meta_description;

		
		// if (is_object($company) and $company->com_id > 0) {
		// 	// ปรับใหม่วันที่ 10/1/2024
		// 	if(!($this->session->has_userdata('viewed'))){

		// 		$ipAddress = $_SERVER['REMOTE_ADDR'];
		// 		$params = array();
		// 		$params['com_id'] = $company->com_id;
		// 		$params['ip'] = $ipAddress;
		// 		$params['dt'] = date('Y-m-d H:i:s');
		// 		$this->db->insert('counter',$params);
		// 		$this->session->set_userdata('viewed',1);				
				
		// 	}
		// }
		
		// print_r($_SESSION);

		$data['companyData'] = $company;

		$urlhome = $this->uri->segment(1);
		
		if ($urlhome!="") {
			
		}else{
			redirect($this->session->userdata('site_lang_name').'/home');
		}

		


		$menu_id = "1";
		$menu_meta = $this->Menu_model->getOne($menu_id);
		

		$data['lang'] = $this->session->userdata('site_lang');

		////////////// Counter//////////////////
		$data['counter'] = $this->Counter_model->count($company->com_id);

		////////////////////// Theme ///////////////////////////////////
		$data['brand'] = $this->Brand_model->getAll();
		// print_r($data['brand']);exit();
		

		$data['countrys'] = $this->Country_model->getAll();		

		$categorys  = $this->Category_model->getAll();
		// $categorys  = $this->Category_model->getSub(12);
		
		$data['categorys'] = $categorys;
		// print_r($data['categorys']);exit();
		$get_subs =array();
		$arr = array();
		

		$orderby="`products`.`orders_index` asc";
		
		foreach ($categorys as $cat_all) {

			$arr[] = $cat_all->cat_id;

			if ($categorys > 0) {
				$get_subs = $this->Category_model->getSubCat(array('cat_id'=>$cat_all->cat_id));
				

				if (count($get_subs)>0) {
					$catarr = array();
					foreach ($get_subs as $newget_subs) {
						$catarr[] = $newget_subs->cat_id;
					}

					// foreach ($catarr as $newcatarr ) {

					$pro_sub = $this->Products_model->getAll3($company->display_index_product_limit,0,$catarr,$orderby);
					$cat_all->products	= $pro_sub;

				}else {
					$catarr = array();
					$catarr[] = $cat_all->cat_id;
					
					$pro_sub = $this->Products_model->getAll3($company->display_index_product_limit,0,$catarr,$orderby);
					$cat_all->products	= $pro_sub;
				} 
			}
		}


		// ***************************  OLD  ***********************************

		$search = array();
		
		$data['products'] = $categorys;


		// print_r($this->db->last_query());
		// exit();
		##################################################################

		$bannermaintype = '1';
		$banneradstype = '2';

		// $getbanner_id = 

		$data['bannermain']  = $this->Banner_model->getAllHomePage($company->com_id,$bannermaintype);
		// print_r($this->db->last_query());exit();
		$data['bannerads']  = $this->Banner_model->getAllHomePage($company->com_id,$banneradstype);
		// print_r($data['bannerads']);exit();
		// print_r($this->db->last_query());exit();
		// $brand_id = array();
		$brand_active = $this->Brand_model->getAll();
		foreach ($brand_active as $key => $new_brand_active) {
			$search['brand_id'][] = $new_brand_active->brand_id;
		}

		$productsallnew  = $this->Products_model->getAllNew(12,0,$company->com_id,$search);
		// print_r($this->db->last_query());exit();
		foreach ($productsallnew as $key => $new_productsallnew) {
			$new_productsallnew->pictures = $this->Products_picture_model->getAll($new_productsallnew->pro_id);
		}

		$data['productsallnew'] = $productsallnew;
		$productscat = array();
		$getAllCat  = $this->Category_model->getAll();
		foreach ($getAllCat as $key => $new_getAllCat) {
			$productscat = $this->Products_model->getAllCat($new_getAllCat->cat_id,$company->com_id);
			// echo $this->db->last_query();
			// exit();
			foreach ($productscat as $key => $new_productscat) {
				$new_productscat->pictures = $this->Products_picture_model->getAll($new_productscat->pro_id);
			}
			// print_r($productscat);
			// exit();
			$data['productsallnewCat'][] = $productscat;

		}
		// print_r($data['productsallnewCat']);exit();
		// $productsallCat  = $this->Products_model->getAllCat(12,0,$company->com_id);

		// print_r($data['productsallnew']);exit();
		$data['splash'] = $this->Company_splash_model->getActive();

		$tagss = $this->Products_model->getTags($search,$company->com_id);

		$arr = array();
		$row = 0;
		foreach ($tagss as $key => $new_tagss) {
			if(strstr($new_tagss->tags, ',')){
				$keywords = explode(',', $new_tagss->tags);

				$keywords2 = explode(',', $new_tagss->tags_url);
                                            // print_r($keywords);
				for($i=0;$i< sizeof($keywords);$i++){
					$arr[$row][0] = trim($keywords[$i]);
					$arr[$row][1] = trim($keywords2[$i]);
					$row++;
				}
			}
			else{

				$arr[$row][0] = $new_tagss->tags;
				$arr[$row][1] = $new_tagss->tags_url;
				$row++;
			}           
			$newarr = array();
			for($x =0;$x< sizeof($arr);$x++){
				if(!in_array($arr[$x][1] , $newarr)){
					$newarr[$arr[$x][1]] =  $arr[$x][0];
				}
			}
		}

		$data['tags'] = $newarr;
		$data["news"] = $this->News_model->getAll(12,0);
		// print_r($data["news"]);exit();
		/////////////////////// get products /////////////////////////////

		$this->load->view('theme_blog_2023/index',$data);	

	}
	
	public function index2(){
		$this->load->view('theme_2020_v1/commingsoon');
	}

	public function sc()
	{
		// echo "OK";
		$companys = $this->Company_model->getAll(1000,0);
		$cmd = "";
		foreach($companys as $company){
			$domain = $company->com_website;
			// $cmd .= "cd /home/brand100/domains/$domain/public_html<br>";
			// $cmd .= "rm -rf * <br>";
			// $cmd .= "git clone https://github.com/pongpet007/blog100.git /home/brand100/domains/$domain/public_html<br>";
			// $cmd .= "git config --global --add safe.directory /home/brand100/domains/$domain/public_html<br><br>";	
			
			// $cmd .= "cd /home/brand100/domains/$domain/public_html  && \\ <br>";
			// $cmd .= "git pull <br><br>";

			// $cmd .= "cd /home/brand100/domains/$domain/public_html  && \\ <br>";
			// $cmd .= "git restore ./ <br><br>";
			
			$cmd .= "cd /home/brand100/domains/$domain/public_html <br>";
			$cmd .= "chown -hR brand100:brand100 ./ <br>";
			// $cmd .= "chmod -R 755 * <br>";
			


		}
		echo $cmd;
	}

	public function stat()
	{
		
		$data["categorys"] = $this->Category_model->getAll();
		$data['lang'] = $this->session->userdata('site_lang');

		if ($data['lang']=221) {
			$data['language'] = "เปลี่ยนภาษา";
		}else{
			$data['language'] = "Change Language";
		}
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
		////////////////////// Theme ///////////////////////////////////

		$domainname = $_SERVER['SERVER_NAME'];
		preg_match('/^(?:https?:\/\/)?(?:[^@\n]+@)?(?:www\.)?([^:\/\n?]+)/', $domainname , $matches);     
		$domainname = $matches[1];
		$company = $this->Company_model->getOneDomain($domainname);		
		$data['companyData'] = $company;
		$data['counter'] = $this->Counter_model->count($company->com_id);
		$data['meta_title'] = $company->meta_title;
		$data['meta_keyword'] = $company->meta_keyword;
		$data['meta_description'] = $company->meta_description;

		$theme_path = $company->theme_path;
		$data['theme_path'] = $theme_path;
		$data["theme_assets_path"] = $company->theme_assets_path;

		////////////////////// Menu ///////////////////////////////////
		$menus = $this->Menu_model->getMain();		
		foreach ($menus as $menu) {
			$menu->submenu = $this->Menu_model->getsub($menu->menu_id);
		}
		$data['menus'] = $menus ;		
		$data['countrys'] = $this->Country_model->getAll();
		if ($this->session->userdata('site_lang_name') == "th") {
			$mName = array('ม.ค.','ก.พ.','มี.ค.','เม.ย.',
				'พ.ค.','มิ.ย.','ก.ค.','ส.ค.',
				'ก.ย.','ต.ค.','พ.ย.','ธ.ค.');
		}else {
			$mName = array('Jan','Feb','Mar','Apr',
				'May','Jun','Jul','Aug',
				'Sep','Oct','Nov','Dec');
		}
		
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
			from counter
			where com_id = $company->com_id		
			group by year(dt)
			";
			$query = $this->db->query($sql);
			$table = $query->result();
		}
		if($display=="month")
		{
			$sql="select month(dt) as m ,count(ip) as c 
			from counter 
			where com_id = $company->com_id
			and year(dt) = $y
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
			where com_id = $company->com_id
			and year(dt)= $y and month(dt)= $m
			group by day(dt)
			";
			$query = $this->db->query($sql);
			$table = $query->result();
		}
		$data['table'] = $table; 
		$data['y'] = $y;
		$data['m'] = $m;
		$data['display'] = $display;
		$data['mName'] = $mName;

		/////////////////////// get products /////////////////////////////
		
		$cartarr = array();
		foreach ($this->cart->contents() as $carts) {
			$cartarr[]  = array($this->Products_model->getOne($carts['id']),$carts['qty'],$carts['rowid']);

		}
		
		$data['cartarr'] = $cartarr;
		
		$data['pages'] = "index/stat";
		$this->load->view('theme_blog_2023/stat',$data);		
	}
	
	public function subscription()
	{
		$email = trim($this->input->get("email"));

		$sql = "select count(*) as ct from subscription where email =? ";
		$result = $this->db->query($sql,array($email));

		$row = $result->row(0);
		if($row->ct > 0){ 
			echo "already exists";	
		}
		else
		{
			$this->db->insert("subscription",array('email'=>$email,'cdate'=>date('Y-m-d h:i:s')));
			echo "Save complete";
		}
		
	}

}
