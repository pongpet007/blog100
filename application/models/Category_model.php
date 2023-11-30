<?php

class Category_model extends CI_Model{

	public function getAll(){

		
		$this->db->from('company_category')
				 ->join('company_category_language','company_category.cat_id = company_category_language.cat_id ','left');
		
		$this->db->where('cat_ref', 0);

		if($this->session->userdata('site_lang')){
			$this->db->where('company_category_language.country_id', $this->session->userdata('site_lang'));
		}
		else{
			$this->db->where('company_category_language.country_id', '221');
		}
		$this->db->order_by('company_category.orders' ,'asc');
		$query = $this->db->get();

		return $query->result();

	}
	
	public function getSub($cat_id=0)
	{
		// $this->db->select('company_category.*,(select count(*) from products where products.cat_id = company_category.cat_id) as ct');

		$this->db->from('company_category')
				 ->join('company_category_language','company_category.cat_id = company_category_language.cat_id ','left');
		
		if($cat_id > 0)
		{
			$this->db->where('cat_ref' , $cat_id);
		}

		if($this->session->userdata('site_lang')){
			$this->db->where('company_category_language.country_id', $this->session->userdata('site_lang'));
		}
		else{
			$this->db->where('company_category_language.country_id', '221');
		}

		$this->db->order_by('company_category.orders', 'asc');

		$query = $this->db->get();

		return $query->result();
	}
	
	public function getSubCat ($cat_id = array()) {
		$this->db->from('company_category')
				 ->join('company_category_language','company_category.cat_id = company_category_language.cat_id ','left');


		if (isset($cat_id['cat_id'])) {
			$this->db->where('cat_ref', $cat_id['cat_id']);
		}
		if($this->session->userdata('site_lang')){
			$this->db->where('company_category_language.country_id', $this->session->userdata('site_lang'));
		}
		else{
			$this->db->where('company_category_language.country_id', '221');
		}

		$this->db->order_by('cat_name', 'asc');

		$query = $this->db->get();

		return $query->result();
	}

    public function getOne($id){
		
		$this->db->from('company_category')
				 ->join('company_category_language','company_category.cat_id = company_category_language.cat_id ','left');

		$this->db->where('company_category.cat_id',$id);

		if($this->session->userdata('site_lang')){
			$this->db->where('company_category_language.country_id', $this->session->userdata('site_lang'));
		}
		else{
			$this->db->where('company_category_language.country_id', '221');
		}

		$result = $this->db->get();

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return array();
		}
	}

	public function getCatOne($url){
		
		$this->db->from('company_category')
				 ->join('company_category_language','company_category.cat_id = company_category_language.cat_id ','left');

		$this->db->where('company_category.cat_url',$url);

		if($this->session->userdata('site_lang')){
			$this->db->where('company_category_language.country_id', $this->session->userdata('site_lang'));
		}
		else{
			$this->db->where('company_category_language.country_id', '221');
		}

		$result = $this->db->get();

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return array();
		}
	}

}
