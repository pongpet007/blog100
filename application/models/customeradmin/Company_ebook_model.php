<?php 

class Company_ebook_model extends CI_Model{
		
	public function getAll($com_id=0){
		
		$this->db->where('com_id', $com_id);

		$this->db->order_by('udate','desc');

		$query = $this->db->get('company_ebook');

		return $query->result();

	}


    public function getOne($id){
			
		$this->db->where('ebook_id',$id);

		$result = $this->db->get('company_ebook');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	
}




?>