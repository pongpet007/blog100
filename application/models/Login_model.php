<?php 

class Login_model extends CI_Model{

	
	public function checkLogin($username,$password,$useremail){

		$this->db->where('cus_name',$username );
		$this->db->where('cus_pass',$password );
		$this->db->where('cus_email',$useremail);


		$result = $this->db->get('customer');

		
		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	public function checkLogin2($username,$password){

		$this->db->where('cus_email',$username );
		$this->db->where('cus_pass',$password );



		$result = $this->db->get('customer');

		
		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}
	public function checkverify($code){

		$this->db->where('cus_verify',$code );

		$result = $this->db->get('customer');

		
		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	public function getOneemail($pro_id){
			
		$this->db->where('email',$pro_id);

		$result = $this->db->get('ssim_customer');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return array();
		}
	}

	public function getOne($pro_id){
			
		$this->db->where('cus_id',$pro_id);

		$result = $this->db->get('ssim_customer');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return array();
		}
	}

	public function getOnerepass($pro_id,$password){
			
		$this->db->where('cus_id',$pro_id);
		$this->db->where('password',$password);
		$result = $this->db->get('ssim_customer');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return array();
		}
	}

}