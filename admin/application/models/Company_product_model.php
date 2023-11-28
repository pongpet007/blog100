<?php 

class Company_product_model extends CI_Model{

		
			
	public function getAll($limit, $start,$search = array()){

		$this->db->select('products.*,pro_name,cat_name,brand_name,promotion.title_en,promotion.title_th');
		$this->db->from('products')
				 ->join('products_language','products.pro_id=products_language.pro_id and products_language.country_id = '.$search['country_id'],'left')
				 ->join('company_category','products.cat_id=company_category.cat_id','left')
				 ->join('company_category_language','company_category_language.cat_id=company_category.cat_id and company_category_language.country_id = '.$search['country_id'],'left')
				 ->join('company_brand','company_brand.brand_id = products.brand_id','left')
				 ->join('company_brand_language','company_brand.brand_id = company_brand_language.brand_id and company_brand_language.country_id='.$search['country_id'],'left')
				 ->join('promotion','promotion.promotion_id = products.promotion_id','left');

		
		if(isset($search['keyword']))
		{
			$this->db->where("(pro_name like '%$search[keyword]%' )");
		}
		
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
				 ->join('products_language','products.pro_id=products_language.pro_id and products_language.country_id = 236','left')
				 ->join('company_category','products.cat_id=company_category.cat_id','left');
		
		if(isset($search['keyword']))
		{
			$this->db->where("(pro_name like '%$search[keyword]%' )");
		}
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