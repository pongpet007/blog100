<?php 

class Utility
{
	private $ci;
	
	public function __construct()
	{
		$this->ci =& get_instance();

		$this->ci->load->model('Directory_model');
		$this->ci->load->model('Directory_category_model');
	}

	public function getDirId()
	{

		$directory_index = $this->ci->Directory_model->getmain(array('show_index'=>1));

		$arr = array();
		foreach ($directory_index as $key => $value) {
			
			$directory_sub = $this->ci->Directory_model->getSub($value->dir_id);
			
			$arr[$value->dir_id] = array();
			
			foreach ($directory_sub as $key2 => $value2) {			

			 	$arr[$value->dir_id][] = $value2->dir_id;

			}
		}

		return $arr;
		
	}

	public function getSubId($dir_id)
	{
		$directory_sub = $this->ci->Directory_model->getSub($dir_id);
			
		$arr = array($dir_id);
		
		foreach ($directory_sub as $key2 => $value2) {			
		 	$arr[] = $value2->dir_id;
		}		

		return $arr;
	}

	public function parentDirectory($dir_id)
	{
		$dir = array();
		$dir1 = $this->ci->Directory_model->getOne($dir_id);

		if($dir1){
			$dir[] = $dir1;

			if($dir1->dir_ref > 0){
				$dir2 = $this->ci->Directory_model->getOne($dir1->dir_ref);		
				$dir[] = $dir2;			
			}
			$dir = array_reverse($dir);

			//print_r($dir);
			return $dir;	
		}
		else
		{
			return array();
		}		
	}

	public function getCompanyDirectory($com_id)
	{
		$dir = array();
		$dir1s =  $this->ci->Directory_category_model->getByComId($com_id);
		
		foreach ($dir1s as $dir1) {
			$dir[] = $this->parentDirectory($dir1->dir_id);			
		}
		
		return $dir;
	}

}
 ?>