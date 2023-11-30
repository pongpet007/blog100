<?php 

class Company_product_model extends CI_Model{

		
			
	public function getAll($limit, $start,$search = array()){

		$this->db->select('products.*,cat_name,cat_name_th,index_en,index_th,brand.name_en,brand.name_th,brand.brand_id');
		$this->db->from('products')
				 ->join('company_category','products.cat_id=company_category.cat_id','left')
				 ->join('company_brand','company_brand.company_brand_id = products.brand_id','left')
				 ->join('brand','brand.brand_id = company_brand.brand_ref_id','left') ;

		
		$this->db->where("(pro_name_en like '%$search[keyword]%' or pro_name_th like '%$search[keyword]%')");
		
		if(isset($search['cat_id']) && $search['cat_id'] > 0)
		{
			$this->db->where('products.cat_id',$search['cat_id']);
		}

		$this->db->where('products.com_id',$search['com_id']);

		$this->db->order_by('orders', 'asc');

		$this->db->limit($limit, $start);

		$query = $this->db->get();

		return $query->result();

	}

	public function count($search = array()) {

		
		$this->db->from('products')
				 ->join('company_category','products.cat_id=company_category.cat_id','left');
		
		$this->db->where("(pro_name_en like '%$search[keyword]%' or pro_name_th like '%$search[keyword]%')");
		
		if(isset($search['cat_id']) && $search['cat_id'] > 0)
		{
			$this->db->where('products.cat_id',$search['cat_id']);
		}

		$this->db->where('products.com_id',$search['com_id']);

		return $this->db->count_all_results();
    }

    public function getOne($id){
			
		$this->db->where('pro_id',$id);

		$result = $this->db->get('products');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}


}




?>