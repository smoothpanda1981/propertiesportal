<html>
	<?php
		include 'header.php';	
	?>

	<body>
		<?php
			session_start();
			if (isset($_SESSION["login_user"])) {
				echo "Welcome";
			} else {
				include 'login.php';	
					
			}
		?>	
		
	</body>	
	
	<?php
		include 'footer.php';
	?>
</html>