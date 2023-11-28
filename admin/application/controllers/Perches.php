<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perches extends CI_Controller {


	function __construct(){

		parent::__construct();

		$this->load->model('Perches_model');
		$this->load->model('Amphur_model');

	}

	public function getAmphur()
	{
		$province_id = $this->input->get('province_id');

		$amphurs = $this->Perches_model->getAllAmphur($province_id);
		$arr = array(0=>'-- select --');
		foreach ($amphurs as $amphur) {
			$arr[$amphur->amphur_id] = $amphur->amphur_name;
		}
		echo json_encode($arr);
	}

	public function index(){

		$position = $this->input->get('position');

		$data = array();

		$data['contentview']  = 'pages/perches_show';

		$data['position'] =  $position;

		$data['Perches'] = $this->Perches_model->getAll();
		$data['province'] = $this->Perches_model->getAll1();
		//echo $this->db->last_query();
		//exit();

		$this->load->view('layout/main',$data);
	}

	public function add(){

			// foreach ($_REQUEST as $key => $value) {
			// 	//echo "\$$key = \$this->input->post('$key');<br>";
			// 	echo "'$key'=>\$$key,	<br>";
			// }
			// exit();

			// $this->form_validation->set_rules('expire','expire','trim|required');
			 $this->form_validation->set_rules('province_id','province_id','trim|required');


			// $amphurs = $this->Perches_model->getAll2($provinces);
			//  	$arr = array('-- อำเภอ / เขต --');
			//  	foreach ($amphurs as $key => $value) {
			//  	$arr[$value->amphur_id] = $value->amphur_name;
			//  }
			//  	$data['amphurs'] = $arr ;


			if($this->form_validation->run()==FALSE){
				//if($this->input->post('username')){

				$this->session->set_flashdata('errors', validation_errors());

				$data["perches_id"] = '' ;

				$data["method"] = 'Add' ;

				$data['perches'] ='';
				$data['province'] = $this->Perches_model->getAll1();
				//$data['amphur'] = $this->Perches_model->getAll2();

				$provinces = $this->Perches_model->getAll1(1000,0);
					$arr = array('0'=>'--Select--');
					foreach ($provinces as $key => $value) {
						$arr[$value->province_id] = $value->province_name;
					}

				$data['provinces'] = $arr ;

				$data['amphurs'] = array() ;

				$data['contentview'] = 'pages/perches_form';

				$this->load->view('layout/main',$data);


			}else{

				$province_id = $this->input->post('province_id');
				$amphur_id = $this->input->post('amphur_id');


				$params = array('province_id'=>$province_id,
								'amphur_id'=>$amphur_id
								);


				$this->db->insert('perches',$params);

				$perches_id = $this->db->insert_id();

				if(isset($_FILES['picture'])&&$_FILES['picture']['size']>0){
					$filepath = "../assets/images/perches/Perches{$perches_id}.png";

					 move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);
				}
				// echo "<script>alert('$filepath');window.opener.location.reload();window.close();</script>";
				// exit();
				$this->session->set_flashdata('msg','Add Complete');

				echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";

			}


	}

	public function edit($perches_id){

		$this->form_validation->set_rules('province_id','province_id','trim|required');

		if($this->form_validation->run()==FALSE){

			$this->session->set_flashdata('errors', validation_errors());


			$data["perches_id"] = $perches_id ;

			$data["method"] = 'edit' ;
			// select ข้อมูลจังหวัด อำเภอ//
			$data['province'] = $this->Perches_model->getAll1();
				//$data['amphur'] = $this->Perches_model->getAll2();

				$provinces = $this->Perches_model->getAll1(1000,0);
					$arr = array();
					foreach ($provinces as $key => $value) {
						$arr[$value->province_id] = $value->province_name;
					}

				$data['provinces'] = $arr ;

			$data['amphurs'] = array() ;
			//
			$data['contentview'] = 'pages/perches_form';

			$data['perches'] = $this->Perches_model->getOne($perches_id);

			// print_r($data['perches']);
			// exit();

			$this->load->view('layout/main',$data);

		}else{


			$province_id = $this->input->post('province_id');
			$amphur_id = $this->input->post('amphur_id');


			$params = array('province_id'=>$province_id,
								'amphur_id'=>$amphur_id );


			$this->db->where('perches_id', $perches_id);
			$this->db->update('perches',$params);


			if(isset($_FILES['picture'])&&$_FILES['picture']['size']>0){
				$filepath = "../assets/images/perches/Perches{$perches_id}.png";
				move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);
			}


			$this->session->set_flashdata('msg','Edit Complete ');


			echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";

		}
	}

	public function delete($perches_id){


		$filepath = "../assets/images/perches/Perches{$perches_id}.png";
		if(is_file($filepath)){
			unlink($filepath);
		}

		$this->db->where('perches_id',$perches_id);
		$this->db->delete('perches');

		$this->session->set_flashdata('msg','Delete Complete');

		echo "<script>alert('delete');window.opener.location.reload();window.close();</script>";
	}

}


?>
