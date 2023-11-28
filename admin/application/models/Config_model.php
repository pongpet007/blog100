<?php 

class Config_model extends CI_Model{

		
	public function getOne($id){
			
		$this->db->where('id',$id);

		$result = $this->db->get('config');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	
}




?>