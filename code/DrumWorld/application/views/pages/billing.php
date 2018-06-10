<?php
$grand_total = 0;
// Calculate grand total.
if ($cart = $this -> cart -> contents()) :
	foreach ($cart as $item) :
		$grand_total = $grand_total + $item['subtotal'];
	endforeach;
endif;
?>

<html>
	<head>
		<title>Billing</title>
	</head>
	<body>
		<div class="container" align="center">
			<form name="billing" method="post" action="<?php echo base_url() . 'index.php/cart/saveOrder' ?>" >
				<input type="hidden" name="command" />
				<div align="center">
					<h1 align="center">Billing Info</h1>
					<table border="0" cellpadding="2px">
						<tr><td>Order Total:</td><td><strong>$<?php echo number_format($grand_total, 2); ?></strong></td></tr>
						<tr><td>Your Name:</td><td><input type="text" name="name" required=""/></td></tr>
						<tr><td>Address:</td><td><input type="text" name="address" required="" /></td></tr>
						<tr><td>Email:</td><td><input type="text" name="email" required="" /></td></tr>
						<tr><td>Phone:</td><td><input type="text" name="phone" required="" /></td></tr>
						<tr><td><?php
							echo "<a class ='fg-button teal'  id='back' href=" . base_url() . "index.php/home/view>Home</a>";
 						?></td><td>
 						<input class ='fg-button teal' type="submit" value="Place Order" /></td>
 						</tr>
					</table>
				</div>
			</form>
		</div>
	</body>
</html>