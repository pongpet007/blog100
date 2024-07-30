<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Filemanage extends CI_Controller
{


	function __construct()
	{

		parent::__construct();

		$this->load->model('Company_model');
	}

	public function delete()
	{
		$filepath = $this->input->get('filepath');
		if (is_file($filepath)) {
			unlink($filepath);
			echo "<script>alert('file deleted');window.opener.location.reload();window.close();</script>";
		}
	}

	public function cropperupload()
	{
		$filename = "temp_" . $this->input->post("filename");
		$filename2 = $this->input->post("filename");
		if (empty($filename)) {
			exit("Error filename");
		}

		$filepath = "../images/product_new/$filename";
		move_uploaded_file($_FILES['croppedCanvas']['tmp_name'], $filepath);
		$f_type = $_FILES['croppedCanvas']['type'];
		if (preg_match('/jpg|jpeg/i', $f_type))
			$imageTmp = imagecreatefromjpeg($filepath);
		else if (preg_match('/png/i', $f_type))
			$imageTmp = imagecreatefrompng($filepath);
		else if (preg_match('/gif/i', $f_type))
			$imageTmp = imagecreatefromgif($filepath);
		else if (preg_match('/bmp/i', $f_type))
			$imageTmp = imagecreatefrombmp($filepath);

		$src_w = imagesx($imageTmp);
		$src_h = imagesy($imageTmp);
		$dst_img = imagecreatetruecolor($src_w, $src_h);

		$backgroundColor = imagecolorallocate($dst_img, 255, 255, 255);
		imagefill($dst_img, 0, 0, $backgroundColor);

		// Resize image
		imagecopyresampled($dst_img, $imageTmp, 0, 0, 0, 0, $src_w, $src_h, $src_w, $src_h);


		if ($dst_img) {


			$destination = "../images/product_new/$filename2";
			imagejpeg($dst_img, $destination, 70);

			if (is_file($filepath)) {
				unlink($filepath);
			}
		}

		echo "OK";
	}

	public function upload()
	{
		$fs = pathinfo($_FILES['upload']['name']);
		// print_r($_FILES['upload']);exit();
		$filename = date('YMd_') . time() . '.' . $fs['extension'];
		$url = '../images/upload/' . $filename;

		//extensive suitability check before doing anything with the file...
		if (($_FILES['upload'] == "none") or (empty($_FILES['upload']['name']))) {
			$message = "No file uploaded.";
		} else if ($_FILES['upload']["size"] == 0) {
			$message = "The file is of zero length.";
		} else if (($_FILES['upload']["type"] != "image/pjpeg") and ($_FILES['upload']["type"] != "image/jpeg") and ($_FILES['upload']["type"] != "image/png") and ($_FILES['upload']["type"] != "image/gif") and ($_FILES['upload']["type"] != "image/webp")) {
			$message = "The image must be in either GIF , JPG or PNG format. Please upload a JPG or PNG instead.";
		} else if (!is_uploaded_file($_FILES['upload']["tmp_name"])) {
			$message = "You may be attempting to hack our server. We're on to you; expect a knock on the door sometime soon.";
		} else {
			$message = "";

			$move =  move_uploaded_file($_FILES['upload']['tmp_name'], $url);
			if (!$move) {
				$message = "Error moving uploaded file. Check the script is granted Read/Write/Modify permissions.";
			}
			//$url = "../" . $url;
			// print_r($url);exit();
		}

		if ($message != "") {
			$url = "";
		}

		$funcNum = $_GET['CKEditorFuncNum'];		
		// $url =  base_url("../images/upload/" . $filename);
		// $hostreturn = $_SERVER["REQUEST_SCHEME"] . '://' . $_SERVER['SERVER_NAME'];

		$hostreturn = "";

			// echo "transfer complete";

		

			$this->load->library('ftp');

			$config['hostname'] = '27.254.96.231';
			$config['username'] = 'brand100';
			$config['password'] = 'Bra1212312121!@#$%^';
			$config['debug']        = TRUE;

			// $domainsnow = $_SERVER['SERVER_NAME'];

			$domainname = $_SERVER['SERVER_NAME'];
        	preg_match('/^(?:https?:\/\/)?(?:[^@\n]+@)?(?:www\.)?([^:\/\n?]+)/', $domainname , $matches);     
			$domainsnow = $matches[1];

			// print_r($domainsnow);exit();
			$domainsold = $this->Company_model->getDomainbyALLS($domainsnow);
			// echo $this->db->last_query();
			
			// foreach ($domainsold as $key => $new_domains) {
			// 	$domains[] = $new_domains->com_website;
			// }

			$this->ftp->connect($config);

			// $filename = "detail_". $pro_pic_id ."_300.webp";
			$filename1 = '../images/upload/'.$filename.'';

			foreach ($domainsold as $key => $new_domains) {
				$domain = $new_domains->com_website;
				$folder = "/domains/$domain/public_html/images/";
				if ($this->ftp->list_files($folder) === FALSE) {
					$this->ftp->mkdir($folder);
					$this->ftp->chmod($folder, 0777);
				}

				$folder = "/domains/$domain/public_html/images/upload/";
				if ($this->ftp->list_files($folder) === FALSE) {
					$this->ftp->mkdir($folder);
					$this->ftp->chmod($folder, 0777);
				}
            // $_FILES['picture']["tmp_name"];
				$this->ftp->upload($filename1, $folder.$filename);
			}

			$this->ftp->close();

			echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($funcNum, '$hostreturn/images/upload/$filename', '$message');</script>";
	}
}
