<?php 

class Page_model extends CI_Model{

		
				
	public function getAll(){	
		
		$this->db->order_by('title_en', 'asc');

		$query = $this->db->get('page');

		return $query->result();

	}


    public function getOne($id){
			
		$this->db->where('page_id',$id);

		$result = $this->db->get('page');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	
}




?>