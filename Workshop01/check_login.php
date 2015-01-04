<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<title>jQuery Mobile Web App</title>
<link href="jquery-mobile/jquery.mobile.theme-1.0.min.css" rel="stylesheet" type="text/css"/>
<link href="jquery-mobile/jquery.mobile.structure-1.0.min.css" rel="stylesheet" type="text/css"/>
<script src="jquery-mobile/jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="jquery-mobile/jquery.mobile-1.0.min.js" type="text/javascript"></script>
</head> 
<body> 

<div data-role="page" id="page">
	<div data-role="header" data-theme="b">
		<h1>Check login</h1>
	</div>
		<?php
    	session_start();
    	if($_POST['txtUser']=="pathapong" && $_POST['txtPassword']=="1234"){
        $_SESSION['login'] = $_POST['txtUser'];
		
        	echo "<br><br><br><center>สวัดดีคุณ".$_SESSION['login'];
         
         
        }else{
        	echo "ชื่อ แล้วข้อมูลไม่ถูกต้องครับ";
            header("Refresh:4;login.php");
        }
   ?>
      <a href="webboard.php" data-role="button" >เข้าสู่หน้าเว็บบรอด์</a>
</div>

</body>
</html>