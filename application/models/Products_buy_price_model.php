<?php 

class Products_buy_price_model extends CI_Model{
			
	public function getAll($limit, $start,$search=array()){
		
		$this->db->order_by('pp_date desc');
		
		$this->db->limit($limit, $start);	
		$query = $this->db->get('products_buy_price');

		return $query->result();

	}

	public function record_count($search = array())
	{	

		$this->db->from('products_buy_price');
			
		return $this->db->count_all_results();
	}

	public function getLatestOne()
	{
		$this->db->from('products_buy_price');
		$this->db->order_by('pp_date desc');
		$this->db->limit(1);
		$result = $this->db->get();

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
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