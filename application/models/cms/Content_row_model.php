<?php 

class Content_row_model extends CI_Model{

		
				
	public function getAll($content_id){
		
		
		$this->db->order_by('position asc');

		$this->db->where('content_id',$content_id);
		
		$query = $this->db->get('content_row');

		return $query->result();

	}


    public function getOne($id){
			
		$this->db->where('row_id',$id);

		$result = $this->db->get('content_row');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	
}




?>