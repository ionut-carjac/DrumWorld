<div class="col-md-9">
	
	<?php
		// $id_drum=$_GET['id_drum'];
		// $sqlDrum = "SELECT DrumId, Name, Description, Price
	            // FROM drums
				// WHERE DrumId = ".$id_drum.";";
	    // $resourceDrum = mysql_query($sqlDrum);
		// $rowDrum = mysql_fetch_array($resourceDrum);
		// $id_drum = $rowDrum['DrumId'];
// 		
// 		
		// print'<img src= "pics/drums/'.$id_drum.'.jpg" width="450" height="330">';	
		// print ' <h2> '.$rowDrum['Price'].' <p2>EUR</p2></h2>';

	?>
	
	
	<!-- <form action="cart.php?action=add" method="POST">
		<input type = "hidden" name="id_drum" value="<?php print $rowDrum['DrumId'];?>">
		<input type = "hidden" name="nameDrum" value="<?php print $rowDrum['Name'];?>">
		<input type = "hidden" name="priceDrum" value="<?php print $rowDrum['Price'];?>">
		<input type = "hidden" name="sales" value="<?php print $rowDrum['Sales'];?>">
		<input type="submit" class="btn btn-primary" value="Add to Cart  !">
	</form>
	
	
	<?php	
		print'<p><b>'.$rowDrum['Name'].'</p></b>';
		print '<p>'.$rowDrum['Description'].'</p>'; 
	?>	 -->

<BR>
<BR>
<p><b>Consumer's Opinion</b></p>	
<?php
	// $sqlComments = "SELECT *
	                  // FROM comments
					  // WHERE id_product=".$id_drum." and category = 'Drums' ";
	// $resourceComments = mysql_query($sqlComments);
	// while ($row = mysql_fetch_array($resourceComments))
		// {
			// print'<div style="width:400px; 
			                 // border: 1px solid #632415;
							 // background-color: #2aabd2;
							 // padding:5px">
				// <a href = "mailto:'.$row['email'].'">'.$row['user_name'].'</a>
                // <br>'.$row['comment'].'
				   // </div>';
		// }
?>
<br>
<div style="width:400px; border:1px solid #632415; background-color: #2aabd2; padding:5px;">
	<b> Leave a Comment:</b>
	<hr size="1">

	<form action="add_comment.php" method="POST">
		<b>Name:</b>  <input type="text" name="user_name"><br>
		<b>Email:</b> <input type="text" name="email"><br><br>
		<b>Comment:</b> <br>
	<textarea name="comment" cols="40"></textarea><br><br>
	<!-- <input type="hidden" name="id_product" value="<?php print $id_drum;?>"> -->
	<input type = "hidden" name = "category" value = "Drums">
	<center><input type="submit" class = "btn btn-danger"value="Comment"></center>
</form>
</div>