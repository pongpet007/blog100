<?php

class Clients_model extends CI_Model{

	public function getAll($limit , $start){
		
		$this->db->order_by('cdate', 'desc');
		
		$this->db->limit($limit, $start);
		
		$query = $this->db->get('clients');

		return $query->result();

	}
	
    public function getOne($id){
			
		$this->db->where('clients_id',$id);

		$result = $this->db->get('clients');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return array();
		}
	}

}
