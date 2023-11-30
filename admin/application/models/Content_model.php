<?php 

class Content_model extends CI_Model{

		
				
	public function getAll(){
		
		
		$this->db->order_by('content_id asc');

		$query = $this->db->get('content');

		return $query->result();

	}


    public function getOne($id){
			
		$this->db->where('content_id',$id);

		$result = $this->db->get('content');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	
}




?>