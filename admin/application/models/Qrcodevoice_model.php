<?php 

class Qrcodevoice_model extends CI_Model{
				
	public function getAll($qrcode_id){	
		
		$this->db->from("qrcodevoice");
        $this->db->where('qrcode_id',$qrcode_id);
		$this->db->order_by('title_en', 'asc');		
		$query = $this->db->get();

		return $query->result();

	}

    public function getOne($id){
			
		$this->db->where('qrcodevoice_id',$id);

		$result = $this->db->get('qrcodevoice');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	
}




?>