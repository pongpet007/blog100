<?php 

class Products_buy_category_model extends CI_Model{

		
			
	public function getAll(){

		$this->db->from('products_buy_category');
		$this->db->order_by('cat_name asc');
		$this->db->where(" is_show = 1 ");
		$query = $this->db->get();
		return $query->result();

	}
	
    public function getOne($id){
			
		$this->db->where('cat_id',$id);

		$result = $this->db->get('products_buy_category');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}


}




?>