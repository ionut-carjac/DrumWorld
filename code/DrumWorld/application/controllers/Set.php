<?php
class Set extends CI_Controller {

	public function view($page = 'set') {
		if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}
		
		$this->load->model('sets_model');
		

		$data['title'] = $page;
		$data['menus'] = array("Home", "Cymbals", "Drums", "Hardware", "Sets", "Shopping Cart");
		$data['set_items'] = $this->sets_model->getSets();
			
		$this -> load -> view('templates/home', $data);
		$this -> load -> view('menu/menu', $data);
		$this -> load -> view('pages/set', $data);

	}

}
?>