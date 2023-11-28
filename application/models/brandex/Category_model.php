<?php

class Category_model extends CI_Model{

	function __construct(){
		parent::__construct();		

	}


	public function getAll(){

		$brandex = $this->load->database('brandex', TRUE);

		$brandex->select("company_category.*,(select count(*) from products where products.cat_id =company_category.cat_id) as ct"); 

		if($this->session->userdata('site_lang')=='EN')
			$brandex->order_by('orders', 'asc');
		else
			$brandex->order_by('orders', 'asc');
		$brandex->where('is_show', 1);
		$brandex->where('com_id',COMID);

		$query = $brandex->get('company_category');
		// echo $brandex->last_query();
		// exit();
		return $query->result();

	}

	public function getParent()
	{
		$brandex = $this->load->database('brandex', TRUE);
		$brandex->order_by('cat_id', 'asc');
		
		
		$brandex->where('parent_id' , 0 );
		$brandex->where('com_id',COMID);

		$query = $brandex->get('category');

		return $query->result();
	}

	public function getSub($cat_id=0)
	{
		$brandex = $this->load->database('brandex', TRUE);

		$brandex->select('category.*,(select count(*) from products where products.cat_id = category.cat_id) as ct');
		if($this->session->userdata('site_lang')=='EN')
			$brandex->order_by('cat_name', 'asc');
		else
			$brandex->order_by('cat_name_th', 'asc');
		
		if($cat_id > 0)
		{
			$brandex->where('parent_id' , $cat_id);
		}
	$brandex->where('com_id',COMID);
		$query = $brandex->get('category');

		return $query->result();
	}
	
    public function getOne($id){
		$brandex = $this->load->database('brandex', TRUE);

		$brandex->where('cat_id',$id);

		$result = $brandex->get('company_category');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return array();
		}
	}

}
