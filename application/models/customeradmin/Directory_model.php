<?php 

class Directory_model extends CI_Model{

		
				
	public function getmain(){

		$sql = "select d1.*,
				(select count(*) from directory d2 where d2.dir_ref=d1.dir_id)as ct 
				from directory d1 
				where d1.dir_ref = 0 order by dir_name_th";
				
		$query = $this->db->query($sql);

		return $query->result();

	}

	public function getsub($dir_id){

		$sql = "select d1.*,
				(select count(*) from directory d2 where d2.dir_ref=d1.dir_id)as ct 
				from directory d1 
				where d1.dir_ref=$dir_id order by dir_name_th";

		$query = $this->db->query($sql);

		return $query->result();

	}

	

    public function getOne($id){
			
		$this->db->where('dir_id',$id);

		$result = $this->db->get('directory');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	
}




?>