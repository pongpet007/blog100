<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompanyCategory extends CI_Controller {


	function __construct(){
						
		parent::__construct();
	
		$this->load->model('customeradmin/Company_model');		
		$this->load->model('customeradmin/Company_category_model');		
	}

	public function index($com_id){
		
		
		$data = array();
		$data["com_id"] = $com_id ;

		$data['company'] = $this->Company_model->getOne($com_id);
		
		$data['categorys'] = $this->Company_category_model->getAll($com_id);
		
		$data['contentview']  = 'pagecompany/category_show';

		$this->load->view('layoutcompany/main',$data);
	}

	public function loadSub($com_id,$cat_id)
	{
		$categorys = $this->Company_category_model->getSub($com_id,$cat_id);

		echo "<tr id='trx{$cat_id}' ><td colspan='5' style='background:#FFF;'>
			  <div style='margin-left:40px;border-left:2px solid blue;padding-left:10px;'><table  class='table table-hover' width='100%' cellpadding='5'>";
		echo '<tr align="center" >
			  <th height="25"><span class="">Category Level 1 </span></th>
			  
			  <th height="25"  class=""><center>show/hide</center></th>
			  <th height="25"  class=""><center>Edit</center></th>
				<th height="25"  class=""><center>Del</center></th>
			</tr>';		
		foreach ($categorys as $category) {
			$sub2s = $this->Company_category_model->getSub($com_id,$category->cat_id);
		?>	
		<tr id='try<?=$category->cat_id ?>'>
			<td align="left" >			
			 EN : <?=$category->cat_name ?><br>
			 TH : <?=$category->cat_name_th ?>
			</td>             
            <td align="center" valign="top" ><?=($category->is_show==1)?"Show":'Hide'; ?>&nbsp;
            </td>
            <td align="center" valign="top" >
			  	<a href="<?php echo base_url("CompanyCategory/edit/$com_id/".$category->cat_id) ?>" class="btn btn-xs btn-warning" target="_blank">edit</a>
			</td>
            <td align="center" valign="top" >
                <a href="<?php echo base_url("CompanyCategory/delete/$com_id/". $category->cat_id ); ?>" class="btn btn-xs btn-danger" target="_blank" onClick="return confirm('Are you sure ? ');"> del</a>
            </td>
        </tr>
        <?php if(sizeof($sub2s)>0){ ?>
		<tr>
			<td colspan="4">
				<table class="table table-hover" style="margin-left:20px;border-left: 3px solid orange;">
					<tr align="center" >
					  <th height="25"><span class="">Category Level 2 </span></th>
					  
					  <th height="25"  class=""><center>show/hide</center></th>
					  <th height="25"  class=""><center>Edit</center></th>
						<th height="25"  class=""><center>Del</center></th>
					</tr>
					<?php foreach ($sub2s as $sub2) { ?>
					<tr id='try<?=$sub2->cat_id ?>'>
						<td align="left" >			
						 EN : <?=$sub2->cat_name ?><br>
						 TH : <?=$sub2->cat_name_th ?>
						</td>             
			            <td align="center" valign="top" ><?=($sub2->is_show==1)?"Show":'Hide'; ?>&nbsp;
			            </td>
			            <td align="center" valign="top" >
						  	<a href="<?php echo base_url("customeradmin/CompanyCategory/edit/$com_id/".$sub2->cat_id) ?>" class="btn btn-xs btn-warning" target="_blank">edit</a>
						</td>
			            <td align="center" valign="top" >
			                <a href="<?php echo base_url("customeradmin/CompanyCategory/delete/$com_id/". $sub2->cat_id ); ?>" class="btn btn-xs btn-danger" target="_blank" onClick="return confirm('Are you sure ? ');"> del</a>
			            </td>
			        </tr>
			        <?php } ?>
				</table>
			</td>
		</tr>
		<?
		}}
		echo"</table></div></td></tr>";
	}

	public function add($com_id){
		
			

		$this->form_validation->set_rules('cat_name','category name EN','trim|required');
		$this->form_validation->set_rules('cat_name_th','category name TH','trim|required');
	
		if($this->form_validation->run()==FALSE){
			//if($this->input->post('username')){

			$this->session->set_flashdata('errors', validation_errors());
			
			$data["com_id"] = $com_id ;
			$data["cat_id"] = '' ;
			
			$data["method"] = 'Add' ;
							
			$data['category'] ='';

			////////////////////////////////////////////////////////////////	
			$arr = array('-- Select Parent --');
			$mains = $this->Company_category_model->getMain($com_id);
			foreach ($mains as $main) {
				$arr[$main->cat_id] = $main->cat_name_th." ($main->cat_name) ";
				$sub1s = $this->Company_category_model->getSub($com_id,$main->cat_id);
				if(count($sub1s)>0){
					foreach ($sub1s as $sub1) {
						$arr[$sub1->cat_id] = '&nbsp;&nbsp;&nbsp;|-'.$sub1->cat_name_th." ($sub1->cat_name) ";
						$sub2s = $this->Company_category_model->getSub($com_id,$sub1->cat_id);
						if(count($sub2s)>0){
							foreach ($sub2s as $sub2) {
								$arr[$sub2->cat_id] = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|-'.$sub2->cat_name_th." ($sub2->cat_name) ";
							}
						}
					}
				}
			}				
			$data['parents'] = $arr;
				
				$data['contentview'] = 'pagecompany/category_form';	
				
				$this->load->view('layoutcompany/main',$data);	
				
				
			}else{

				// foreach ($_REQUEST as $key => $value) {
				// 	//echo "\$$key = \$this->input->post('$key');<br>";
				// 	echo "'$key'=>\$$key,	<br>";
				// }
				// exit();

				$cat_name = $this->input->post('cat_name');
				$cat_name_th = $this->input->post('cat_name_th');
				$cat_ref = $this->input->post('cat_ref');
				$is_show = $this->input->post('is_show');
				
				$params = array('cat_name'=>$cat_name,	
								'cat_name_th'=>$cat_name_th,	
								'cat_ref'=>$cat_ref,	
								'is_show'=>$is_show,									
								'com_id'=>$com_id,
								'cdate'=>date('Y-m-d h:i:s'),
								'cby'=>$this->session->userdata('ssfullname')							
								);

				
				$this->db->insert('company_category',$params);

				$cat_id= $this->db->insert_id();				
				
				$params = array('orders'=>$cat_id);
				$this->db->where('cat_id', $cat_id);
				$this->db->update('company_category',$params);


				if(isset($_FILES['picture'])&&$_FILES['picture']['size']>0){
					$filepath = "../assets/images/category/{$cat_id}.jpg";
					 move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);
				}

				$this->session->set_flashdata('msg','Add Complete');
				// echo $this->db->last_query();
				// exit();
				echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";				
				
			}

	}

	public function edit($com_id,$cat_id){

		$this->form_validation->set_rules('cat_name','category name EN','trim|required');
		$this->form_validation->set_rules('cat_name_th','category name TH','trim|required');
		
					
		if($this->form_validation->run()==FALSE){			

			$this->session->set_flashdata('errors', validation_errors());			
			
			$data["com_id"] = $com_id ;

			$data["cat_id"] = $cat_id ;

			$data["method"] = 'Edit' ;
			
			////////////////////////////////////////////////////////////////	
			$arr = array('-- Select Parent --');
			$mains = $this->Company_category_model->getMain($com_id);
			foreach ($mains as $main) {
				$arr[$main->cat_id] = $main->cat_name_th." ($main->cat_name) ";
				$sub1s = $this->Company_category_model->getSub($com_id,$main->cat_id);
				if(count($sub1s)>0){
					foreach ($sub1s as $sub1) {
						$arr[$sub1->cat_id] = ' -- '.$sub1->cat_name_th." ($sub1->cat_name) ";
						$sub2s = $this->Company_category_model->getSub($com_id,$sub1->cat_id);
						if(count($sub2s)>0){
							foreach ($sub2s as $sub2) {
								$arr[$sub2->cat_id] = ' ---- '.$sub2->cat_name_th." ($sub2->cat_name) ";
							}
						}
					}
				}
			}				
			$data['parents'] = $arr;
			////////////////////////////////////////////////////////////////////						
								
			$data['category'] =$this->Company_category_model->getOne($cat_id);
				
			$data['contentview'] = 'pagecompany/category_form';	
				
			$this->load->view('layoutcompany/main',$data);		
			
		}else{

			
				$cat_name = $this->input->post('cat_name');
				$cat_name_th = $this->input->post('cat_name_th');
				$is_show = $this->input->post('is_show');
				
				$params = array('cat_name'=>$cat_name,	
								'cat_name_th'=>$cat_name_th,	
								'is_show'=>$is_show,	
								'udate'=>date('Y-m-d h:i:s'),
								'uby'=>$this->session->userdata('company_login_com_name_en')							
								);

			$this->db->where('cat_id', $cat_id);

			$this->db->update('company_category',$params);

			
			if(isset($_FILES['picture'])&&$_FILES['picture']['size']>0){
				$filepath = "assets/images/category/{$cat_id}.jpg";
				 move_uploaded_file($_FILES['picture']['tmp_name'], $filepath);
			}
							
			$this->session->set_flashdata('msg','Edit Complete');
			// echo $this->db->last_query();
			// exit();
			echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";					
			
		}
	}

	public function delete($com_id,$cat_id){
		$this->db->where('cat_id',$cat_id);
		$this->db->delete('company_category');
	

		$this->session->set_flashdata('msg','Delete Complete');

		echo "<script>alert('saved');window.opener.location.reload();window.close();</script>";		
	}
	public function moveup($com_id,$orders)
	{
		$sql = "select cat_id ,orders from company_category where orders <= $orders and com_id = $com_id order by orders desc limit 0,2 ";
		//echo "$sql <br/>";
		$table = $this->db->query($sql);
		$rows = $table->result();

		if(count($rows)==2)
		{
			$row1 = $rows[0];
			$row2 = $rows[1];
			$sql1 = "update company_category set orders = $row2->orders  where cat_id= $row1->cat_id;";
			$sql2 = "update company_category set orders = $row1->orders  where cat_id= $row2->cat_id;";
			//echo "$sql1<br />$sql2 <br/>";
			$this->db->query($sql1);
			$this->db->query($sql2);
			//exit();
			echo "<script>window.opener.location.reload();window.close();</script>";		
		}
		else
		{
			echo "Error ";
		}
	}

	public function movedown($com_id,$orders)
	{

		$sql = "select cat_id ,orders from company_category where orders >= $orders and com_id = $com_id order by orders  limit 0,2 ";
		
		$table = $this->db->query($sql);
		$rows = $table->result();
		
		if(count($rows)==2)
		{
			$row1 = $rows[0];
			$row2 = $rows[1];
			$sql1 = "update company_category set orders = $row2->orders  where cat_id= $row1->cat_id;";
			$sql2 = "update company_category set orders = $row1->orders  where cat_id= $row2->cat_id;";
			
			$this->db->query($sql1);
			$this->db->query($sql2);
			//echo "<br> $sql1<br />$sql2 <br/>";
			
			echo "<script>window.opener.location.reload();window.close();</script>";		
		}
		else
		{
			echo "Error ";
		}
	}
	
}
 

?>