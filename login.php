<?php

include("config.php");

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		// username and password sent from Form 
		$myusername=$_POST['username']; 
		$mypassword=$_POST['password']; 
	
		$sql = "SELECT * FROM SELLER WHERE username='$myusername' and passcode='$mypassword'";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result) or die($result."<br/><br/>".mysql_error());;
		$count=mysql_num_rows($result);
	

	if($row["username"]==$myusername && $row["passcode"]==$mypassword) {
    	echo"You are a validated user.";
		$_SESSION["login_user"] = $myusername;
		$_SESSION["user_id"] = $row["id"];
		header("location: listSeller.php");
	} else {
    	echo"Sorry, your credentials are not valid, Please try again.";
	
	}
		// If result matched $myusername and $mypassword, table row must be 1 row
		// if($count==1) {
// 			
		// } else {
			// $error="Your Login Name or Password is invalid";
		// }
	}
?>

	<form action="" method="post">
		<label>Username :</label><input type="text" name="username"/><br />
		<label>Password :</label><input type="password" name="password"/><br/>
		<input type="submit" value=" Submit "/><br />
	</form>