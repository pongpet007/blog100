<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Country extends CI_Controller {


	function __construct(){
						
		parent::__construct();
	
		$this->load->model('Menu_admin_model');	
		$this->load->model('Menu_admin_type_model');	
		$this->load->model('News_model');
		$this->load->model('News_language_model');
		$this->load->model('Company_model');
		$this->load->model('Country_model');			
	}

	public function index($com_id){

		$data = array();
		$country_id = array('38', '46', '111', '120', '151', '221', '236', '243');
		$data['country'] = $this->Country_model->getAll2($country_id);
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
		$data['contentview']  = 'pagecompany/country_show';
		$data['company'] = $this->Company_model->getOne($com_id);
		$search['news_type'] = 1;

		$newss = $this->News_model->getAll($com_id,$search);
		foreach ($newss as $news) {
			$news->languages = $this->News_language_model->getAll(array('news_id'=>$news->news_id));
		}
		$data['newss'] = $newss;
		


		// print_r($this->db->last_query());
		// exit();
		$this->load->view('layoutcompany/main',$data);
	}

	public function chang_active($country_id){
		$country = $this->Country_model->getOne($country_id);

		if ($country->is_active == 1) {
			$params = array(
							'is_active'=>0
							 );

			$this->db->where('country_id', $country_id);
			$this->db->update('country',$params);
		}else {
			$params = array(
							'is_active'=>1
							 );

			$this->db->where('country_id', $country_id);
			$this->db->update('country',$params);
		}
		redirect('Country/index/1');
	}

	public function delete($news_id){
		
		$this->db->where('news_id',$news_id);
		$this->db->delete('news');

		$filepath = "../images/news/news{$news_id}_title.jpg";
		if(is_file($filepath)){
			unlink($filepath);
		}

		$filepath = "../images/news/news{$news_id}_1.jpg";
		if(is_file($filepath)){
			unlink($filepath);
		}
		$this->session->set_flashdata('msg','Delete Complete');

		echo "<script>window.opener.location.reload();window.close();</script>";	
	}
	
}
 

?>