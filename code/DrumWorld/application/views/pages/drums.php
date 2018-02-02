	
<div class = "col-md-9">
	
			<div align="RIGHT">
				<span>Order List by</span> 
		
				<form action="drums.php" method = "POST">
					<select name="orderBy">
						<option value = "Price Asc"> Price in asceding order </option>
						<option value = "Price Desc"> Price in desceding order </option>
						<option value = "Name Asc"> Name in alphabetical order </option>
						<option value = "Name Desc"> Name in desceding order </option>
					</select>	
					<input type ="submit" value="select">
				</form>	
			</div>
	
	<table class ="table table-striped">
			
		<tr>
			<td>
				<p2><b>Picture</b></p2>
			</td>
			<td>		
				<p2><b>Name</b></p2>
			</td>
			<td>
				<p2><b>Description</b></p2>
			</td>
			<td>
				<p2><b>Price (EUR)</b></p2>
			</td>
		</tr>
		
		
			<?php
			if (!isset($_POST["orderBy"])) {
				$_POST["orderBy"] = "Name ASC";
			}
			$orderBy = $_POST["orderBy"];
			
			
				if (!isset($_REQUEST['page'])){
					$_REQUEST['page'] = "undifine";
				}
				
				$perpage = 5;
				$links = $html = "";
				$startat = $_REQUEST['page'] * $perpage;
				
				$q = mysql_query("select count(DrumId) from drums");
				$row = mysql_fetch_array($q);
				$pages = ($row[0] + $perpage - 1) / $perpage;
			
					$sql = "SELECT DrumId, Name, Description, Price
							FROM drums
							ORDER BY ".$orderBy."
							LIMIT $startat,$perpage";
					$resource = mysql_query($sql);
								
					while ($row = mysql_fetch_array($resource))
					{
						$id_drum=$row['DrumId'];
						$_SESSION['DrumId'] = $id_drum;
						print'<tr>';
							print'<td>';
								print'<a href="drum.php?id_drum='.$row['DrumId'].'"><img src= "pics/drums/'.$id_drum.'.jpg" width="150" height="110"></a>'; 
							print'</td>';	
							print'<td>';
								print '<a href="drum.php?id_drum='.$row['DrumId'].'">'.$row['Name'].'</a>';
							print'</td>';
							print'<td>';	
								print '<p><b>'.$row['Description'].'</b></p>'; 
							print'</td>';
							print'<td>';	
								print '<p><b>'.$row['Price'].'</b></p>'; 
							print'</td>';
						print'</tr>';	
					}
					
			
			?>
	</table>
	
<?php
					print '<div align = "CENTER">';
						for ($k=0; $k<$pages; $k++) {
							if ($k != $_REQUEST['page']) {
								$links .= " <li><a href=?page=".$k.">".($k+1)."</a></li>";
							} else {
								$links .= " <li class='active'><a href='#'>".($k+1)."</a></li>";
							}
						}
					print '<ul class="pagination">'.$links.'</ul>';
					print '</div>';
					
?>		