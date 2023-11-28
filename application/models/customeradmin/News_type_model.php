<?php 

class News_type_model extends CI_Model{

		
				
	public function getAll(){
		
		
		$this->db->order_by('news_type_name_en');

		$query = $this->db->get('news_type');

		return $query->result();

	}


    public function getOne($id){
			
		$this->db->where('news_type_id',$id);

		$result = $this->db->get('news_type');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	
}




?>