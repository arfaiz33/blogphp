<?php session_start(); 
	if(count($_POST)<1){
		echo '<script>window.location.href="../";</script>';
	}
	
	if(file_exists("./".$_POST["judul"].".post")){
	echo '<script>
	var lanjut = confirm("The file is already exists, are you sure to edit it?");
	if(!lanjut){
		window.history.back();
	}
	</script>';
	}

?>

<?php
		date_default_timezone_set("Asia/Jakarta");
		$cont = unserialize(file_get_contents("./contents.zer"));
		if(in_array($_POST["judul"],$cont)){
			echo "ada";
			$arr = array_search($_POST["judul"],$cont);
			unset($cont[$arr]);
			array_values($cont);
		}
		$cont[]=$_POST["judul"];
		$waktu = date("h:i a, d M Y");
		file_put_contents("./contents.zer",serialize($cont));	
		$isi = array("judul"=>$_POST["judul"],"waktu"=>$waktu,"isi"=>$_POST["isi"]);
		file_put_contents($_POST["judul"].".post",serialize($isi));	
?>

<script>
	window.location.href="./";
</script>