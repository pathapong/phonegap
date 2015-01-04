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
		<h1>ตอบกระทุ้ง</h1>
	</div>
	<div data-role="content" data-theme="c">
    	<?php 
		session_start();
		if($_SESSION['login']!="")
		{
		}else{
			
		}
        ?>
        
			<form method="post" action="in_Ans.php?topic_id=<?php  echo $_GET["topic_id"];?>">
            <label for="msg">ข้อความ</label>
            <textarea name="msg" id="msg"></textarea>
            <label for="name">ชื่อผู้ตอบ</label>
 <input  name="name" id="name" value="<?php echo $_SESSION['login']; ?>">
 <label for="name">วัน</label>
 <input type="date" name="day" id="bday">

  <label for="ip">ip เครื่อง</label>
 <input type="text" name="ip" id="ip">
 	<center><input type="submit" data-inline="true" value="บันทึกข้อมูล">
            </form>
	</div>
	<div data-role="footer" data-theme="b">
		<h4>Webboard</h4>
	</div>
</div>




</body>
</html>