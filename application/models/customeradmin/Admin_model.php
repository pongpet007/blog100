<?php 

/**
* 

*/
class Admin_model extends CI_Model{

	public function getSum()
	{
		$sql = "select level as name ,count(*) as ct from admin group by level";
		$query = $this->db->query($sql);

		return $query->result();		
	}
			

	public function checkOldPassword($user_id,$pass){
		$this->db->where('user_id',$user_id);
		$this->db->where('password',$pass);
		
		$query = $this->db->get('admin');

		return $query->num_rows();
	}
	
	public function getAllByDepartment($dep_id){

		$this->db->select('admin.*,dep_name');
		$this->db->from('admin')
				 ->join('department','admin.dep_id = department.dep_id','left');

		$this->db->where('admin.dep_id',$dep_id);

		
		if($this->session->userdata('sslevel') == 1)
		{
			$this->db->where('admin.user_id',$this->session->userdata('ssid'));	
		}
		elseif($this->session->userdata('sslevel') == 2 && $this->session->userdata('ssismanager')==1)
		{
			$this->db->where('admin.parent_user_id',$this->session->userdata('ssid'));	
		}

		$this->db->order_by('fullname', 'asc');
		
		$query = $this->db->get();
		
		return $query->result();

	}

	public function getSaleManager()
	{
		$this->db->where('sale_manager',1);		
		$this->db->order_by('fullname', 'asc');
		
		$query = $this->db->get('admin');

		return $query->result();

	}

			
	public function getAll($limit, $start,$search = array()){

		$this->db->select('admin.*,dep_name');
		$this->db->from('admin')
				 ->join('department','admin.dep_id = department.dep_id','left');

		if(isset($search['keyword']))
			$this->db->like('fullname', $search['keyword']);
		
		$this->db->order_by('fullname', 'asc');

		$this->db->limit($limit, $start);

		$query = $this->db->get();

		return $query->result();

	}

	public function record_count($search = array()) {

		$this->db->select('admin.*,dep_name');
		$this->db->from('admin')
				 ->join('department','admin.dep_id = department.dep_id','left');

		if(isset($search['keyword']))
			$this->db->like('fullname', $search['keyword']);
		
		$this->db->order_by('fullname', 'asc');

		$this->db->limit($limit, $start);

		$query = $this->db->get();



		return $this->db->count_all_results();
    }

    public function getOne($id){
			
		$this->db->where('user_id',$id);

		$result = $this->db->get('admin');

		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}

	public function update($data,$id){

		$this->db->where('user_id',$id);
		$this->db->update('admin',$data);
	
	}
	

	public function checkLogin($user,$pass){

		$this->db->where('username',$user );
		$this->db->where('password',$pass );
		$this->db->where('is_active',1 );


		$result = $this->db->get('admin');

		
		if($result->num_rows()==1){

			return $result->row(0);

		} else {

			return FALSE;
		}
	}


}




?>