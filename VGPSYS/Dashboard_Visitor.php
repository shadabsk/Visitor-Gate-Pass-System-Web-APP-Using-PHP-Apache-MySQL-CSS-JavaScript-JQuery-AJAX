<!DOCTYPE html>
<?php require'connect.php'; 
session_start();
if(isset($_SESSION['user'])){}
else
	header('Location: http://localhost/VGPSYS/loginvis.php')
?>
<html>
	<head>
		<title>Incharge Dashboard</title>
		<link rel="stylesheet" type="text/css" href="Design.css">
	<script type="text/javascript" src="js/loadPage.js"></script>	
			<script type="text/javascript" src="js/changeDropDown.js"></script>
			<script type="text/javascript" src="js/remove.js"></script>
			<script type="text/javascript" src='js/showpass.js'></script>
			<script type="text/javascript" src="js/update.js"></script>	
 	
	<script type="text/javascript" src="js/checkUser.js"></script>	
		
	</head>
	
		
		
		
	</head>
	
	<body class="dashbody">
		<div class="dashright" id='anotherdiv'>
			<img src="Visitor_Welcome.jpg" height="740px" width="1166px">
		</div>
	
		<div class="dashleft">
			<div class="dashleftfont">
				<input type="button" value="Home" class="dashbutton "onclick=" load('anotherdiv', 'Dashhome_Visitor.php');"><br><hr class="dashhr">
				<input type="button" value="Entry Panel" class="dashbutton "onclick=" load('anotherdiv', 'Visitor_Entry.php');"><br><hr class="dashhr">
			
				
				<a href="Logout.php"><input type="button" value="Log Out" class="dashbutton" ><br><hr class="dashhr"></a>
			</div>
		</div>
	</body>
</html>