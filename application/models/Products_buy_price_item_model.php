<?php 

class Products_buy_price_item_model extends CI_Model{
			
	public function getAll($pbp_id){

		$this->db->select("products_buy_price_item.*,pro_name_en,pro_name_th,cat_name,cat_name_th,products_buy.cat_id ");

		$this->db->from('products_buy_price_item')
				 ->join('products_buy','products_buy.pro_id = products_buy_price_item.pro_id','left')
				 ->join('products_buy_category','products_buy.cat_id = products_buy_category.cat_id','left');		
		$this->db->where(" products_buy_price_item.pbp_id = $pbp_id ");

		$query = $this->db->get();
		return $query->result();

	}	
    

}




?>