<?php
class Redirection extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('Country_model');

        //$this->load->helper('url');
    }

    function index($lang="",$url="") {

    	
    	if ($lang == $this->session->userdata('site_lang_name')) {
        	
        }else{
        	$language = $this->Country_model->getOnelang($lang);
	    	
	    	// รหัส ภาษา 
	        $this->session->set_userdata('site_lang', $language->country_id);
	        // รหัส ฃื่อภาษา
	        $this->session->set_userdata('site_lang_name', $language->iso2);

	        Redirect($url);
        }
	    	
        
    	
    }
}