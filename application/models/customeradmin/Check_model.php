<?php 
class Check_model extends CI_Model{

		
				
	public function getCompanys(){
		
		
		$this->db->order_by('udate desc');
		$this->db->limit(100);
		$query = $this->db->get('company');

		return $query->result();

	}

	public function getBrands(){
			
		$this->db->select("brand.*,company_brand.*");
		$this->db->from("company_brand")
				 ->join('brand','brand.brand_id = company_brand.brand_ref_id');
		$this->db->order_by('company_brand.udate desc');
		$this->db->limit(100);
		$query = $this->db->get();

		return $query->result();

	}

	public function getCategorys(){			
		$this->db->order_by('udate desc');
		$this->db->limit(100);
		$query = $this->db->get('company_category');
		return $query->result();
	}

	public function getProducts(){
			
		$this->db->order_by('udate desc');
		$this->db->limit(100);
		$query = $this->db->get('products');

		return $query->result();

	}

}	