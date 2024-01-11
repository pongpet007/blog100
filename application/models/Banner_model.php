<?php

class Banner_model extends CI_Model{


	public function getAllHomePage($domain_id, $id){

		$this->db->from('domainandbanner')
				->join('banner','domainandbanner.banner_id =  banner.banner_id','left');

		$this->db->where('domainandbanner.domain_id',$domain_id);
		$this->db->where('banner.banner_type',$id);

		$this->db->where('start_date <=', date('Y-m-d'));
		$this->db->where('expire >=', date('Y-m-d'));

		$this->db->order_by('position', 'asc');
		
		$query = $this->db->get();

		return $query->result();

	}

	// public function getAllHomePage($id){

	// 	$this->db->where('banner_type',$id);

	// 	$this->db->order_by('position', 'asc');
		
	// 	$query = $this->db->get('banner');

	// 	return $query->result();

	// }

	
    public function getOne($id){
			
		$this->db->where('ban_id',$id);

		$result = $this->db->get('banner');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return array();
		}
	}

}
