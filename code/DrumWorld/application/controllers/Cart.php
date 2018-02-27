<?php
class Cart extends CI_Controller {

	public function view($page = 'cart') {
		if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}
		
		

		$data['title'] = $page;
		$data['menus'] = array("Home", "Cymbals", "Drums", "Hardware", "Sets", "Shopping Cart");
		// $data['cart_items'] = $this->cart_model->getDrums();
			
		$this -> load -> view('templates/home', $data);
		$this -> load -> view('menu/menu', $data);
		$this -> load -> view('pages/cart', $data);

	}

}
?>