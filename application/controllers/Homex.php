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
		$urlhome = $this->uri->segment(1);
		
		if ($urlhome!="") {
			
		}else{
			redirect($this->session->userdata('site_lang_name').'/home');
		}
		

		$ipAddress = $_SERVER['REMOTE_ADDR'];		
		$sql  = "select COUNT(*)AS ct FROM counter
		WHERE ip ='$ipAddress' 
		and NOW() BETWEEN  dt and DATE_ADD(dt, INTERVAL 12 HOUR) ";		
		$query = $this->db->query($sql);		
		$x = $query->row(0);		
		if($x->ct==0)
		{	
			$params = array();
			$params['ip'] = $ipAddress;
			$params['dt'] = date('Y-m-d H:i:s');
			$this->db->insert('counter',$params);			
		}

		$data = array();

		$menu_id = "1";
		$menu_meta = $this->Menu_model->getOne($menu_id);
		$data['meta_title'] = $menu_meta->meta_title;
		$data['meta_keyword'] = $menu_meta->meta_keyword;
		$data['meta_description'] = $menu_meta->meta_description;


		$data['lang'] = $this->session->userdata('site_lang');

		if ($data['lang']=221) {
			$data['language'] = "เปลี่ยนภาษา";
		}else{
			$data['language'] = "Change Language";
		}
		////////////// Counter//////////////////
		$data['counter'] = $this->Counter_model->count();

		////////////////////// Theme ///////////////////////////////////
		$data['brand'] = $this->Brand_model->getAll();
		$company = $this->Company_model->getOne(1);		
		// echo $this->db->last_query();
		// exit();
		$data['companyData'] = $company;
		

		$theme_path = $company->theme_path;
		$data['theme_path'] = $theme_path;		
		$data["theme_assets_path"] = $company->theme_assets_path;

		////////////////////// Menu ///////////////////////////////////
		$menus = $this->Menu_model->getMain();		
		// print_r($menus);exit();
		
		foreach ($menus as $menu) {
			$menu->submenu = $this->Menu_model->getsub($menu->menu_id);
		}
		$data['menus'] = $menus ;
		

		$data['countrys'] = $this->Country_model->getAll();		
		
		///////////////////////// Get content home /////////////////////////////
		$homepage = $this->Content_model->getOne(1);
		// print_r($this->db->last_query());exit();
		$homepagerows = $this->Content_row_model->getAll($homepage->content_id);	
		foreach ($homepagerows as $row) {
			$row->items = $this->Content_row_item_model->getAll($row->row_id);			
		}
		$homepage->rows = $homepagerows;
		$data['homepage'] = $homepage;

		foreach ($homepage->rows as $row) {
			foreach ($row->items as $item) {
				if ($item->template_id==11) {
					$i2 = json_decode($item->jsondata);
					$data['imgss'] = $this->Slide_model->getimageAll($i2->slide_id);	
				}
			}
		}
		// print_r($data['imgss']);exit();
		/////////////////////// GET Product index ///////////////////////////		
		


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
		
		// $categorys = $this->Category_model->getAll();

		$search = array();
		// $data['categorys'] = $categorys;		
		// $orderby="`products`.`orders_index` asc";
		
		// foreach ($categorys as $key => $category) {

		// 	// if ($category->cat_id  > 0) {
		// 	// 	$get_subs = $this->Category_model->getSub($category->cat_id);
		// 	// 	foreach ($get_subs as $get_sub => $value) {
		// 	// 		$sub_id[] = $value->cat_id;
		// 	// 		$arr =  $sub_id;
		// 	// 	}
		// 	// 	$product_catAll = $this->Products_model->getAll3($company->display_index_product_limit,0,array('cat_id_main'=>$arr),$orderby);
		// 	// }
		// 	$category->products  = $this->Products_model->getAll2($company->display_index_product_limit,0,array('cat_id'=>$category->cat_id),$orderby);

		// }				
		

		// print_r($categorys);

		$data['products'] = $categorys;


		// print_r($this->db->last_query());
		// exit();
		##################################################################
		$productsall  = $this->Products_model->getAll(8,0,$search,$orderby);
		// print_r($this->db->last_query());exit();
		foreach ($productsall as $key => $new_productsall) {
			$new_productsall->pictures = $this->Products_picture_model->getAll($new_productsall->pro_id);
		}

		$data['productsall']  = $productsall;
		// print_r($data['productsall']);exit();
		// echo $this->db->last_query();
		// exit();
		
		/////////////////////////GET blog///////////////////////////////////
		$data["blogs"] = $this->Blog_model->getAll(3,0);
		
		// print_r($data["blogs"]);
		// exit();
		// print_r($this->db->last_query());
		// exit();
		$data["news"] = $this->News_model->getAll(3,0);

		$data['gallerys'] = $this->Gallery_model->getAll(10,0);
		
		$data['splash'] = $this->Company_splash_model->getActive();
		
		
		$tagss = $this->Products_model->getTags();
		
		// print_r($tagss);exit();

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

		/////////////////////// get products /////////////////////////////

		$this->load->view($theme_path.'/index',$data);	

	}
	
	public function index2(){
		$this->load->view('theme_2020_v1/commingsoon');
	}

	public function viewonly()
	{	
		

		$data = array();
		$data['lang'] = $this->session->userdata('site_lang');

		if ($data['lang']=221) {
			$data['language'] = "เปลี่ยนภาษา";
		}else{
			$data['language'] = "Change Language";
		}
		////////////// Counter//////////////////
		$data['counter'] = $this->Counter_model->count();

		////////////////////// Theme ///////////////////////////////////
		$company = $this->Company_model->getOne(1);		
		// echo $this->db->last_query();
		// exit();
		$data['companyData'] = $company;
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
		
		///////////////////////// Get content home /////////////////////////////
		$homepage = $this->Content_model->getOne(1);

		$homepagerows = $this->Content_row_model->getAll($homepage->content_id);	
		foreach ($homepagerows as $row) {
			$row->items = $this->Content_row_item_model->getAll($row->row_id);			
		}
		$homepage->rows = $homepagerows;
		$data['homepage'] = $homepage;

		foreach ($homepage->rows as $row) {
			foreach ($row->items as $item) {
				if ($item->template_id==11) {
					$i2 = json_decode($item->jsondata);
					$data['imgss'] = $this->Slide_model->getimageAll($i2->slide_id);	
				}
			}
		}

		/////////////////////// GET Product index ///////////////////////////		
		


		$categorys  = $this->Category_model->getAll();
		
		$data['categorys'] = $categorys;	
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
		
		// $categorys = $this->Category_model->getAll();

		$search = array();
		// $data['categorys'] = $categorys;		
		// $orderby="`products`.`orders_index` asc";
		
		// foreach ($categorys as $key => $category) {

		// 	// if ($category->cat_id  > 0) {
		// 	// 	$get_subs = $this->Category_model->getSub($category->cat_id);
		// 	// 	foreach ($get_subs as $get_sub => $value) {
		// 	// 		$sub_id[] = $value->cat_id;
		// 	// 		$arr =  $sub_id;
		// 	// 	}
		// 	// 	$product_catAll = $this->Products_model->getAll3($company->display_index_product_limit,0,array('cat_id_main'=>$arr),$orderby);
		// 	// }
		// 	$category->products  = $this->Products_model->getAll2($company->display_index_product_limit,0,array('cat_id'=>$category->cat_id),$orderby);

		// }				
		

		// print_r($categorys);

		$data['products'] = $categorys;


		// print_r($this->db->last_query());
		// exit();
		##################################################################
		$data['productsall']  = $this->Products_model->getAll($company->display_index_product_limit,0,$search,$orderby);

		// echo $this->db->last_query();
		// exit();
		
		/////////////////////////GET blog///////////////////////////////////
		$data["blogs"] = $this->Blog_model->getAll(12,0);
		
		// print_r($data["blogs"]);
		// exit();
		// print_r($this->db->last_query());
		// exit();
		$data["news"] = $this->News_model->getAll(12,0);

		$data['gallerys'] = $this->Gallery_model->getAll(10,0);
		
		$data['splash'] = $this->Company_splash_model->getActive();
		
		


		/////////////////////// get products /////////////////////////////
		
		$cartarr = array();
		foreach ($this->cart->contents() as $carts) {
			$cartarr[]  = array($this->Products_model->getOne($carts['id']),$carts['qty'],$carts['rowid']);

		}
		
		$data['cartarr'] = $cartarr;
		// print_r($data['cartarr']);
		// exit();
		// exit();
		$this->load->view($theme_path.'/index',$data);	

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
		$company = $this->Company_model->getOne(1);		
		$data['companyData'] = $company;
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
			group by year(dt)
			";
			$query = $this->db->query($sql);
			$table = $query->result();
		}
		if($display=="month")
		{
			$sql="select month(dt) as m ,count(ip) as c 
			from counter 
			where year(dt) = $y
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
			where year(dt)= $y and month(dt)= $m
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
		$data['counter'] = $this->Counter_model->count();

		/////////////////////// get products /////////////////////////////
		
		$cartarr = array();
		foreach ($this->cart->contents() as $carts) {
			$cartarr[]  = array($this->Products_model->getOne($carts['id']),$carts['qty'],$carts['rowid']);

		}
		
		$data['cartarr'] = $cartarr;
		
		$data['pages'] = "index/stat";
		$this->load->view($theme_path.'/stat',$data);		
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
