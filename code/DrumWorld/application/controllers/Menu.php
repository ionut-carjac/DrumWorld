<?php
class Menu extends CI_Controller {

	public function get_menus() {

		$data['menus'] = array("Home", "Cymbals", "Drums", "Hardware", "Sets");
		// $data = array('menus' => $menus);
		$this -> load -> view('menu/menu', $data);
	}

}
?>