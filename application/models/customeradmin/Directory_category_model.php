<?php 

class Directory_category_model extends CI_Model{

		
				
	public function getAll($com_id){

		$this->db->select('directory_category.*,dir_name_th');

		$this->db->from('directory_category')
				 ->join('directory','directory_category.dir_id=directory.dir_id');

		$this->db->where('com_id',$com_id);		
		
		$this->db->order_by('dir_name_th', 'asc');
		
		$query = $this->db->get();

		return $query->result();

	}

	

    public function getOne($id){
			
		$this->db->where('id',$id);

		$result = $this->db->get('directory_category');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	
}




?>