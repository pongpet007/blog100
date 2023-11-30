<?php
	class Config_model extends CI_Model{
		
				
		public function getConfig()
		{
			
			$this->db->from('company')
					 ->join('theme','company.theme_id = theme.theme_id','left');
			$this->db->where('com_id',1);
			
			$query = $this->db->get();

			return $query->row(0);
		}

		public function getConfig1()
		{
			
			$this->db->where('Id',1);
			
			$query = $this->db->get('config');

			return $query->row(0);
		}

		
	}


?>
