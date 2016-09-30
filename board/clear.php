<?php
	$pwd=$_GET["pwd"];
	if($pwd=="clear"){
		$f=fopen("board.txt","w");
		fwrite($f,"");
		$f=fopen("ip.txt","w");
		fwrite($f,"");
	}
	echo "<script>window.location.href=\"board.php\";</script>";
?>