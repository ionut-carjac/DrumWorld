<div class="container" align="center">
	<h1> DRUMS Page </h1>
	<BR>
		<?php 
			foreach($drum_items as $di){
				echo '<b>Name</b> : ';
				print_r( $di->getName());
				echo "<br/>";
			}
		?>
</div>