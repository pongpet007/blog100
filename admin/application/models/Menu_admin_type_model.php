<?php 

class Menu_admin_type_model extends CI_Model{
		
				
	public function getAll(){
		
		
		$this->db->order_by('menu_admin_type_id asc');

		$query = $this->db->get('menu_admin_type');

		return $query->result();

	}


    public function getOne($id){
			
		$this->db->where('menu_admin_type_id',$id);

		$result = $this->db->get('menu_admin_type');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	
}




?>