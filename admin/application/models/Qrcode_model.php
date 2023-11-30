<?php 

class Qrcode_model extends CI_Model{

		
				
	public function getAll($search,$limit=100){	
		
		$this->db->from("qrcode")
				 ->join("qrcode_type",'qrcode.qrcode_type_id = qrcode_type.qrcode_type_id');

		if(isset($search['keyword'])){
			$this->db->where(" (title like '%$search[keyword]%' or  md5_encode like '%$search[keyword]%') ");
		} 

		if(isset($search['qrcode_type_id']) && $search['qrcode_type_id']>0){
			$this->db->where('qrcode.qrcode_type_id',$search['qrcode_type_id']);
		} 

		$this->db->order_by('title', 'asc');
		
		$this->db->limit($limit);

		$query = $this->db->get();

		return $query->result();

	}


    public function getOne($id){
			
		$this->db->where('qrcode_id',$id);

		$result = $this->db->get('qrcode');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	
}




?>