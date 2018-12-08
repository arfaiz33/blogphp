<?php
	session_start();
	if(count($_SESSION)<0||$_SESSION["admin"]!=TRUE){
		echo '<script>window.location.href="../../";</script>';
	}
?>

<html>

	<head>
		<title>Add Content  - BloGIN</title>
		<link rel="stylesheet" href="../blogin.css"/>
	</head>
	
	<body>
		<a onclick="window.history.back()">Back</a>
		<br/>
		<br/>
		
		<form action="./post.php" method="post" id="contentt">
			Title :
			<br/>
			<input type="text" name="judul" required/>
			<br/>
			Content :
			<br/>
			<textarea name="isi" form="contentt" required></textarea>
			<br/>
			<br/>
			<input type="submit" value="POST"/>
		</form>
	</body>

</html>