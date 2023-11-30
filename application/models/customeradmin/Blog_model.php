<?php 

class Blog_model extends CI_Model{

		
				
	public function getAll($com_id=0){
		$this->db->order_by('cdate desc');
		$this->db->where('com_id',$com_id);		
		$query = $this->db->get('blog');
		return $query->result();

	}

	public function getNewest($limit=5,$com_id=0){		
		$this->db->where('com_id',$com_id);
		$this->db->order_by('cdate desc');
		$this->db->where('is_active',1);
		$query = $this->db->get('blog');
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