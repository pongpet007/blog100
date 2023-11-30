<?php 

class Banner_model extends CI_Model{

	public function getByPosition($position=0)
	{
		if($position >0 )
			$this->db->where('position',$position);

		$query = $this->db->get('banner');

		return $query->result();
		
	}		
				
	public function getAll(){
		
		$query = $this->db->get('banner');

		return $query->result();

	}


    public function getOne($id){
			
		$this->db->where('banner_id',$id);

		$result = $this->db->get('banner');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	
}




?>