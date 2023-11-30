<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompanyProduct extends CI_Controller {

	private $fields = array();
 
	function __construct(){
						
		parent::__construct();
		$this->load->model('Menu_admin_model');	
		$this->load->model('Menu_admin_type_model');	
		// $this->load->model('Directory_model');		
		$this->load->model('Company_category_model');		
		$this->load->model('Company_brand_model');		
		$this->load->model('Promotion_model');		
		$this->load->model('Company_product_model');		
		$this->load->model('Products_picture_model');		
		// $this->load->model('Company_product_compare_model');	
		// $this->load->model('Company_product_spec_model');	
		$this->load->model('Company_model');		
		// $this->load->model('Slide_model');		
		$this->load->model('Country_model');		
		$this->load->model('Company_product_language_model');		
		// $this->load->model('Directory_product_model');

		$this->fields = array(
							'Min.Order Quantity',
							'Wholesale',
							'retail',
							'subcontractor',
							'FOB Price',
							'Transported ',
							'Certification',
							'Model Number',
							'Place of Origin',
							'After-sales Service Provided',							
			);
	
	}

	public function index($com_id){
		
		$keyword = $this->input->get('keyword');
		$cat_id = $this->input->get('cat_id');
		$country_id = $this->input->get('country_id');

		$search['keyword'] = $keyword;
		$search['cat_id'] = $cat_id;
		$search['country_id'] = $country_id;
		$search['com_id'] = $com_id;
		
		if ($search['country_id']==null or $search['country_id']==0) {
			$search['country_id'] = 236;
		}

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
			
		$arr = array('-- Select Parent --');
		$mains = $this->Company_category_model->getMain($com_id);
		foreach ($mains as $main) {
			$arr[$main->cat_id] = $main->cat_name;
			$sub1s = $this->Company_category_model->getSub($com_id,$main->cat_id);
			if(count($sub1s)>0){
				foreach ($sub1s as $sub1) {
					$arr[$sub1->cat_id] = '&nbsp;&nbsp;&nbsp;|-'.$sub1->cat_name;
					$sub2s = $this->Company_category_model->getSub($com_id,$sub1->cat_id);
					if(count($sub2s)>0){
						foreach ($sub2s as $sub2) {
							$arr[$sub2->cat_id] = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-' . $sub2->cat_name;
						}
					}
				}
			}
		}				
		$data['categorys'] = $arr;
		////////////////////////////////////////////////////////////////////
		
		$brands = $this->Company_brand_model->getAll($com_id);

		$arr = array('-- Brand --');
		foreach ($brands as $brand) {

			$arr[$brand->brand_id] = $brand->brand_name;
		}
		
		$data['brands'] = $arr;
		
		$config = $this->config->item('pagination');
		
		$config["base_url"] = base_url() . "CompanyProduct/index/$com_id";
		$config["total_rows"] = $this->Company_product_model->count($search);

		// echo $this->db->last_query();
		// exit();

		$config["per_page"] = 20;
		$config["uri_segment"] = 4;
		$config['reuse_query_string'] = true;
		
		
		$this->pagination->initialize($config);		
		$data["links"] = $this->pagination->create_links();
		
		$data['total_rows'] =  $config["total_rows"];
		$start = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;	
		
		$products = $this->Company_product_model->getAll($config["per_page"],$start,$search);
		// echo $this->db->last_query();
		// exit();

		$arr = array();
		foreach ($products as $product) {

			// $directory = "";
			$arr[$product->pro_id]['product'] = $product;
			$arr[$product->pro_id]['languages'] = $this->Company_product_language_model->getAll(array('pro_id'=>$product->pro_id));

			// $arr[$product->pro_id]['specs'] = "";
			$arr[$product->pro_id]['pictures'] = $this->Products_picture_model->getAll($product->pro_id);			
		}

		$data['products'] = $arr;
		// print_r($data['products']);exit();

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

		$data['company'] = $this->Company_model->getOne($com_id);
		$data['contentview']  = 'pagecompany/product_show';

		$this->load->view('layoutcompany/main',$data);
	}

	public function directory($com_id,$pro_id)
	{
		$this->form_validation->set_rules('btn_send','btn_send','trim|required');
		
			if($this->form_validation->run()==FALSE){
				//if($this->input->post('username')){

				$this->session->set_flashdata('errors', validation_errors());
				$data['menu_admins'] =  $this->Menu_admin_model->getAll();
				$data["com_id"] = $com_id ;
				$data["pro_id"] = $pro_id ;
				
				$data["method"] = '' ;

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

								
				$data['directory_products'] =$this->Directory_product_model->getAll($com_id,$pro_id);

				$data['company'] = $this->Company_model->getOne($com_id);
				$data['contentview'] = 'pagecompany/directory_product_form';	
				
				$this->load->view('layoutcompany/main',$data);	
				
				
			}else{

				// foreach ($_REQUEST as $key => $value) {
				// 	//echo "\$$key = \$this->input->post('$key');<br>";
				// 	echo "'$key'=>\$$key,	<br>";
				// }
				// exit();
				$sql = "delete from directory_product where com_id = $com_id and pro_id= $pro_id ";
				$this->db->query($sql);

				$dir_id = $this->input->post('dir_id');				
				for($i=0;$i<sizeof($dir_id);$i++){
					if($dir_id[$i]>0){
						$params = array(
										'dir_id'=>$dir_id[$i],
										'pro_id'=>$pro_id,
										'com_id'=>$com_id,
										'cdate'=>date('Y-m-d h:i:s'),
										'cby'=>$this->session->userdata('ssfullname')							
										);
						
						$this->db->insert('directory_product',$params) or die("Error");
					}
				}	
									
				$this->session->set_flashdata('msg','Add Complete');
				// echo $this->db->last_query();
				// exit();
				echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";				
				
			}	
	}

	public function directoryRemove($id){

		$sql = "delete from directory_product where id = $id ";
		
		$this->db->query($sql);

		echo "deleted";
	}

	public function add($com_id){

		
		
			$params = array(
							'com_id'=>$com_id
							);
			$this->db->insert('products',$params);
		
			$pro_id= $this->db->insert_id();
			
			$country_id = "";
			$country = $this->Country_model->getAll2($country_id);

			foreach ($country as  $countrynew) {
				$params = array(
							'pro_id'=>$pro_id,
							'country_id'=>$countrynew->country_id
							);
				$this->db->insert('products_language',$params);
			}


			redirect("CompanyProduct/edit/$com_id/$pro_id");
	}

	public function edit($com_id,$pro_id){

		$this->form_validation->set_rules('id','Product name TH','trim|required');
		
					
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
			$data['filename'] = $this->input->get('filename');

			$data["com_id"] = $com_id ;

			$data["pro_id"] = $pro_id ;

			$data["method"] = 'Edit' ;

			$data['fields'] = $this->fields;

			////////////////////////////////////////////////////////////////	
			$arr = array('-- Select Parent --');
			$mains = $this->Company_category_model->getMain($com_id);
			foreach ($mains as $main) {
				$arr[$main->cat_id] = $main->cat_name;
				$sub1s = $this->Company_category_model->getSub($com_id,$main->cat_id);
				if(count($sub1s)>0){
					foreach ($sub1s as $sub1) {
						$arr[$sub1->cat_id] = '&nbsp;&nbsp;&nbsp;|-'.$sub1->cat_name;
						$sub2s = $this->Company_category_model->getSub($com_id,$sub1->cat_id);
						if(count($sub2s)>0){
							foreach ($sub2s as $sub2) {
								$arr[$sub2->cat_id] = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-'.$sub2->cat_name;
							}
						}
					}
				}
			}				
			$data['categorys'] = $arr;
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
				$country->languages = $this->Company_product_language_model->getAll(array('country_id'=>$country->country_id,'pro_id'=>$pro_id));
			}			
			$data['languages'] = $countrys ;

			////////////////////////////////////////////////////////////////////
			$brands = $this->Company_brand_model->getAll($com_id);
			$arr = array('-- Brand --');
			foreach ($brands as $brand) {
				$arr[$brand->brand_id] = $brand->brand_name;
			}			
			$data['brands'] = $arr;
			$search = array();
			$data['company'] = $this->Company_model->getAll(1000,0,$search);
			$domain_arr = array();
			$domainselect = $this->Company_model->getDomainbyProduct($pro_id);
			foreach ($domainselect as $key => $new_domainselect) {
				$domain_arr[] = $new_domainselect->domain_id;
			}
			$new_domainselects = implode(",", $domain_arr);
			// print_r($new_domainselects);exit();
			$data['domainselect'] = $new_domainselects;
			// print_r($data['company']);exit();
			//////////////////// Promotion //////////////////////////////////////
			$promotions = $this->Promotion_model->getAll();
			$arr = array('-- promotion --');
			foreach ($promotions as $promotion) {
				$arr[$promotion->promotion_id] = $promotion->title_th." ( $promotion->title_en ) ";
			}			
			$data['promotions'] = $arr;

				
			// $data['company'] = $this->Company_model->getOne($com_id);					
			$data['product'] =$this->Company_product_model->getOne($pro_id);
				
			$data['contentview'] = 'pagecompany/product_form';	
				
			$this->load->view('layoutcompany/main',$data);		
			
		}else{

				$allcheckbox = $this->input->post('allcheckbox');
				$com_website = $this->input->post('com_website');
				// print_r($com_website);exit();
				$number_id = $this->input->post('number_id');$product_link_social = $this->input->post('product_link_social');
				$remark = $this->input->post('remark');
				$pro_price = $this->input->post('pro_price');				
				$orders = $this->input->post('orders');
				$orders_index = $this->input->post('orders_index');
				$cat_id = $this->input->post('cat_id');
				$brand_id = $this->input->post('brand_id');
				$promotion_id = $this->input->post('promotion_id');
				$is_active = $this->input->post('is_active');
				$is_pimar = $this->input->post('is_pimar');
				$is_new = $this->input->post('is_new');
				$is_deal = $this->input->post('is_deal');
				$deal_expire = $this->input->post('deal_expire');
				$pro_price_old = $this->input->post('pro_price_old');
				
				$pro_url = str_replace(" ","-",strtolower($this->input->post('pro_url')));
				$pro_url = str_replace("×","-",$pro_url);
				$pro_url = str_replace(".","-",$pro_url);
				$pro_url = str_replace("+","-",$pro_url);
				$pro_url = str_replace("/","-",$pro_url);
				$pro_url = str_replace("---","-",$pro_url);
				$pro_url = str_replace("--","-",$pro_url);

				$params = array(
								'number_id'=>$number_id,'product_link_social'=>$product_link_social,
								'pro_url'=>$pro_url,									
								'pro_price'=>$pro_price,									
								'remark'=>$remark,	
								'orders'=>$orders,
								'orders_index'=>$orders_index,	
								'cat_id'=>$cat_id,	
								'brand_id'=>$brand_id,	
								'promotion_id'=>$promotion_id,	
								'is_active'=>$is_active,	
								'is_pimar'=>$is_pimar,	
								'is_new'=>$is_new,	
								'is_deal'=>$is_deal,	
								'deal_expire'=>$deal_expire,	
								'pro_price_old'=>$pro_price_old,	
								'udate'=>date('Y-m-d h:i:s'),
								'uby'=>$this->session->userdata('ssfullname')							
								);
				
			if($is_deal==1){
				$sql = "update products set is_deal = 2 where com_id = $com_id ";
				$this->db->query($sql);	
			}
				
			$this->db->where('pro_id', $pro_id);
			$this->db->update('products',$params);

			if ($allcheckbox == "1") {

				
				// print_r($alldomain);exit();
				$companys = $this->Company_model->getDomainbyProduct($pro_id);
				if (count($companys) > 0) {

					$this->db->where('pro_id',$pro_id);
					$this->db->delete('domainandproduct');

				}
				// print_r('expression');exit();
				$alldomain = $this->Company_model->getAll(1000,0);

				foreach ($alldomain as  $new_alldomain) {
					$params = array(
									'pro_id'=>$pro_id,
									'domain_id'=>$new_alldomain->com_id
									);

					$this->db->insert('domainandproduct',$params);
				}
			}

			if ($allcheckbox != "1") {
				$companys = $this->Company_model->getDomainbyProduct($pro_id);
				if (count($companys) > 0) {

					$this->db->where('pro_id',$pro_id);
					$this->db->delete('domainandproduct');

				}

				foreach ($com_website as  $new_com_website) {
					$params = array(
									'pro_id'=>$pro_id,
									'domain_id'=>$new_com_website
									);

					$this->db->insert('domainandproduct',$params);
				}
			}
			//echo $pro_id;
			// print_r($_FILES['picture1']);exit();
			if($_FILES['picture1']['size']>0){

				$filepath = "../images/product_new/pro_". $pro_id .'01.jpg';

				move_uploaded_file($_FILES['picture1']['tmp_name'], $filepath);

				$filename2 = "pro_". $pro_id ."01.webp";

				if ($filepath == "jpg") {
					$jpg = imagecreatefromjpeg("../images/product_new/pro_{$pro_id}01.jpg");
				}else{
					$jpg = imagecreatefrompng("../images/product_new/pro_{$pro_id}01.jpg");
				}
				$w=imagesx($jpg);
				$h=imagesy($jpg);

				// converter webp
				$webp=imagecreatetruecolor($w,$h);
				$backgroundColor = imagecolorallocatealpha($webp, 0, 0, 0, 127);
				imagefill($webp, 0, 0, $backgroundColor);
				imagecopy($webp,$jpg, 0, 0, 0, 0,$w,$h);
				imagewebp($webp, "../images/product_new/{$filename2}", 100);

				imagedestroy($jpg);
				imagedestroy($webp);
			}

			if($_FILES['picture2']['size']>0){

				$filepath = "../images/product_new/pro_". $pro_id .'02.jpg';
				// echo $filepath ;
				move_uploaded_file($_FILES['picture2']['tmp_name'], $filepath);

				$filename2 = "pro_". $pro_id ."02.webp";
				if ($filepath == "jpg") {
					$jpg = imagecreatefromjpeg("../images/product_new/pro_{$pro_id}02.jpg");
				}else{
					$jpg = imagecreatefrompng("../images/product_new/pro_{$pro_id}02.jpg");
				}
				$w=imagesx($jpg);
				$h=imagesy($jpg);
				// converter webp
				$webp=imagecreatetruecolor($w,$h);
				$backgroundColor = imagecolorallocatealpha($webp, 0, 0, 0, 127);
				imagefill($webp, 0, 0, $backgroundColor);
				imagecopy($webp,$jpg, 0, 0, 0, 0,$w,$h);
				imagewebp($webp, "../images/product_new/{$filename2}", 100);
				imagedestroy($jpg);
				imagedestroy($webp);
			}

			if($_FILES['picture3']['size']>0){

				$filepath = "../images/product_new/pro_". $pro_id .'03.jpg';
				// echo $filepath ;
				move_uploaded_file($_FILES['picture3']['tmp_name'], $filepath);
				$filename2 = "pro_". $pro_id ."03.webp";
				if ($filepath == "jpg") {
					$jpg = imagecreatefromjpeg("../images/product_new/pro_{$pro_id}03.jpg");
				}else{
					$jpg = imagecreatefrompng("../images/product_new/pro_{$pro_id}03.jpg");
				}
				$w=imagesx($jpg);
				$h=imagesy($jpg);
				// converter webp
				$webp=imagecreatetruecolor($w,$h);
				$backgroundColor = imagecolorallocatealpha($webp, 0, 0, 0, 127);
				imagefill($webp, 0, 0, $backgroundColor);
				imagecopy($webp,$jpg, 0, 0, 0, 0,$w,$h);
				imagewebp($webp, "../images/product_new/{$filename2}", 100);
				imagedestroy($jpg);
				imagedestroy($webp);
			}

			if($_FILES['picture1big']['size']>0){
				// print_r('eee');
				// exit();
				$filepath = "../images/product_new/pro_". $pro_id .'01big.jpg';
				// echo $filepath ;
				move_uploaded_file($_FILES['picture1big']['tmp_name'], $filepath);
			}

			if($_FILES['picture2big']['size']>0){

				$filepath = "../images/product_new/pro_". $pro_id .'02big.jpg';
				// echo $filepath ;
				move_uploaded_file($_FILES['picture2big']['tmp_name'], $filepath);
			}

			if($_FILES['picture3big']['size']>0){

				$filepath = "../images/product_new/pro_". $pro_id .'03big.jpg';
				// echo $filepath ;
				move_uploaded_file($_FILES['picture3big']['tmp_name'], $filepath);
			}

			if($_FILES['picture190']['size']>0){
				// print_r('eee');
				// exit();
				$filepath = "../images/product_new/pro_". $pro_id .'0190.jpg';
				// echo $filepath ;
				move_uploaded_file($_FILES['picture190']['tmp_name'], $filepath);
			}

			if($_FILES['picture290']['size']>0){

				$filepath = "../images/product_new/pro_". $pro_id .'0290.jpg';
				// echo $filepath ;
				move_uploaded_file($_FILES['picture290']['tmp_name'], $filepath);
			}

			if($_FILES['picture390']['size']>0){

				$filepath = "../images/product_new/pro_". $pro_id .'0390.jpg';
				// echo $filepath ;
				move_uploaded_file($_FILES['picture390']['tmp_name'], $filepath);
			}


			if($_FILES['picture1small']['size']>0){
				// print_r('eee');
				// exit();
				$filepath = "../images/product_new/pro_". $pro_id .'01small.jpg';
				// echo $filepath ;
				move_uploaded_file($_FILES['picture1small']['tmp_name'], $filepath);
			}

			if($_FILES['picture2small']['size']>0){

				$filepath = "../images/product_new/pro_". $pro_id .'02small.jpg';
				// echo $filepath ;
				move_uploaded_file($_FILES['picture2small']['tmp_name'], $filepath);
			}

			if($_FILES['picture3small']['size']>0){

				$filepath = "../images/product_new/pro_". $pro_id .'03small.jpg';
				// echo $filepath ;
				move_uploaded_file($_FILES['picture3small']['tmp_name'], $filepath);
			}
	
			
			$this->session->set_flashdata('msg','Edit Complete');
			// echo $this->db->last_query();
			// exit();

			echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";					
			
		}
	}

	public function delete($com_id,$pro_id){
		$this->db->where('pro_id',$pro_id);
		$this->db->delete('products');

		$filepath = "../images/product_new/pro_". $pro_id .'01.jpg';
		if(is_file($filepath)){
			unlink($filepath);
		}
		$filepath = "../images/product_new/pro_". $pro_id .'02.jpg';
		if(is_file($filepath)){
			unlink($filepath);
		}
		$filepath = "../images/product_new/pro_". $pro_id .'03.jpg';
		if(is_file($filepath)){
			unlink($filepath);
		}

		$filepath = "../images/product_new/pro_". $pro_id .'01.webp';
		if(is_file($filepath)){
			unlink($filepath);
		}
		$filepath = "../images/product_new/pro_". $pro_id .'02.webp';
		if(is_file($filepath)){
			unlink($filepath);
		}
		$filepath = "../images/product_new/pro_". $pro_id .'03.webp';
		if(is_file($filepath)){
			unlink($filepath);
		}

		
		$this->session->set_flashdata('msg','Delete Complete');

		echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";		
	}

	public function CompareInfo($com_id,$pro_id){

		$this->form_validation->set_rules('id','','trim|required');
					
		if($this->form_validation->run()==FALSE){			

			$this->session->set_flashdata('errors', validation_errors());			
			
			$data["com_id"] = $com_id ;

			$data["pro_id"] = $pro_id ;
			
			$x = $this->Company_product_compare_model ->getOne($pro_id);
			
			if($x==FALSE)
			{
				$this->db->insert('products_compare',array('pro_id'=>$pro_id));
				
			}
			$data['menu_admins'] =  $this->Menu_admin_model->getAll();
			$data["method"] = 'CompareInfo' ;
			
			$data['fields'] = $this->fields;

			$data['company'] = $this->Company_model->getOne($com_id);	

			$data['product'] =$this->Company_product_compare_model->getOne($pro_id);
				
			$data['contentview'] = 'pagecompany/product_compare_form';	
				
			$this->load->view('layoutcompany/main',$data);		
			
		}else{

				$posts = $this->input->post();
				
				$params = array();
				foreach ($posts as $key => $post) {
					if($key!='id' && $key!='btn_send')
					{
						$params[$key] = $post;
					}
				}

				$params['pro_id'] = $pro_id;
				$params['udate'] = date('Y-m-d h:i:s');
			//print_r($params);
			//exit();
			$this->db->where('pro_id', $pro_id);

			$this->db->update('products_compare',$params);
			
			$this->session->set_flashdata('msg','Edit Complete');
			// echo $this->db->last_query();
			// exit();
			//echo "<script>window.location=''</script>";					
			redirect("CompanyProduct/CompareInfo/$com_id/$pro_id");
			
		}
	}

	

	

	public function moveup($com_id,$orders)
	{
		$sql = "select pro_id ,orders from products where orders <= $orders and com_id = $com_id order by orders desc limit 0,2 ";
		//echo "$sql <br/>";
		$table = $this->db->query($sql);
		$rows = $table->result();

		if(count($rows)==2)
		{
			$row1 = $rows[0];
			$row2 = $rows[1];
			$sql1 = "update products set orders = $row2->orders  where pro_id= $row1->pro_id;";
			$sql2 = "update products set orders = $row1->orders  where pro_id= $row2->pro_id;";
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

	public function movedown($com_id,$orders)
	{

		$sql = "select pro_id ,orders from products where orders >= $orders and com_id = $com_id order by orders  limit 0,2 ";
		
		$table = $this->db->query($sql);
		$rows = $table->result();
		
		if(count($rows)==2)
		{
			$row1 = $rows[0];
			$row2 = $rows[1];
			$sql1 = "update products set orders = $row2->orders  where pro_id= $row1->pro_id;";
			$sql2 = "update products set orders = $row1->orders  where pro_id= $row2->pro_id;";
			
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
		$language = $this->Company_product_language_model->getOne($language_id);
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
		$pro_id = $this->input->post('pro_id');
		$meta_title = $this->input->post('meta_title');
		$meta_keyword = $this->input->post('meta_keyword');
		$meta_description = $this->input->post('meta_description');
		$pro_name = $this->input->post('pro_name');
		$pro_desc_short = $this->input->post('pro_desc_short');
		$pro_desc_short2 = $this->input->post('pro_desc_short2');
		$pro_desc_long = $this->input->post('pro_desc_long');
		$spec = $this->input->post('spec');
		$tags = $this->input->post('tags');
		$language_id = $this->input->post('language_id');
		$languagemethod = $this->input->post('languagemethod');


		$tags_url = str_replace(" ","-",strtolower($this->input->post('tags')));
		$tags_url = str_replace("×","-",$tags_url);
		$tags_url = str_replace(".","-",$tags_url);
		$tags_url = str_replace("+","-",$tags_url);
		$tags_url = str_replace("/","-",$tags_url);
		$tags_url = str_replace("---","-",$tags_url);
		$tags_url = str_replace("--","-",$tags_url);

		if($languagemethod=='add'){
			$params = array();
			$params['country_id'] = $country_id;
			$params['pro_id'] = $pro_id;
			$params['meta_title'] = $meta_title;
			$params['meta_keyword'] = $meta_keyword;
			$params['meta_description'] = $meta_description;
			$params['pro_name'] = $pro_name;			
			$params['pro_desc_short'] = $pro_desc_short;
			$params['pro_desc_short2'] = $pro_desc_short2;
			$params['pro_desc_long'] = $pro_desc_long;
			$params['spec'] = $spec;
			$params['tags'] = $tags;
			$params['tags_url'] = $tags_url;
			$params['cdate'] = date('Y-m-d H:i:s');
			$params['udate'] = date('Y-m-d H:i:s');
			$params['cby'] = $this->session->userdata('ssfullname');
			$params['uby'] = $this->session->userdata('ssfullname');
			if($country_id > 0)
			$this->db->insert('products_language',$params);
		}

		if($languagemethod=='edit'){
			$params = array();
			$params['country_id'] = $country_id;			
			$params['meta_title'] = $meta_title;
			$params['meta_keyword'] = $meta_keyword;
			$params['meta_description'] = $meta_description;
			$params['pro_name'] = $pro_name;			
			$params['pro_desc_short'] = $pro_desc_short;
			$params['pro_desc_short2'] = $pro_desc_short2;
			$params['pro_desc_long'] = $pro_desc_long;
			$params['spec'] = $spec;
			$params['tags'] = $tags;
			$params['tags_url'] = $tags_url;		
			$params['udate'] = date('Y-m-d H:i:s');			
			$params['uby'] = $this->session->userdata('ssfullname');

			if($country_id > 0){
				$this->db->where('language_id',$language_id);
				$this->db->update('products_language',$params);
			}
			
		}		

		echo "save complete";
	}

	public function deletelanguage($language_id)
	{
		if($language_id > 0){
			$this->db->where('language_id',$language_id);
			$this->db->delete('products_language');
		}
	}

	
}
 

?>