<?php 

class Products_buy_price_model extends CI_Model{
			
	public function getAll(){

		$this->db->from('products_buy_price');
		$this->db->order_by('pp_date desc');
		// $this->db->where(" is_show = 1 ");
		$query = $this->db->get();
		return $query->result();

	}
	
    public function getOne($id){
			
		$this->db->where('pbp_id',$id);

		$result = $this->db->get('products_buy_price');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}


}




?>