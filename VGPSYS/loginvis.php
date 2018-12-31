<html>
	<head>
		<title>User Login</title>
		<link rel="stylesheet" type="text/css" href="Design.css">
	
			<script type="text/javascript" src='js/showpass.js'></script>
		
	</head>
	
	<body class="uloginbody">
	<div class="uloginpage">
		<form id='myForm' method='POST' action='Login_Checkvis.php' class="loginform">
			<center>
			<img src="logo_vgps.jpg" width="100" height="100"><br><br>
			<input type="text" name="Uname" placeholder="Username" required class="uloginpass"></input>
			<input type="password" name="Pass" id="secret" placeholder="Password" required class="uloginpass"></input>
			<br><br>
			 <div class='labelpass'><input type="radio" id="radio1" name="radio1" value="on" onchange="ShowHide();">Show
            <input type="radio" id="radio2" name="radio1" value="off" onchange="ShowHide();" checked>Hide</div>
			<button id="sub" value="Log in" class="uloginsubmit">Submit</button>
			</center>
		<!--<span id="result"></span>-->
		</form></div>
		
		
			<!--<script type="text/javascript" src="jquery-1.8.1.min.js" ></script>
<script type="text/javascript" src="my_script.js" ></script>-->

	</body>
</html>