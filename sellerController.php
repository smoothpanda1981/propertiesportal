<?php

include("config.php");

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$current_user=$_SESSION["login_user"]; 
		
		$sql = "SELECT id FROM SELLER WHERE username='$myusername' and passcode='$mypassword'";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result) or die($result."<br/><br/>".mysql_error());;
		$count=mysql_num_rows($result);
	
	
		// If result matched $myusername and $mypassword, table row must be 1 row
		if($count==1) {
			$_SESSION["login_user"] = $myusername;
			header("location: seller.php");
		} else {
			$error="Your Login Name or Password is invalid";
		}
	}
?>