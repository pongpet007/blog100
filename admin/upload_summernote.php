<?php 

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
            echo "http://localhost:90/pocketpages3/assets/upload/" . $filename;            
        }
    }
?>