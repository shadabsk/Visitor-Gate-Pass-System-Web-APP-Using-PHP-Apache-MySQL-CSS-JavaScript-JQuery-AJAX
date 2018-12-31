
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
		<style>
		b
{
	font-size:18px;
	font-family:Elephant;
}
.a:link, a:visited {
    background-color: rgb(200,0,0);
    color: white;
    padding: 14px 25px;
    text-align: center; 
    text-decoration: none;
    display: inline-block;
}

.a:hover, a:active {
    background-color: red;
}
		</style>
		
 <script src="jquery.js" type="text/JavaScript" language="javascript"></script>
        <script src="jquery.PrintArea.js" type="text/JavaScript" language="javascript"></script>
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
					
	</head>
	
	<body class="dashbody">
		<div class="dashright" id='anotherdiv'>
		
		
		 <head>
 	
        <script src="jquery.js" type="text/JavaScript" language="javascript"></script>
        <script src="jquery.PrintArea.js" type="text/JavaScript" language="javascript"></script>
    </head>
	
	<body>

		<form name='Passgen1.php' method='POST' action='Passgen1.php' class="loginform2">
			<center>
			<font face="Calibri"><h3>
				Please Select Criteria To Print Visitor Pass
				<hr size="4" color="black" class="loginhr" width="260">
			</h3></font>

			
						<?php
		
require "Connect.php";
?>




			
			
						<?php
require "Connect.php";
$sql = "SELECT distinct Vis_Uname FROM visitor where Vinc_Name='{$_SESSION['user']}' ORDER BY Vis_ID DESC ";
$result = mysql_query($sql);
echo "<select name='VisID' class='loginselect'>";
echo "<option>Select Visitor Uname</option>";
while ($row = mysql_fetch_array($result))
{
    echo "<option value= ". $row['Vis_Uname'] .">".$row['Vis_Uname']."</option>";
}


echo "</select>";
?>

	<?php
require "Connect.php";
$sql = "SELECT Vis_Date FROM visitor";
$result = mysql_query($sql);
echo "<br>"."<br>";

echo "<p align='left'>"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp".
"Select Date&nbsp&nbsp"."<input type='date' name='dtime1' value='time' class=loginselect></input>";
		


   "<br><br>";
?>
<?php
require "Connect.php";
$sql = "SELECT Vis_Enter FROM visitor";
$result = mysql_query($sql);
echo "<br>"."<br>";

echo "<p align='left'>"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp".
"Select Time&nbsp&nbsp"."<input type='time' name='time1' value='time' class=loginselect></input>";
		


   "<br><br>";
?>

<br><br>
<input type='Submit' name='submit' class='loginsubmit'>
			<br><br> 
			
			
		</form>
	
	
	
	
 <div class="content">
 
 
 
 
<?php
//error_reporting(0);

if(isset($_POST['submit']))
$Scrol =$_POST['VisID'];
$Scrol1 =$_POST['dtime1'];
$Scrol2 =$_POST['time1'];
$connect = mysql_connect("localhost","root","") or die("couldnt connect");

mysql_select_db("sysadmin")or die("couldnt connect");


$query = mysql_query("SELECT * FROM visitor WHERE Vis_Uname='$Scrol' and Vis_Date = '$Scrol1' and Vis_Enter = '$Scrol2' and Vinc_Name='{$_SESSION['user']}' ");
$numrow = mysql_num_rows($query);       

if ($numrow!='')
{
	while($row = mysql_fetch_array($query))
            {
	echo "<table border=4 style='width:400px' >";
echo "<tr >";
echo "<td colspan=2 style='width:50px'>"."<img src='logo.jpg' width='100%'>"."</td>";
echo "</tr>";
echo "<tr>";
echo "<td rowspan=2 style='width:200px'>"."<img src=".$row['Vis_Image'] ." width='100%'>"."</td>";
echo "<td style='height:70px'>".'Visitor ID&nbsp&nbsp: &nbsp&nbsp&nbsp&nbsp'."<b>".$row['Vis_ID']."</b>"."</td>";
echo "</tr>";
echo "<tr >";
echo "<td >".'Contact&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp'."<b>".$row['Vis_Contact']."</b>"."</td>";
echo "</tr>";
echo "<tr >";
echo "<td colspan=2 style='height:70px'>".'Visitor Name&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp'."<b>".$row['Vis_Name']."</b>"."</td>";
echo "</tr>";
echo "<tr >";
echo "<td colspan=2 style='height:70px'>".'Incharge Sign&nbsp&nbsp&nbsp&nbsp&nbsp:'."</td>";
echo "</tr>";
echo "<tr >";
echo "<td colspan=2 style='height:70px'>".'Date&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp'."<b>".$row['Vis_Date']."</b>"."</td>";
echo "</tr>";
echo "<tr >";
echo "<td style='height:70px'>".'Entry Time&nbsp&nbsp&nbsp&nbsp&nbsp'."<b>".$row['Vis_Enter']."</b>"."</td>";
echo "<td style='height:70px'>".'Exit Time&nbsp&nbsp&nbsp&nbsp'."<b>".$row['Vis_Leave']."</b>"."</td>";
echo "</tr>";
			}
echo "</table>";


	

	}
     ?>
</div>
	 
<div>
<br>
 <a href="javascript:void(0);" id="print_button2" class="a">Print This Pass</a>	 
 </div>
 <script>
    $(document).ready(function(){
         $("#print_button2").click(function(){
			 
            var mode = 'iframe'; // popup
            var close = mode == "popup";
            var options = { mode : mode, popClose : close};
            $("div.content").printArea( options );
			
        });
    });

  </script>
		
		
		
		</div>
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