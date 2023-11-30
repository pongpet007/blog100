<?php 

/**
* 
*/
require_once APPPATH."third_party/TCPDF/tcpdf.php";

class Pdf extends TCPDF
{
	
	public function __construct()
	{
		parent::__construct();

	}

	 public function Header() {
       
        $image_file = APPPATH.'../assets/images/media/index1/logo-aec.jpg';
        // echo $image_file;
        // exit();
        $this->Image($image_file, 10, 0, 30, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        // Set font
        $this->SetFont('helvetica', 'B', 10);
      
        $this->Cell(0, 12, 'Chief Executive Officer ', 0, 1, 'R', 0, '', 0, false, 'M', 'B');
        

    }

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        $this->Cell(0, 10, 'www.AECGateway.com ', 0, false, 'L', 0, '', 0, false, 'T', 'M');
        // Page number
        $this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'R', 0, '', 0, false, 'T', 'M');
    }
}

 ?>