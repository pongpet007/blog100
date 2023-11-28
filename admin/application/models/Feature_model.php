<?php 

class Feature_model extends CI_Model{

		
				
	public function getAll(){
		
		
		$this->db->order_by('feature_name asc');

		$query = $this->db->get('feature');

		return $query->result();

	}


    public function getOne($id){
			
		$this->db->where('id',$id);

		$result = $this->db->get('feature');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	
}




?>