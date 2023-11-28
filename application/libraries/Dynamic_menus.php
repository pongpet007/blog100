<?php 

class Dynamic_menus {
	private $ci;
	public function __construct()
	{
		$this->ci =& get_instance();
		$this->ci->load->model('Menu_model');
	}

	public function generate()
	{

		$mainmenus = $this->ci->Menu_model->getMain();
		
		$result = array();
		
		foreach ($mainmenus as $key => $mainmenu) {
			
			$result[$key]['main'] = $mainmenu;
			
			$result[$key]['sub'] = $this->ci->Menu_model->getByParentId($mainmenu->menu_id);
			
		}

		return $result;

	}

	public function generate_bottom()
	{

		$mainmenus = $this->ci->Menu_model->getbottom();
		
		$result = array();
		
		foreach ($mainmenus as $key => $mainmenu) {
			
			$result[$key]['main'] = $mainmenu;
			
			//$result[$key]['sub'] = $this->ci->Menu_model->getByParentId($mainmenu->menu_id);
			
		}

		return $result;

	}

}

?>
