<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompanyMenu extends CI_Controller {


	function __construct(){
						
		parent::__construct();
	
		$this->load->model('customeradmin/Directory_model');		
		$this->load->model('customeradmin/Company_category_model');		
		$this->load->model('customeradmin/Company_product_model');		
		$this->load->model('customeradmin/Company_model');		
		$this->load->model('customeradmin/Slide_model');	
		$this->load->model('customeradmin/Menu_model');		
		$this->load->model('customeradmin/Directory_product_model');		
	}

	public function index($com_id){
		
		$keyword = $this->input->get('keyword');

		$search['keyword'] = $keyword;
		$search['com_id'] = $com_id;
		
		$data = array();
		$data["com_id"] = $com_id ;

		$data['company'] = $this->Company_model->getOne($com_id);
		
		$categorys = $this->Company_category_model->getAll($com_id);
		$arr = array('-- Category --');
		foreach ($categorys as $category) {

			$arr[$category->cat_id] = $category->cat_name_th."($category->cat_name)";
		}
		$data['categorys'] = $arr;
		
		$config = $this->config->item('pagination');
		
		$config["base_url"] = base_url() . "customeradmin/CompanyProduct/index/$com_id";
		$config["total_rows"] = $this->Company_product_model->count($search);

		// echo $this->db->last_query();
		// exit();

		$config["per_page"] = 20;
		$config["uri_segment"] = 5;
		$config['reuse_query_string'] = true;
		
		
		$this->pagination->initialize($config);		
		$data["links"] = $this->pagination->create_links();
		
		$data['total_rows'] =  $config["total_rows"];
		$start = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;	
		
		$products = $this->Company_product_model->getAll($config["per_page"],$start,$search);
		$arr = array();
		foreach ($products as $product) {

			$directory = $this->Directory_product_model->getAll($com_id,$product->pro_id);
			$arr[$product->pro_id]['product'] = $product;
			$arr[$product->pro_id]['directory'] = $directory;
		}

		$data['products'] = $arr;


		// echo $this->db->last_query();
		// exit();
		$data['search'] = $search;
		$data['menuu'] = $this->Menu_model->getAll($com_id);
		// print_r($com_id);
		// exit();
		$data['contentview']  = 'pagecompany/menu_show';

		$this->load->view('layoutcompany/main',$data);
	}

	public function directory($com_id,$pro_id)
	{
		$this->form_validation->set_rules('btn_send','btn_send','trim|required');

		
			if($this->form_validation->run()==FALSE){
				//if($this->input->post('username')){

				$this->session->set_flashdata('errors', validation_errors());
				
				$data["com_id"] = $com_id ;

				$data['company'] = $this->Company_model->getOne($com_id);

				
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
		
			

			$this->form_validation->set_rules('menu_name','Product name TH','trim|required');
		
			if($this->form_validation->run()==FALSE){
				//if($this->input->post('username')){

				$this->session->set_flashdata('errors', validation_errors());
				
				$data = array();
				
				$data["com_id"] = $com_id ;				
				
				$company = $this->Company_model->getOne($com_id);
				$data['company'] = $company ;
				$search['keyword'] = '';
				$search['com_id'] = $com_id;

				$count = $this->Company_product_model->count($search);

				if($count > $company->packageProductLimit){
					exit("<h1>Product is over limit</h1>");	
				}
				

				$data["pro_id"] = '' ;
				
				$data["method"] = 'Add' ;

				$categorys = $this->Company_category_model->getAll($com_id);
				$arr = array('-- Category --');
				foreach ($categorys as $category) {
					$arr[$category->cat_id] = $category->cat_name_th."($category->cat_name)";
				}
				$data['categorys'] = $arr;

								
				$data['product'] ='';
				
				$data['content1'] = $this->Menu_model->getcontentall($com_id);
				$data['menus'] = $this->Menu_model->getAll($com_id);

				$data['contentview'] = 'pagecompany/menu_form';	
				// print_r($com_id);
				// exit();
				$this->load->view('layoutcompany/main',$data);	
				
				
			}else{

				// foreach ($_REQUEST as $key => $value) {
				// 	//echo "\$$key = \$this->input->post('$key');<br>";
				// 	echo "'$key'=>\$$key,	<br>";
				// }
				// exit();
				
				

				$menu_name = $this->input->post('menu_name');
				$menu_name_th = $this->input->post('menu_name_th');
				$menu_type = $this->input->post('menu_type');
				$menu_parent = $this->input->post('menu_parent');
				$url = $this->input->post('url');
				$content = $this->input->post('content');
				$menu_display_url = $this->input->post('menu_display_url');
				$target = $this->input->post('target');
				$is_main = $this->input->post('is_main');
				$top = $this->input->post('top');
				$bottom = $this->input->post('bottom');
				$is_active = $this->input->post('is_active');

				// echo $menu_name,$menu_name_th,$menu_type,$menu_parent,$url,$content,$menu_display_url,$target,$is_main,$is_main,$top,$bottom,$is_active;
				// exit();

				$params = array('menu_name'=>$menu_name,	
								'menu_name_th'=>$menu_name_th,	
								'menu_parent'=>$menu_parent,
								'menu_target'=>$menu_type,	
								'menu_url'=>$url,	
								'menu_display_url'=>$menu_display_url,									
								'c_id'=>$content,	
								'menu_type'=>$menu_type,	
								'top'=>$top,	
								'bottom'=>$bottom,	
								'is_main'=>$is_main,	
								'is_active'=>$is_active,	
								'com_id'=>$com_id					
								);
				
				// if($is_deal==1){
				// 	$sql = "update ssim_menu set is_deal = 2 where com_id = $com_id ";
				// 	$this->db->query($sql);	
				// }

				$this->db->insert('ssim_menu',$params);
				
				$pro_id= $this->db->insert_id();
				
				$id = $db->lastInsertId();

				$sql ="update ssim_menu set orders = $menu_id where menu_id = $menu_id";
				$this->db->query($sql);

				
				// if($_FILES['picture1']['size']>0){

				// 	$filepath = "assets/images/product/pro_". $pro_id .'01.jpg';
					
				// 	move_uploaded_file($_FILES['picture1']['tmp_name'], $filepath);
				// }

				// if($_FILES['picture2']['size']>0){

				// 	$filepath = "assets/images/product/pro_". $pro_id .'02.jpg';
					
				// 	move_uploaded_file($_FILES['picture2']['tmp_name'], $filepath);
				// }

				// if($_FILES['picture3']['size']>0){

				// 	$filepath = "assets/images/product/pro_". $pro_id .'03.jpg';
					
				// 	move_uploaded_file($_FILES['picture3']['tmp_name'], $filepath);
				// }
				
					
				$this->session->set_flashdata('msg','Add Complete');
				// echo $this->db->last_query();
				// exit();
				echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";				
				
			}

	}


	public function edit($com_id,$menu_id){

		$this->form_validation->set_rules('menu_name','Product name TH','trim|required');
		
					
		if($this->form_validation->run()==FALSE){			

			$this->session->set_flashdata('errors', validation_errors());	

			$data['company'] = $this->Company_model->getOne($com_id);		
			
			$data["com_id"] = $com_id ;
			$data["menu_id"] = $menu_id ;
			$data["pro_id"] = $pro_id ;

			$data["method"] = 'Edit' ;

			$categorys = $this->Company_category_model->getAll($com_id);
			$arr = array('-- Category --');
			foreach ($categorys as $category) {

				$arr[$category->cat_id] = $category->cat_name_th."($category->cat_name)";
			}
			$data['categorys'] = $arr;
			// print_r($menu_id);
			// exit();	
								
			$data['product'] =$this->Menu_model->getOne($menu_id);
			$data['menus'] = $this->Menu_model->getAll($com_id);
			$data['content1'] = $this->Menu_model->getcontentall($com_id);	
			$data['contentview'] = 'pagecompany/menu_form';	
				
			$this->load->view('layoutcompany/main',$data);		
			
		}else{


				$menu_name = $this->input->post('menu_name');
				$menu_name_th = $this->input->post('menu_name_th');
				$menu_type = $this->input->post('menu_type');
				$menu_parent = $this->input->post('menu_parent');
				$url = $this->input->post('url');
				$content = $this->input->post('content');
				$menu_display_url = $this->input->post('menu_display_url');
				$target = $this->input->post('target');
				$is_main = $this->input->post('is_main');
				$top = $this->input->post('top');
				$bottom = $this->input->post('bottom');
				$is_active = $this->input->post('is_active');

				$params = array('menu_name'=>$menu_name,	
								'menu_name_th'=>$menu_name_th,	
								'menu_parent'=>$menu_parent,
								'menu_target'=>$menu_type,	
								'menu_url'=>$url,	
								'menu_display_url'=>$menu_display_url,									
								'c_id'=>$content,	
								'menu_type'=>$menu_type,	
								'top'=>$top,	
								'bottom'=>$bottom,	
								'is_main'=>$is_main,	
								'is_active'=>$is_active,	
								'com_id'=>$com_id								
								);
				
			// if($is_deal==1){
			// 	$sql = "update ssim_menu set is_deal = 2 where com_id = $com_id ";
			// 	$this->db->query($sql);	
			// }
				
			$this->db->where('menu_id', $menu_id);

			$this->db->update('ssim_menu',$params);

			//echo $pro_id;
			// if($_FILES['picture1']['size']>0){

			// 	$filepath = "assets/images/product/pro_". $pro_id .'01.jpg';
				
			// 	move_uploaded_file($_FILES['picture1']['tmp_name'], $filepath);
			// }

			// if($_FILES['picture2']['size']>0){

			// 	$filepath = "assets/images/product/pro_". $pro_id .'02.jpg';
				
			// 	move_uploaded_file($_FILES['picture2']['tmp_name'], $filepath);
			// }

			// if($_FILES['picture3']['size']>0){

			// 	$filepath = "assets/images/product/pro_". $pro_id .'03.jpg';
				
			// 	move_uploaded_file($_FILES['picture3']['tmp_name'], $filepath);
			// }
	
			
			$this->session->set_flashdata('msg','Edit Complete');
			// echo $this->db->last_query();
			// exit();
			echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";					
			
		}
	}

	public function delete($com_id,$menu_id){
		$this->db->where('menu_id',$menu_id);
		$this->db->delete('ssim_menu');
	


		// $filepath = "assets/images/product/pro_". $pro_id .'01.jpg';
		// if(is_file($filepath)){
		// 	unlink($filepath);
		// }
		// $filepath = "assets/images/product/pro_". $pro_id .'02.jpg';
		// if(is_file($filepath)){
		// 	unlink($filepath);
		// }
		// $filepath = "assets/images/product/pro_". $pro_id .'03.jpg';
		// if(is_file($filepath)){
		// 	unlink($filepath);
		// }
		
		$this->session->set_flashdata('msg','Delete Complete');

		echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";		
	}

	public function exportWebboard($pro_id)
	{
		$product = $this->Company_product_model->getOne($pro_id);
		$com_id = $product->com_id;
		$company  = $this->Company_model->getOne($com_id);

		$workingreport_id = $company->workingreport_id;

		echo '<link rel="stylesheet" href="'.base_url().'assets/vendor/bootstrap/css/bootstrap.css" />';

		if(empty($workingreport_id)){
			echo '<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
			<h2>ยังไม่ได้จับคู่บริษัท workingreport ใน Pocketpages.net </h2></div>';
			
			exit();
		}

		$question =  $product->pro_name_th . ' : ' . $company->com_title_th;
		//echo "$question <hr/>";
		

		$detail = $company->com_desc_th.'<br/>';

		$path = 'http://www.thailandpocketpages.com/assets/images/product/pro_' . $pro_id . '01.jpg';

		$detail .= '<center><img src="'.$path.'" /></center><br/>';
		$detail .= $product->pro_desc_th .'<br/>';
		
		$detail .= '<center><h5>สนใจติดต่อ</h5>';
		
		$url = 'http://'.$company->com_website.'.pocketpages.net';
		
		$detail .= '<a href="'. $url .'" target="_blank">'.$company->com_name_th.'</a><br/>';

		$detail .= $company->com_address_th.' '.$company->com_zipcode .'<br/>';
		
		$detail .= 'โทรศัพท์  : '.$company->com_phone .'<br/>';
		$detail .= 'โทรสาร  : '.$company->com_fax .'<br/>';
		$detail .= 'อีเมล์  : '. $company->com_email .'<br/>';
		if(strstr($company->url1,',')){
			$arr = explode(',',$company->url1);
			foreach($arr as $url){
				$detail .= 'เว็บไซต์  :  <a href="http://'. $url.'" target="_blank">http://'. $url .'</a><br/>';
			}
		}else{
			$detail .= 'เว็บไซต์  :  <a href="http://'. $company->url1 .'"  target="_blank">http://'. $company->url1 .'</a><br/>';
		}

		$detail .= "</center>";

		$workreport = $this->load->database('webboard', TRUE);		
		
		$params = array('Question'=>$question,	
						'Details'=>$detail,				
						'Name'=>'Admin Pocketpages.net',
						'CreateDate'=> date('Y-m-d H:i:s')				
						);

		$workreport->insert('webboard',$params);	

		$webboard_id = $workreport->insert_id();

		echo '<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
				<h5>'.  $product->pro_name_th.' -> Export webboard complete</h5></div>';

		$websiteExports = array(
					'networkmortitor.com',
					'thailandindustrial.net',
					'promoteindustrial.net',
					'promotwebsite.net',
					'industrialgoods.in.th',
					'createblogger.net',
					'featureblog.net',
					'bloggerservices.net',
					'bloggerstore.net',
					'bloglocker.net',
					'publishblog.net',
					'blogclassified.net',
					'industryclassified.net',
					'postclassified.net',
					'directoryclassified.net',
					'brandclassified.net',
					'productbestseller.net',
					'senderblog.in.th',
					'aboutblog.in.th',
					'blogtool.in.th',
					'blogmarket.in.th',
					'blogstore.in.th',
					'shoppingblog.in.th',
					'wordblog.in.th',
					'blogexpress.in.th',
					'bangkokclassified.in.th',
					'bigclassified.in.th',
					'industryguide.in.th',
					'thaiclassified.in.th',
					'classifiedonline.in.th',
					'imageblog.in.th',
					'blogplay.in.th',
					'yourclassified.in.th',
					'industrialmarket.in.th',
					'catalogonline.in.th',
					'keywordsearch.in.th',
					'networktools.in.th',
					'networkmodel.in.th',
					'brandbusiness.in.th',
					'industrialproduct.in.th',
					'webindustry.in.th',
					'businessthai.in.th',
					'thaimanufacturer.in.th',
					'businessbrand.in.th',
					'searchengine.in.th',
					'thaisite.in.th',
					'bigmarket.in.th',
					'industrialmarketing.in.th',
					'businessonline.in.th',
					'industrialonline.in.th',
					'napostjung.com',
					'post2days.com',
					'postnaja.com',
					'sabysaby.com',
					'sellerblogger.com',
					'supplierfocus.com',
					'thaibartertrade.com',
					'thailandexhibitor.com',
					'whoisbuyer.com',
					'whoisseller.com');

	
		$weblist = '';	

		foreach($websiteExports as $websiteExports){
			$weblist .= "<a href='http://www.$websiteExports/index.php?QuestionID=$webboard_id ' target='_blank'>$websiteExports</a><br/>";
			
		}

		$workreport = $this->load->database('workreport', TRUE);
		
		//$params = array('webboardPost'=>" CONCAT(webboardPost , '$weblist' ) ");
		
		$workreport->set("webboardPost", 'CONCAT(IFNULL(webboardPost,"") , "'.$weblist.'" ) ',FALSE);
		$workreport->where('id', $workingreport_id);
		$workreport->update('customer_report');
		
		//echo $workreport->last_query();
		
		echo '<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span> </button>
				<h5>Generate report complete</h5>
			</div>';

	}

	public function exportWebpost($pro_id)
	{
		$product = $this->Company_product_model->getOne($pro_id);
		$com_id = $product->com_id;
		$company  = $this->Company_model->getOne($com_id);

		$workingreport_id = $company->workingreport_id;

		echo '<link rel="stylesheet" href="'.base_url().'assets/vendor/bootstrap/css/bootstrap.css" />';

		if(empty($workingreport_id)){
			echo '<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
			<h2>ยังไม่ได้จับคู่บริษัท workingreport ใน Pocketpages.net </h2></div>';
			
			exit();
		}

		$grouppost = $_REQUEST['grouppost'];

		
		$slides = $this->Slide_model->getAll($com_id);
		
		if( sizeof($slides) > 0 )
		{		
			$slide_id = $slides[0]->slide_id;
		}	
		
		
		$hostgrouppost = "27.254.82.235";
		$webpost['user'] = "mynamech_001";
		$webpost['pass'] = "123456";
		
		$webpost['tab1']['dsn'] = "mysql:host=$hostgrouppost;port=3306;dbname=mynamech_tab1";	
		$webpost['tab1']['web'] = array('autopart-automotive.com',
										'thaiautoengineering.com',
										'thaiautoindustry.com',
										'automotivesparepart.com');									
		$webpost['tab2']['dsn'] = "mysql:host=$hostgrouppost;port=3306;dbname=mynamech_tab2";	
		$webpost['tab2']['web'] = array('construction-builder.com',
										'subcontractorservice.com',
										'วัสดุก่อสร้างทุกชนิด.com',
										'constructionequipmentindustry.com',
										'constructionfastenertool.com');
		$webpost['tab3']['dsn'] = "mysql:host=$hostgrouppost;port=3306;dbname=mynamech_tab3";	
		$webpost['tab3']['web'] = array('automation-electrics.com',
										'electrics-automation.com',
										'technic-electric.com',
										'security-safetyequipment.com',
										'security-safetyproduct.com',
										'motorelectricpower.com');		
		$webpost['tab4']['dsn'] = "mysql:host=$hostgrouppost;port=3306;dbname=mynamech_tab4";	
		$webpost['tab4']['web'] = array('piping-joint.com',
										'pumps-valve.com',
										'tubing-fitting.com',
										'pipe-steelpipe.com',
										'hydraulicpneumaticsystems.com');		
		$webpost['tab5']['dsn'] = "mysql:host=$hostgrouppost;port=3306;dbname=mynamech_tab5";	
		$webpost['tab5']['web'] = array('machinery-machinetool.com',
										'เครื่องจักรทุกชนิด.com',
										'machinedesignengineering.com',
										'machineequipmentparts.com');	
		$webpost['tab6']['dsn'] = "mysql:host=$hostgrouppost;port=3306;dbname=mynamech_tab6";	
		$webpost['tab6']['web'] = array('materialhandlingcenter.com',
										'materialhandling-equipments.com',
										'cranehoistslinglift.com',
										'industryconveyorbelt.com',
										'conveyorequipmentmanufacturer.com',
										'forkliftpoweredlift.com');	
		$webpost['tab7']['dsn'] = "mysql:host=$hostgrouppost;port=3306;dbname=mynamech_tab7";	
		$webpost['tab7']['web'] = array('packaging-storage.com',
										'packagingandpacking.com',
										'packaginghardware.com',
										'packagingpackage.com',
										'rackstorageindustry.com');	
		$webpost['tab8']['dsn'] = "mysql:host=$hostgrouppost;port=3306;dbname=mynamech_tab8";	
		$webpost['tab8']['web'] = array('plastic-rubber.com',
										'rubberproductsindustry.com',
										'plasticinjectionmouldingindustry.com',
										'chemicalpetrotech.com');	
		$webpost['tab9']['dsn'] = "mysql:host=$hostgrouppost;port=3306;dbname=mynamech_tab9";	
		$webpost['tab9']['web'] = array('aircon-ventilation.com',
										'pollutechprotection.com',
										'heatingcoolingsystem.com',
										'boilerburnerengineering.com',
										'airandventilation.com');	
		$webpost['tab10']['dsn'] = "mysql:host=$hostgrouppost;port=3306;dbname=mynamech_tab10";	
		$webpost['tab10']['web'] = array('stainlesssteelmetalproduct.com',
										 'steel-metalworking.com',
										 'casting-molding.com',
										 'moldmillinggrinding.com');	
		$webpost['tab11']['dsn'] = "mysql:host=$hostgrouppost;port=3306;dbname=mynamech_tab11";	
		$webpost['tab11']['web'] = array('http://xn--12cfjn4cpq4dq4hc2g4adr2j3f.com/',
										 'tool-instrument.com',
										 'scaleweighingmachine.com',
										 'toolinstrumenthardware.com',
										 'measurementtestingtool.com');	
		$webpost['tab12']['dsn'] = "mysql:host=$hostgrouppost;port=3306;dbname=mynamech_tab12";	
		$webpost['tab12']['web'] = array('offices-automation.com',
										 'iamcurtain.com',
										 'ohohome.com',
										 'thaistonegem.com',
										 'richerland.com',
										 'thaicosmeticbeauty.com',
										 'furniturehomegarden.com',
										 'garmenttextileindustry.com');	
		$webpost['tab13']['dsn'] = "mysql:host=$hostgrouppost;port=3306;dbname=mynamech_tab13";	
		$webpost['tab13']['web'] = array('foods-beverage.com',
										 'food-beverageindustry.com',
										 'foodbeverageequipments.com',
										 'foodbeveragemachinery.com',
										 'foodbeveragepackaging.com');	
		$webpost['tab14']['dsn'] = "mysql:host=$hostgrouppost;port=3306;dbname=mynamech_tab14";	
		$webpost['tab14']['web'] = array('services-industry.com',
										 'servicebusinessindustry.com',
										 'service-hospitalitythai.com',
										 'healthy-sporty.com');	
		
		 //print_r($webpost[$grouppost]);
		// exit();
		
		$dbwebpost = new PDO($webpost[$grouppost]['dsn'],$webpost['user'],$webpost['pass']);	
		$dbwebpost->query('SET NAMES TIS620');
		
		
		$sqlInsert = "insert into bd_board set
					  b_topic = ?,
					  b_detail = ?,
					  b_price = ?,
					  b_type = ?,
					  b_contact_name = ?,
					  b_address = ?,
					  b_contact_url = ?,
					  b_contact_mobile = ?,
					  b_contact_email = ?,				  				 
					  b_contact_tel = ?,				 
					  b_company = ?,
					  b_contact_line = ?,
					  b_contact_facebook = ?,
					  b_image = ?,
					  created = NOW(),
					  is_active = 1
					  
					  ";
			
		$website ='';  
		if(strstr($company->url1,',')){
			$arr = explode(',',$company->url1);
			foreach($arr as $url){
				//$website = 'เว็บไซต์  :  <a href="http://'. $url.'" target="_blank">http://'. $url .'</a><br/>';
				$website .= 'http://'.$url.' <br>';
			}
		}else{
			//$website = 'เว็บไซต์  :  <a href="http://'. $company['url1'] .'"  target="_blank">http://'. $company['url1'] .'</a><br/>';
			$website = 'http://'.$company->url1 ;
		}
		$path = 'http://www.thailandpocketpages.com/assets/images/product/pro_' . $pro_id . '01.jpg';

		$desc = $product->pro_desc_th;
		$desc .= "<img src='$path'/>";

					  
		$stmt = $dbwebpost->prepare($sqlInsert);
		$params = array();
		$params[] = empty($company->com_title_th)?'':iconv("utf-8", "tis-620",$product->pro_name_th.' '.$company->com_title_th);
		$params[] = empty($company->desc)?'':iconv("utf-8", "tis-620",$desc) ;
		$params[] = iconv("utf-8", "tis-620",'สอบถาม') ;
		$params[] = iconv("utf-8", "tis-620",'sell');
		$params[] = empty($company->com_name_th)?'':iconv("utf-8", "tis-620",$company->com_name_th);
		$params[] = empty($company->com_address_th)?'':iconv("utf-8", "tis-620",$company->com_address_th.' '.$company->com_zipcode);
		$params[] = empty($company->website)?'':iconv("utf-8", "tis-620",$website);
		$params[] = empty($company->com_phone)?'':iconv("utf-8", "tis-620",$company->com_phone);
		$params[] = empty($company->com_email)?'':iconv("utf-8", "tis-620",$company->com_email);
		$params[] = empty($company->com_phone)?'':iconv("utf-8", "tis-620",$company->com_phone);
		$params[] = empty($company->com_name_th)?'':iconv("utf-8", "tis-620",$company->com_name_th);
		$params[] = empty($company->line_id)?'':iconv("utf-8", "tis-620",$company->line_id);
		$params[] = empty($company->facebook)?'':iconv("utf-8", "tis-620",$company->facebook);
		$params[] = "http://www.thailandpocketpages.com/assets/images/slide/{$slide_id}.jpg";
		//print_r($params);
		//exit();
		$stmt->execute($params) or die(print_r($stmt->errorInfo()));
			
		
		$post_id = $dbwebpost->lastInsertId();
		//echo $post_id;
		//exit();
		echo '<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
		<h5>'.  $product->pro_name_th .' -> Export webboard complete</h5></div>';
		
		
		$weblist = '';	
		foreach($webpost[$grouppost]['web'] as $websiteExports){
			$weblist .= "<a href='http://www.$websiteExports/product.php?id=$post_id ' target='_blank'>$websiteExports</a><br/>";
			
		}
		
		// $sql = "update customer_report set groupingPost= CONCAT(groupingPost, ?)  where id = ? ";
		// $stmt = $db2->prepare($sql);
		// $stmt->execute(array($weblist,$workingreport_id));
		
		$workreport = $this->load->database('workreport', TRUE);
		
		//$params = array('webboardPost'=>" CONCAT(webboardPost , '$weblist' ) ");
		
		$workreport->set("groupingPost", 'CONCAT(IFNULL(groupingPost,"") , "'.$weblist.'" ) ',FALSE);
		$workreport->where('id', $workingreport_id);
		$workreport->update('customer_report');
		
		//echo $workreport->last_query();	

		echo '<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
		<h5>Generate report complete</h5></div>';

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
	
}
 

?>