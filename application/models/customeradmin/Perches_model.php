<?php 

class Perches_model extends CI_Model{

	//public function getByPosition($position=0)
	//{
		//if($dir_id >0 )
		//	$this->db->where('position',$position);

		//$this->db->where('dir_id', 0);

		//$query = $this->db->get('Exhibittion');

		//return $query->result();
		
	//}		
				
	public function getAll(){
		

		 $this->db->join('province p', 'p.province_id = perches.province_id', 'left');
     	$this->db->join('amphur a', 'a.amphur_id= perches.amphur_id', 'left');
     	$query = $this->db->get('perches');
     	return $query->result();

		//$this->db->where('dir_id', $com_id);
		// $this->db->order_by('perches_id','desc');
		// $query = $this->db->get('perches');

		// return $query->result();

	}
	public function getAll1(){

		$this->db->order_by('province_name', 'asc');	
		
		$query = $this->db->get('province');

		return $query->result();

	}

	public function getAll3(){

		$this->db->order_by('perches_id', 'asc');	
		
		$query = $this->db->get('perches');

		return $query->result();

	}
	
	
	public function getAll2($province_id){
		// $this->db->where ('province_id',$province_id);
		// $this->db->order_by('amphur_name', 'asc');	
		
		// $query = $this->db->get('amphur');

		// return $query->result();
		if(isset($province_id))
			$this->db->where('province_id', $province_id);
			$this->db->order_by('amphur_name', 'asc');
			$query = $this->db->get('amphur');

		return $query->result();

	}

	public function getAllAmphur($province_id=0){
		if($province_id>0)
			$this->db->where('province_id', $province_id);

		$this->db->order_by('amphur_name', 'asc');
		$query = $this->db->get('amphur');

		return $query->result();

	}
	public function getAmphur(){
		// $this->db->join('amphur a', 'a.province_id = province.province_id', 'left');
		// $this->db->where('province_id',$province_id)
  //   	$query = $this->db->get('amphur');
  //   	return $query->result();
		$this->db->where('province_id', $province_id);
		$this->db->order_by('amphur_id','desc');
		$query = $this->db->get('amphur');

		return $query->result();

	}

 //   public function getOne($ban_id){
			
	// 	$this->db->where('ban_id',$ban_id);

	// 	$result = $this->db->get('exhibition');

	// 	if($result->num_rows()==1){

	// 		return $result->row(0);

	// 	} else {

	// 		return FALSE;
	// 	}
	// }

	public function getOne($perches_id){
			
		$this->db->where('perches_id',$perches_id);

		$result = $this->db->get('perches');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return array();
		}
	}
}




?>