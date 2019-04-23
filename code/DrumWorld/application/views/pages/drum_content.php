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

							echo form_open('cart/addToCart');
							echo form_hidden('id', $drum_item -> getId());
							echo form_hidden('name', $drum_item -> getName());
							echo form_hidden('price', $drum_item -> getPrice());
							echo form_hidden('type', $drum_item -> getType());
							?> 
							<div id='add_button'>
							<?php
							$btn = array('class' => 'btn btn-info', 'value' => 'Add to Cart', 'name' => 'action', 'href' => 'echo base_url().index.php/cart/view/');
							if ($drum_item->getStock()==null || $drum_item->getStock()==0){
								echo'<h2><font color="red"><b>Out Of Stock</b></font></h2>';
								echo "<span id='go_back'><a class='fg-button teal' href=" . base_url() . "index.php/drum/view>Go Back</a></span>";
							}else{
								echo"<h2><font color='green'>In Stock:<b>".$drum_item->getStock()."</b></font></h2>";
								echo form_submit($btn);
							}
							
							echo form_close();
							?>
							</div>  
		</div>
		<h3><?php echo $drum_item->getDescription()?></h3>
		</br>
	
	</div>
	
</div>