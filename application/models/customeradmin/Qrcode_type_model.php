<?php 

class Qrcode_type_model extends CI_Model{

		
				
	public function getAll(){	
		
		$this->db->order_by('qrcode_type_id', 'asc');

		$query = $this->db->get('qrcode_type');

		return $query->result();

	}


    public function getOne($id){
			
		$this->db->where('qrcode_type_id',$id);

		$result = $this->db->get('qrcode_type');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	
}




?>