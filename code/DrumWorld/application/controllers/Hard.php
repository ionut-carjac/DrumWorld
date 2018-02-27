<?php
class Hard extends CI_Controller {

	public function view($page = 'hard') {
		if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}
		
		$this->load->model('hards_model');
		

		$data['title'] = $page;
		$data['menus'] = array("Home", "Cymbals", "Drums", "Hardware", "Sets", "Shopping Cart");
		$data['hard_items'] = $this->hards_model->getHards();
			
		$this -> load -> view('templates/home', $data);
		$this -> load -> view('menu/menu', $data);
		$this -> load -> view('pages/hard', $data);

	}

}
?>