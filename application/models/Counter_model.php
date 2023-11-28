<?php 

class Counter_model extends CI_Model{
	
	
	
	public function count($params = array()){
		
		$this->db->from('counter');
		//$this->db->where(['com_id'=>$com_id]);		

        return $this->db->count_all_results();	

	}	

	public function getToday()
	{
		$this->db->from('counter');
		$this->db->where("YEAR(dt) = YEAR(NOW()) AND MONTH(dt) = MONTH(NOW()) AND DAY(dt) = DAY(NOW())");		

        return $this->db->count_all_results();	
	}

	public function getMonth()
	{
		$this->db->from('counter');
		$this->db->where("YEAR(dt) = YEAR(NOW()) AND MONTH(dt) = MONTH(NOW())");		

        return $this->db->count_all_results();	
	}

}


?>

