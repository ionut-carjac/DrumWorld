<div class="container" color="white">
	<div align ="center">
		<h1><?php echo $drum_item->getName()?></h1>
		</br>
		<img src= "<?php echo base_url()?>assets/pics/drums/<?php print_r($drum_item->getPicName())?>.jpg" width="410" height="360">
		</br>
		</br>
		<div align = "right">
			<b><h2><?php echo $drum_item->getPrice()?></b>  EUR</h2> 
			<?php

							// Create form and send values in 'shopping/add' function.
							echo form_open('cart/addToCart');
							echo form_hidden('id', $drum_item -> getId());
							echo form_hidden('name', $drum_item -> getName());
							echo form_hidden('price', $drum_item -> getPrice());
							echo form_hidden('type', $drum_item -> getType());
							?> 
							<div id='add_button'>
							<?php
							$btn = array('class' => 'btn btn-info', 'value' => 'Add to Cart', 'name' => 'action', 'onclick' => 'addedToCart()');

							// Submit Button.
							echo form_submit($btn);
							echo form_close();
							?>
							</div>  
		</div>
		<h3><?php echo $drum_item->getDescription()?></h3>
		</br>
	
	</div>
	
</div>