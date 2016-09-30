<?php
	if(!empty($_SERVER['HTTP_CLIENT_IP'])){
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	}else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	}else{
		$ip= $_SERVER['REMOTE_ADDR'];
	}
	date_default_timezone_set('Asia/Taipei');
	$msg=$_POST["name"].": <b>".$_POST["msg"]."</b>                  <font color=\"gray\">". date("Y/m/d ") . date("h:i:s (a)")."</font>";
	$f = fopen('board.txt','a');
	fwrite($f,$msg."\n");
	fclose($f);
	
	$msg=$msg." ip=".$ip;
	$f = fopen('ip.txt','a');
	fwrite($f,$msg."\n");
	fclose($f);
	sleep(1);
?>
<script>window.location.href="board.php";</script>