<?php 

class Country_model extends CI_Model{
				
	public function getAll($search = array()){
		
		$this->db->where('is_active',1);
		$this->db->order_by('iso2');

		$query = $this->db->get('country');

		return $query->result();

	}


    public function getOne($id){
			
		$this->db->where('country_id',$id);

		$result = $this->db->get('country');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	public function getOnelang($id){
			
		$this->db->like('iso2',$id);

		$result = $this->db->get('country');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	
}




?>