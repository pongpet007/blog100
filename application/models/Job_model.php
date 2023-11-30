<?php

class Job_model extends CI_Model{

	public function getAll($limit, $start,$search=array()){

		$this->db->from('company_job')
				 ->join('company_job_language','company_job.job_id=company_job_language.job_id','left');
		$this->db->order_by('company_job.cby desc');		
		
		$this->db->limit($limit, $start);	
		
		if($this->session->userdata('site_lang')){
			$this->db->where('company_job_language.country_id', $this->session->userdata('site_lang'));			
		}
		else{
			$this->db->where('company_job_language.country_id', '221');
		}

		$query = $this->db->get();

		return $query->result();

	}

	public function record_count($search = array())
	{
		
		$this->db->from('company_job');
			
		return $this->db->count_all_results();
	}
	

    public function getOne($id){
		
		$this->db->from('company_job')
				 ->join('company_job_language','company_job.job_id=company_job_language.job_id','left');

		$this->db->where('company_job.job_id',$id);

		if($this->session->userdata('site_lang')){
			$this->db->where('company_job_language.country_id', $this->session->userdata('site_lang'));			
		}
		else{
			$this->db->where('company_job_language.country_id', '221');
		}


		$result = $this->db->get();

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return array();
		}
	}

}
