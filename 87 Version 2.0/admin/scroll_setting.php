<html>
<head>
	<link rel="shortcut icon" href="../img/icon.ico">
	<link rel="bookmark" href="../img/icon.ico">
	<link rel="stylesheet" href="style/style.css">
	<meta charset="utf-8">
	<title>主页与附属页上方滚动字的设置</title>
</head>
<body>
	<h1 class="_87">87h87g87g小站 管理员管理系统|<a href="index.php">回到登录界面</a>|</h1>
	<h1>主页与附属页上方滚动字的设置</h1>
	<hr>
	<?php
		$value_submit="应用";
		$name="wz";
		$name2="sd";
		$type1="text";
		$type2="number";
		$type3="submit";
		$action="set_scroll.php";
		$method="post";
		$wz_file=fopen("../php_private_files/scroll_wz.txt.utf-8","r");
		$sd_file=fopen("../php_private_files/scroll_sd.txt.utf-8","r");
		$wz=fgets($wz_file);
		$sd=fgets($sd_file);
		echo "<form action=".$action." method=".$method.">";
     	echo "<p></p>滚动字文字<input type=".$type1." name=".$name." size="."100"." value=".$wz.">";
		echo "<br>";
     	echo "<p></p>滚动字速度<input type=".$type2." name=".$name2." min=1 value=".$sd.">";
		echo "<br>";
     	echo "<p></p><input type=".$type3." value=".$value_submit.">";
		echo "</form>";
	?>
	<hr>
	<marquee scrollamount="2">87h87g78g小站 三级的蒟蒻 the  three level `s konnyaku   版权所有All rights reserved©2018-2019</marquee>
</body>
</html>