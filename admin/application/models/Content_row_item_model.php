<?php 

class Content_row_item_model extends CI_Model{

		
				
	public function getAll($row_id){
		
		
		$this->db->order_by('item_id asc');
		$this->db->where('row_id',$row_id);
		$query = $this->db->get('content_row_item');

		return $query->result();

	}


    public function getOne($id){
			
		$this->db->where('item_id',$id);

		$result = $this->db->get('content_row_item');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	
}




?>