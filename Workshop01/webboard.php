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
    <?php
    	session_start();
        if($_SESSION['login']!="")
        {
        
        }else
        {
 echo "<script>alert('Please login');location.href='login.php';</script>";
        }
    ?>
		<h1><?php echo "สวัดดีคุณ".$_SESSION['login'];?><br>Webboard</h1>
	</div>
	<div data-role="content">	
		<ul data-role="listview" data-inset="true" data-theme="d" data-divider-theme="e">
         <li data-role="list-divider">หัวข้อข่าว</li>
          <?php
          $con  = mysql_connect("localhost","root","")or die(mysql_error("ssssss"));
          $db = mysql_select_db("webbord");
          $str = "SELECT * FROM topic ";
          
          $query = mysql_query($str)or die(mysql_error());
          while($Result = mysql_fetch_array($query))
          {
          ?>
     <li><a href="detail.php?topic_id=<?php echo $Result["topic_id"];?>"><?php echo "เรื่อง&nbsp;&nbsp;&nbsp;".$Result["title"];?><span class="ui-li-count">
    </span></a></li>
		  <?php
          }
          ?>
		</ul>		
	</div>
	<div data-role="footer" data-theme="b">
		<h4>Webboard</h4>
	</div>
</div>g



</body>
</html>