<div class="container" align="center">
	<table class ="table table-striped">

		<TR>
			<td>
			<p2>
				<b></b>
			</p2></td>
			<td>
			<p2>
				<b>Name</b>
			</p2></td>
			<td>
			<p2>
				<b>Description</b>
			</p2></td>
			<td>
			<p2>
				<b>Price (EUR)</b>
			</p2></td>
		</TR>
		<?php
			foreach ($drum_items as $di) {
				print '<TR>';
					print '<TD>';
						?>
						<a href="<?php echo base_url()?>index.php/drum/viewDrum/<?php print_r($di->getId())?>"><img src= "<?php echo base_url()?>assets/pics/drums/<?php print_r($di->getPicName())?>.jpg" width="210" height="160"></a>
						<?php
						print '</TD>';
						print '<TD>';
						?><a href="<?php echo base_url()?>index.php/drum/viewDrum/<?php print_r($di->getId())?>"><?php print_r($di -> getName()); ?> </a><?php
						print '</TD>';
						print '<TD>';
						print_r($di -> getDescription());
						print '</TD>';
						print '<TD>';
						print_r($di -> getPrice());
						print '</TD>';
						print '<TD>';
						?>
							<?php

							// Create form and send values in 'shopping/add' function.
							echo form_open('cart/add');
							echo form_hidden('id', $di -> getId());
							echo form_hidden('name', $di -> getName());
							echo form_hidden('price', $di -> getPrice());
							echo form_hidden('type', $di -> getType());
							?> 
							<div id='add_button'>
							<?php
							if ($di -> getStock()!=null && $di -> getStock()>0){
								$btn = array('class' => 'btn btn-info', 'value' => 'Add to Cart', 'name' => 'action', 'onclick' => 'addedToCart()');
								echo form_submit($btn);
							}else {
								echo'<h4><font color="red"><b>NOT IN Stock</b></font></h4>';
							}
							echo form_close();
							?>
							</div>

						<?php
						print '</TD>';
						print '</TR>';
						
					}
		?>
	</table>
	

	<ul class="pagination"><?php
	foreach ($links as $link)
		echo '<li>' . $link . '<li>';
 ?></ul>
		
</div>