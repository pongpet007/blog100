<?php 

class Company_gallery_model extends CI_Model{
				
	public function getAll(){

		$this->db->select('company_gallery.*,gallery_name');
		$this->db->from('company_gallery')
		->join('company_gallery_language','company_gallery.gallery_id=company_gallery_language.gallery_id and company_gallery_language.country_id=236','left');
		
		$this->db->order_by('udate','desc');

		$query = $this->db->get();

		return $query->result();

	}


    public function getOne($id){
			
		$this->db->where('gallery_id',$id);

		$result = $this->db->get('company_gallery');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	public function get_gallery_image_All($id){
		
		$this->db->select('company_gallery_image.*,image_name');
		$this->db->from('company_gallery_image')
		->join('company_gallery_image_language','company_gallery_image.image_id=company_gallery_image_language.image_id and company_gallery_image_language.country_id=236','left');
		$this->db->order_by('position');
		$this->db->where('gallery_id',$id);

		$query = $this->db->get();

		return $query->result();
	}

	public function getOneimage($id){
			
		$this->db->where('image_id',$id);

		$result = $this->db->get('company_gallery_image');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	
}




?>