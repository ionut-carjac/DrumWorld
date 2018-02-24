<?php
class Drum extends CI_Controller {

	public function view($page = 'drum') {
		if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}
		
		$this->load->model('drums_model');
		

		$data['title'] = $page;
		$data['menus'] = array("Home", "Cymbals", "Drums", "Hardware", "Sets", "Shopping Cart");
		$data['drum_items'] = $this->drums_model->getDrums();
			
		$this -> load -> view('templates/home', $data);
		$this -> load -> view('menu/menu', $data);
		$this -> load -> view('pages/drum', $data);

	}

}
?>