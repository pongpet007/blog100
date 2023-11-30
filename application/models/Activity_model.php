<?php

class Activity_model extends CI_Model{

	public function getAll(){

		$this->db->order_by('activity_id', 'desc');
		
		$query = $this->db->get('activity');

		return $query->result();

	}

	
    public function getOne($id){
			
		$this->db->where('activity_id',$id);

		$result = $this->db->get('activity');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return array();
		}
	}

}
