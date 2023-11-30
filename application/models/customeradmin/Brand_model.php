<?php 

class Brand_model extends CI_Model{

		
				
	public function getAll($search = array()){
		
		
		if(isset($search['keyword']) && strlen($search['keyword'])>0 )
		{
			$this->db->where("( name_en like'%$search[keyword]%' or   name_th like'%$search[keyword]%')");
		}

		$this->db->order_by('name_en');

		$query = $this->db->get('brand');

		return $query->result();

	}


    public function getOne($id){
			
		$this->db->where('brand_id',$id);

		$result = $this->db->get('brand');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	
}




?>