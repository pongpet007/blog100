<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompanySubscription extends CI_Controller {


	function __construct(){
						
		parent::__construct();
	
		$this->load->model('News_model');
		$this->load->model('Company_model');
		$this->load->model('Subscription_model');
		$this->load->model('Quotation_model');	
		$this->load->model('Menu_admin_model');
		$this->load->model('Menu_admin_type_model');
	}

	public function index($com_id){

		$data = array();
		$data["com_id"] = $com_id ;

		$data['company'] = $this->Company_model->getOne($com_id);
		$data['subscriptions'] = $this->Subscription_model->getAll($com_id);
		// print_r($data['company']);
		// exit();
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
		$data['contentview']  = 'pagecompany/subscription_show';
		$search["com_id"] = $com_id;
		$data["countnew"] = $this->Quotation_model->countnew($search);
		
		$data['newss'] = $this->Subscription_model->getAll($com_id);
		// print_r($data['news'])
		$this->load->view('layoutcompany/main',$data);
	}	
}
 

?>