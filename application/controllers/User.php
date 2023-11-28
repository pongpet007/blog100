<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	function __construct(){
		parent::__construct();

		if(!$this->session->has_userdata('site_lang')){
			$this->session->set_userdata('site_lang', 'TH');
		}
		$this->load->model('Category_model');		
		$this->load->model('Config_model');
		$this->load->model('Blog_model');			
		$this->load->model('Counter_model');
		$this->load->model('Login_model');
		$this->load->model('cms/Content_model');
		$this->load->model('cms/Content_row_model');
		$this->load->model('cms/Content_row_item_model');
		$this->load->model('cms/Content_row_item_template_model');
		$this->load->model('cms/Menu_model');

	}

	public function Register()
	{

		$this->form_validation->set_rules('username','username','trim|required');	
		$this->form_validation->set_rules('userpassword','Password','trim|required');	
		$this->form_validation->set_rules('useremail','Email','trim|required');		
		if($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('errors', validation_errors());

			$data[] ='';
			//echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";
			redirect('Login');
		}else{				
		// print_r($this->form_validation->run());
		// exit();

			$username = $this->input->post('username');
			$userpassword = $this->input->post('userpassword');
			$useremail = $this->input->post('useremail');
			$row = $this->Login_model->checkLogin($username,$userpassword,$useremail);

			if($row != ""){

				echo "<script>alert('ลงทะเบียนไม่สำเร็จเนื่องจากมีอีเมล์ถูกลงทะเบียนแล้ว');window.opener.location.reload();window.close();</script>";
				
			}
			else{
				
				$username = $this->input->post('username');
				$userpassword = $this->input->post('userpassword');
				$useremail = $this->input->post('useremail');
				$str = md5($useremail);
				
				$params = array(						
								'cus_name'=>$username,	
								'cus_pass'=>$userpassword,	
								'cus_verify'=>$str,	
								'cus_email'=>$useremail
							);
					
				$this->db->insert('customer',$params);

				$row = $this->Login_model->checkLogin2($useremail,$userpassword);

				$this->session->set_userdata('ssid',$row->cus_id);
				$this->session->set_userdata('ssusername',$row->cus_name);
				$this->session->set_userdata('ssfullname',$row->cus_email);
				echo "<script>alert('สมัครสมาชิกสำเร็จ กำลังเข้าสู่ระบบ');window.opener.location.reload();window.close();</script>";
				
				/*
				$x = 'โปรดยืนยันตัวตน <a href="https://www.asiantechindustry.com//User/Verify/'.$str.'" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" id="LPlnk185225"><font face="Arial,sans-serif" size="3" color="black"><span style="font-size:12pt;"><b>คลิ๊กที่นี่</b></span></font></a>';
				
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
		   		// $to = $company->com_email;
		   		$to = $useremail;
		   		$this->email->to($to);   		
		   		$this->email->subject('การยืนยันตัวตนขอองสมาชิก' .$username. ' '.date('d M F h:i:s a'));
		   		$this->email->message($x);
		   		
		   		if($this->email->send()){
		     		echo "<script>alert('ลงทะเบียนสำเร็จโปรดตรวจสอบอีเมล');window.opener.location.reload();window.close();</script>";
		   		}
		   		else{
		    		echo "Send error";
		   		}*/	
			}
		}
	}

	public function Login()
	{
		$data['counter'] = $this->Counter_model->count();
		$data["categorys"] = $this->Category_model->getAll();
		////////////////////// Theme ///////////////////////////////////
		$company = $this->Config_model->getConfig();
		$data['com_title_en'] = $company->com_title_en;
		$data['com_title_th'] = $company->com_title_th;
		$data['metaDescription'] = $company->metaDescription;
		$data['metaKeyword'] = $company->metaKeyword;
		$data['companyData'] = $company;
		$theme_path = $company->theme_path;
		$data['theme_path'] = $theme_path;
		$data["theme_assets_path"] = $company->theme_assets_path;
		
		$data['lang'] = $this->session->userdata('site_lang');
		
		$menus = $this->Menu_model->getMain();
		// echo $this->db->last_query();
		// exit();

		foreach ($menus as $menu) {
			$menu->submenu = $this->Menu_model->getsub($menu->menu_id);
		}
		$data['menus'] = $menus ;

			
		$search = array();
		$data['config'] = $this->Config_model->getConfig();		
		
		// $data['products']  = $this->Products_model->getPopular(5,0);	
		// $data['counter'] = $this->Counter_model->getCount();
		
		
		$this->form_validation->set_rules('username','email','trim|required');	
		$this->form_validation->set_rules('password','Password','trim|required');			
		if($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('errors', validation_errors());

			$data[] ='';
			//echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";
			redirect('Login');
		}else{				
		// print_r($this->form_validation->run());
		// exit();
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			if($row = $this->Login_model->checkLogin2($username,$password)){
				/*if ($row->cus_status==1) {
					echo "<script>alert('โปรดยืนยันตัวตนที่อีเมล');window.opener.location.reload();window.close();</script>";
					redirect();
				}else{*/
					$this->session->set_userdata('ssid',$row->cus_id);
					$this->session->set_userdata('ssusername',$row->cus_name);
					$this->session->set_userdata('ssfullname',$row->cus_email);
					echo "<script>alert('Login Success');window.opener.location.reload();window.close();</script>";
					
					
				/*}*/
				
			}
			else{
				$this->session->set_flashdata('errors','Username or Password Invalid');
				$data[] = '';
				redirect();
			}
		}

	}

	public function Verify($code)
	{
		
		$data['counter'] = $this->Counter_model->count();
		$data["categorys"] = $this->Category_model->getAll();
		////////////////////// Theme ///////////////////////////////////
		$company = $this->Config_model->getConfig();
		$data['com_title_en'] = $company->com_title_en;
		$data['com_title_th'] = $company->com_title_th;
		$data['metaDescription'] = $company->metaDescription;
		$data['metaKeyword'] = $company->metaKeyword;
		$data['companyData'] = $company;
		$theme_path = $company->theme_path;
		$data['theme_path'] = $theme_path;
		$data["theme_assets_path"] = $company->theme_assets_path;
		
		$data['lang'] = $this->session->userdata('site_lang');
		
		$menus = $this->Menu_model->getMain();
		// echo $this->db->last_query();
		// exit();

		foreach ($menus as $menu) {
			$menu->submenu = $this->Menu_model->getsub($menu->menu_id);
		}
		$data['menus'] = $menus ;

			
		$search = array();
		$data['config'] = $this->Config_model->getConfig();		
		
		if($row = $this->Login_model->checkverify($code)){
					
					$params = array('cus_status'=>2);

		
					$this->db->where('cus_id', $row->cus_id);
					$this->db->update('customer',$params);

					$this->session->set_userdata('ssid',$row->cus_id);
					$this->session->set_userdata('ssusername',$row->cus_name);
					$this->session->set_userdata('ssfullname',$row->cus_email);

					redirect('User/sendverify_complete');

				}
				else{

					$this->session->set_flashdata('errors','Username or Password Invalid');
					
					$data[] = '';

					$this->load->view($theme_path.'/login',$data);
				}	
		
		$this->load->view($theme_path.'/blog',$data);

	}

	public function sendverify_complete($pro_id=0)
	{
		$data['counter'] = $this->Counter_model->count();
		$data["categorys"] = $this->Category_model->getAll();
		$company = $this->Config_model->getConfig();
		$data['companyData'] = $company;
		$theme_path = $company->theme_path;
		$data['theme_path'] = $theme_path;
		$data["theme_assets_path"] = $company->theme_assets_path;
		
		$menus = $this->Menu_model->getMain();
		foreach ($menus as $menu) {
			$menu->submenu = $this->Menu_model->getsub($menu->menu_id);
		}
		$data['menus'] = $menus ;

		$data['lang'] = $this->session->userdata('site_lang');
		$data['config'] = $this->Config_model->getConfig();


		$this->load->view($theme_path.'/verify_complete',$data);
	}
}