<?php

class News_model extends CI_Model{

	public function getAll($limit, $start ,$search = array())
	{
		$this->db->from('news')
				 ->join('news_language','news.news_id = news_language.news_id','left');
		$this->db->where('is_active',1);
		
		if(isset($search['is_index']) && $search['is_index'] >0){
			$this->db->where('is_index',1);
		}		

		if(isset($search['news_type_id']) && $search['news_type_id'] >0){
		 	$this->db->where('news_type_id',$search['news_type_id']);
		}	

		if(isset($search['tags']) && $search['tags']!=''){
			$this->db->where("news_language.news_tags_url like '%$search[tags]%' " );	
		}

		$this->db->order_by('news.news_id asc');

		if($this->session->userdata('site_lang')){
			$this->db->where('news_language.country_id', $this->session->userdata('site_lang'));			
		}
		else{
			$this->db->where('news_language.country_id', '221');
		}

		$this->db->limit($limit, $start);
		$query = $this->db->get();
		return $query->result();
	}

	public function record_count($search = array())
	{
		$this->db->from('news')
				 ->join('news_language','news.news_id = news_language.news_id','left');

		$this->db->where('is_active',1);
		if(isset($search['news_type_id']) && $search['news_type_id'] >0){
		 	$this->db->where('news_type_id',$search['news_type_id']);
		}
		if(isset($search['is_index']) && $search['is_index'] >0){
			$this->db->where('is_index',1);
		}

		if(isset($search['tags']) && $search['tags']!=''){
			$this->db->where("news_language.news_tags_url like '%$search[tags]%' " );	
		}
			

		// $this->db->from();			
		return $this->db->count_all_results();
	}
	
    public function getOne($news_url)
    {	
    	$this->db->from('news')
				 ->join('news_language','news.news_id = news_language.news_id','left');		
		$this->db->where('news.news_url',$news_url);
		
		if($this->session->userdata('site_lang')){
			$this->db->where('news_language.country_id', $this->session->userdata('site_lang'));			
		}
		else{
			$this->db->where('news_language.country_id', '221');
		}

		$result = $this->db->get();
		if($result->num_rows()==1){
			return $result->row(0);
		} else {
			return array();
		}
	}

}
