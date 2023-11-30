<?php 

class Quotation_model extends CI_Model{

	public function getAll($limit,$start,$search = array()){
		

		if(isset($search["com_id"]) && $search["com_id"] > 0)
		{
			$this->db->where('com_id',$search["com_id"]);
		}

		$this->db->limit($limit, $start);
		$this->db->order_by('cdate', 'desc');
        
        $query = $this->db->get('quotation');

        return $query->result();

	}

	public function count($search=array()) {
		
		$this->db->from('quotation');	
		
		if(isset($search["com_id"]) && $search["com_id"] > 0)
		{
			$this->db->where('com_id',$search["com_id"]);
		}
        
        return $this->db->count_all_results();
    }

    public function countnew($search=array()) {
		
		$this->db->from('quotation');	
		$this->db->where('new_status',1);
		if(isset($search["com_id"]) && $search["com_id"] > 0)
		{
			$this->db->where('com_id',$search["com_id"]);
		}
        
        return $this->db->count_all_results();
    }


	public function getOne($quotation_id){
		
		$this->db->where('quotation_id',($quotation_id));

		$result = $this->db->get('quotation');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return array();
		}

	}


}

 ?>