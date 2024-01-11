<?php 

class Company_brand_model extends CI_Model{

			
	public function getAll($com_id){
		$this->db->select("company_brand.*,brand_name");
		$this->db->from('company_brand')
				 ->join('company_brand_language','company_brand.brand_id=company_brand_language.brand_id and company_brand_language.country_id=221','left')	;
		$this->db->where('com_id',$com_id);		
		$query = $this->db->get();
		return $query->result();
	}


    public function getOne($id){
			
		$this->db->where('brand_id',$id);

		$result = $this->db->get('company_brand');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}


}




?>