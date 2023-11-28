<?php 

class News_model extends CI_Model{

		
				
	public function getAll($com_id=1,$search=array()){
		
		$this->db->select('news.*,news_name');
		$this->db->from('news')
		->join('news_language','news.news_id=news_language.news_id and news_language.country_id=236','left');
		$this->db->where('com_id', $com_id);
		$this->db->order_by('is_active','asc');
		$this->db->order_by('news_from','desc');
		$this->db->order_by('news_to','desc');

		$query = $this->db->get();

		return $query->result();

	}

	

    public function getOne($id){
			
		$this->db->where('news_id',$id);

		$result = $this->db->get('news');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	
}




?>