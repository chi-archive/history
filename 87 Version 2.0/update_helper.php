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
	<h1 class="_87"><a href="index.php">87h87g78g小站</a></h1>
	<hr>
	<?php
	    $file=fopen("php_private_files/yj.txt.utf-8","a+");
		$name=$_POST["name"];
	    $yj=$_POST["yj"];
		if($name===""||$yj===""){
			echo "输入为空!请再试一次。*.*";
		} else {
			$str=$name.":".$yj;
	    	$str2=$str."\r\n";
			if(fwrite($file,$str2))
			echo "感谢您的反馈，我们一定尽快升级完毕:-)";
		} 
	?>
	<hr>
	<p>87h87g78g小站 三级的蒟蒻 the  three level `s konnyaku   版权所有All rights reserved©2018-2019</p>
</body>
</html>