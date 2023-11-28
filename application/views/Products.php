<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
	function __construct(){
		parent::__construct();

		
		$this->load->model('Company_model');
		$this->load->model('Category_model');
		$this->load->model('Country_model');
		$this->load->model('Banner_model');
		// $this->load->model('Slider_model');
		// $this->load->model('Youtube_model');
		$this->load->model('Products_model');
		$this->load->model('Products_picture_model');		
		$this->load->model('News_model');
		$this->load->model('Counter_model');
		$this->load->model('Brand_model');
		$this->load->model('Promotion_model');
		$this->load->model('cms/Menu_model');

	}

	public function uset($pro_id=0){
		if ($pro_id>=0) {
			unset($_SESSION["brand"][$pro_id]);
			unset($_SESSION["brandid"][$pro_id]);
		}
		redirect('Products');
	}

	public function index()
	{
		$data['counter'] = $this->Counter_model->count();
		$data["categorys"] = $this->Category_model->getAll();
		$company = $this->Company_model->getOne(1);		
		$data['companyData'] = $company;
		$data['meta_title'] = $company->meta_title;
		$data['meta_keyword'] = $company->meta_keyword;
		$data['meta_description'] = $company->meta_description;
		
		$theme_path = $company->theme_path;
		$data['theme_path'] = $theme_path;
		$data["theme_assets_path"] = $company->theme_assets_path;

		$menus = $this->Menu_model->getMain();
		// echo $this->db->last_query();
		// exit();

		foreach ($menus as $menu) {
			$menu->submenu = $this->Menu_model->getsub($menu->menu_id);
		}
		$data['menus'] = $menus ;		
		$data['countrys'] = $this->Country_model->getAll();

		
		$brand_id = $this->input->get('brand_id');
		$cat_id = $this->input->get('cat_id');
		$promotion_id = $this->input->get('promotion_id');
		if ($cat_id == "") {
			$cat_id = 0;
		}
		if ($cat_id>0) {
			unset($_SESSION["brand"]);
			unset($_SESSION["brandid"]);
		}

		$view = $this->input->get('view');
		$orderby = $this->input->get('order');
		$tag = $this->input->get('tag');
		$keywords = $this->input->get('keyword');
		$data['brand_id'] = $this->input->get('brand_id');
		$data['promotion_id'] = $promotion_id;
		$data['cat_id'] = $cat_id;
		$search = array();
		$search['keyword'] = $keywords;
		$search['promotion_id'] = $promotion_id;
		$search['tag'] = $tag;

		$tags = $this->Products_model->getTags();
		
		$arr = array();
		foreach ($tags as $tag) {
			 if(strstr($tag->tags, ',')){
			 	$keywords = explode(',', $tag->tags);
			 	foreach ($keywords as $keyword) {
			 		$arr[] = trim($keyword);
			 	}
			 }
			 else{
			 	$keyword = $tag->tags;
			 	$arr[] = $keyword;
			 }
		}
		$tags = array_unique($arr);
		$data['tags'] = $tags;

		if ($orderby > 0 ) {
			$search['orderby'] = array($orderby);
		}else{
			$search['orderby'] = array();
		}

		$data['lang'] = $this->session->userdata('site_lang');
		// $data['config'] = $this->Config_model->getConfig();
		$data['footer_newss'] = $this->News_model->getAll(4,0,array('news_type_id'=>0));
		
		$data['language'] = array('EN'=>'eng','TH'=>'ไทย');

		$parents = $this->Category_model->getAll();

		$cat_product = 0;
		foreach ($parents as $key => $parentss) {
			$cat_product = $cat_product + 1;
		}
		$data['cat_product_count'] = $cat_product;

		$cat = array();
		foreach ($parents as $parent) {
			$cat[$parent->cat_id][] = $parent;
			$categorys = $this->Category_model->getSub($parent->cat_id);
			if(count($categorys)>0){
				foreach ($categorys as $category) {
					$cat[$parent->cat_id]['sub1'][$category->cat_id][] = $category;
					$categorysnew = $this->Category_model->getSub($category->cat_id);
					if(count($categorysnew)>0){
						foreach ($categorysnew as $categorysnews) {
							$cat[$parent->cat_id]['sub1'][$category->cat_id]['sub2'][$categorysnews->cat_id] = $categorysnews;
						}
					}
				}
			}
			
		}
		$data['categorysproduct'] = $cat;
		if($cat_id>0){
			$categorys = $this->Category_model->getSub($cat_id);
			$arr1 = array($cat_id);
			foreach ($categorys as $key => $value) {
				$arr1[] = $value->cat_id;
				$categorys2 = $this->Category_model->getSub($value->cat_id);
				foreach ($categorys2 as $key2 => $value2) {			
					$arr1[] = $value2->cat_id;
				}
			}
			$search['cat_id'] = $arr1;
		}
		else{
			$data['cat_name'] = array('en'=>'All Categories','th'=>'หมวดหมู่ทั้งหมด');
			$search['cat_id'] = array();
		}
		if (isset($_SESSION["brand"])) {

			$iss=0;
			if ($brand_id > 0 ) {

				unset($_SESSION["bid"]);
				if ( array_key_exists($brand_id ,$_SESSION["brand"]) ){
					

				}else{
					$_SESSION["brand"][$brand_id] = $brand_id ;
					$_SESSION["brandid"][$brand_id] = $brand_id ;
				}
				$iss++;
			}
		}else{
			$_SESSION["brand"] = array();
			$_SESSION["brandid"] = array();
		}

		////////// Pagination ////////////////////////
		
		$search['brand_id']= $_SESSION["brand"];
		$this->load->config('pagination',TRUE);		
		$config = $this->config->item('pagination');	
		$config['full_tag_open'] = '<ul>';
		$config['full_tag_close'] = '</ul>';
		$config['cur_tag_open'] = '<li><a class="active" href="#">';
		$config['cur_tag_close'] = '</a></li>';
		if ($view == 2) {
			$data['views'] = 2;
			$config["per_page"] = 36;
		}elseif ($view == 3) {
			$data['views'] = 3;
			$config["per_page"] = 60;
		}else{
			$data['views'] = 0;
			$config["per_page"] = $company->display_product_limit;
		}

		if ($orderby == 2) {
			$data['orderby'] = 2;
			$search['orderby'] = 2;
		}elseif ($orderby == 3) {
			$data['orderby'] = 3;
			$search['orderby'] = 3;
		}else{
			$data['orderby'] = 0;
		}

		$config["base_url"] = base_url() . "products/index/";
		$config["total_rows"] = $this->Products_model->record_count($search);
		// echo $this->db->last_query();
		// exit();
		$config["uri_segment"] = 3;

		$config['reuse_query_string'] = true;			
		$this->pagination->initialize($config);		
		$data["links"] = $this->pagination->create_links();
		$data['total_rows'] =  $config["total_rows"];
		$start = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;	
		$data['starts'] = $start + 1;
		$data['ends'] = $start + $config["per_page"];

		$data['promotions'] = $this->Promotion_model->getAll();

		$data['brand'] = $this->Brand_model->getAll();
		$data['product'] = $this->Products_model->getAll($config["per_page"],$start,$search);
		
		$data['menuactive'] = 2;

		$this->load->view($theme_path.'/product',$data);

 
	}


	public function detail($pro_id){
		
		$data['counter'] = $this->Counter_model->count();
		$data["categorys"] = $this->Category_model->getAll();
		$company = $this->Company_model->getOne(1);		
		$data['companyData'] = $company;
		$data['meta_title'] = $company->meta_title;
		$data['meta_keyword'] = $company->meta_keyword;
		$data['meta_description'] = $company->meta_description;
		
		$theme_path = $company->theme_path;
		$data['theme_path'] = $theme_path;
		$data["theme_assets_path"] = $company->theme_assets_path;

		$menus = $this->Menu_model->getMain();
		// echo $this->db->last_query();
		// exit();

		foreach ($menus as $menu) {
			$menu->submenu = $this->Menu_model->getsub($menu->menu_id);
		}
		$data['menus'] = $menus ;		
		$data['countrys'] = $this->Country_model->getAll();

		$data['lang'] = $this->session->userdata('site_lang');
		// $data['config'] = $this->Config_model->getConfig();
		$data['footer_newss'] = $this->News_model->getAll(4,0,array('news_type_id'=>0));
		$data['language'] = array('EN'=>'eng','TH'=>'ไทย');
		$product  = $this->Products_model->getOne($pro_id);

		$cat_id = $product->cat_id?$product->cat_id:0;
		$brand_id = $product->brand_id?$product->brand_id:0;
		$promotion_id = $product->promotion_id?$product->promotion_id:0;

		$data['category'] = $this->Category_model->getOne($cat_id);		
		echo $this->db->last_query();
		exit();
		$data['brand'] = $this->Brand_model->getOne($brand_id);
		$data['promotion'] = $this->Promotion_model->getOne($promotion_id);
		$data['product'] = $product;
		
		$data['categorys'] = $this->Category_model->getAll();

		$realatedproducts = $this->Products_model->getAll(20, 0,array('cat_id'=>$cat_id),'rand()');
		$data['realatedproducts'] = $realatedproducts;
		$countrealatedproducts = 0;
		foreach ($realatedproducts as $key => $realatedproductss) {
			$countrealatedproducts = $countrealatedproducts+1;
		}
		$data['realatedproductscount'] = $countrealatedproducts;
		
		$data['leftpro'] = $this->Products_model->getAll(20, 0,array(),'rand()');
		
		$data['rightpro'] = $this->Products_model->getAll(20, 0,array(),'rand()');

		

		$data['pro_id'] = $pro_id;

		$data['pictures'] = $this->Products_picture_model->getAll($pro_id);
		$data['colors'] = $this->Products_picture_model->getAllColor($pro_id);
		
		$data['menuactive'] = 2;
		$data['pages'] = "product/detail";
		$this->load->view($theme_path.'/product_detail',$data);

	}


	public function sendenquiry_complete($pro_id=0)
	{
		$data['counter'] = $this->Counter_model->count();
		$data["categorys"] = $this->Category_model->getAll();
		$company = $this->Company_model->getOne(1);		
		$data['companyData'] = $company;
		$data['meta_title'] = $company->meta_title;
		$data['meta_keyword'] = $company->meta_keyword;
		$data['meta_description'] = $company->meta_description;
		
		$theme_path = $company->theme_path;
		$data['theme_path'] = $theme_path;
		$data["theme_assets_path"] = $company->theme_assets_path;
		
		$menus = $this->Menu_model->getMain();
		foreach ($menus as $menu) {
			$menu->submenu = $this->Menu_model->getsub($menu->menu_id);
		}
		$data['menus'] = $menus ;		
		$data['countrys'] = $this->Country_model->getAll();


		$data['lang'] = $this->session->userdata('site_lang');
		$data['config'] = $this->Config_model->getConfig();
		$data['footer_newss'] = $this->News_model->getAll(4,0,array('news_type_id'=>0));
		
		$this->load->view($theme_path.'/product_complete',$data);
	}

	public function quotation($pro_id){

		$company = $this->Config_model->getConfig();
		$data["categorys"] = $this->Category_model->getAll();
		$company = $this->Company_model->getOne(1);		
		$data['companyData'] = $company;
		$data['meta_title'] = $company->meta_title;
		$data['meta_keyword'] = $company->meta_keyword;
		$data['meta_description'] = $company->meta_description;
		
		$data['theme_path'] = $theme_path;
		$data["theme_assets_path"] = $company->theme_assets_path;

		$menus = $this->Menu_model->getMain();
		// echo $this->db->last_query();
		// exit();

		foreach ($menus as $menu) {
			$menu->submenu = $this->Menu_model->getsub($menu->menu_id);
		}
		$data['menus'] = $menus ;		
		$data['countrys'] = $this->Country_model->getAll();



		$qtybutton = $this->input->get('qtybutton');
		$data['qtybutton'] = $qtybutton;

		$data['widget'] = $this->recaptcha->getWidget();
        $data['script'] = $this->recaptcha->getScriptTag();  
        
		$data['lang'] = $this->session->userdata('site_lang');
		$data['config'] = $this->Config_model->getConfig();
		$data['footer_newss'] = $this->News_model->getAll(4,0,array('news_type_id'=>0));
		$data['language'] = array('EN'=>'eng','TH'=>'ไทย');
		
		$product  = $this->Products_model->getOne($pro_id);
		$cat_id = $product->cat_id;
		$realatedproducts = $this->Products_model->getrealated($cat_id);
		$data['realatedproducts'] = $realatedproducts;
		$countrealatedproducts = 0;
		foreach ($realatedproducts as $key => $realatedproductss) {
			$countrealatedproducts = $countrealatedproducts+1;
		}
		$data['realatedproductscount'] = $countrealatedproducts;
		$data['product'] = $product;
		$data['pro_id'] = $pro_id;
		$data['counter'] = $this->Counter_model->count();
		
		// print_r($data);
		// exit();
		
		$this->load->view($theme_path.'/product_quotation',$data);

	}
	
	public function sentquotation(){

			// foreach ($this->input->post() as $key => $value) {
				
			// 	echo '$'.$key.' = $this->input->post(\''.$key.'\');<br>';
			// }
			// exit();

			$grecaptcharesponse = $this->input->post('g-recaptcha-response');
			


			$pro_id = $this->input->post('pro_id');

			if(!$grecaptcharesponse){
				$this->session->set_flashdata('errors', 'Recaptcha Error');	
				redirect("Products/quotation/$pro_id");
			}
			
			
			$fullname = $this->input->post('fullname');
			$company_name = $this->input->post('company_name');
			$email = $this->input->post('email');
			$telephone = $this->input->post('telephone');
			$detail = $this->input->post('detail');
			

			$product = $this->Products_model->getOne($pro_id);
			$company = $this->Config_model->getConfig();

			

		$ref = 'http://coldroom-freezerroom.com/products/detail/$pro_id';

			$body = "
					<table width='100%' border='0' cellpadding='0' cellspacing='0' style='font-size:11pt;font-family:Calibri,sans-serif;'>
					<tr>
					<td></td>					
					<td><b>สินค้า</b></td>
					</tr>

					<tr>
					<td><img src='http://coldroom-freezerroom.com/images/product_new/pro_{$pro_id}01.jpg' width='100' style='width:100px;height:auto;'></td>
					<td>{$product->pro_name_th}</td>
					</tr>

					</table>					
					 <br><br>
					 <h4>รายละเอียดเพิ่มเติม</h4>					 
					 $detail<br>

					 
					 <h4>ข้อมูลลูกค้าเพื่อติดต่อกลับ</h4>

					Name = $fullname <br>
					Company = $company_name <br>
					E-mail = $email <br>
					Telephone = $telephone <br>
								 
					 ";
			

$x = '<table width="100%" border="0" cellspacing="0" cellpadding="0" style="width:100%;">
<tbody><tr>
<td style="background-color:#EFEFEF;padding:7.5pt;"><span style="background-color:#EFEFEF;">

<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;">&nbsp;</span></font></div>

<div align="center">
<table width="875" border="0" cellspacing="0" cellpadding="0" style="width:525pt;">
<tbody><tr>
<td style="background-color:white;padding:29.25pt;border:1pt solid #D9D9D9;"><span style="background-color:white;">
<table width="775" border="0" cellspacing="0" cellpadding="0" style="width:465pt;background-color:white;">
<tbody><tr>
<td style="padding:0;">
<table width="100%" border="0" cellspacing="0" cellpadding="0" style="width:100%;">
<tbody><tr>
<td style="padding:7.5pt;">
<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><font face="Arial,sans-serif" size="4" color="red"><span style="font-size:15pt;"><b>

ใบร้องขอราคา จากลูกค้า เวิด์ล คูล เอ็นจิเนียริ่ง บจก.
</b></span></font></span></font></div>
</td>
</tr>
<tr>
<td style="padding:7.5pt;">
<div><font face="Arial,sans-serif" size="2" color="black"><span style="font-size:9pt; font-weight:bold;">
เรียน  ผู้เกี่ยวข้อง
</span></font></div>

<div style="margin-top:14pt;margin-bottom:14pt;">
<font face="Arial,sans-serif" size="2" color="black">
<span style="font-size:9pt;">

เนื่องจากได้มีลูกค้าของเราสนใจสินค้าในเว็ปไซต์ของท่านตามรายละเอียดดังนี้ :<br><br><br><br>

'.$body.'
</span></font>
</div>
</td>
</tr>
</tbody></table>
<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;">&nbsp;</span></font></div>
<table border="0" cellspacing="0" cellpadding="0" style="margin-left:7.5pt;">
<tbody><tr height="43" style="height:26.25pt;">
<td width="312" style="width:187.5pt;height:26.25pt;background-color:red;padding:0;border:1pt solid #FF9001;">
<span style="background-color:red;">

<div align="center" style="text-align:center;margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><a href="'.$ref.'" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" id="LPlnk185225"><font face="Arial,sans-serif" size="3" color="white"><span style="font-size:12pt;"><b>กดดูข้อมูลอ้างอิง</b></span></font></a></span></font></div>

</span></td>
</tr>
</tbody></table>
<div style="margin:0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;">&nbsp;</span></font></div>
<table border="0" cellspacing="0" cellpadding="0">
<tbody><tr>
<td style="padding:7.5pt;">
<div style="margin:9.75pt 0 0 0;"><font face="Calibri,sans-serif" size="2"><span style="font-size:11pt;"><font face="Arial,sans-serif" size="2" color="black"></font></span></font></div>

</td>
</tr>
</tbody></table>
</div>
';
		
		//Username:	sendmail@spprubberparts.com
		// Password:	eMm7FMA3cP
		// Pop/Imap Server:	mail.spprubberparts.com
		// Smtp Server:	mail.spprubberparts.com

		$params = array();
	        $params["cdate"] =date('Y-m-d h:i:s');  
	        $params["com_id"] = 1;  
	        $params["pro_id"] = $pro_id;  
	        $params["fullname"] = $fullname;  
	        $params["company"] = $company_name;  
	        $params["email"] = $email;  
	        // $params["lineid"] = $lineid;  
	        $params["phone"] = $telephone;  
	        $params["fax"] = $fax;  
	        $params["message"] = $detail;  
	        $params["msg_email"] = $x;  
        
        
        	$this->db->insert('quotation',$params);

		$config['protocol']    = 'smtp';
        $config['smtp_host']    = 'mail.brandexdirectory.com';
        $config['smtp_port']    = '587';
        $config['smtp_timeout'] = '7';
        $config['smtp_user']    = 'pongpet@brandexdirectory.com';
        $config['smtp_pass']    = '12345678af';
        $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'html'; // text or html
        $config['validation'] = TRUE; // bool whether to validate email or not
		
		$company = $this->Config_model->getConfig();
		
   		$this->email->initialize($config);
   		$this->email->from("no-reply@system.com");
   		$to = $company->com_email;
   		// $to = "korn@brandexdirectory.com";
   		$this->email->to($to);   		
   		$this->email->subject('ร้องขอใบเสนอราคา จาก ' .$fullname. ' '.date('d M F h:i:s a'));
   		$this->email->message($x);
   		
   		if($this->email->send()){
     		// echo "Send OK";
     		redirect("Products/sendenquiry_complete");
   		}
   		else{
    		echo "Send error";
   		}
			// $this->session->set_flashdata('msg','Submit Complete');

			// echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";

	}
}
