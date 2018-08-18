<?php
class Drum extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this -> load -> model('drums_model');
		$this -> load -> library("pagination");
		$this -> load -> library('cart');
		$this -> load -> library('session');
		$this -> load -> helper('form');
	}

	public function view($pageNumber = 0) {
		if (!file_exists(APPPATH . 'views/pages/drum.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}

		$config = array();
		$config["base_url"] = base_url() . "/index.php/drum/view";
		$config["total_rows"] = $this -> drums_model -> countDrums();
		$config["per_page"] = 4;
		$config["uri_segment"] = 0;

		$config['cur_tag_open'] = '&nbsp;<a class="current">';
		$config['cur_tag_close'] = '</a>';
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Previous';
		
		
		$this -> pagination -> initialize($config);
		$pageStart = ($this -> uri -> segment(3)) ? $this -> uri -> segment(3) : 0;

		$data["drum_items"] = $this -> drums_model -> fetchDrums($config["per_page"], $pageStart);

		$data['title'] = "Drums";

		$str_links = $this -> pagination -> create_links();
		$data["links"] = explode('&nbsp;', $str_links);
		


		$this -> load -> view('templates/home', $data);
		$this -> load -> view('menu/menu');
		$this -> load -> view('pages/drum', $data);

	}

	public function viewDrum($id) {

		$drum_item = $this -> drums_model -> getDrumById($id);
		$data['title'] = "Drum Item";
		$data['drum_item'] = $drum_item;

		$this -> load -> view('templates/home', $data);
		$this -> load -> view('menu/menu');
		$this -> load -> view('pages/drum_content', $data);
	}

}
?>