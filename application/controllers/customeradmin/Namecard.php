<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Namecard extends CI_Controller {

	public function __construct(){
			
		parent::__construct();
		$this->load->model('Company_model');					
		$this->load->model('thaimail/Province_model');					
		$this->load->model('thaimail/Country_model');	
		$this->load->model('thaimail/Maillinglist_model');	
		$this->load->model('thaimail/Maillinglist_tags_model');	
		$this->load->model('thaimail/Market_group_model');	


	}

	public function index($com_id)
	{
		if(empty($this->session->userdata("company_login_com_id")))
		{
			redirect("Store/index/$com_id");
		}	
		$search = array();		
		$keyword = $this->input->get('keyword');
		$mk_id = $this->input->get('mk_id');
		$province_id = $this->input->get('province_id');
		$country_id = $this->input->get('country_id');
		
		$search['keyword'] = $keyword;
		
		$search['province_id'] = $province_id;
		$search['country_id'] = $country_id;

		$countrys = $this->Country_model->getAll();		
		$arr = array('0'=>'-- ประเทศ --');
		foreach ($countrys as $key => $value) {
			$arr[$value->country_id] = $value->short_name;
		}
		$data['countrys'] = $arr ;

		// Province
		$markets = $this->Market_group_model->getAll();		
		$arr = array('0'=>'-- หมวดหมู่ --');
		foreach ($markets as $key => $value) {
			$arr[$value->mk_id] = $value->mk_name;
			if($value->is_default==1)
			{
				$selected = $value->mk_id;
			}
		}
		$data['markets'] = $arr ;

		if($mk_id >0)
		{
			$search['mk_id'] = $mk_id;
		}
		else
		{
			$search["mk_id"]=$selected;
		}
		// check display
		$market = $this->Market_group_model->getOne($search['mk_id']);		
		$data["market"]  = $market;
		
		// Province
		$provinces = $this->Province_model->getAll(1000,0);		
		$arr = array('0'=>'-- จังหวัด --');
		foreach ($provinces as $key => $value) {
			$arr[$value->province_id] = $value->province_name;
		}
		$data['provinces'] = $arr ;
		
		$this->load->config('pagination',TRUE);
		
		$config = $this->config->item('pagination');
		
		$config["base_url"] = base_url() . "customeradmin/Namecard/index/$com_id";
		$config["total_rows"] = $this->Maillinglist_model->record_count($search);
		$config["per_page"] = 40;
		$config["uri_segment"] = 5;
		$config['reuse_query_string'] = true;
		 
		
		$this->pagination->initialize($config);		

		$data["links"] = $this->pagination->create_links();
		
		$data['total_rows'] =  $config["total_rows"];
		$start = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;	
		$data['namecards'] = $this->Maillinglist_model->getAll($config["per_page"],$start,$search);
		// print_r($this->db->last_query());
		// exit();
		//echo $this->db->last_query();
		$data['search'] = $search;
		$data['com_id'] = $com_id;
		$data['company'] = $this->Company_model->getOne($com_id);

		
		$data['contentview'] = "pagecompany/namecard_show";

		$this->load->view('layoutcompany/main',$data);

	}

	public function getjson()
    {
        $keyword = $this->input->get('term');
        $search['keyword'] = $keyword;

        $tags = $this->Maillinglist_tags_model->getTag(10,0,$search);
			
        $result = array();
        foreach ($tags as $tag) {
            	$label = str_replace($keyword, "[$keyword]", $tag->tag);
            	$result[] = array("id"=>"$tag->tag"."2","label"=>"$label","value"=>"$tag->tag");
        }   


        echo json_encode($result);
    }

    
	public function namecardpdf($com_id)
	{

		//echo "<h1>Please wait....</h1>";
		$search = array();
		$country_id = $this->input->get("country_id");
		$keyword = $this->input->get("keyword");
		$search['country_id'] = COUNTRY_ID ;
		$search['keyword'] = $keyword ;
		

		$namecards = $this->Namecard_model->getAll(3000,0,$search);
		

	    $this->load->library('Namecard');
	    $pdf = new Namecard('P', 'mm', 'A4', true, 'UTF-8', false);
	    $pdf->SetFont('freeserif', '', 8, '', true);
	    
	    $pdf->SetTitle('Businessman local country');
	    // $pdf->setPrintHeader(false);
	    // $pdf->setPrintFooter(false);
	  	$pdf->setJPEGQuality(75);
	    $pdf->AddPage();        
	       
       	// $html="";
       	// Image($file, $x='', $y='', $w=0, $h=0, $type='', $link='', $align='', $resize=false, $dpi=300, $palign='', $ismask=false, $imgmask=false, $border=0, $fitbox=false, $hidden=false, $fitonpage=false)
       
		for ($i=0; $i < sizeof($namecards) ; $i++) {   

       		$filepath = "images/namecard/logo_{$namecards[$i]->namecard_id}.jpg";
       		if(is_file($filepath)){
       			$pdf->Image($filepath, '', '' , 90, 48 , '', '', 'C', true, 300, '', false, false, 1, false, false, false);
       		}
       		
       		$i++;
       		if(isset($namecards[$i])){
       			
	       		$filepath = "images/namecard/logo_{$namecards[$i]->namecard_id}.jpg";
	       		if(is_file($filepath)){	       			
	       			$pdf->Image($filepath, 105, '' , 90, 48 , '', '', 'C', true, 300, '', false, false, 1, false, false, false);
	       		}
	       		
	       	}       	
	       	
       		$pdf->ln(53);       		
       		
       	}
       	$filename = date('Y-m-d_H_').mt_rand();
       	$filepath = APPPATH . '../pdf/'.$filename.'.pdf';
       	// echo $filepath;
       	// exit();
	    $pdf->Output($filepath,'F');
	    
	    echo base_url('pdf/'.$filename.'.pdf');
	    

	}

	public function namecardpdf2($com_id)
	{
		$search = array();
		$country_id = $this->input->get("country_id");
		$keyword = $this->input->get("keyword");
		$search['country_id'] = COUNTRY_ID ;
		$search['keyword'] = $keyword ;
		

		$namecards = $this->Namecard_model->getAll(3000,0,$search);
		

	    $this->load->library('Namecard');
	    $pdf = new Namecard('P', 'mm', 'A4', true, 'UTF-8', false);
	    $pdf->SetFont('freeserif', '', 8, '', true);
	    
	    $pdf->SetTitle('Businessman local country');
	    // $pdf->setPrintHeader(false);
	    // $pdf->setPrintFooter(false);
	  	$pdf->setJPEGQuality(10);
	    $pdf->AddPage();        
	       
       	$html="";

        for ($i=0; $i < sizeof($namecards) ; $i++) {          	

			$html .= '<table width="100%" border="0" cellspacing="5" cellpadding="5" >';
	        $html.='<tr>';

          
    		$html.='<td width="50%">';	
    		$filepath = "images/namecard/logo_{$namecards[$i]->namecard_id}.jpg";
    		if(is_file($filepath)){
        		$html.='<img src="'.base_url($filepath).'" style="border:1px solid #eee; height:150pt;">';
        	}
        	$html.='</td>';	
        	
           
            $i++;		
            if(isset($namecards[$i])){
            	
	           	$html.='<td width="50%">';	
	    		$filepath = "images/namecard/logo_{$namecards[$i]->namecard_id}.jpg";
	    		if(is_file($filepath)){
	        		$html.='<img src="'.base_url($filepath).'" style="border:1px solid #eee; height:150pt;">';
	        	}
	        	$html.='</td>';	
           		      	
	        }
          	$html.='</tr>';
			$html.='</table>';     	
	    		
		}
	 	
	 	$pdf->SetFont('freeserif', '', 10, '', true);	    
    	$pdf->writeHTML($html, true, false, true, false, '');		
	    $pdf->Output(date('Y-m-d_H_i_s').'.pdf');
	}



}

?>