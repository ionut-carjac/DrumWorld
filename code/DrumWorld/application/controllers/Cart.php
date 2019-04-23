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
		$this -> load -> view('templates/page_ending');

	}

	function add() {
		$insertData = array('id' => $this -> input -> post('id'), 
							'name' => $this -> input -> post('name'), 
							'price' => $this -> input -> post('price'), 
							'qty' => 1,
							'options' => array('type' => $this -> input -> post('type'))
							);

		$this -> cart -> insert($insertData);

	

		redirect($this -> input -> post('type') . '/view');
	}
	
	function addToCart() {
		$insertData = array('id' => $this -> input -> post('id'), 
							'name' => $this -> input -> post('name'), 
							'price' => $this -> input -> post('price'), 
							'qty' => 1,
							'options' => array('type' => $this -> input -> post('type'))
							);

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
		$this -> load -> view('templates/page_ending');
	}

	public function saveOrder() {

		
		if ($cart = $this -> cart -> contents()){
			
			$grand_total = 0;
			$type=null;
			
			$cart_details = array(); 
			foreach ($cart as $item) {
				$grand_total = $grand_total + $item['subtotal'];
				 if ($this->cart->has_options($item['rowid']) == TRUE){
					foreach($this->cart->product_options($item['rowid']) as $option_name => $option_value){
						$type=$option_value;
					}
				 }
			$details = array('product_id' => $item['id'],
							 'name' => $item['name'],		 
							 'quantity' => $item['qty'], 
							 'price' => $item['price'],
							 'subtotal' => $item['subtotal'],
							 'type' => $type,
									  );
			array_push($cart_details, $details);									  
			}
		}
		
		$order_detail = array('first_name' => $this -> input -> post('first_name'), 
						 'last_name' => $this -> input -> post('last_name'),	
						 'email' => $this -> input -> post('email'), 
						 'address' => $this -> input -> post('address'), 
						 'phone' => $this -> input -> post('phone'),
						 'order_date' => date('Y-m-d H:i:s'),
						 'order_value' => $grand_total,
						 'product_details' => $cart_details);						 
		
		$this -> cart_model -> insertOrder($order_detail);
		
		$this->cart->destroy();		

		$data['title'] = 'Order Placed';
		
		$this -> load -> view('templates/home', $data);
		$this -> load -> view('menu/menu');
		$this -> load -> view('pages/billing_success');
		$this -> load -> view('templates/page_ending');
	}

}
?>