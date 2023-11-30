<?php 

class Theme_model extends CI_Model{

		
				
	public function getAll(){
		
		
		$this->db->order_by('theme_id asc');

		$query = $this->db->get('theme');

		return $query->result();

	}


    public function getOne($id){
			
		$this->db->where('theme_id',$id);

		$result = $this->db->get('theme');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	
}




?>