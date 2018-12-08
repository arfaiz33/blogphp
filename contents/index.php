<?php
	session_start();
	if(count($_SESSION)<0||$_SESSION["admin"]!=TRUE){
		echo '<script>window.location.href="../../";</script>';
	}
?>

<html>

	<head>
		<title>Contents - BloGIN</title>
		<link rel="stylesheet" href="../blogin.css"/>
	</head>

	<body>

		<center><img src="../blogin.png"></img></center>

		<div id="main_">
			<center><h3> Contents </h3></center>
			<a href="../admin.php"><button id="b_wide"><b>Back to Menu</b></button></a>
			<a href="./add.php"><button id="b_wide"><b>Add Content</b></button></a>
			<br/><br/>

			<?php
				$isi = file_get_contents("./contents.zer");
				$isi = unserialize($isi);
				$isi = array_reverse($isi);
				for($i=0;$i<count($isi);$i++){
					echo '<div id="con_sel">';
					echo $isi[$i];
					echo '<a href="./delete.php?t='.$isi[$i].'"><button id="delb">Delete</button></a>';
					echo "</div>";
				}
			?>

		</div>
	</body>

</html>
