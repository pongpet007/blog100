<?php 

class Company_ebook_model extends CI_Model{
		
	public function getAll($com_id=1){

		$this->db->select('company_ebook.*,ebook_name');
		$this->db->from('company_ebook')
		->join('company_ebook_language','company_ebook.ebook_id=company_ebook_language.ebook_id and company_ebook_language.country_id=236','left');
		$this->db->where('com_id', $com_id);

		$this->db->order_by('udate','desc');

		$query = $this->db->get();

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