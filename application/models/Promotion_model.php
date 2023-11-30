<?php 

class Promotion_model extends CI_Model{

		
				
	public function getAll(){
		
		$this->db->from('promotion')
				 ->join('promotion_language','promotion.promotion_id = promotion_language.promotion_id ','left');	
		$this->db->where(" now()  between promotion_start and date_add(promotion_end, INTERVAL 1 DAY) ");

	
		$this->db->order_by('promotion_name');		


		$query = $this->db->get();

		return $query->result();

	}

    public function getOne($id){
			
		$this->db->from('promotion')
				 ->join('promotion_language','promotion.promotion_id = promotion_language.promotion_id ','left');

		$this->db->where('promotion.promotion_id',$id);

		if($this->session->userdata('site_lang')){
			$this->db->where('promotion_language.country_id', $this->session->userdata('site_lang'));
		}
		else{
			$this->db->where('promotion_language.country_id', '221');
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