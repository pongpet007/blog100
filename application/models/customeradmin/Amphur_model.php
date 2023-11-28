<?php 

/*
 

*/
class Amphur_model extends CI_Model{

			
	public function getAll($search = array()){

		
		if(isset($search['province_id']))
			$this->db->where('province_id', $search['province_id']);
		
		
		$this->db->order_by('amphur_name', 'asc');
		$query = $this->db->get('amphur');

		return $query->result();

	}

	
    public function getOne($id){
			
		$this->db->where('amphur_id',$id);

		$result = $this->db->get('amphur');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return array();
		}
	}

	

}




?>