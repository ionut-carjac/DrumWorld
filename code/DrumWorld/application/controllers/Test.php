<?php
class Test extends CI_Controller {
	public function view($page) {

		$data['title'] = 'Order Placed';
		
		$this -> load -> view('templates/home', $data);
		$this -> load -> view('menu/menu');
		$this -> load -> view('pages/'.$page);
		$this -> load -> view('templates/page_ending');

	}

}
?>