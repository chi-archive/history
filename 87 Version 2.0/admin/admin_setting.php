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
	<h1 class="_87">87h87g87g小站 管理员管理系统|<a href="index.php">回到登录界面</a>|</h1>
	<hr>
	<?php
		$a_name=$_POST["name"];
		$a_pswd=$_POST["password"];
		$f_n=fopen("../php_private_files/admin_name.txt.utf-8","a+");
		$f_p=fopen("../php_private_files/admin_password.txt.utf-8","a+");
		if(fwrite($f_n,$a_name)&&fwrite($f_p,$a_pswd)){
			echo "添加".$a_name."成功！";
		} else {
			echo "添加失败，请再试一次，如果还不行，请联系站长:站长QQ:2104837674"; 
		}
	?>
	<hr>
	<marquee scrollamount="2">87h87g78g小站 三级的蒟蒻 the  three level `s konnyaku   版权所有All rights reserved©2018-2019</marquee>
</body>
</html>