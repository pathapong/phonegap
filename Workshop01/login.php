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

<div id="page" data-role="page" data-theme="b">
	<div data-role="header" data-theme="b">
		<h1>Login</h1>
	</div>
    <br>
    <br>
    <br>
	<div data-role="content"data-theme="b">
    <form action="check_login.php" method ="post"	>
    Username:<input type="text" name="txtUser">
    Password:<input type="password" name="txtPassword">
    <br>
    <input type="submit" value="login">
    
    </form>
				
	</div>
    <br>
    <br>
	<div data-role="footer" data-theme="b"	>
		<h4>Webbord</h4>
	</div>
</div>
<div data-role="page" id="page4">
	<div data-role="header">
		<h1>Page Four</h1>
	</div>
	<div data-role="content">	
		Content		
	</div>
	<div data-role="footer" data-theme="b">
		<h4>Page Footer</h4>
	</div>
</div>

</body>
</html>