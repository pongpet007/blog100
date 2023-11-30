<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Summernote extends CI_Controller {

	public function __construct(){
			
		parent::__construct();
		$this->load->model('Admin_model');	

	}

	public function upload()
	{
		if ($_FILES['file']['name']) {
	        if (!$_FILES['file']['error']) {
	            $filename = $_FILES['file']['name'];
	            
	            $filepath = "../assets/upload/";
	            $destination = $filepath . $filename;  
	           
				// if(!is_dir($filepath))
				// 	mkdir($filepath);			
	           
	            $location = $_FILES["file"]["tmp_name"];

	            move_uploaded_file($location, $destination);

	            //echo "http://www.pocketpages.net/assets/upload/" . $filename;            
	            echo base_url("../assets/upload/" . $filename);            
	        }
	    }
	}

}

?>