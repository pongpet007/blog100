<?php 

/*
 

*/
class Province_model extends CI_Model{

			
	public function getAll(){

		$this->db->order_by('province_name', 'asc');	
		
		$query = $this->db->get('province');

		return $query->result();

	}

	public function getTopCompany()
	{
		$sql = "select *,(select count(*) from customer where customer.province_id = province.province_id ) as ct 
				from province 
				order by ct desc ";
		$query = $this->db->query($sql);

		return $query->result();

	}

	
    public function getOne($id){
			
		$this->db->where('province_id',$id);

		$result = $this->db->get('province');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return array();
		}
	}

	

}




?>