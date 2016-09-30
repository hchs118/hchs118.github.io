<?php
	if(!empty($_SERVER['HTTP_CLIENT_IP'])){
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	}else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	}else{
		$ip= $_SERVER['REMOTE_ADDR'];
	}
	date_default_timezone_set('Asia/Taipei');
	$msg=$_GET["name"].": ".$_GET["msg"]."              ". date("Y/m/d ") . date("h:i:s (a)");
	$f = fopen('board.txt','a');
	fwrite($f,$msg."\n");
	$msg=$msg." ip=".$ip;
	$f = fopen('ip.txt','a');
	fwrite($f,$msg."\n");
	echo "<script>window.location.href=\"board.php\";</script>";
?>