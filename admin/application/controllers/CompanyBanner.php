<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompanyBanner extends CI_Controller {


	function __construct(){

		parent::__construct();
		$this->load->model('Menu_admin_model');	
		$this->load->model('Menu_admin_type_model');	
		$this->load->model('Banner_model');
		$this->load->model('Company_model');
	}

	public function index(){

		$data = array();
		$data['contentview']  = 'pagecompany/banner_show';
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
		$data['banners'] = $this->Banner_model->getAll();
		$this->load->view('layoutcompany/main',$data);
	}

	public function add(){

		$params = array('is_active'=>1,								
						'cby'=>$this->session->userdata('ssfullname'),
						'udate'=> date('Y-m-d H:i:s'),
						'cdate'=> date('Y-m-d H:i:s')
						 );
		
		$this->db->insert('banner',$params);

		$banner_id = $this->db->insert_id();


		$params = array('position'=>$banner_id);
		$this->db->where('banner_id', $banner_id);
		$this->db->update('banner',$params);

		$this->session->set_flashdata('msg','Edit Complete');


			echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";		

	}

	public function edit($banner_id){

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
				############################################################
			$data["banner_id"] = $banner_id ;

			$data["method"] = 'Edit' ;	
			$data['contentview'] = 'pagecompany/banner_form';	

			$data['banner'] = $this->Banner_model->getOne($banner_id);
			// print_r($data['banner']);
			// exit();
			$search = array();
			$data['company'] = $this->Company_model->getAll(1000,0,$search);
			$domain_arr = array();
			$domainselect = $this->Company_model->getDomainbyBanner($banner_id);
			foreach ($domainselect as $key => $new_domainselect) {
				$domain_arr[] = $new_domainselect->domain_id;
			}
			$new_domainselects = implode(",", $domain_arr);
			// print_r($new_domainselects);exit();
			$data['domainselect'] = $new_domainselects;

			$this->load->view('layoutcompany/main',$data);				
			
		}else{

			$allcheckbox = $this->input->post('allcheckbox');
			$com_website = $this->input->post('com_website');
			$banner_type = $this->input->post('banner_type');

			$start_date = $this->input->post('start_date');
			$expire = $this->input->post('expire');

			$link = $this->input->post('link');
			$position = $this->input->post('position');
			$is_active = $this->input->post('is_active');
			// print_r($start_date);
			// print_r($expire);exit();
			if ($allcheckbox == "1") {

				
				// print_r($alldomain);exit();
				$companys = $this->Company_model->getDomainbyBanner($banner_id);
				if (count($companys) > 0) {

					$this->db->where('banner_id',$banner_id);
					$this->db->delete('domainandbanner');

				}
				// print_r('expression');exit();
				$alldomain = $this->Company_model->getAll(1000,0);

				foreach ($alldomain as  $new_alldomain) {
					$params = array(
									'banner_id'=>$banner_id,
									'domain_id'=>$new_alldomain->com_id
									);

					$this->db->insert('domainandbanner',$params);
				}
			}

			if ($allcheckbox != "1") {
				$companys = $this->Company_model->getDomainbyBanner($banner_id);
				if (count($companys) > 0) {

					$this->db->where('banner_id',$banner_id);
					$this->db->delete('domainandbanner');

				}

				foreach ($com_website as  $new_com_website) {
					$params = array(
									'banner_id'=>$banner_id,
									'domain_id'=>$new_com_website
									);

					$this->db->insert('domainandbanner',$params);
				}
			}

			
			$params = array('link'=>$link,	
				'position'=>$position,
				'banner_type'=>$banner_type,								
				'is_active'=>$is_active,
				'start_date'=>$start_date,								
				'expire'=>$expire,								
				'uby'=>$this->session->userdata('ssfullname'),
				'udate'=> date('Y-m-d H:i:s') );


			$this->db->where('banner_id', $banner_id);
			$this->db->update('banner',$params);
			

			// if(isset($_FILES['picture'])&&$_FILES['picture']['size']>0){
			// 	$filepath = "../images/banner/{$banner_id}.jpg";
			// 	move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);
			// }

			if(isset($_FILES['picture'])&&$_FILES['picture']['size']>0){

				$img = pathinfo($_FILES['picture']['name']);
				$filename = $banner_id;
				$extension = $img["extension"];

				$foldertemp = "../images/banner/temp/";
				$temp_filepath = $foldertemp.$filename.'.'.$extension;

				move_uploaded_file($_FILES['picture']['tmp_name'], $temp_filepath);

				// $filepath = "../images/banner/{$banner_id}.jpg";

				// move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);



				$f_type=$_FILES['picture']['type'];

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
			    }
			    else if (preg_match('/webp/i',$f_type)){
			        $imageTmp=imagecreatefromwebp($temp_filepath);   
			    }
			    // print_r($imageTmp);exit();
				// $imageTmp = imagecreatefromjpeg("../images/banner/{$banner_id}.jpg");
				$w=imagesx($imageTmp);
				$h=imagesy($imageTmp);

				// resize image
				$newsize = 1920;
				$new_w = $newsize;
		    	$new_h = floor(($h * $newsize)/$w);

		    	$dst_img = imagecreatetruecolor($new_w, $new_h);
		    	$backgroundColor = imagecolorallocatealpha($dst_img, 255, 255, 255, 1);
		    	imagefill($dst_img, 0, 0, $backgroundColor);
		    	imagecopyresampled($dst_img, $imageTmp, 0, 0, 0, 0, $new_w, $new_h, $w, $h);

				if($dst_img){			
					$folder = "../images/banner/";
					$filename = "{$banner_id}_mobile";
					$destination = $folder.$filename.'.jpg';
		    		imagejpeg($dst_img, $destination, 100);
				}

				// converter webp
				// $webp=imagecreatetruecolor($w,$h);
				// $backgroundColor = imagecolorallocatealpha($webp, 0, 0, 0, 127);
				// imagefill($webp, 0, 0, $backgroundColor);
				// imagecopy($webp,$jpg, 0, 0, 0, 0,$w,$h);
				// imagewebp($webp, "../images/banner/{$banner_id}.webp", 100);
				

				$jpgmobile = imagecreatefromjpeg("../images/banner/{$banner_id}_mobile.jpg");
				$wmobile=imagesx($jpgmobile);
				$hmobile=imagesy($jpgmobile);
				$webpmobile=imagecreatetruecolor($wmobile,$hmobile);
				$backgroundColormobile = imagecolorallocatealpha($webpmobile, 0, 0, 0, 127);
				imagefill($webpmobile, 0, 0, $backgroundColor);
				imagecopy($webpmobile,$jpgmobile, 0, 0, 0, 0,$wmobile,$hmobile);
				imagewebp($webpmobile, "../images/banner/{$banner_id}_mobile.webp", 100);
				// exit();
				imagedestroy($imageTmp);
				// imagedestroy($webp);
				imagedestroy($jpgmobile);
				imagedestroy($webpmobile);

				$filepathmobiles = "../images/banner/{$banner_id}_mobile.jpg";
				if(is_file($filepathmobiles)){
					unlink($filepathmobiles);
					unlink($temp_filepath);
				}

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

        $filename = $banner_id.'_mobile.webp';
        $filename1 = '../images/banner/'.$banner_id.'_mobile.webp';

        foreach ($domains as $domain) {
        	$folder = "/domains/$domain/public_html/images/";
            if ($this->ftp->list_files($folder) === FALSE) {
                $this->ftp->mkdir($folder);
                $this->ftp->chmod($folder, 0777);
            }

            $folder = "/domains/$domain/public_html/images/banner/";
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
		// echo "Start upload ftp <br>";
        // exit();

        

			$this->session->set_flashdata('msg','Edit Complete');


			echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";		
			
		}
	}

	public function delete($banner_id){
		$this->db->where('banner_id',$banner_id);
		$this->db->delete('banner');

		// $filepath = "../images/banner/{$banner_id}.jpg";
		// if(is_file($filepath)){
		// 	unlink($filepath);
		// }
		$this->session->set_flashdata('msg','Delete Complete');

		echo "<script>alert('deleted');window.opener.location.reload();window.close();</script>";	
	}
	
}


?>