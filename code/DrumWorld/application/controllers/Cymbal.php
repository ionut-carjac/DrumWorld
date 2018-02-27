<?php
class Cymbal extends CI_Controller {

	public function view($page = 'cymbal') {
		if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}
		
		$this->load->model('cymbals_model');
		

		$data['title'] = $page;
		$data['menus'] = array("Home", "Cymbals", "Drums", "Hardware", "Sets", "Shopping Cart");
		$data['cymbal_items'] = $this->cymbals_model->getCymbals();
			
		$this -> load -> view('templates/home', $data);
		$this -> load -> view('menu/menu', $data);
		$this -> load -> view('pages/cymbal', $data);

	}

}
?>