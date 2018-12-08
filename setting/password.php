<?php
	session_start();
	if(count($_SESSION)<0||$_SESSION["admin"]!=TRUE){
		echo '<script>window.location.href="../../";</script>';
	}
?>

<html>

	<head>
		<title>Password - BloGIN</title>
	</head>
	
	<body>
		<?php
			$sec = unserialize(file_get_contents("../lol.zer"));
		?>
		
		Username :
		<br/>
		<pre>
		<?php echo $sec["username"]; ?>
		</pre>
		<br/>
		Password :
		<br/>
		<pre>
		<?php echo $sec["password"]; ?>
		</pre>
	</body>

</html>