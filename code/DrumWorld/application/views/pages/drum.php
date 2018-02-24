<div class="container" align="center">
	<h1> DRUM PAGE </h1>
	<BR>
		<?php 
			foreach($drum_items as $di){
				echo '<b>Name</b> : ';
				print_r( $di->getName());
				echo "<br/>";
			}
		?>
	<BR>
	<p>
		<b>Consumer's Opinion</b>
	</p>
	<BR>

	<div style="width:400px; border:1px solid #632415; background-color: #2aabd2; padding:5px;">
		<b> Leave a Comment:</b>
		<hr size="1">
		<form action="add_comment.php" method="POST">
			<b>Name:</b>
			<input type="text" name="user_name">
			<br>
			<b>Email:</b>
			<input type="text" name="email">
			<br>
			<br>
			<b>Comment:</b>
			<br>
			<textarea name="comment" cols="40"></textarea>
			<br>
			<br>
			<input type = "hidden" name = "category" value = "Drums">
			<center>
				<input type="submit" class = "btn btn-danger"value="Comment">
			</center>
		</form>
	</div>
	<BR>
</div>