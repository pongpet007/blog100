<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DirectoryCategory extends CI_Controller {

	public function __construct(){
			
		parent::__construct();
			
		$this->load->model('customeradmin/Admin_model');
		$this->load->model('customeradmin/Directory_model');
		$this->load->model('customeradmin/Company_category_model');
		$this->load->model('customeradmin/Directory_category_model');
	}

	public function index($com_id)
	{


		// $mains = $this->Company_category_model->getMain($com_id);
		// foreach ($mains as $main) {
		// 	$arr[$main->cat_id][] = $main->cat_id.' '.$main->cat_name_th." ($main->cat_name) ";
		// 	$sub1s = $this->Company_category_model->getSub($com_id,$main->cat_id);
		// 	if(count($sub1s)>0){
		// 		foreach ($sub1s as $sub1) {
		// 			$arr[$main->cat_id]['sub1'][$sub1->cat_id][] = $sub1->cat_id.' '.$sub1->cat_name_th." ($main->cat_name) ";
					
		// 			$sub2s = $this->Company_category_model->getSub($com_id,$sub1->cat_id);
		// 			if(count($sub2s)>0){
		// 				foreach ($sub2s as $sub2) {
		// 					$arr[$main->cat_id]['sub1'][$sub1->cat_id]['sub2'][$sub2->cat_id]=  $sub2->cat_id.' '.$sub2->cat_name_th." ($sub2->cat_name) ";
		// 				}
		// 			}

		// 		}
		// 	}
		// }		
		// // print_r($arr);
		// // exit();
		// foreach ($arr as $c1) {
		// 	echo $c1[0]."<br>";	
		// 	if(isset($c1['sub1'])){
		// 		$arr2  = $c1['sub1'];
		// 		foreach ($arr2 as $c2) {
		// 			echo '----------'.$c2[0]."<br>";
		// 			if(isset($c2['sub2'])){
		// 				$arr3 =$c2['sub2'];
		// 				foreach ($arr3 as $c3) {
		// 					echo '--------------------'.$c3."<br>";
		// 				}
		// 			}
		// 		}
		// 	}
		// }
		// //print_r($arr);
		//exit();
		$this->form_validation->set_rules('btn_send','btn_send','trim|required');
		
			if($this->form_validation->run()==FALSE){
				//if($this->input->post('username')){

				$this->session->set_flashdata('errors', validation_errors());
				
				$data["com_id"] = $com_id ;				
				
				$data["method"] = '' ;

				$dir_refs = $this->Directory_model->getmain();

				$arr = array('-- Directory --');
				foreach ($dir_refs as $key => $value) {
					$arr[$value->dir_id] = $value->dir_name_th;
					$dir_refs2 = $this->Directory_model->getsub($value->dir_id);
					foreach ($dir_refs2 as $key2 => $value2) {
						$arr[$value2->dir_id] = '----- '.$value2->dir_name_th;
					}
				}
				$data['directorys'] = $arr;

				////////////////////////////////////////////////////////////////	
				$arr = array('-- Select Parent --');
				$mains = $this->Company_category_model->getMain($com_id);
				foreach ($mains as $main) {
					$arr[$main->cat_id] = $main->cat_name_th." ($main->cat_name) ";
					$sub1s = $this->Company_category_model->getSub($com_id,$main->cat_id);
					if(count($sub1s)>0){
						foreach ($sub1s as $sub1) {
							$arr[$sub1->cat_id] = '&nbsp;&nbsp;&nbsp;|----- '.$sub1->cat_name_th." ($sub1->cat_name) ";
							$sub2s = $this->Company_category_model->getSub($com_id,$sub1->cat_id);
							if(count($sub2s)>0){
								foreach ($sub2s as $sub2) {
									$arr[$sub2->cat_id] = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|----- '.$sub2->cat_name_th." ($sub2->cat_name) ";
								}
							}
						}
					}
				}				
				$data['categorys'] = $arr;
				////////////////////////////////////////////////////////////////////

				$data['directory_categorys'] =$this->Directory_category_model->getAll($com_id);

				$data['contentview'] = 'pagecompany/directory_category_form';	
				
				$this->load->view('layoutcompany/main',$data);	
				
				
			}else{

				// foreach ($_REQUEST as $key => $value) {
				// 	//echo "\$$key = \$this->input->post('$key');<br>";
				// 	echo "'$key'=>\$$key,	<br>";
				// }
				// exit();
				$sql = "delete from directory_category where com_id = $com_id ";
				$this->db->query($sql);

				$dir_id = $this->input->post('dir_id');	
				$cat_id = $this->input->post('cat_id');	

				for($i=0;$i<sizeof($dir_id);$i++){
					if($dir_id[$i]>0){
						$params = array(
										'dir_id'=>$dir_id[$i],
										'cat_id'=>$cat_id[$i],
										'com_id'=>$com_id,
										'cdate'=>date('Y-m-d h:i:s'),
										'cby'=>$this->session->userdata('ssfullname')				
										);
						
						$this->db->insert('directory_category',$params) or die("Error");
					}
				}	
									
				$this->session->set_flashdata('msg','Add Complete');
				// echo $this->db->last_query();
				// exit();
				echo "<script>alert('saved');window.location.reload();</script>";				
				
			}	
	}

	public function add($com_id)
	{

		$dir_id = $this->input->post('dir_id');	
		$cat_id = $this->input->post('cat_id');
		// echo "$com_id $dir_id[0] $cat_id[0]";
		// exit();	
		if($dir_id[0]==0 || $cat_id[0] ==0 ){
			exit("<script>alert('Please select category and directory');history.back();</script>");
		}
		$params = array(
			'dir_id'=>$dir_id[0],
			'cat_id'=>$cat_id[0],
			'com_id'=>$com_id,
			'cdate'=>date('Y-m-d h:i:s'),
			'cby'=>$this->session->userdata('ssfullname')				
			);
				
		$this->db->insert('directory_category',$params) or die("Error");
		
		redirect("DirectoryCategory/index/$com_id");
	}

	public function directoryRemove($id){

		$sql = "delete from directory_category where id = $id ";		
		$this->db->query($sql);

		echo "deleted";
	}

}