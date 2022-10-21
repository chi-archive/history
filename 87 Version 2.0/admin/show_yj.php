<html>
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="../img/icon.ico">
<link rel="bookmark" href="../img/icon.ico">
<link rel="stylesheet" href="style/style.css">
<title>显示建站的意见</title>
</head>
<body>
	<h1 class="_87">87h87g87g小站 管理员管理系统|<a href="index.php">回到登录界面</a>|</h1>
	<h1>显示建站的意见</h1>
	<hr>
	<?php
		$file=fopen("../php_private_files/yj.txt.utf-8","r") or exit("没有内容!");
		if(feof($file)){
			echo "<h1>没有内容。</h1>";
		} else {
			while(!feof($file)){
				echo "<h1>".fgets($file)."</h1>";
			}
		}
	?>
	<hr>
	<marquee scrollamount="2">87h87g78g小站 三级的蒟蒻 the  three level `s konnyaku   版权所有All rights reserved©2018-2019</marquee>
</body>
</html>