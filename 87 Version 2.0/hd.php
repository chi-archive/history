<html>
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="img/icon.ico">
<link rel="bookmark" href="img/icon.ico">
<link rel="stylesheet" href="style/style.css">
<title>87h87g78g小站</title>
</head>
<body>
	<!--[if lte IE 9]>
<p style="color:red">您正在使用的是IE8及以下浏览器！<strong>可能会影响您的浏览体验，请您更新浏览器！<strong></p>
    <![endif]-->
	<h1 class="_87"><a href="index1.php">87h87g78g小站</a>|<a href="hd.php">活动</a>|<a href="faq.php">FAQ</a>|<a href="bbs/">论坛</a>|<a href="download/">下载站</a></h1>

	<?php
		$get_wz=fopen("php_private_files/scroll_wz.txt.utf-8","r");
		$get_sd=fopen("php_private_files/scroll_sd.txt.utf-8","r");
		echo "<marquee scrollamount=".fgets($get_sd).">".fgets($get_wz)."</marquee>";
	?>
	<hr>
	<p align="center">87h87g78g小站 三级的蒟蒻 the  three level `s konnyaku   版权所有All rights reserved©2018-2019</p>
	<p align="center"><a href="http://beta.gzcmw.com">朋友的β站</a>|<a href="admin/">后台登录</a>|<a href="http://wpa.qq.com/msgrd?v=3&uin=2104837674&site=qq&menu=yes" target="_blank">联系我们</a></p>
</body>
</html>