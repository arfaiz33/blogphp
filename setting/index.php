<?php
	session_start();
	if(count($_SESSION)<0||$_SESSION["admin"]!=TRUE){
		echo '<script>window.location.href="../../";</script>';
	}
?>

<html>

	<head>
		<title>Setting - BloGIN</title>
		<link rel="stylesheet" href="../blogin.css"/>
	</head>
	
	<body>
		
		<center><img src="../blogin.png"></img></center>
		
		<div id="main_">
			<center><h3> BloGIN Admin Page </h3></center>
			<a href="./cp.php"><button id="menu_b"><b>Change Password<b></button></a>
			<a href="../admin.php"><button id="menu_b"><b>BACK</b></button></a>
		</div>
	</body>

</html>