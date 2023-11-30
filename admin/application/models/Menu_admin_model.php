<?php 

class Menu_admin_model extends CI_Model{

		
				
	public function getAll($menu_admin_type_id = 0){

		if($menu_admin_type_id > 0)
			$this->db->where('menu_admin_type_id',$menu_admin_type_id);
		
		$this->db->where('level<=',$this->session->userdata('sslevel'));	
		$this->db->where('is_active',1);	
		$this->db->order_by('position asc');
		$query = $this->db->get('menu_admin');
		return $query->result();

	}


    public function getOne($id){
			
		$this->db->where('menu_id',$id);
		$result = $this->db->get('menu_admin');
		if($result->num_rows()==1){
			return $result->row(0);
		} else {
			return FALSE;
		}
		
	}

	
}




?>