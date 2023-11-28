<?php

class Products_model extends CI_Model{

	public function getPopular($limit,$start)
	{
		$brandex = $this->load->database('brandex', TRUE);
		$brandex->limit($limit, $start);			
		$brandex->order_by('click', 'desc');		
		$brandex->where('com_id',COMID);
		$query = $brandex->get('products');
		return $query->result();
	}
	
	public function getAll($limit, $start,$search = array()){

		$brandex = $this->load->database('brandex', TRUE);
		
		if(isset($search['keyword'])){
			$brandex->like('pro_name_en', $search['keyword']);
			$brandex->or_like('pro_name', $search['keyword']);			
		}

		if(isset($search['cat_id']) and count($search['cat_id']) > 0 ){
			$brandex->where_in('cat_id', $search['cat_id']);
					
		}
		
		if($this->session->userdata('site_lang')=='TH'){
			$brandex->order_by('pro_name_th', 'asc');
		}
		else{
			$brandex->order_by('pro_name_en', 'asc');
		}
		
		$brandex->where('com_id',COMID);

		$brandex->limit($limit, $start);

		$query = $brandex->get('products');

		return $query->result();

	}

	public function record_count($search = array())
	{
		$brandex = $this->load->database('brandex', TRUE);
		if(isset($search['keyword'])){
			$brandex->like('pro_name_en', $search['keyword']);
			$brandex->or_like('pro_name', $search['keyword']);			
		}

		if(isset($search['cat_id']) and count($search['cat_id']) > 0 ){
			$brandex->where_in('cat_id', $search['cat_id']);
					
		}
		$brandex->where('com_id',COMID);
		$brandex->from('products');		
		
		return $brandex->count_all_results();
		
	}
	
    public function getOne($id){
		
		$brandex = $this->load->database('brandex', TRUE);

		$brandex->where('pro_id',$id);

		$result = $brandex->get('products');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return array();
		}
	}

}
