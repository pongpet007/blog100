<?php 

class Company_youtube_model extends CI_Model{
				
	public function getAll($com_id=0){
		
		$this->db->select("company_youtube.*,youtube_name");
		$this->db->from('company_youtube')
				 ->join('company_youtube_language','company_youtube.youtube_id=company_youtube_language.youtube_id and company_youtube_language.country_id=236','left')	;
		
		$query = $this->db->get();

		return $query->result();

	}


    public function getOne($id){
			
		$this->db->where('youtube_id',$id);

		$result = $this->db->get('company_youtube');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	
}




?>