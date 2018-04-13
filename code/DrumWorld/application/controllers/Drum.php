<?php
class Drum extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('drums_model');
		$this -> load -> library("pagination");
		$this->load->library('cart');
	}

	public function view($page = 'drum') {
		if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}
		
		// $this->load->model('drums_model');
		// $this->load->library("pagination");
		
		$config = array();
        $config["base_url"] = base_url() . "drum/viewDrum";
        $config["total_rows"] = $this->drums_model->countDrums();
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
		
		$this->pagination->initialize($config);

		$data['title'] = $page;
		$data['drum_items'] = $this -> drums_model -> getDrums();
        $data["links"] = $this->pagination->create_links();

		$this -> load -> view('templates/home', $data);
		$this -> load -> view('menu/menu');
		$this -> load -> view('pages/drum', $data);

	}
	
	public function viewDrum($id){
		
		$drum_item = $this->drums_model->getDrumById($id);
		$data['title'] = "Drum Item";
		$data['drum_item'] = $drum_item;
		
		$this -> load -> view('templates/home', $data);
		$this -> load -> view('menu/menu');
		$this -> load -> view('pages/drum_content', $data);
	}

}
?>