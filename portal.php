<html>
	<?php
		session_start();
		$_SESSION = array();
		include 'header.php';	
	?>

	<body>
		<a href="">
			<input type="button" name="Buyer" value="Buyer" />
		</a>
	
		<a href="listSeller.php">
			<input type="button" name="Seller" value="Seller"/>
		</a>
	</body>	
	
	<?php
		include 'footer.php';
	?>
</html>