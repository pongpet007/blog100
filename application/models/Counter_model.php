<?php 

class Counter_model extends CI_Model{
	
	
	
	public function count($com_id){
		
		$this->db->from('counter');
		$this->db->where('com_id',$com_id);		

        return $this->db->count_all_results();	

	}	

	public function getToday($com_id)
	{
		$this->db->from('counter');
		$this->db->where('com_id',$com_id);	
		$this->db->where("YEAR(dt) = YEAR(NOW()) AND MONTH(dt) = MONTH(NOW()) AND DAY(dt) = DAY(NOW())");		

        return $this->db->count_all_results();	
	}

	public function getMonth($com_id)
	{
		$this->db->from('counter');
		$this->db->where('com_id',$com_id);	
		$this->db->where("YEAR(dt) = YEAR(NOW()) AND MONTH(dt) = MONTH(NOW())");		

        return $this->db->count_all_results();	
	}

}


?>

