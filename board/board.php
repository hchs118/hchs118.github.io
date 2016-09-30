
<html>
	<head>
		<title>留言板</title>
		<meta http-equiv="pragma" content="no-cache">
		<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	</head>
	<body style="padding-top:15px;padding-left:10px;">
		<form action="write.php" method="POST">
			<input required name="name" placeholder="名字" style="width:50%;"></input><br>
			<input required name="msg" placeholder="訊息" style="width:50%;"></input><br>
			<input class="btn" name="留言" value="留言" type="submit"></input>
		</form>
		<script src="jq.js"></script>
		<div class="row">
			<div class="col s12 m6">
				<div  class="card green accent-4">
					<div id="box" class="card-content white-text">
						<?php
							date_default_timezone_set('Asia/Taipei');
							echo "現在時間 ". date("Y/m/d ") . date("h:i:s (a)") . "<br>";
						?>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col s12 m6">
				<div class="card orange lighten-4">
					<div id="box" class="card-content">
						<?php
							$f = fopen("board.txt","r");
							while(!feof($f)){
								echo fgets($f)."<br>";
							}
							fclose($f);
						?>
					</div>
				</div>
			</div>
		</div>
		<button class="btn" onclick="window.location.href=&quot;../&quot;;">回首頁</button>
		<button class="btn" onclick="window.location.reload();">重新整理</button>
	</body>
</html>