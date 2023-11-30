<?php 

class Content_row_item_template_model extends CI_Model{

		
				
	public function getAll(){
		
		
		$this->db->order_by('template_id asc');

		$query = $this->db->get('content_row_item_template');

		return $query->result();

	}


    public function getOne($id){
			
		$this->db->where('template_id',$id);

		$result = $this->db->get('content_row_item_template');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	
}




?>