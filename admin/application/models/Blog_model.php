<?php 

class Blog_model extends CI_Model{

		
				
	public function getAll($com_id=0){
		$this->db->select('blog.*,blog_name');
		$this->db->from('blog')
		->join('blog_language','blog.blog_id=blog_language.blog_id and blog_language.country_id=236','left');
		$this->db->where('com_id', $com_id);
		$this->db->order_by('is_active','asc');
		$this->db->order_by('blog_from','desc');
		$this->db->order_by('blog_to','desc');

		$query = $this->db->get();

		return $query->result();

	}


    public function getOne($id){
			
		$this->db->where('blog_id',$id);

		$result = $this->db->get('blog');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	
}




?>