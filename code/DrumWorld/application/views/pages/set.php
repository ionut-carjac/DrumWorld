<div class="container" align="center">
	<h1> SETS Page </h1>
	<BR>
		<?php 
			foreach($set_items as $si){
				echo '<b>Name</b> : ';
				print_r( $si->getName());
				echo "<br/>";
			}
		?>
</div>