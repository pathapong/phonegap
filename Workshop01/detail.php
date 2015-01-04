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
            	
            }else{
            
     echo "<script>alert('Please login');location.href='login.php';</script>";
            }
            
            
        ?>
		<h1><?php echo "สวัดดีคุณ &nbsp;".$_SESSION['login']; ?><br>Webboard</h1>
	</div>
	
		<?php
			$con = mysql_connect("localhost","root","");
			$db = mysql_select_db("webbord");
			$str = "SELECT * FROM topic,reply Where topic.topic_id = reply.topic_id AND topic.topic_id = '".$_GET["topic_id"]."'";
			
			$query = mysql_query($str);
			 while($Result = mysql_fetch_array($query))
          {
		?>
        	<div data-role="content" class="ui-body-c">
            	
            	<ul data-role="listview" data-inset="true" data-theme="b" data-divider-theme="b">
                <li data-role="list-divider">
                <p align="right"><a href="Ans.php?topic_id=<?php  echo $Result["topic_id"];?>">ตอบ</a></p>
            <h3><?php echo "รายละเอียด&nbsp;". $Result["details"];?><br><?php echo "ไอพีของผู้โพส &nbsp;&nbsp;".$Result['ip1'];?><br>
            <?php echo "ชื่อผู้โพส&nbsp;&nbsp;".$Result['name_post'];?></h3>
          
         		
            </li>
            
            <li data-role="navbar">
              <p><?php echo "ข้อความจากผู้ตอบ&nbsp;&nbsp;". $Result["message"];?><br><?php echo "ไอพีของผู้ตอบ". $Result['ip']?><br><?php echo "ชื่อผู้ตอบ &nbsp;&nbsp;".$Result['name']; ?></p>	
            </li>
            <?php
            }
			?>
            </ul>
	</div>

	<div data-role="footer" data-theme="b">
		<h4>Webboard</h4>
	</div>
</div>

</body>
</html>