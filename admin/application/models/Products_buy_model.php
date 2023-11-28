<?php 

class Products_buy_model extends CI_Model{		
			
	public function getAll($limit,$start,$search=array()){

		$this->db->from('products_buy')
				 ->join("products_buy_category",'products_buy.cat_id=products_buy_category.cat_id','left');		
		$this->db->where("is_active = 1");

		if(isset($search['keyword']) && strlen($search['keyword'])>0){
			$this->db->where("(pro_name_en like '%$search[keyword]%' or pro_name_th like '%$search[keyword]%')");
		}
		
		if(isset($search['cat_id']) && $search['cat_id'] > 0)
		{
			$this->db->where('products_buy.cat_id',$search['cat_id']);
		}

		$this->db->limit($limit, $start);
		
		$this->db->order_by('products_buy_category.cat_name_th', 'asc');
		
		$query = $this->db->get();
		return $query->result();

	}

	public function count($search=array())
	{
		$this->db->from('products_buy')
				 ->join("products_buy_category",'products_buy.cat_id=products_buy_category.cat_id','left');		
		$this->db->where("is_active = 1");
		if(isset($search['keyword']) && strlen($search['keyword'])>0){
			$this->db->where("(pro_name_en like '%$search[keyword]%' or pro_name_th like '%$search[keyword]%')");
		}
		
		if(isset($search['cat_id']) && $search['cat_id'] > 0)
		{
			$this->db->where('products_buy.cat_id',$search['cat_id']);
		}

		return $this->db->count_all_results();
	}
	
    public function getOne($id){
			
		$this->db->where('pro_id',$id);
		$result = $this->db->get('products_buy');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}


}




?>