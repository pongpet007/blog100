<?php 

class Company_profile_model extends CI_Model{

		
				
	public function getAll($com_id=0){
		
		$this->db->where('com_id', $com_id);

		$query = $this->db->get('company_profile');

		return $query->result();

	}


    public function getOne($id){
			
		$this->db->where('company_profile_id',$id);

		$result = $this->db->get('company_profile');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	
}




?>