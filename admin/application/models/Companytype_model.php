<?php 

class Companytype_model extends CI_Model{

	
			
	public function getAll(){	
		
		$this->db->order_by('comtype_name', 'asc');

		$query = $this->db->get('companytype');

		return $query->result();

	}

	

    public function getOne($id){
			
		$this->db->where('comtype_id',$id);

		$result = $this->db->get('companytype');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}


}


?>