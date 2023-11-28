<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContentRow extends CI_Controller {


	function __construct(){
						
		parent::__construct();
		// $this->load->model('Menu_admin_model');	
		// $this->load->model('Company_ads_model');
		// $this->load->model('Company_model');
		$this->load->model('Content_model');
		$this->load->model('Content_row_model');
		$this->load->model('Content_row_item_model');
		$this->load->model('Country_model');

	}

	public function loadform()
	{
		// $country_id = array('38', '46', '111', '120', '151', '221', '236', '243');
		$data['country'] = $this->Country_model->getAll3();

		$content_id = $this->input->get('content_id');
		$data['content_id'] = $content_id;
		$data['countrys'] = $this->Country_model->getAll();	
		$this->load->view("pagecompany/form_row",$data);
	}

	public function loadeditrow($row_id)
	{
		$data['country'] = $this->Country_model->getAll3();
		$row = $this->Content_row_model->getOne($row_id);
		$data['countrys'] = $this->Country_model->getAll();	
		$data['row'] = $row;
		$data['content_id'] = $row->content_id;

		
		$this->load->view("pagecompany/form_row",$data);
	}

	public function addrow()
	{	
			
		$is_fullwidth = $this->input->post('is_fullwidth');
		$bg_color = $this->input->post('bg_color');
		$margin_top = $this->input->post('margin_top');
		$margin_right = $this->input->post('margin_right');
		$margin_bottom = $this->input->post('margin_bottom');
		$margin_left = $this->input->post('margin_left');
		$padding_top = $this->input->post('padding_top');
		$padding_right = $this->input->post('padding_right');
		$padding_bottom = $this->input->post('padding_bottom');
		$padding_left = $this->input->post('padding_left');
		
		if(sizeof($this->input->post('checkboxlang'))>0)
        $checkboxlangnew = implode(',', $this->input->post('checkboxlang'));

		$content_id = $this->input->post('content_id');

		$params = array(
						'is_fullwidth'=>$is_fullwidth,
						'bg_color'=>$bg_color,
						'margin_top'=>$margin_top,
						'margin_right'=>$margin_right,
						'margin_bottom'=>$margin_bottom,
						'margin_left'=>$margin_left,
						'padding_top'=>$padding_top,
						'padding_right'=>$padding_right,
						'padding_bottom'=>$padding_bottom,
						'padding_left'=>$padding_left,
						'checkboxlang'=>$checkboxlangnew,

						'content_id'=>$content_id
												 );
		$this->db->insert('content_row',$params);		
		$row_id = $this->db->insert_id();

		$this->db->where('row_id',$row_id);
		$this->db->update('content_row',array('position'=>$row_id));

		if($_FILES['bg']['size']>0){
			$path_parts = pathinfo($_FILES['bg']['name']);
			$ext = $path_parts['extension'];
			$filename = "row_". $row_id .".$ext";
			$filepath = "../images/bg/$filename";			
			move_uploaded_file($_FILES['bg']['tmp_name'], $filepath);
			// print_r($ext);exit();
			$filename2 = "row_". $row_id .".webp";
			if ($ext == "jpg") {
				$jpg = imagecreatefromjpeg("../images/bg/{$filename}");
			}else{
				$jpg = imagecreatefrompng("../images/bg/{$filename}");
			}
			
			$w=imagesx($jpg);
			$h=imagesy($jpg);

			// converter webp
			$webp=imagecreatetruecolor($w,$h);
			$backgroundColor = imagecolorallocatealpha($webp, 0, 0, 0, 127);
			imagefill($webp, 0, 0, $backgroundColor);
			imagecopy($webp,$jpg, 0, 0, 0, 0,$w,$h);
			imagewebp($webp, "../images/bg/{$filename2}", 100);

			imagedestroy($jpg);
			imagedestroy($webp);

			$params = array('bg_filename'=>$filename);
			$this->db->where('row_id', $row_id);
			$this->db->update('content_row',$params);
		}

		echo "<script>window.opener.location.reload();window.close();</script>";	
	}

	public function editrow($row_id)
	{	
			
		$is_fullwidth = $this->input->post('is_fullwidth');
		$bg_color = $this->input->post('bg_color');
		$margin_top = $this->input->post('margin_top');
		$margin_right = $this->input->post('margin_right');
		$margin_bottom = $this->input->post('margin_bottom');
		$margin_left = $this->input->post('margin_left');
		$padding_top = $this->input->post('padding_top');
		$padding_right = $this->input->post('padding_right');
		$padding_bottom = $this->input->post('padding_bottom');
		$padding_left = $this->input->post('padding_left');
		$content_id = $this->input->post('content_id');
		if(sizeof($this->input->post('checkboxlang'))>0)
        $checkboxlangnew = implode(',', $this->input->post('checkboxlang'));
    	
		$params = array(
						'is_fullwidth'=>$is_fullwidth,
						'bg_color'=>$bg_color,
						'margin_top'=>$margin_top,
						'margin_right'=>$margin_right,
						'margin_bottom'=>$margin_bottom,
						'margin_left'=>$margin_left,
						'padding_top'=>$padding_top,
						'padding_right'=>$padding_right,
						'padding_bottom'=>$padding_bottom,
						'checkboxlang'=>$checkboxlangnew,
						'padding_left'=>$padding_left						
												 );
		$this->db->where('row_id',$row_id);
		$this->db->update('content_row',$params);		
		

		if($_FILES['bg']['size']>0){
			$path_parts = pathinfo($_FILES['bg']['name']);
			$ext = $path_parts['extension'];
			$filename = "row_". $row_id .".$ext";
			$filepath = "../images/bg/$filename";			
			move_uploaded_file($_FILES['bg']['tmp_name'], $filepath);

			$filename2 = "row_". $row_id .".webp";
			// print_r($ext);exit();
			$filename2 = "row_". $row_id .".webp";
			if ($ext == "jpg") {
				$jpg = imagecreatefromjpeg("../images/bg/{$filename}");
			}else{
				$jpg = imagecreatefrompng("../images/bg/{$filename}");
			}
			$w=imagesx($jpg);
			$h=imagesy($jpg);

			// converter webp
			$webp=imagecreatetruecolor($w,$h);
			$backgroundColor = imagecolorallocatealpha($webp, 0, 0, 0, 127);
			imagefill($webp, 0, 0, $backgroundColor);
			imagecopy($webp,$jpg, 0, 0, 0, 0,$w,$h);
			imagewebp($webp, "../images/bg/{$filename2}", 100);

			imagedestroy($jpg);
			imagedestroy($webp);

			$params = array('bg_filename'=>$filename);
			$this->db->where('row_id', $row_id);
			$this->db->update('content_row',$params);
		}

		echo "<script>window.opener.location.reload();window.close();</script>";	
	}


	public function delete($row_id)
	{
		$this->db->where('row_id', $row_id);
		$this->db->delete('content_row_item');

		$this->db->where('row_id', $row_id);
		$this->db->delete('content_row');
		echo "<script>window.opener.location.reload();window.close();</script>";	
	}

	public function moveup($position)
	{
		$sql = "select row_id ,position from content_row where position <= $position order by position desc limit 0,2 ";
		//echo "$sql <br/>";
		$table = $this->db->query($sql);
		$rows = $table->result();

		if(count($rows)==2)
		{
			$row1 = $rows[0];
			$row2 = $rows[1];
			$sql1 = "update content_row set position = $row2->position  where row_id= $row1->row_id;";
			$sql2 = "update content_row set position = $row1->position  where row_id= $row2->row_id;";
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

	public function movedown($position)
	{

		$sql = "select row_id ,position from content_row where position >= $position order by position  limit 0,2 ";
		
		$table = $this->db->query($sql);
		$rows = $table->result();
		
		if(count($rows)==2)
		{
			$row1 = $rows[0];
			$row2 = $rows[1];
			$sql1 = "update content_row set position = $row2->position  where row_id= $row1->row_id;";
			$sql2 = "update content_row set position = $row1->position  where row_id= $row2->row_id;";
			
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