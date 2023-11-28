<?php

class Gallery_model extends CI_Model{

	public function getAll($limit, $start,$search=array()){

		$this->db->from('company_gallery')
			  	 ->join('company_gallery_language','company_gallery.gallery_id = company_gallery_language.gallery_id ','left');
		$this->db->where('is_active',1);

		if(isset($search['cat_id']) && $search['cat_id']!=''){
			$this->db->where("company_gallery.cat_id", $search['cat_id'] );	
		}

		$this->db->order_by('company_gallery.gallery_id desc');		
		
		$this->db->limit($limit, $start);	


		if($this->session->userdata('site_lang')){
			$this->db->where('company_gallery_language.country_id', $this->session->userdata('site_lang'));			
		}
		else{
			$this->db->where('company_gallery_language.country_id', '221');
		}

		$query = $this->db->get();

		return $query->result();

	}

	public function record_count($search = array())
	{
		$this->db->where('is_active',1);
		if(isset($search['cat_id']) && $search['cat_id']!=''){
			$this->db->where("cat_id", $search['cat_id'] );	
		}
		$this->db->from('company_gallery');
			
		return $this->db->count_all_results();
	}
	

	public function getimageAll($id){

		$this->db->where('gallery_id',$id);
		$this->db->order_by('position desc');		
		$this->db->from('company_gallery_image')
			  	 ->join('company_gallery_image_language','company_gallery_image.image_id = company_gallery_image_language.image_id ','left');
		
		if($this->session->userdata('site_lang')){
			$this->db->where('company_gallery_image_language.country_id', $this->session->userdata('site_lang'));			
		}
		else{
			$this->db->where('company_gallery_image_language.country_id', '221');
		}
		$query = $this->db->get();

		return $query->result();

	}

    public function getOne($id){
		
		$this->db->from('company_gallery')
			  	 ->join('company_gallery_language','company_gallery.gallery_id = company_gallery_language.gallery_id ','left');

		$this->db->where('company_gallery.gallery_url',$id);

		if($this->session->userdata('site_lang')){
			$this->db->where('company_gallery_language.country_id', $this->session->userdata('site_lang'));			
		}
		else{
			$this->db->where('company_gallery_language.country_id', '221');
		}

		$result = $this->db->get();

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return array();
		}
	}

}
