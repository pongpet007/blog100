<?php 

class Company_splash_model extends CI_Model{
				
	public function getAll(){

		$this->db->order_by('date_start');
		$query = $this->db->get('company_splash');

		return $query->result();

	}


    public function getOne($id){
			
		$this->db->where('splash_id',$id);

		$result = $this->db->get('company_splash');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	
	
}




?>