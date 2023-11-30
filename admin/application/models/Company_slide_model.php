<?php 

class Company_slide_model extends CI_Model{
				
	public function getAll(){

		$this->db->from('company_slide')
				 ->join("company_slide_language",'company_slide.slide_id=company_slide_language.slide_id and company_slide_language.country_id=221','left');
		$query = $this->db->get();

		return $query->result();

	}


    public function getOne($id){

    	$this->db->from('company_slide')
				 ->join("company_slide_language",'company_slide.slide_id=company_slide_language.slide_id and company_slide_language.country_id=221','left');

			
		$this->db->where('company_slide.slide_id',$id);

		$result = $this->db->get();

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	public function get_slide_image_All($id){
		
		$this->db->from('company_slide_image')
				 ->join("company_slide_image_language",'company_slide_image.slide_image_id  = company_slide_image_language.slide_image_id and company_slide_image_language.country_id=221','left');

		$this->db->where('company_slide_image.slide_id',$id);

		$query = $this->db->get();

		return $query->result();
	}

	public function getOneimage($id){
		
		$this->db->from('company_slide_image')
				 ->join("company_slide_image_language",'company_slide_image.slide_image_id=company_slide_image_language.slide_image_id and company_slide_image_language.country_id=221','left');

		$this->db->where('company_slide_image.slide_image_id',$id);

		$result = $this->db->get();

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	
}




?>