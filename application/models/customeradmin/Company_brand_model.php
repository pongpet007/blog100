<?php 

class Company_brand_model extends CI_Model{

			
	public function getAll($com_id){
		$this->db->select("brand.*,company_brand.*");
		$this->db->from('company_brand')
					->join('brand','brand.brand_id=company_brand.brand_ref_id');
		
		$this->db->where('company_brand.com_id',$com_id);		

		$query = $this->db->get();

		return $query->result();

	}

	public function getonlybrand($com_id){

		$this->db->from('company_brand')
					->join('brand','brand.brand_id=company_brand.brand_ref_id');
		
		$this->db->where('company_brand.com_id',$com_id);
		$this->db->where('brand.brand_type_id',2);

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