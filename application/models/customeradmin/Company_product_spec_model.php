<?php 

/**
* 

*/
class Company_product_spec_model extends CI_Model{

		
			
	public function getAll($limit, $start,$search = array()){

		$this->db->select('products_spec.*');
		$this->db->from('products_spec');
		
		$this->db->where('products_spec.pro_id',$search['pro_id']);

		$this->db->order_by('cdate', 'asc');

		$this->db->limit($limit, $start);

		$query = $this->db->get();

		return $query->result();

	}

	public function count($search = array()) {

		
		$this->db->from('products_spec');
		
		$this->db->where('products_spec.pro_id',$search['pro_id']);

		return $this->db->count_all_results();
    }

    public function getOne($id){
			
		$this->db->where('spec_id',$id);

		$result = $this->db->get('products_spec');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}


}




?>