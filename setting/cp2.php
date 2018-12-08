<?php
	session_start();
	if(count($_SESSION)<0||$_SESSION["admin"]!=TRUE){
		echo '<script>window.location.href="../../";</script>';
	}

	if(count($_POST)<1){
		echo '<script>window.location.href="../";</script>';
	}
	
	$old = unserialize(file_get_contents("../lol.zer"));
	if(password_verify($_POST["ousr"],$old["username"])&&password_verify($_POST["opw"],$old["password"])){
		}else{
		$_SESSION["wrpw"]=TRUE;
		echo '<script>window.location.href="./cp.php";</script>';
	}

	$usr = password_hash($_POST[nusr],PASSWORD_DEFAULT);
	$pw = password_hash($_POST[npw],PASSWORD_DEFAULT);
	$sec = array("username"=>$usr,"password"=>$pw);
	$wut = serialize($sec);
	file_put_contents("../lol.zer",$wut);
?>

<script>
window.location.href="./";
</script>