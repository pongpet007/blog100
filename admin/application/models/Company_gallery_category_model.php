
<?php 

class Company_gallery_category_model extends CI_Model{
			
	public function getAll($com_id){

		$this->db->select('company_gallery_category.*,cat_name');

		$this->db->from('company_gallery_category')	
		->join('company_gallery_category_language','company_gallery_category.cat_id=company_gallery_category_language.cat_id and company_gallery_category_language.country_id=236','left')			;
		
		$this->db->where('com_id',$com_id);

		$this->db->order_by('orders', 'asc');

		$query = $this->db->get();

		return $query->result();

	}

	public function getMain($com_id)
	{
		$this->db->select('company_gallery_category.*,cat_name');

		$this->db->from('company_gallery_category')	
		->join('company_gallery_category_language','company_gallery_category.cat_id=company_gallery_category_language.cat_id and company_gallery_category_language.country_id=236','left')	;
		
		$this->db->where('com_id',$com_id);

		$this->db->where('cat_ref',0);


		$this->db->order_by('orders', 'asc');

		$query = $this->db->get();

		return $query->result();
	}

	public function getSub($com_id,$cat_id)
	{
		$this->db->select('company_gallery_category.*,cat_name');

		$this->db->from('company_gallery_category')	
		->join('company_gallery_category_language','company_gallery_category.cat_id=company_gallery_category_language.cat_id and company_gallery_category_language.country_id=236','left')	;
		
		$this->db->where('com_id',$com_id);
		
		$this->db->where('cat_ref',$cat_id);


		$this->db->order_by('orders', 'asc');

		$query = $this->db->get();

		return $query->result();
	}

		
    public function getOne($id){
			
		$this->db->where('cat_id',$id);

		$result = $this->db->get('company_gallery_category');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}


}




?>