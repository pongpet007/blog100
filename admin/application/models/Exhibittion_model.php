<?php 

class Exhibittion_model extends CI_Model{

	//public function getByPosition($position=0)
	//{
		//if($dir_id >0 )
		//	$this->db->where('position',$position);

		//$this->db->where('dir_id', 0);

		//$query = $this->db->get('Exhibittion');

		//return $query->result();
		
	//}		
				
	public function getAll(){
		
		//$this->db->where('dir_id', $com_id);
		$this->db->order_by('ban_id','desc');
		$query = $this->db->get('exhibition');

		return $query->result();

	}


    public function getOne($ban_id){
			
		$this->db->where('ban_id',$ban_id);

		$result = $this->db->get('exhibition');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	
}




?>