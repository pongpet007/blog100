<?php 

class Company_job_model extends CI_Model{
				
	public function getAll(){
		$this->db->select("company_job.*,job_name");
		$this->db->from('company_job')
				 ->join('company_job_language','company_job.job_id=company_job_language.job_id and company_job_language.country_id=236','left')	;
		
		$query = $this->db->get();

		return $query->result();

	}


    public function getOne($id){
			
		$this->db->where('job_id',$id);

		$result = $this->db->get('company_job');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}	
}




?>