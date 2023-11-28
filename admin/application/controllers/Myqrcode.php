<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myqrcode extends CI_Controller {


	function __construct(){
						
		parent::__construct();
	
		$this->load->library('Bdqrcode');
		$this->load->model('Qrcode_model');
		$this->load->model('Qrcode_type_model');
		$this->load->model('Company_model');
		$this->load->model('Company_product_model');
	}

	

	public function index(){
		
		$keyword = trim($this->input->post("keyword"));
		$qrcode_type_id = $this->input->post("qrcode_type_id");
		$search['keyword'] = $keyword;
		$search['qrcode_type_id'] = $qrcode_type_id;

		$data = array();		
		$data['search'] = $search;

		$qrcode_types= $this->Qrcode_type_model->getAll();		
		$arr = array('0'=>' -- Company -- ');
		foreach ($qrcode_types as $key => $value) {
			$arr[$value->qrcode_type_id] = $value->qrcode_type_name;
		}
		$data['qrcode_types'] = $arr ;

		$data['qrcodes'] = $this->Qrcode_model->getAll($search);

		// echo $this->db->last_query();
		//exit();
		
		$data['contentview']  = 'pages/qrcode_show';

		$this->load->view('layout/main',$data);

	}

	public function qr($str='1234')
	{
		
		return $this->bdqrcode->png($str);
		  //QRcode::png($codeContents, $tempDir.'007_4.png', QR_ECLEVEL_L, 4); 
	}

	public function qrbyurl()
	{
		$url = $this->input->get('url');
		
		return $this->bdqrcode->png($url);
		  //QRcode::png($codeContents, $tempDir.'007_4.png', QR_ECLEVEL_L, 4); 
	}

	public function getProductBrandex($com_id)
	{
		$products = $this->Company_product_model->getAll(10000, 0,array('com_id'=>$com_id,'keyword'=>''));			
		$arr = array();
		foreach ($products as $product) {
			$arr[$product->pro_id] = "$product->pro_name_en - ({$product->pro_id})"; 
		}
		echo json_encode($arr);
	}

	public function getProductPocket($com_id)
	{
		
		$pocket = $this->load->database('pocket', TRUE);
		$query = $pocket->query("select pro_id,pro_name_en from products where com_id = $com_id order by pro_name_en ");
		$arr = array();
		foreach ($query->result() as $product)
		{
		   $arr[$product->pro_id] =  "$product->pro_name_en - ({$product->pro_id})"; 
		}

		echo json_encode($arr);
	}

	public function getProductAec($com_id)
	{
		$aec = $this->load->database('aec', TRUE);
		$query = $aec->query("select product_id,pro_name_e from company_product  where com_id = $com_id order by pro_name_e asc");
		//echo $aec->last_query();
		
		$arr = array();
		foreach ($query->result() as $product)
		{
		   $arr[$product->product_id] =  "$product->pro_name_e - ({$product->product_id})"; 
		}
		

		echo json_encode($arr);
	}

	public function add(){
		
			// foreach ($_REQUEST as $key => $value) {
			// 	//echo "\$$key = \$this->input->post('$key');<br>";
			// 	echo "'$key'=>\$$key,	<br>";
			// }
			// exit();

			$this->form_validation->set_rules('title','Title','trim|required');
			
			if($this->form_validation->run()==FALSE){
				

				$this->session->set_flashdata('errors', validation_errors());				
				
				$data["qrcode_id"] = '' ;
				
				$data["method"] = 'Add' ;
								
				$data['qrcode'] ='';
				$data['products'] = array();
				$data['book'] = $this->input->get('book');
				//////////////////// Book //////////////////////////////////////////////
				$qrcode_types= $this->Qrcode_type_model->getAll();		
				$arr = array();
				foreach ($qrcode_types as $key => $value) {
					$arr[$value->qrcode_type_id] = $value->qrcode_type_name;
				}
				$data['qrcode_types'] = $arr ;
				/////////////////// Brandex company ///////////////////////////////////////////////
				$results = $this->Company_model->getAll(1000,0,array('keyword'=>'','comtype_id'=>2));
				$brandexCompany = array(0=>'-- Select company --');
				foreach ($results as $row)
				{
				    $brandexCompany[$row->com_id] = "{$row->com_name_en} - ({$row->com_id})";
				}
				$data['brandexCompanys'] = $brandexCompany ;

				// print_r($brandexCompany);
				// exit();
				/////////////////// AEC company ///////////////////////////////////////////////
				$aec = $this->load->database('aec', TRUE);
				$query = $aec->query("select com_id,com_name_e from company where expire > now() and com_name_e <>'' order by com_name_e");
				$aecCompany = array(0=>'-- Select company --');

				foreach ($query->result() as $row)
				{	//echo $row->com_id .',';
				    $aecCompany[$row->com_id] = "{$row->com_name_e} - ({$row->com_id})";
				}
				// exit();
				$data['aecCompanys'] = $aecCompany ;
				// print_r($aecCompany);
				// exit();
				///////////////////// Pocket company /////////////////////////////////////////////
				$pocket = $this->load->database('pocket', TRUE);
				$query = $pocket->query("select com_id,com_name_en from company where comtype_id =2 and expire > now() order by com_name_en");
				$pocketCompany = array(0=>'-- Select company --');
				foreach ($query->result() as $row)
				{
				    $pocketCompany[$row->com_id] =  "{$row->com_name_en} - ({$row->com_id})";
				}
				$data['pocketCompanys'] = $pocketCompany ;
				//////////////////////////////////////////////////////////////////

				
				$data['contentview'] = 'pages/qrcode_form';	
				
				$this->load->view('layout/main',$data);					
				
			}else{

				$title = $this->input->post('title');
				$json = $this->input->post('json');
				$ads_product = $this->input->post('ads_product');
				$com_id = $this->input->post('com_id');
				$pro_id = $this->input->post('pro_id');
				$qrcode_type_id = $this->input->post('qrcode_type_id');

				$params = array(
								'title'=>$title,	
								'json'=>$json,														
								'ads_product'=>$ads_product,														
								'com_id'=>$com_id,														
								'pro_id'=>$pro_id,														
								'qrcode_type_id'=>$qrcode_type_id,
								'cby'=>$this->session->userdata('ssfullname'),
								'cdate'=> date('Y-m-d H:i:s'),
								'udate'=> date('Y-m-d H:i:s')
								 );

				
				$this->db->insert('qrcode',$params);
				
				$qrcode_id = $this->db->insert_id();
				
				$sql = "update qrcode set md5_encode = md5(concat(qrcode_id,ts)) where qrcode_id=$qrcode_id ";

				$this->db->query($sql);	
				$this->session->set_flashdata('msg','Add Complete');
			
				echo "<script>window.opener.location.reload();window.close();</script>";					
				
			}

	}

	public function edit($qrcode_id){

		$this->form_validation->set_rules('title','Title','trim|required');	
					
		if($this->form_validation->run()==FALSE){			

			$this->session->set_flashdata('errors', validation_errors());		
			
			$data["qrcode_id"] = $qrcode_id ;

			$data["method"] = 'Edit' ;

			$data['book'] = $this->input->get('book');

			$qrcode_types= $this->Qrcode_type_model->getAll();		
			$arr = array('0'=>' -- Type -- ');
			foreach ($qrcode_types as $key => $value) {
				$arr[$value->qrcode_type_id] = $value->qrcode_type_name;
			}
			$data['qrcode_types'] = $arr ;
			/////////////////// Brandex company ///////////////////////////////////////////////
			$results = $this->Company_model->getAll(1000,0,array('keyword'=>'','comtype_id'=>2));
			$brandexCompany = array(0=>'-- Select company --');
			foreach ($results as $row)
			{
			    $brandexCompany[$row->com_id] = "{$row->com_name_en} - ({$row->com_id})";
			}
			$data['brandexCompanys'] = $brandexCompany ;

			// print_r($brandexCompany);
			// exit();
			/////////////////// AEC company ///////////////////////////////////////////////
			$aec = $this->load->database('aec', TRUE);
			$query = $aec->query("select com_id,com_name_e from company where expire > now() and com_name_e <>'' order by com_name_e");
			$aecCompany = array(0=>'-- Select company --');

			foreach ($query->result() as $row)
			{	//echo $row->com_id .',';
			    $aecCompany[$row->com_id] = "{$row->com_name_e} - ({$row->com_id})";
			}
			// exit();
			$data['aecCompanys'] = $aecCompany ;
			// print_r($aecCompany);
			// exit();
			///////////////////// Pocket company /////////////////////////////////////////////
			$pocket = $this->load->database('pocket', TRUE);
			$query = $pocket->query("select com_id,com_name_en from company where comtype_id =2 and expire > now() order by com_name_en");
			$pocketCompany = array(0=>'-- Select company --');
			foreach ($query->result() as $row)
			{
			    $pocketCompany[$row->com_id] =  "{$row->com_name_en} - ({$row->com_id})";
			}
			$data['pocketCompanys'] = $pocketCompany ;
			//////////////////////////////////////////////////////////////////
			$data['contentview'] = 'pages/qrcode_form';	

			$qrcode = $this->Qrcode_model->getOne($qrcode_id);	
			$arr = array();
			if($qrcode->ads_product==2)
			{
				$com_id = $qrcode->com_id;
				if($qrcode->qrcode_type_id==1)
				{
					$products = $this->Company_product_model->getAll(10000, 0,array('com_id'=>$com_id,'keyword'=>''));			
					
					foreach ($products as $product) {
						$arr[$product->pro_id] = "$product->pro_name_en - ({$product->pro_id})"; 
					}
				}
				elseif($qrcode->qrcode_type_id==2)
				{
					$pocket = $this->load->database('pocket', TRUE);
					$query = $pocket->query("select pro_id,pro_name_en from products where com_id = $com_id order by pro_name_en ");
					
					foreach ($query->result() as $product)
					{
					   $arr[$product->pro_id] =  "$product->pro_name_en - ({$product->pro_id})"; 
					}
				}
				elseif($qrcode->qrcode_type_id==3)
				{
					$aec = $this->load->database('aec', TRUE);
					$query = $aec->query("select product_id,pro_name_e from company_product  where com_id = $com_id order by pro_name_e asc");
					
					foreach ($query->result() as $product)
					{
					   $arr[$product->product_id] =  "$product->pro_name_e - ({$product->product_id})"; 
					}
				}
			}

			$data["products"] = $arr;
			$data['qrcode'] = 	$qrcode;


			$this->load->view('layout/main',$data);				
			
		}else{

			
			$title = $this->input->post('title');
			$json = $this->input->post('json');
			$ads_product = $this->input->post('ads_product');
			$com_id = $this->input->post('com_id');
			$pro_id = $this->input->post('pro_id');
			$qrcode_type_id = $this->input->post('qrcode_type_id');

			$params = array(
							'title'=>$title,	
							'json'=>$json,														
							'ads_product'=>$ads_product,														
							'com_id'=>$com_id,														
							'pro_id'=>$pro_id,														
							'qrcode_type_id'=>$qrcode_type_id,
							'uby'=>$this->session->userdata('ssfullname'),						
							'udate'=> date('Y-m-d H:i:s')
							 );

			$this->db->where('qrcode_id', $qrcode_id);
			$this->db->update('qrcode',$params);
			
			$this->session->set_flashdata('msg','Edit Complete');
			echo "<script>window.opener.location.reload();window.close();</script>";		
			
		}
	}

	public function delete($qrcode_id){
		
		$this->db->where('qrcode_id',$qrcode_id);
		$this->db->delete('qrcode');
		
		$this->session->set_flashdata('msg','Delete Complete');

		echo "<script>window.opener.location.reload();window.close();</script>";	
	}
	
}
 

?>