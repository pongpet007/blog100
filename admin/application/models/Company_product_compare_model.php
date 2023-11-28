<?php 
class Company_product_compare_model extends CI_Model{

    public function getOne($id){
			
		$this->db->where('pro_id',$id);

		$result = $this->db->get('products_compare');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}


}




?>