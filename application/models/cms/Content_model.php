<?php 

class Content_model extends CI_Model{

		
				
	public function getAll(){
		
		
		$this->db->order_by('content_id asc');

		$query = $this->db->get('content');

		return $query->result();

	}


    public function getOne($id){
				
		$this->db->from('content')
				 ->join('menu','menu.content_id = content.content_id','left')
				 ->join('menu_language','menu.menu_id = menu_language.menu_id','left');
		$this->db->where('content.content_id',$id);
		if($this->session->userdata('site_lang')){
			$this->db->where('menu_language.country_id', $this->session->userdata('site_lang'));
		}
		else{
			$this->db->where('menu_language.country_id', '221');
		}	
		$query = $this->db->get();

		if($query->num_rows()==1){

			return $query->row(0);

		} else {

			return FALSE;
		}
	}

	
}




?>