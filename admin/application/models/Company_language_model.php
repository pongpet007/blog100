<?php 

class Company_language_model extends CI_Model{
				
	public function getAll($search = array()){
		
		$query = $this->db->get('company_language');

		return $query->result();

	}

	public function getByCountry($com_id , $country_id){
		$this->db->where('com_id', $com_id);
		
		$this->db->where('country_id',$country_id);

		$result = $this->db->get('company_language');

		return $result->result();
	}

    public function getOne($id){
			
		$this->db->where('company_language_id',$id);

		$result = $this->db->get('company_language');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	
}




?>