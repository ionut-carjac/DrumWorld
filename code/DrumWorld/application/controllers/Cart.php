<?php
class Cart extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this -> load -> helper('form');
		$this -> load -> library('cart');
		$this -> load -> model('cart_model');
	}

	public function view() {

		$data['title'] = 'Your Shopping Cart';

		$this -> load -> view('templates/home', $data);
		$this -> load -> view('menu/menu');
		$this -> load -> view('pages/cart.php');

	}

	function add() {
		$insertData = array('id' => $this -> input -> post('id'), 
							'name' => $this -> input -> post('name'), 
							'price' => $this -> input -> post('price'), 
							'qty' => 1);

		$this -> cart -> insert($insertData);

	

		redirect($this -> input -> post('type') . '/view');
	}
	
	function addToCart() {
		$insertData = array('id' => $this -> input -> post('id'), 
							'name' => $this -> input -> post('name'), 
							'price' => $this -> input -> post('price'), 
							'qty' => 1);

		$this -> cart -> insert($insertData);

		redirect('cart/view');
	}

	function remove($rowid) {
		// Check rowid value.
		if ($rowid === "all") {
			// Destroy data  stored in session.
			$this -> cart -> destroy();

		} else {
			// Destroy selected rowid in session.
			$data = array('rowid' => $rowid, 'qty' => 0);

			// Update cart data, after cancel.
			$this -> cart -> update($data);
		}

		// This will show cancel data in cart.
		redirect('cart/view');
	}

	function updateCart() {

		// Recieve post values,calcute them and update
		$cart_info = $_POST['cart'];
		foreach ($cart_info as $id => $cart) {
			$rowid = $cart['rowid'];
			$price = $cart['price'];
			$amount = $price * $cart['qty'];
			$qty = $cart['qty'];

			$data = array('rowid' => $rowid, 'price' => $price, 'amount' => $amount, 'qty' => $qty);

			$this -> cart -> update($data);
		}
		redirect('cart/view');
	}

	function billing() {

		$data['title'] = 'Your Billing Info';

		$this -> load -> view('templates/home', $data);
		$this -> load -> view('menu/menu');
		$this -> load -> view('pages/billing.php');
	}

	public function saveOrder() {
		$customer = array('name' => $this -> input -> post('name'), 'email' => $this -> input -> post('email'), 'address' => $this -> input -> post('address'), 'phone' => $this -> input -> post('phone'));

		// And store user information in database.
		$cust_id = $this -> cart_model -> insertCustomer($customer);

		$order = array('date' => date('Y-m-d'), 'customerid' => $cust_id);

		$ord_id = $this -> cart_model -> insertOrder($order);

		if ($cart = $this -> cart -> contents()) :
			foreach ($cart as $item) :
				$order_detail = array('orderid' => $ord_id, 'productid' => $item['id'], 'quantity' => $item['qty'], 'price' => $item['price']);

				// Insert product imformation with order detail, store in cart also store in database.
				$cust_id = $this -> cart_model -> insertOrderDetail($order_detail);
			endforeach;
		endif;

		// After storing all imformation in database load "billing_success".
		$this -> load -> view('pages/billing_success');
	}

}
?>