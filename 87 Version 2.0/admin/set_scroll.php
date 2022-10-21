<html>
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="../img/icon.ico">
<link rel="bookmark" href="../img/icon.ico">
<link rel="stylesheet" href="style/style.css">
<title>滚动字预览</title>
</head>
<body>
	<h1 class="_87">87h87g87g小站 管理员管理系统|<a href="index.php">回到登录界面</a>|<a href="scroll_setting.php">回到设置界面</a>|</h1>
	<?php
		$wz=$_POST["wz"];
		$sd=$_POST["sd"];
		$wz_file=fopen("../php_private_files/scroll_wz.txt.utf-8","w");
		$sd_file=fopen("../php_private_files/scroll_sd.txt.utf-8","w");
		fwrite($wz_file,$wz);
		fwrite($sd_file,$sd);
		echo "<h1>滚动字预览</h1>";
		echo "<hr>";
		echo "<marquee scrollamount=".$sd.">".$wz."</marquee>";
	?>
	<hr>
	<marquee scrollamount="2">87h87g78g小站 三级的蒟蒻 the  three level `s konnyaku   版权所有All rights reserved©2018-2019</marquee>
</body>
</html>