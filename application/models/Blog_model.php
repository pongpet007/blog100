<?php

class Blog_model extends CI_Model{

	public function getAll($limit, $start,$search=array())
	{
		$this->db->from('blog')
				 ->join('blog_language','blog.blog_id =  blog_language.blog_id','left');

		if(isset($search['tags']) && $search['tags']!=''){
			$this->db->where("blog_language.blog_tags_url like '%$search[tags]%' " );	
		}

		$this->db->where('is_active',1);
		$this->db->order_by('pos asc');		
		
		$this->db->limit($limit, $start);	
		if($this->session->userdata('site_lang')){
			$this->db->where('blog_language.country_id', $this->session->userdata('site_lang'));			
		}
		else{
			$this->db->where('blog_language.country_id', '221');
		}

		$query = $this->db->get();

		return $query->result();

	}

	public function record_count($search = array())
	{
		$this->db->from('blog')
				 ->join('blog_language','blog.blog_id =  blog_language.blog_id','left');

		$this->db->where('is_active',1);

		if(isset($search['tags']) && $search['tags']!=''){
			$this->db->where("blog_language.blog_tags_url like '%$search[tags]%' " );	
		}
			
		return $this->db->count_all_results();
	}
	
    public function getOne($id){
		
		$this->db->from('blog')
				 ->join('blog_language','blog.blog_id =  blog_language.blog_id','left');	
		$this->db->where('blog.blog_url',$id);

		if($this->session->userdata('site_lang')){
			$this->db->where('blog_language.country_id', $this->session->userdata('site_lang'));			
		}
		else{
			$this->db->where('blog_language.country_id', '221');
		}

		$result = $this->db->get();

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return array();
		}
	}

}
