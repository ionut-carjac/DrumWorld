<?php
class Home extends CI_Controller {

	public function view($page = 'home') {
		if (!file_exists(APPPATH . 'views/templates/' . $page . '.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}

		$data['title'] = $page;

		$this -> load -> view('templates/' . $page, $data);
		$this -> load -> view('menu/menu');
		$this -> load -> view('templates/home_content');
		$this -> load -> view('templates/page_ending');

	}

}
?>