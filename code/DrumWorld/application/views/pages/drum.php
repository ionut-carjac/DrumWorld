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
						<a href="http://www.tama.com"><img src= "<?php echo base_url()?>assets/pics/drums/<?php print_r($di->getPicName())?>.jpg" width="210" height="160"></a>
						<?php
					print '</TD>';
					print '<TD>';
						print_r($di -> getName());
					print '</TD>';
					print '<TD>';
						print_r($di->getDescription());
					print '</TD>';
					print '<TD>';
						print_r($di -> getPrice());
					print '</TD>';
					print '<TD>';
						?><input type="button" value="Add to Cart"><?php
					print '</TD>';
				print '</TR>';
			}
		?>
	</table>
	<p><?php echo $links; ?></p>
</div>