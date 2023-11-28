<?php

class Catalogue_model extends CI_Model{

	public function getAll($limit , $start){
		if($this->session->userdata('site_lang')=='EN')
			$this->db->order_by('title_en', 'asc');
		else
			$this->db->order_by('title_th', 'asc');
		
		$this->db->limit($limit, $start);
		
		$query = $this->db->get('catalogue');

		return $query->result();

	}
	
    public function getOne($id){
			
		$this->db->where('catalogue_id',$id);

		$result = $this->db->get('catalogue');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return array();
		}
	}

}
