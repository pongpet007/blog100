<?php 

class Portforio_model extends CI_Model{

		
				
	public function getAll($com_id=0){
		
		$this->db->where('com_id', 1);

		$query = $this->db->get('company_ads');

		return $query->result();

	}


    public function getOne($id){
			
		$this->db->where('company_ads_id',$id);

		$result = $this->db->get('company_ads');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	
}




?>