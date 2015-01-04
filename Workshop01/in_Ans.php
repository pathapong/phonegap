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
<?php 
	session_start();
	if($_SESSION['login']!="")
	{
	}else
	{
	}
?>
<div data-role="page" id="page">
	<div data-role="header">
		<h1>Page One</h1>
	</div>
	<div data-role="content">	
		<?php
        	$con =  mysql_connect("localhost","root","");
			$db  = mysql_select_db("webbord");
			$str = "INSERT INTO reply";
			$str .="(topic_id,message,name,date_reply,ip)";
			$str .="VALUES";
			$str .="('".$_GET['topic_id']."','".$_POST['msg']."','".$_SESSION['login']."','".$_POST['day']."','".$_POST['ip']."')"; 
				$query = mysql_query($str);
				
				if($query)
				{
					echo "Save";
				}
				else{
					echo "Error";
				}
			mysql_close($con);
        ?>		
	</div>
	<div data-role="footer">
		<h4>Page Footer</h4>
	</div>
</div>




</body>
</html>