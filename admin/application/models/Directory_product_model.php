<?php 

class Directory_product_model extends CI_Model{

		
				
	public function getAll($com_id,$pro_id){

		$this->db->select('directory_product.*,dir_name_th');

		$this->db->from('directory_product')
				 ->join('directory','directory_product.dir_id=directory.dir_id');

		$this->db->where('com_id',$com_id);
		$this->db->where('pro_id',$pro_id);
		
		$this->db->order_by('dir_name_th', 'asc');
		
		$query = $this->db->get();

		return $query->result();

	}

	

    public function getOne($id){
			
		$this->db->where('id',$id);

		$result = $this->db->get('directory_product');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	
}




?>