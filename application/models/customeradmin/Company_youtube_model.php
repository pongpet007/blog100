<?php 

class Company_youtube_model extends CI_Model{
				
	public function getAll($com_id=0){
		
		$this->db->where('com_id', $com_id);

		$query = $this->db->get('company_youtube');

		return $query->result();

	}


    public function getOne($id){
			
		$this->db->where('youtube_id',$id);

		$result = $this->db->get('company_youtube');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	
}




?>