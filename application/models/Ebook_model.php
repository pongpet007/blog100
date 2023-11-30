<?php

class Ebook_model extends CI_Model{

	public function getAll($limit, $start,$search=array()){

		$this->db->from('company_ebook')
				 ->join('company_ebook_language','company_ebook.ebook_id = company_ebook_language.ebook_id','left');

		$this->db->order_by('company_ebook.cby desc');		
		
		$this->db->limit($limit, $start);	
		if($this->session->userdata('site_lang')){
			$this->db->where('company_ebook_language.country_id', $this->session->userdata('site_lang'));			
		}
		else{
			$this->db->where('company_ebook_language.country_id', '221');
		}

		$query = $this->db->get();

		return $query->result();

	}

	public function record_count($search = array())
	{
		
		$this->db->from('company_ebook');
			
		return $this->db->count_all_results();
	}
	

    public function getOne($id){
			
		$this->db->from('company_ebook')
				 ->join('company_ebook_language','company_ebook.ebook_id = company_ebook_language.ebook_id','left');

		$this->db->where('company_ebook.ebook_id',$id);		
		
		if($this->session->userdata('site_lang')){
			$this->db->where('company_ebook_language.country_id', $this->session->userdata('site_lang'));			
		}
		else{
			$this->db->where('company_ebook_language.country_id', '221');
		}

		$result = $this->db->get();

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return array();
		}
	}

}
