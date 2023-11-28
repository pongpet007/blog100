<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filemanage extends CI_Controller {


	function __construct(){
						
		parent::__construct();
	
	}

	public function delete()
	{
		$filepath = $this->input->get('filepath');
		if(is_file($filepath))
		{
			unlink($filepath);
			echo "<script>alert('file deleted');window.opener.location.reload();window.close();</script>";
		}
	}

	public function upload()
	{
		// if ($_FILES['upload']['name']) {
	 //        if (!$_FILES['upload']['error']) {
	 //            $filename = $_FILES['upload']['name'];
	            
	 //            $filepath = "../assets/upload/";
	 //            $destination = $filepath . $filename;  
	           
		// 		// if(!is_dir($filepath))
		// 		// 	mkdir($filepath);			
	           
	 //            $location = $_FILES["upload"]["tmp_name"];

	 //            move_uploaded_file($location, $destination);

	 //            //echo "http://www.pocketpages.net/assets/upload/" . $filename;            
	 //            $url =  base_url("../assets/upload/" . $filename);      
	 //            //echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($funcNum, '$url', '$message');</script>";      
	 //        }
	 //    }

		$fs=pathinfo($_FILES['upload']['name']);
		
		$filename = date('YMd_').time().'.'.$fs['extension'];
		
	    $url = 'assets/upload/'.$filename;
		

		 //extensive suitability check before doing anything with the file...
		    if (($_FILES['upload'] == "none") OR (empty($_FILES['upload']['name'])) )
		    {
		       $message = "No file uploaded.";
		    }
		    else if ($_FILES['upload']["size"] == 0)
		    {
		       $message = "The file is of zero length.";
		    }
		    else if (($_FILES['upload']["type"] != "image/pjpeg") AND ($_FILES['upload']["type"] != "image/jpeg") AND ($_FILES['upload']["type"] != "image/png") AND ($_FILES['upload']["type"] != "image/gif"))
		    {
		       $message = "The image must be in either GIF , JPG or PNG format. Please upload a JPG or PNG instead.";
		    }
		    
			else if (!is_uploaded_file($_FILES['upload']["tmp_name"]))
		    {
		       $message = "You may be attempting to hack our server. We're on to you; expect a knock on the door sometime soon.";
		    }
		    else {
		      $message = "";
			
		      $move =  move_uploaded_file($_FILES['upload']['tmp_name'], $url);
		      if(!$move)
		      {
		         $message = "Error moving uploaded file. Check the script is granted Read/Write/Modify permissions.";
		      }
		      //$url = "../" . $url;
		    }

			
			if($message != "")
			{
				$url = "";
			}

			$funcNum = $_GET['CKEditorFuncNum'] ;
		    $i=$_SERVER['SERVER_NAME'];

		    $url =  $i."/assets/upload/" . $filename;   

			echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($funcNum, '$url', '$message');</script>";

	}

}

?>