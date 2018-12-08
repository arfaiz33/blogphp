<?php
	session_start();
	if(count($_SESSION)<0||$_SESSION["admin"]!=TRUE){
		echo '<script>window.location.href="../";</script>';
	}
?>

<html>

	<head>
		<title>Admin Page</title>
		<link rel="stylesheet" href="./blogin.css"/>
	</head>

	<body>
		<center><img src="./blogin.png"></img></center>

		<div id="main_">
			<center><h3> BloGIN Admin Page </h3></center>
			<a href="./contents/"><button id="menu_b"><b>CONTENTS<b></button></a>
			<a href="./contents/add.php"><button id="menu_b"><b>ADD CONTENT</b></button></a>
			<a href="./setting/"><button id="menu_b"><b>SETTING</b></button></a>
			<a href="./logout.php"><button id="menu_b"><b>LOGOUT</b></button></a>
		</div>
	</body>

</html>
