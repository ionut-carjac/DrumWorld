<?php
class Drum extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('drums_model');
		$this -> load -> library("pagination");
	}

	public function view($page = 'drum') {
		if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}
		
		// $this->load->model('drums_model');
		// $this->load->library("pagination");
		
		$config = array();
        $config["base_url"] = base_url() . "drum/view";
        $config["total_rows"] = $this->drums_model->countDrums();
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
		
		$this->pagination->initialize($config);

		$data['title'] = $page;
		$data['menus'] = array("Home", "Cymbals", "Drums", "Hardware", "Sets", "Shopping Cart");
		$data['drum_items'] = $this -> drums_model -> getDrums();
        $data["links"] = $this->pagination->create_links();

		$this -> load -> view('templates/home', $data);
		$this -> load -> view('menu/menu', $data);
		$this -> load -> view('pages/drum', $data);

	}

}
?>