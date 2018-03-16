<div class="container" color="white">
	<div align ="center">
		<h1><?php echo $drum_item->getName()?></h1>
		</br>
		<img src= "<?php echo base_url()?>assets/pics/drums/<?php print_r($drum_item->getPicName())?>.jpg" width="410" height="360">
		</br>
		</br>
		<div align = "right">
			<b><h2><?php echo $drum_item->getPrice()?></b>  EUR</h2> <input type="button" value="Add to Cart">  
		</div>
		<h3><?php echo $drum_item->getDescription()?></h3>
		</br>
	
	</div>
	
</div>