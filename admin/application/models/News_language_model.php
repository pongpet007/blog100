<?php 

class News_language_model extends CI_Model{

	public function getAll($search = array()){
		
		$this->db->select("news_language.*,iso2,short_name");
		$this->db->from('news_language')
				 ->join('country','country.country_id=news_language.country_id ','left');
		
		if(isset($search['country_id']) && $search['country_id']>0)
		{
			$this->db->where('news_language.country_id', $search['country_id']);
		}	

		if(isset($search['news_id']) && $search['news_id']>0)
		{
			$this->db->where('news_id', $search['news_id']);
			
		}	
		
		$this->db->where('country.is_active', 1 );

		$this->db->order_by('country_id');
		
		$result = $this->db->get();

		return $result->result();

	}

		
    public function getOne($id){
			
		$this->db->where('language_id',$id);

		$result = $this->db->get('news_language');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}


}




?>