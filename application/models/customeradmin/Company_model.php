<?php 

class Company_model extends CI_Model{

				
	public function getAll($limit, $start,$search = array()){

		$this->db->select('company.*,comtype_name');
		$this->db->from('company')
				 ->join('companytype','company.comtype_id = companytype.comtype_id','left')	;
		
		$this->db->where(" (com_name_th like'%$search[keyword]%' or com_name_en like'%$search[keyword]%' ) ");

		if(isset($search['comtype_id'])&& $search['comtype_id']>0)
			$this->db->where('company.comtype_id',$search['comtype_id']);

		if(isset($search['dir_id'])&& $search['dir_id']>0)
			$this->db->where('company.dir_id',$search['dir_id']);

		$this->db->order_by('com_name_en', 'asc');

		$this->db->limit($limit, $start);

		$query = $this->db->get();

		return $query->result();

	}

	public function count($search = array()) {

		$this->db->from('company')				
				 ->join('companytype','company.comtype_id = companytype.comtype_id','left')	;
		
		$this->db->where(" (com_name_th like'%$search[keyword]%' or com_name_en like'%$search[keyword]%' ) ");
		
		if(isset($search['comtype_id'])&& $search['comtype_id']>0)
			$this->db->where('company.comtype_id',$search['comtype_id']);

		if(isset($search['dir_id'])&& $search['dir_id']>0)
			$this->db->where('company.dir_id',$search['dir_id']);

		return $this->db->count_all_results();
    }

    public function getOne($id){
			
		$this->db->where('com_id',$id);

		$result = $this->db->get('company');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	

}




?>