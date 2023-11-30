<?php 

class Subscription_model extends CI_Model{

		
				
	public function getAll($com_id=0){
		
		$this->db->where('com_id', $com_id);

		$query = $this->db->get('subscription');

		return $query->result();

	}


    public function getOne($id){
			
		$this->db->where('news_id',$id);

		$result = $this->db->get('news');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	
}




?>