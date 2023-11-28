<?php 

class Activities_model extends CI_Model{

		
				
	public function getAll(){
		
		
		$this->db->order_by('year desc,title_th asc');

		$query = $this->db->get('activities');

		return $query->result();

	}


    public function getOne($id){
			
		$this->db->where('id',$id);

		$result = $this->db->get('activities');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	
}




?>