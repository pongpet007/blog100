<?php 

class Company_splash_model extends CI_Model{
				
	public function getAll(){

		$this->db->order_by('date_start');
		$query = $this->db->get('company_splash');

		return $query->result();

	}

	public function getActive()
	{
		$sql = "SELECT * FROM company_splash WHERE NOW() BETWEEN date_start AND date_add(date_end, INTERVAL 1 DAY) ORDER BY RAND()";
		$query = $this->db->query($sql);
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