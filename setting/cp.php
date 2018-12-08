<?php
	session_start();
	if(count($_SESSION)<0||$_SESSION["admin"]!=TRUE){
		echo '<script>window.location.href="../../";</script>';
	}
?>

<html>

	<head>
		<title>Change Account Info - BloGIN Setting</title>
	</head>
	
	<body>
		<center><h1>Change Password</h1></center>
		<br/>
		<?php
			if($_SESSION["wrpw"]===TRUE){
				echo '<center>Wrong Old Username or Password!</center>';
				unset($_SESSION["wrpw"]);
			}
		?>
		<hr/><br/>
		<form action="./cp2.php" method="post">
			<center>
			Old Username :
			<br/>
			<input type="text" name="ousr" required="required"/>
			<br/>
			Old Password :
			<br/>
			<input type="password" name="opw" required="required"/>
			<br/><hr/>
			New Username :
			<br/>
			<input type="text" name="nusr" required="required"/>
			<br/>
			New Password :
			<br/>
			<input type="password" name="npw" required="required"/>
			<br/><br/>
			<input type="submit" value="Change"/>
			</center>
		</form>
		<br/>
		<center><button onclick="window.history.back()">Cancel</button></center>
	</body>

</html>