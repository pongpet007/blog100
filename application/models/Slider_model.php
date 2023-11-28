<?php

class Slider_model extends CI_Model{

	public function getAll(){

		// // $controller =$this->router->class;
		// // $method =$this->router->method;

		// if($controller=='Product'){
		// 	$this->db->where('slide_p',1);
		// }
		
		// $this->db->where_in('slider_id',$slider_id);

		$this->db->order_by('slider_id', 'desc');
		
		$query = $this->db->get('slider');

		return $query->result();

	}

	
    public function getOne($id){
			
		$this->db->where('slider_id',$id);

		$result = $this->db->get('slider');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return array();
		}
	}

}
