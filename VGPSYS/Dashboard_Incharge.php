<!DOCTYPE html>
<?php require'connect.php'; 
session_start();
if(isset($_SESSION['user'])){}
else
	header('Location: http://localhost/VGPSYS/login.php')
?>
<html>
	<head>
		<title>Incharge Dashboard</title>
		<link rel="stylesheet" type="text/css" href="Design.css">
		
 <script src="jquery.js" type="text/JavaScript" language="javascript"></script>
        <script src="jquery.PrintArea.js" type="text/JavaScript" language="javascript"></script>	
		<script type="text/javascript" src="check_user.js"></script>
<script type="text/javascript" src="jqueryus.js"></script>	
<script type="text/javascript" src="check_user.js"></script>
<script type="text/javascript" src="js/loadPage.js"></script>	
			<script type="text/javascript" src="js/changeDropDown.js"></script>
			<script type="text/javascript" src="js/remove.js"></script>
			<script type="text/javascript" src='js/showpass.js'></script>
			<script type="text/javascript" src="js/update.js"></script>
	
		


		</script>
		
		<script type="text/javascript">
        <!--
		setTimeout(function(){
    document.getElementById('info-message').style.display = 'none';
  }, 2000);
  
$(document).ready(function(){
         $("#print_button2").click(function(){
            var mode = 'iframe'; // popup
            var close = mode == "popup";
            var options = { mode : mode, popClose : close};
            $("div.content").printArea( options );
        });
    });

                //-->
        </script>
		
		<script type="text/javascript" src="js/checkUser.js"></script>
	</head>
	
	<body class="dashbody">
		<div class="dashright" id='anotherdiv'>
			<img src="Incharge_welcome.jpg" height="740px" width="1166px">
		</div>
	
		<div class="dashleft">
			<div class="dashleftfont">
				<input type="button" value="Home" class="dashbutton "onclick=" load('anotherdiv', 'Dashhome_Incharge.php');"><br><hr class="dashhr">
				<input type="button" value="Create Visitor" class="dashbutton "onclick=" load('anotherdiv', 'Incharge_CreateVis.php');"><br><hr class="dashhr">
				<input type="button" value="Existing Visitor" class="dashbutton "onclick=" load('anotherdiv', 'Existing_Visitor.php');"><br><hr class="dashhr">
				<input type="button" value="View Visitor Report" class="dashbutton" onclick=" load('anotherdiv', 'View_VisitorInc1.php');"><br><hr class="dashhr">
				<input type="button" value="Print Visitor Pass" class="dashbutton" onclick=" load('anotherdiv', 'Passgen.php');"><br><hr class="dashhr">
				<a href="Logout.php"><input type="button" value="Log Out" class="dashbutton" ><br><hr class="dashhr"></a>
			</div>
		</div>
	</body>
</html>