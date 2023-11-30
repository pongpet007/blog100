<?php 

/**
* 

*/
class Company_category_model extends CI_Model{

		
			
	public function getAll($com_id){

		$this->db->select('company_category.*,dir_name_en,dir_name_th');


		$this->db->from('company_category')
				->join('directory','directory.dir_id=company_category.dir_id','left');
		
		$this->db->where('com_id',$com_id);

		$this->db->order_by('orders', 'asc');

		$query = $this->db->get();

		return $query->result();

	}

	public function getMain($com_id)
	{
		$this->db->select('company_category.*');

		$this->db->from('company_category');
		
		$this->db->where('com_id',$com_id);

		$this->db->where('cat_ref',0);


		$this->db->order_by('orders', 'asc');

		$query = $this->db->get();

		return $query->result();
	}

	public function getSub($com_id,$cat_id)
	{
		$this->db->select('company_category.*');

		$this->db->from('company_category');
		
		$this->db->where('com_id',$com_id);
		
		$this->db->where('cat_ref',$cat_id);


		$this->db->order_by('orders', 'asc');

		$query = $this->db->get();

		return $query->result();
	}

	public function getEN(){

		$this->db->select('index_en');
		$this->db->distinct();
		$this->db->from('company_category');	
		$this->db->where(" index_en !='' ");	
		$this->db->order_by('index_en', 'asc');
		$query = $this->db->get();
		return $query->result();

	}

	public function getTH(){

		$this->db->select('index_th');
		$this->db->distinct();
		$this->db->from('company_category');
		$this->db->where(" index_th !='' ");
		$this->db->order_by('index_th', 'asc');
		$query = $this->db->get();
		return $query->result();
	}

	
    public function getOne($id){
			
		$this->db->where('cat_id',$id);

		$result = $this->db->get('company_category');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}


}




?>