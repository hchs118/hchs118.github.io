
<html>
	<head>
		<title>留言板</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	</head>
	<body>
		<form action="write.php" method="GET">
			<input required name="name" placeholder="名字"></input><br>
			<input required name="msg" placeholder="訊息"></input><br>
			<input class="btn" name="留言" type="submit"></input>
		</form>
		<script src="jq.js"></script>
		<div>
			<?php
				date_default_timezone_set('Asia/Taipei');
				echo "現在時間 ". date("Y/m/d ") . date("h:i:s (a)") . "<br>";
			?>
		</div>
		<div id="box" style="border-style: solid;">
			<?php
				$f = fopen("board.txt","r");
				while(!feof($f)){
					echo fgets($f)."<br>";
				}
			?>
		</div>
		<button onclick="window.location.href=&quot;../&quot;;">回首頁</button>
	</body>
</html>