<?php
	class Product_detail extends CI_Model{
		
		public function detail(){
			//$query = $this->db->where('pro_id',$id);
			$query = $this->db->get('product');
			return $query->result();
		}
	}
?>