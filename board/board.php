
<html>
	<head>
		<title>留言板</title>
		<meta http-equiv="pragma" content="no-cache">
		<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	</head>
	<body>
		<nav>
			<div class="nav-wrapper">
			<a href="javascript: window.location.reload();" class="brand-logo center">留言板</a>
		<ul id="nav-mobile" class="left hide-on-med-and-down">
			<li><a href="../index.html">首頁</a></li>
			<li><a href="../content/login.html">班級登入系統</a></li>
			<li class="active"><a href="../board/board.php">留言板</a></li>
			<li><a href="../content/test.html">測試用</a></li>
		</ul>
			</div>
		</nav>
		<div style="padding-top:15px;padding-left:10px;">
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
		</div>
	</body>
</html>