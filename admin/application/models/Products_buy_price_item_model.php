<?php 

class Products_buy_price_item_model extends CI_Model{
			
	public function getAll($pbp_id){

		$this->db->from('products_buy_price_item');
		// $this->db->order_by('pp_date desc');
		// $this->db->where(" is_show = 1 ");
		$this->db->where(" pbp_id = $pbp_id ");
		$query = $this->db->get();
		return $query->result();

	}	
    

}




?>