
		<div class="container" align="center">
			<div id='tag'>
				<img src="<?php echo base_url(); ?>assets/pics/cart/head_cart.jpg"/>
			</div>
			<div id="cart" >
				<div id = "heading">
					<h2 align="center">Products on Your Shopping Cart</h2>
				</div>
				<div id="text">
					<?php $cart_check = $this -> cart -> contents();

					if (empty($cart_check)) {
						echo 'To add products to your shopping cart click on "Add to Cart" Button in one of the products list';
					}
					?>
				</div>
				<table id="table" border="0" cellpadding="5px" cellspacing="1px">
					<?php
						// All values of cart store in "$cart".
						if ($cart = $this->cart->contents()):
					?>
					<tr id= "main_heading">
						<td>Serial</td>
						<td>Name</td>
						<td>Price</td>
						<td>Qty</td>
						<td>Amount</td>
						<td>Cancel Product</td>
					</tr>
					<?php
						// Create form and send all values in "shopping/updateCart" function.
						echo form_open('cart/updateCart');
							$grand_total = 0;
							$i = 1;

						foreach ($cart as $item):
							echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
							echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
							echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
							echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
							echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
					?>
					<tr>
						<td> <?php echo $i++; ?> </td>
						<td> <?php echo $item['name']; ?> </td>
						<td> € <?php echo number_format($item['price'], 2); ?> </td>
						<td> <?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?> </td>
						<?php $grand_total = $grand_total + $item['subtotal']; ?>
						<td> € <?php echo number_format($item['subtotal'], 2) ?> </td>
						<td>

						<?php
						// cancel image.
						$path = "<img src='" . base_url() . "assets/pics/cart/cart_cross.jpg' width='50px' height='40px'>";
						echo anchor('cart/remove/' . $item['rowid'], $path);
						?></td>
						<?php endforeach; ?>
					</tr>
					<tr>
					<td><b>Order Total: $<?php echo number_format($grand_total, 2); ?></b></td>

					<?php // "clear cart" button call javascript confirmation message ?>
					<td colspan="5" align="right"><input  class ='fg-button teal' type="button" border="1pz" value="Clear Cart" onclick="clearCart()">

					<?php //submit button. ?>
					<input class ='fg-button teal'  type="submit" value="Update Cart">
					<?php echo form_close(); ?>

					<!-- "Place order button" on click send "billing" controller -->
					<input class ='fg-button teal' type="button" value="Place Order" onclick="window.location = 'cart/billing'"></td>
					</tr>
					<?php endif; ?>
				</table>
			</div>
		</div>
