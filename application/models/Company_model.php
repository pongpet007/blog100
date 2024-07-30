<?php 

class Company_model extends CI_Model{

				
	public function getAll($limit, $start,$search = array()){

		$this->db->select('company.*,company_language.*,theme.*,comtype_name');
		$this->db->from('company')
				 ->join("company_language",'company.com_id=company_language.com_id','left')
				 ->join('theme','company.theme_id = theme.theme_id','left')
				 ->join('companytype','company.comtype_id = companytype.comtype_id','left')	;
		
		if(isset($search['keyword'])&& $search['keyword']>0)
			$this->db->where(" (com_name_th like'%$search[keyword]%' or com_name_en like'%$search[keyword]%' ) ");

		if(isset($search['comtype_id'])&& $search['comtype_id']>0)
			$this->db->where('company.comtype_id',$search['comtype_id']);

		if(isset($search['dir_id'])&& $search['dir_id']>0)
			$this->db->where('company.dir_id',$search['dir_id']);

		$this->db->order_by('com_website', 'asc');
		
		if($this->session->userdata('site_lang')){
			$this->db->where('company_language.country_id', $this->session->userdata('site_lang'));
		}
		else{
			$this->db->where('company_language.country_id', '221');
		}	

		$this->db->limit($limit, $start);

		$query = $this->db->get();

		return $query->result();

	}

	public function count($search = array()) {

		$this->db->from('company')				
				 ->join('companytype','company.comtype_id = companytype.comtype_id','left')
				 ->join('theme','company.theme_id = theme.theme_id','left')	;
		
		$this->db->where(" (com_name_th like'%$search[keyword]%' or com_name_en like'%$search[keyword]%' ) ");
		
		if(isset($search['comtype_id'])&& $search['comtype_id']>0)
			$this->db->where('company.comtype_id',$search['comtype_id']);

		if(isset($search['dir_id'])&& $search['dir_id']>0)
			$this->db->where('company.dir_id',$search['dir_id']);

		if($this->session->userdata('site_lang')){
			$this->db->where('company_language.country_id', $this->session->userdata('site_lang'));
		}
		else{
			$this->db->where('company_language.country_id', '221');
		}	

		return $this->db->count_all_results();
    }

    public function getOne($id){
			
			
		$this->db->from('company')
				 ->join("company_language",'company.com_id=company_language.com_id ','left')
				 ->join('theme','company.theme_id = theme.theme_id','left');
		$this->db->where('company.com_id',$id);	

		if($this->session->userdata('site_lang')){
			$this->db->where('company_language.country_id', $this->session->userdata('site_lang'));
		}
		else{
			$this->db->where('company_language.country_id', '221');
		}		

		$result = $this->db->get();

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	public function getOneDomain($domain){

		$this->db->from('company')
				 ->join("company_language",'company.com_id=company_language.com_id ','left')
				 ->join('theme','company.theme_id = theme.theme_id','left');
		$this->db->where('company.com_website',$domain);	

		if($this->session->userdata('site_lang')){
			$this->db->where('company_language.country_id', $this->session->userdata('site_lang'));
		}
		else{
			$this->db->where('company_language.country_id', '221');
		}		

		$result = $this->db->get();

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	

}




?>