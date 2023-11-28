<?php 

class Menu_model extends CI_Model{
				
	public function getMain(){
		
		$this->db->select("menu.*,menu_language.*,menu_type_name,feature_name,content_name,feature_url");
		$this->db->from("menu")
				 ->join('menu_language','menu.menu_id = menu_language.menu_id','left')
				 ->join('menu_type','menu.menu_type_id=menu_type.menu_type_id','left')
				 ->join('feature','menu.feature_id=feature.feature_id','left')
				 ->join('content','menu.content_id=content.content_id','left');

		$this->db->order_by('position asc');
		$this->db->where(' parent_id = 0 ');
		$this->db->where(' menu.is_active = 1 ');

		if($this->session->userdata('site_lang')){
			$this->db->where('menu_language.country_id', $this->session->userdata('site_lang'));
		}
		else{
			$this->db->where('menu_language.country_id', '221');
		}	

		$query = $this->db->get();

		return $query->result();

	}

	public function getsub($menu_id){

		$this->db->select("menu.*,menu_language.*,menu_type_name,feature_name,content_name");
		$this->db->from("menu")
				 ->join('menu_language','menu.menu_id = menu_language.menu_id','left')
				 ->join('menu_type','menu.menu_type_id=menu_type.menu_type_id','left')
				 ->join('feature','menu.feature_id=feature.feature_id','left')
				 ->join('content','menu.content_id=content.content_id','left');
		$this->db->order_by('position asc');
		$this->db->where('parent_id',$menu_id);
		$this->db->where(' menu.is_active = 1 ');
		if($this->session->userdata('site_lang')){
			$this->db->where('menu_language.country_id', $this->session->userdata('site_lang'));
		}
		else{
			$this->db->where('menu_language.country_id', '221');
		}	
		$query = $this->db->get();

		return $query->result();

	}


    public function getOne($id){
			
		
		$this->db->from("menu")
				 ->join('menu_language','menu.menu_id = menu_language.menu_id','left');

		$this->db->where('menu.menu_id',$id);
		if($this->session->userdata('site_lang')){
			$this->db->where('menu_language.country_id', $this->session->userdata('site_lang'));
		}
		else{
			$this->db->where('menu_language.country_id', '221');
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