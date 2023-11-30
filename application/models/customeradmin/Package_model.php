<?php 

class Package_model extends CI_Model{

				
	public function getAll(){
		
		$this->db->order_by("name");

		$query = $this->db->get('package');

		return $query->result();

	}


    public function getOne($id){
			
		$this->db->where('package_id',$id);

		$result = $this->db->get('package');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	
}




?>