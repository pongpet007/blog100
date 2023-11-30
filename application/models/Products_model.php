<?php

class Products_model extends CI_Model{

	public function getAllNew($limit, $start,$com_id)
	{

		// $this->db->select('products.*,products_language.*,cat_name');
		$this->db->from('products')
		->join('domainandproduct','products.pro_id = domainandproduct.pro_id ','left')
		->join('products_language','products.pro_id = products_language.pro_id ','left');

		$this->db->where("domainandproduct.domain_id ", $com_id);	

		$this->db->order_by('products.pro_id desc');

		if($this->session->userdata('site_lang')){
			$this->db->where('products_language.country_id', $this->session->userdata('site_lang'));
		}
		else{
			$this->db->where('products_language.country_id', '221');
		}

		$this->db->limit($limit, $start);	
		$query = $this->db->get();
		return $query->result();
	}

	public function getAllCat($cat_id , $com_id)
	{

		// $this->db->select('products.*,products_language.*,cat_name');
		$this->db->from('products')
		->join('domainandproduct','products.pro_id = domainandproduct.pro_id ','left')
		->join('products_language','products.pro_id = products_language.pro_id ','left');

		$this->db->where("products.cat_id ", $cat_id);	
		$this->db->where("domainandproduct.domain_id ", $com_id);	

		if($this->session->userdata('site_lang')){
			$this->db->where('products_language.country_id', $this->session->userdata('site_lang'));
		}
		else{
			$this->db->where('products_language.country_id', '221');
		}

		$this->db->order_by('products.pro_id','RANDOM');
		
		$this->db->limit(1, 0);

		$query = $this->db->get();
		return $query->result();
	}

	public function getAll($limit, $start,$search = array() , $orderby='')
	{

		// $this->db->select('products.*,products_language.*,cat_name');
		$this->db->from('products')
		->join('products_language','products.pro_id = products_language.pro_id ','left')
		->join('company_category','products.cat_id=company_category.cat_id','left')
		->join('company_category_language','company_category.cat_id = company_category_language.cat_id ','left');

		if(isset($search['brand_id']) and count($search['brand_id']) > 0 ){
			$this->db->where_in('products.brand_id', $search['brand_id']);					
		}

		if(isset($search['keyword'])){
			$this->db->like('products_language.pro_name', $search['keyword']);		
		}

		if(isset($search['cat_id']) and count($search['cat_id']) > 0 ){
			$this->db->where_in('products.cat_id', $search['cat_id']);					
		}

		if(isset($search['tag']) && $search['tag']!=''){
			$this->db->where("products_language.tags_url like '%$search[tag]%' " );	
		}

		if(isset($search['promotion_id']) and count($search['promotion_id']) > 0 ){
			$this->db->where_in('promotion_id', $search['promotion_id']);					
		}

		if(isset($search['show_index']) and count($search['show_index']) > 0 ){
			$this->db->where_in('show_index', $search['show_index']);					
		}		
		
		if($orderby){
			$this->db->order_by($orderby);
		}	

		if($this->session->userdata('site_lang')){
			$this->db->where('products_language.country_id', $this->session->userdata('site_lang'));
			$this->db->where('company_category_language.country_id', $this->session->userdata('site_lang'));
		}
		else{
			$this->db->where('products_language.country_id', '221');
			$this->db->where('company_category_language.country_id', '221');
		}

		$this->db->limit($limit, $start);	
		$query = $this->db->get();
		return $query->result();
	}


