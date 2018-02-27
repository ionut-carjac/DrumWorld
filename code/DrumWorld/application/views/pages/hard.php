<div class="container" align="center">
	<h1> HARDWARE Page </h1>
	<BR>
		<?php 
			foreach($hard_items as $hi){
				echo '<b>Name</b> : ';
				print_r( $hi->getName());
				echo "<br/>";
			}
		?>
</div>