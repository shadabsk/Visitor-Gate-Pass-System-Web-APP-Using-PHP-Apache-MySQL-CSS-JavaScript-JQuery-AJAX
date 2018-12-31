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
		<script type="text/javascript" src="js/loadPage.js"></script>	
			<script type="text/javascript" src="js/changeDropDown.js"></script>
			<script type="text/javascript" src="js/remove.js"></script>
			<script type="text/javascript" src='js/showpass.js'></script>
			<script type="text/javascript" src="js/update.js"></script>	
 	
	<script type="text/javascript" src="js/checkUser.js"></script>	

		<script type="text/javascript">
        <!--

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
		
 	
		
		
		
	</head>
	
	<body class="dashbody">
		<div class="dashright" id='anotherdiv'>
		
		


<?php
error_reporting(0);

if(isset($_POST['submit']))
{


error_reporting(0);
require "connect.php";
$VISID=$_POST['VisID'];
$VISUNAME=$_POST['VisUname'];
$VISUSNAME=$_POST['VisUsname'];
$VISPASS=$_POST['VisPass'];
$VISCONTACT=$_POST['VisContact'];
$VISADD=$_POST['VisAdd'];
$VISAGE=$_POST['VisAge'];
$VISGEN=$_POST['Vis1'];
$VISEID=$_POST['VisEID'];
$TIME1=$_POST['time1'];
$TIME2=$_POST['time2'];
$VISLEGAL=$_POST['VisLegal'];
$VISDEPT=$_POST['VisDept'];
$VISSTAFF=$_POST['VisStaff'];
$VISPUP=$_POST['Vispup'];
$VISIMG=$_POST['VisIMG'];
$SUBMIT = $_POST['submit'];
if($TIME1<$TIME2)
{
if(isset($SUBMIT))
{
	
$qr=mysql_query("insert into visitor_temp values('$VISID','$VISUNAME','$VISUSNAME','$VISPASS','$VISCONTACT','$VISADD','$VISAGE','$VISGEN','$VISEID','$TIME1','$TIME2',now(),'$VISLEGAL','$VISDEPT','$VISSTAFF','$VISPUP','$VISIMG')") ;
if ($qr)
{	

     ?>

	 <br>
	 <br>
	 
	 
	 <font face="TIMESNEWROMAN" ><h2>
					
	<br><br><br><br>
	<p id="info-message" align='left'>
	
	
	
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	Registered Successfully with your username <?php echo $VISUSNAME ?> <br>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					Kindly tell your username to respective incharge to collect your pass
	
					</p>
			</h2></font>
			
			
			
								<?php
	
}
else{
echo "not inserted".mysql_error();
}
}
}
else
{
	echo "<h2>";
	echo "check your entering and exit time";
	echo "</h2>";
}
}
?>		

		
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