	public function getAll2($limit, $start,$search = array() , $orderby='')
	{

		// $this->db->select('products.*,products_language.*,cat_name');
		$this->db->from('products')
		->join('products_language','products.pro_id = products_language.pro_id ','left')
		->join('company_category','products.cat_id=company_category.cat_id','left')
		->join('company_category_language','company_category.cat_id = company_category_language.cat_id ','left');

		if(isset($search['brand_id']) and count($search['brand_id']) > 0 ){
			$this->db->where_in('products.brand_id', $search['brand_id']);					
		}

		if(isset($search['keyword'])){
			$this->db->like('products_language.pro_name', $search['keyword']);		
		}

		if(isset($search['cat_id'])){
			$this->db->where_in('products.cat_id', $search['cat_id']);					
		}

		if(isset($search['tag']) && $search['tag']!=''){
			$this->db->where("products_language.tags_url like '%$search[tag]%' " );	
		}

		if(isset($search['promotion_id']) and count($search['promotion_id']) > 0 ){
			$this->db->where_in('promotion_id', $search['promotion_id']);					
		}

		if(isset($search['show_index']) and count($search['show_index']) > 0 ){
			$this->db->where_in('show_index', $search['show_index']);					
		}		
		
		if($orderby){
			$this->db->order_by($orderby);
		}	

		if($this->session->userdata('site_lang')){
			$this->db->where('products_language.country_id', $this->session->userdata('site_lang'));
			$this->db->where('company_category_language.country_id', $this->session->userdata('site_lang'));
		}
		else{
			$this->db->where('products_language.country_id', '221');
			$this->db->where('company_category_language.country_id', '221');
		}

		$this->db->limit($limit, $start);	
		$query = $this->db->get();
		return $query->result();
	}

	

	public function record_count($search = array())
	{
		$this->db->from('products')
		->join('products_language','products.pro_id = products_language.pro_id ','left');

		if(isset($search['keyword'])){
			$this->db->like('pro_name', $search['keyword']);
		}

		if(isset($search['tag']) && $search['tag']!=''){
			$this->db->where(" ( tags like '%$search[tag]%' ) " );	
		}

		if(isset($search['cat_id']) and count($search['cat_id']) > 0 ){
			$this->db->where_in('cat_id', $search['cat_id']);
		}
		if(isset($search['promotion_id']) and count($search['promotion_id']) > 0 ){
			$this->db->where_in('promotion_id', $search['promotion_id']);
		}

		$this->db->where('show_index', 2);

		if($this->session->userdata('site_lang')){
			$this->db->where('products_language.country_id', $this->session->userdata('site_lang'));		
		}
		else{
			$this->db->where('products_language.country_id', '221');
		}
		
		return $this->db->count_all_results();
		
	}

	public function getOne($pro_url){
		
		$this->db->from('products')
		->join('products_language','products.pro_id=products_language.pro_id','left');


		$this->db->where('products.pro_url',$pro_url);

		if($this->session->userdata('site_lang')){
			$this->db->where('products_language.country_id', $this->session->userdata('site_lang'));
			// $this->db->where('company_category_language.country_id', $this->session->userdata('site_lang'));
			// $this->db->where('promotion_language.country_id', $this->session->userdata('site_lang'));
		}
		else{
			$this->db->where('products_language.country_id', '221');
			// $this->db->where('company_category_language.country_id', '221');			
			// $this->db->where('promotion_language.country_id', '221');			
		}

		$result = $this->db->get();

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return array();
		}
	}

	public function getTags()
	{

		$this->db->select('tags, tags_url');
		$this->db->from('products')
		->join('products_language','products.pro_id=products_language.pro_id','left');		
		$this->db->order_by('products.pro_id','RANDOM');
		$this->db->where('products.is_active',1);	
		$this->db->where(" products_language.tags <> '' ");

		if($this->session->userdata('site_lang')){
			$this->db->where('products_language.country_id', $this->session->userdata('site_lang'));			
		}
		else{
			$this->db->where('products_language.country_id', '221');		
		}

		$query = $this->db->get();		
		return $query->result();		
	}


	public function getAll3($limit, $start,$cat_id_arr = array(), $orderby='')
	{

		// $this->db->select('products.*,products_language.*,cat_name');
		$this->db->from('products')
		->join('products_language','products.pro_id = products_language.pro_id ','left')
		->join('company_category','products.cat_id=company_category.cat_id','left')
		->join('company_category_language','company_category.cat_id = company_category_language.cat_id ','left');

		
		if(isset($cat_id_arr)){
			$this->db->where_in('products.cat_id', $cat_id_arr);					
		}		
		
		if($orderby){
			$this->db->order_by($orderby);
		}	
		$this->db->where('products.is_active',1);	
		if($this->session->userdata('site_lang')){
			$this->db->where('products_language.country_id', $this->session->userdata('site_lang'));
			$this->db->where('company_category_language.country_id', $this->session->userdata('site_lang'));
		}
		else{
			$this->db->where('products_language.country_id', '221');
			$this->db->where('company_category_language.country_id', '221');
		}

		$this->db->limit($limit, $start);	
		$query = $this->db->get();
		return $query->result();
	}












}
