<?php

class News_type_model extends CI_Model{

	public function getAll(){

		if($this->session->userdata('site_lang')=='EN')
			$this->db->order_by('name_en asc');
		else
			$this->db->order_by('name_th asc');

		$query = $this->db->get('news_type');

		return $query->result();

	}

	
    public function getOne($id){
			
		$this->db->where('news_type_id',$id);

		$result = $this->db->get('news_type');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return array();
		}
	}

}
