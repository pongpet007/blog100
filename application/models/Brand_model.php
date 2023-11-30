<?php 

class Brand_model extends CI_Model{

			
	public function getAll(){
		$this->db->select("*");
		$this->db->from('company_brand')
			 ->join('company_brand_language','company_brand.brand_id=company_brand_language.brand_id');	

		if($this->session->userdata('site_lang')){
			$this->db->where('company_brand_language.country_id', $this->session->userdata('site_lang'));
		}
		else{
			$this->db->where('company_brand_language.country_id', '221');
		}	

		
		$query = $this->db->get();

		return $query->result();

	}

	public function getonlybrand($com_id){

		$this->db->from('company_brand') 
			 ->join('company_brand_language','company_brand.brand_id=company_brand_language.brand_id');	
		
		$this->db->where('com_id',$com_id);
		$this->db->where('brand_type_id',2);
		if($this->session->userdata('site_lang')){
			$this->db->where('company_brand_language.country_id', $this->session->userdata('site_lang'));
		}
		else{
			$this->db->where('company_brand_language.country_id', '221');
		}	

		$query = $this->db->get();

		return $query->result();

	}

	public function getNotUsed($com_id,$search=array())
	{
		$sql = "select * from brand 
				where brand_id not in
				(select brand_ref_id from company_brand where com_id =$com_id )";

		if(isset($search['keyword'])	&& !empty($search['keyword'])){
			$sql .= " and (name_en like '%".$search['keyword']."%' or name_th like '%".$search['keyword']."%' ) ";
		} 	

		$query = $this->db->query($sql);

		return $query->result();
	}

	
    public function getOne($id){

		$this->db->from('company_brand') 
			 ->join('company_brand_language','company_brand.brand_id=company_brand_language.brand_id');		

		$this->db->where('company_brand.brand_id',$id);

		if($this->session->userdata('site_lang')){
			$this->db->where('company_brand_language.country_id', $this->session->userdata('site_lang'));
		}
		else{
			$this->db->where('company_brand_language.country_id', '221');
		}	


		$result = $this->db->get(); 
					   

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	public function getBrandOne($id){

		$this->db->from('company_brand') 
			 ->join('company_brand_language','company_brand.brand_id=company_brand_language.brand_id');		

		$this->db->where('company_brand.brand_url',$id);

		if($this->session->userdata('site_lang')){
			$this->db->where('company_brand_language.country_id', $this->session->userdata('site_lang'));
		}
		else{
			$this->db->where('company_brand_language.country_id', '221');
		}	


		$result = $this->db->get(); 
					   

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}


}




?>