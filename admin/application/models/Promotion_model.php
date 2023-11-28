<?php 

class Promotion_model extends CI_Model{

		
				
	public function getAll(){
		
		$this->db->select('promotion.*,promotion_name');
		$this->db->from('promotion')->join('promotion_language','promotion_language.promotion_id=promotion.promotion_id and promotion_language.country_id=236','left');

		$this->db->order_by('promotion_start','desc');
		$this->db->order_by('promotion_end','desc');

		$query = $this->db->get();

		return $query->result();

	}

    public function getOne($id){
			
		$this->db->where('promotion_id',$id);

		$result = $this->db->get('promotion');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}

	}

	
}




?>