<?php 

class Company_model extends CI_Model{

	public function getDomainbyProduct($pro_id){

		$this->db->from('domainandproduct');
		$this->db->where('pro_id', $pro_id);
		
		$query = $this->db->get();

		return $query->result();

	}

	public function getDomainbyBanner($banner_id){

		$this->db->from('domainandbanner');
		$this->db->where('banner_id', $banner_id);
		
		$query = $this->db->get();

		return $query->result();

	}

	public function getDomainbyALLS($domainsnow){

		$this->db->select('company.com_website');
		$this->db->from('company');
		$this->db->where('com_website !=', $domainsnow);
		
		$query = $this->db->get();

		return $query->result();

	}

	public function getAll($limit, $start,$search = array()){

		$this->db->select('company.*,company_language.*');
		$this->db->from('company')
				 ->join("company_language",'company.com_id=company_language.com_id and company_language.country_id=221','left');

		if(isset($search['keyword'])&& $search['keyword']>0)
		$this->db->where(" (com_name_th like'%$search[keyword]%' or com_name_en like'%$search[keyword]%' ) ");

		$this->db->limit($limit, $start);

		$query = $this->db->get();

		return $query->result();

	}

	public function count($search = array()) {

		$this->db->from('company');
		
		if(isset($search['keyword'])&& $search['keyword']>0)
		$this->db->where(" (com_name_th like'%$search[keyword]%' or com_name_en like'%$search[keyword]%' ) ");

		return $this->db->count_all_results();
    }

    public function getOne($id){
			
		$this->db->where('company.com_id',$id);		
		$this->db->from('company')
				 ->join("company_language",'company.com_id=company_language.com_id and company_language.country_id=221','left');
		$result = $this->db->get();

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	

}




?>