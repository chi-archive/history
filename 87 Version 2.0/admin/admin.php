<html>
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="../img/icon.ico">
<link rel="bookmark" href="../img/icon.ico">
<link rel="stylesheet" href="style/style.css">
<title>87h87g78g小站-Admin</title>
</head>
<body>
	<h1 class="_87">87h87g78g小站 管理员管理系统</h1>
	<?php
		$admin_username=$_POST["name"];
		$admin_password=$_POST["password"];
		$get_username=fopen("../php_private_files/admin_name.txt.utf-8","r");
		$get_password=fopen("../php_private_files/admin_password.txt.utf-8","r");
		while(!feof($get_username)){
			$username=fgets($get_username);
			$password=fgets($get_password);
			if ($username===$admin_username&&$password===$admin_password) {
  				$isAdmin=1;
				break;
    		} else {
				$isAdmin=0;	
			}
		}
		if ($isAdmin) {
			echo"<h1>欢迎,".$admin_username."！</h1>";
    	} else {
			echo "<h1>账号或密码错误，请退回重试！</h1>";
		}
		$show_yj_href="show_yj.php";
		$scroll_setting_href="scroll_setting.php";
		$add_admin_href="add_admin.php";
		if($isAdmin===1){
			echo "<h1>".$admin_username."，您好！您可以选择:</h1>";
			echo "<h1><a href=".$show_yj_href.">查看关于87h87g78g小站升级的意见</a></h1>";
			echo "<h1><a href=".$scroll_setting_href.">主页与附属页上方滚动字的设置</a></h1>";
			echo "<h1><a href=".$add_admin_href.">添加管理员账户</a></h1>";
		}
	?>
	<hr>
	<marquee scrollamount="2">87h87g78g小站 三级的蒟蒻 the  three level `s konnyaku   版权所有All rights reserved©2018-2019</marquee>
</body>
</html>