<?php 

class Slide_model extends CI_Model{

		
				
	public function getAll($com_id=0){

		
		$this->db->where('com_id', $com_id);

		$query = $this->db->get('slide');

		return $query->result();

	}


    public function getOne($id){
			
		$this->db->where('slide_id',$id);

		$result = $this->db->get('slide');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	
}




?>