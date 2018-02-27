<div class="container" align="center">
	<h1> Cymbals Page </h1>
	<BR>
		<?php 
			foreach($cymbal_items as $ci){
				echo '<b>Name</b> : ';
				print_r( $ci->getName());
				echo "<br/>";
			}
		?>
	<BR>
</div>