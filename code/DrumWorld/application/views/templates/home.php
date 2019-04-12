		<HTML>
	<HEAD>
		<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-2">

		<TITLE><?php echo ucfirst($title)?></TITLE>

		<LINK REL ="stylesheet" HREF="<?php echo base_url()?>assets/css/drum.css" TYPE="text/css">
		<LINK REL ="stylesheet" HREF="<?php echo base_url(); ?>assets/css/bootstrap/css/bootstrap.min.css" TYPE="text/css">
		<link REL="stylesheet" HREF="<?php echo base_url(); ?>assets/css/bootstrap/css/bootstrap-theme.css" TYPE="text/css">
		<script type="text/javascript">
		function clearCart() {
			var result = confirm('Are you sure want to clear all bookings?');

			if (result) {
				window.location = "<?php echo base_url(); ?>index.php/cart/remove/all";
			} else {
				return false; // cancel button
			}
		}
		</script>
		<script type="text/javascript">
			function addedToCart() {
				window.alert('Item added to Cart');
			}
		</script>

	</HEAD>

	<BODY bgcolor="#ffffff">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/css/bootstrap/js/bootstrap.min.js"></script>
		
		<div class="container" >
			<div align = "center" color = "white">
				<h1> Drum <img src="<?php echo base_url(); ?>assets/pics/logo/logo1.jpg" width="100" height= "70"> World </h1>
			</div>
			
		</div>

</BODY>
</HTML>	