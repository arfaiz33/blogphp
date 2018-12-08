<?php
	session_start();
	if(count($_SESSION)<0||$_SESSION["admin"]!=TRUE){
		echo '<script>window.location.href="../../";</script>';
	}
?>

<script>
	var lanjut = confirm("Are you sure want to delete it?");
	if(!lanjut){
		window.history.back();
	}
</script>

<?php
	$cont = unserialize(file_get_contents("./contents.zer"));
	$isi = array_search($_GET["t"],$cont);
	unset($cont[$isi]);
	array_values($cont);
	file_put_contents("./contents.zer",serialize($cont));
	unlink("./".$_GET["t"].".post");
?>

<script>
	window.location.href="./";
</script>