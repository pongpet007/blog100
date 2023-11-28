<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Directory1 extends CI_Controller {

	public function __construct(){
			
		parent::__construct();
			
		$this->load->model('customeradmin/Admin_model');
		$this->load->model('customeradmin/Directory_model');
	}

	public function loadSub($dir_id){

		$directorys = $this->Directory_model->getsub($dir_id);

		echo "<tr id='trx$dir_id' ><td colspan='5' style='background:#FFF;'>
			  <div style='margin-left:40px;border-left:2px solid blue;padding-left:10px;'><table  style='' width='100%' cellpadding='5'>";
		echo '<tr align="center" >
			  <th height="25"><span class="">Directory name </span></th>
			  
			  <th height="25"  class=""><center>show/hide</center></th>
			  <th height="25"  class=""><center>Edit</center></th>
				<th height="25"  class=""><center>Del</center></th>
			</tr>';		
		foreach ($directorys as $directory) {
		?>	
		<tr id='try<?=$directory->dir_id ?>'>
			 <td align="left" bgcolor="#FFFFFF" class="black14">			
			 <?=$directory->dir_name_en ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-warning">
			 <? if($directory->dir_name_th ) echo $directory->dir_name_th ;?></span>			  
			 </td>             
              <td align="center" valign="top" bgcolor="#FFFFFF" class="black14"><?=($directory->is_show==1)?"Show":'Hide'; ?>&nbsp;</td>
              <td align="center" valign="top" bgcolor="#FFFFFF" class="black14">
			  <a href="<?php echo base_url('Directory1/edit/'.$directory->dir_id) ?>" class="btn btn-xs btn-warning" target="_blank">edit</a></td>
              <td align="center" valign="top" bgcolor="#FFFFFF" class="black14"><?
				if($directory->ct==0){
				?>
                <a href="<?php echo base_url('Directory1/delete/'. $directory->dir_id ); ?>" class="btn btn-xs btn-danger" target="_blank" onClick="return confirm('Are you sure ? ');"> del</a>
                <? } ?>
                &nbsp;</td>
		<?
				echo"</tr>";
		}
		echo"</table></div></td></tr>";

	}

	public function index(){
		$data = array();
		
		$data['directorys'] = $this->Directory_model->getmain();

		$data['contentview']  = 'pages/directory_show';
		

		$this->load->view('layout/main',$data);
	}

	public function add(){
		
			// foreach ($_REQUEST as $key => $value) {
			// 	//echo "\$$key = \$this->input->post('$key');<br>";
			// 	echo "'$key'=>\$$key,	<br>";
			// }
			// exit();

			$this->form_validation->set_rules('dir_name_en','Directory EN','trim|required');
			$this->form_validation->set_rules('dir_name_th','Directory TH','trim|required');
						
			if($this->form_validation->run()==FALSE){
				//if($this->input->post('username')){

				$this->session->set_flashdata('errors', validation_errors());
				
				
				$data["id"] = '' ;
				$data["method"] = 'Add' ;
				
				$data['directory'] ='';
				$data['contentview'] = 'pages/directory_form';	
				
				$dir_refs = $this->Directory_model->getmain();
				
				$arr = array('-- Parent Directory --');
				foreach ($dir_refs as $key => $value) {
					$arr[$value->dir_id] = $value->dir_name_en;
				}

				$data['dir_refs'] = $arr ;
				
				// print_r($arr);
				// exit();
				
				$this->load->view('layout/main',$data);	
				
				
			}else{

						

				$titlebarth = $this->input->post('titlebarth');
				$titlebaren = $this->input->post('titlebaren');
				$metakeyword = $this->input->post('metakeyword');
				$metadescription = $this->input->post('metadescription');
				$dir_name_en = $this->input->post('dir_name_en');
				$dir_name_th = $this->input->post('dir_name_th');
				$dir_desc_en = $this->input->post('dir_desc_en');
				$dir_desc_th = $this->input->post('dir_desc_th');
				$is_show = $this->input->post('is_show');
				$show_index = $this->input->post('show_index');
				$dir_ref = $this->input->post('dir_ref');
				$url1 = $this->input->post('url1');
				$url2 = $this->input->post('url2');
			
				
				$params = array('titlebarth'=>$titlebarth,	
								'titlebaren'=>$titlebaren,	
								'metakeyword'=>$metakeyword,	
								'metadescription'=>$metadescription,	
								'dir_name_en'=>$dir_name_en,	
								'dir_name_th'=>$dir_name_th,	
								'dir_desc_en'=>$dir_desc_en,	
								'dir_desc_th'=>$dir_desc_th,	
								'is_show'=>$is_show,	
								'show_index'=>$show_index,	
								'dir_ref'=>$dir_ref,													
								'url1'=>$url1,													
								'url2'=>$url2,													
								'cby'=>$this->session->userdata('ssfullname'),
								'cdate'=> date('Y-m-d H:i:s') );

				
				$this->db->insert('directory',$params);
				$dir_id = $this->db->insert_id();
				
				if(isset($_FILES['picture'])&&$_FILES['picture']['size']>0){
					 $filepath = "../assets/images/directory/". $dir_id .'.jpg';
					 move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);
				}

				if(isset($_FILES['picture1'])&&$_FILES['picture1']['size']>0){
					 $filepath = "../assets/images/directory/". $dir_id .'ads1.jpg';
					 move_uploaded_file($_FILES['picture1']['tmp_name'], $filepath);
				}

				if(isset($_FILES['picture2'])&&$_FILES['picture2']['size']>0){
					 $filepath = "../assets/images/directory/". $dir_id .'ads2.jpg';
					 move_uploaded_file($_FILES['picture2']['tmp_name'], $filepath);
				}

				$this->session->set_flashdata('msg','Add Complete');
			
				echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";
			}

	}

	public function edit($id){

		$this->form_validation->set_rules('dir_name_en','Directory EN','trim|required');
		$this->form_validation->set_rules('dir_name_th','Directory TH','trim|required');	
					
		if($this->form_validation->run()==FALSE){			

			$this->session->set_flashdata('errors', validation_errors());			
			
			$data["id"] = $id ;
			$data["method"] = 'Edit' ;
			
			$dir_refs = $this->Directory_model->getmain();
			
			$arr = array('-- Parent Directory --');
			foreach ($dir_refs as $key => $value) {
				$arr[$value->dir_id] = $value->dir_name_en;
			}

			$data['dir_refs'] = $arr ;

			$data['contentview'] = 'pages/directory_form';	
			$data['directory'] = $this->Directory_model->getOne($id);

			$this->load->view('layout/main',$data);				
			
		}else{

			
			$titlebarth = $this->input->post('titlebarth');
			$titlebaren = $this->input->post('titlebaren');
			$metakeyword = $this->input->post('metakeyword');
			$metadescription = $this->input->post('metadescription');
			$dir_name_en = $this->input->post('dir_name_en');
			$dir_name_th = $this->input->post('dir_name_th');
			$dir_desc_en = $this->input->post('dir_desc_en');
			$dir_desc_th = $this->input->post('dir_desc_th');
			$is_show = $this->input->post('is_show');
			$show_index = $this->input->post('show_index');
			$dir_ref = $this->input->post('dir_ref');
			$url1 = $this->input->post('url1');
			$url2 = $this->input->post('url2');
			
			
			$params = array('titlebarth'=>$titlebarth,	
							'titlebaren'=>$titlebaren,	
							'metakeyword'=>$metakeyword,	
							'metadescription'=>$metadescription,	
							'dir_name_en'=>$dir_name_en,	
							'dir_name_th'=>$dir_name_th,	
							'dir_desc_en'=>$dir_desc_en,	
							'dir_desc_th'=>$dir_desc_th,	
							'is_show'=>$is_show,	
							'show_index'=>$show_index,	
							'dir_ref'=>$dir_ref,		
							'url1'=>$url1,		
							'url2'=>$url2,		
							'uby'=>$this->session->userdata('ssfullname'),
							'udate'=> date('Y-m-d H:i:s') );

		
			$this->db->where('dir_id', $id);
			$this->db->update('directory',$params);
			
			$dir_id = $id;

				if(isset($_FILES['picture'])&&$_FILES['picture']['size']>0){
					 $filepath = "../assets/images/directory/". $dir_id .'.jpg';
					 move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);
				}

				if(isset($_FILES['picture2'])&&$_FILES['picture2']['size']>0){
					 $filepath = "../assets/images/directory/". $dir_id .'ads1.jpg';
					 move_uploaded_file($_FILES['picture2']['tmp_name'], $filepath);
				}

				if(isset($_FILES['picture3'])&&$_FILES['picture3']['size']>0){
					 $filepath = "../assets/images/directory/". $dir_id .'ads2.jpg';
					 move_uploaded_file($_FILES['picture3']['tmp_name'], $filepath);
				}


			$this->session->set_flashdata('msg','Edit Complete');
		

			echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";
			
		}
	}

	public function delete($id){
		
		$this->db->where('dir_id',$id);
		$this->db->delete('directory');
		
		$filepath = "../assets/images/directory/". $id .'.jpg';
		if(is_file($filepath))
			unlink($filepath);
		
		$filepath = "../assets/images/directory/". $id .'ads1.jpg';
		if(is_file($filepath))
			unlink($filepath);

		$filepath = "../assets/images/directory/". $id .'ads2.jpg';
		if(is_file($filepath))
			unlink($filepath);

		$this->session->set_flashdata('msg','Delete Complete');

		echo "<script>alert('Deleted');window.opener.location.reload();window.close();</script>";
	}

}