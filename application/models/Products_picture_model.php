<?php 

class Products_picture_model extends CI_Model{
		
			
	public function getAll($pro_id){

		$this->db->select('*');
		$this->db->from('products_picture');
		$this->db->where('products_picture.pro_id',$pro_id);
		$this->db->order_by('pro_pic_id', 'asc');
		$query = $this->db->get();
		return $query->result();

	}

	public function getAllColor($pro_id)
	{		
		$this->db->select('pro_pic_id,color');
		$this->db->from('products_picture');
		$this->db->where('products_picture.pro_id',$pro_id);
		$this->db->where('products_picture.color <>\'\'');
		$this->db->order_by('pro_pic_id', 'asc');
		$query = $this->db->get();
		return $query->result();
	}

    public function getOne($id){
			
		$this->db->where('pro_pic_id',$id);

		$result = $this->db->get('products_picture');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}


}




?>