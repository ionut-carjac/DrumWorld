<?php
class Home extends CI_Controller {

	public function view($page = 'home') {
		if (!file_exists(APPPATH . 'views/templates/' . $page . '.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}

		$data['title'] = $page;

		//$this -> load -> view('templates/header');
		$this -> load -> view('templates/' . $page, $data);
		$data['menus'] = array("Home", "Cymbals", "Drums", "Hardware", "Sets", "Shopping Cart");
		$this -> load -> view('menu/menu', $data);
		//$this -> load -> view('templates/footer');

	}

}
?>