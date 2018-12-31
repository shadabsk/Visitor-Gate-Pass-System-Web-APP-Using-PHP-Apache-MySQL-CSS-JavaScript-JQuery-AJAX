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
			
			
		<?php

require "Connect.php";
$sql = "SELECT distinct Vis_Uname FROM visitor_temp";
$result = mysql_query($sql);
echo "<form   action='Existing_Visitor1.php' method='POST' class='loginform2'>";
?>
<center>
			<font face="Calibri"><h3>
					Please Select Criteria To View Incharge Details
				<hr size="4" color="black" class="loginhr" width="260">
			</h3></font>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			&nbsp&nbsp&nbsp&nbsp
			Name
			<?php
				
echo "<select name='Incharge' class='loginselect'>";
echo "<option>Select</option>";
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

echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".
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
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".
"Select Time&nbsp&nbsp&nbsp"."<input type='time' name='time1' value='time' class=loginselect></input>";
		


   "<br><br>";
?>
<br><br>
<input type='Submit' name='submit' class='loginsubmit'>
			<br><br> 
</center>
</form>
<?php
error_reporting(0);



if(isset($_POST['submit']))
$Scrol =$_POST['Incharge'];
$Scrol1 =$_POST['dtime1'];
$Scrol2 =$_POST['time1'];

$connect = mysql_connect("localhost","root","") or die("couldnt connect");

mysql_select_db("sysadmin")or die("couldnt connect");


$query = mysql_query("SELECT * FROM visitor_temp WHERE Vis_Uname='$Scrol' and Vis_Date='$Scrol1' and Vis_Enter='$Scrol2'");
$numrow = mysql_num_rows($query);       

if ($numrow!='')
{
	



	while($row = mysql_fetch_array($query))
            {
			
  
			   $VISID=$row['Vis_ID'];
			   $VISNAME=$row['Vis_Name'];
			   $VISUNAME=$row['Vis_Uname'];
			   $VISPASS=$row['Vis_Pass'];
			   $VISCON=$row['Vis_Contact'];
			   $VISLOC=$row['Vis_Locality'];
			   $VISAGE=$row['Vis_Age'];
			   $VISGEN=$row['Vis_Gen'];
			   $VISEID=$row['Vis_EID'];
			   $VISENTER=$row['Vis_Enter'];
			   $VISLEAVE=$row['Vis_Leave'];
			   $VISDATE=$row['Vis_Date'];
			   $VISLEG=$row['Vis_LegalID'];
			   $VISSDEPT=$row['Vis_Sdept'];
			   $STAFFNAME=$row['Staff_Name'];
			   $PURPOSE=$row['Purpose'];
			   $VISIMG=$row['Vis_Image'];
  
            }

			
			
			
			?>
			
			<body class="loginbody">
	
		<form id='Incharge_CreateVis' method='POST' action='Incharge_CreateVis2.php' class="loginform2" enctype="multipart/form-data">
			<center>
				<font face="Calibri" ><h3>
				Please Enter Following Information<br>About The Visitor
				<hr size="4" color="black" class="loginhr" width="260"></h3>
			</font>
			
			
			
			<p align='left'>
			
			Name&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="text" name="VisUname" required class="input" maxlength="20"  value=<?php echo $VISNAME ?> readonly>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			Gender&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="text" name="Vis1" class="input" required value=<?php echo $VISGEN ?> readonly> &nbsp&nbsp&nbsp
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			</p>
			
			
			
			
			Username&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			
			<input type="text" name="VisUsname" id="username" required class="input" maxlength="20" value=<?php echo $VISUNAME ?> readonly>
			<div id="msg"></div>
			<br>
			
			Password&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="password" name="VisPass" required class="input" id="secret" value=<?php echo $VISPASS?> readonly><br>
			<div class='labelpass'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="radio" id="radio1" name="radio1" value="on" onchange="ShowHide();">Show
            <input type="radio" id="radio2" name="radio1" value="off" onchange="ShowHide();" checked>Hide</div><br>
			<p align ='left'>
			
			Select Age &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="text" name='VisAge' class="input"required value=<?php echo $VISAGE ?> readonly>
				
			
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			Aadhar No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input  type = "text" maxlength = "12" value=<?php echo $VISLEG ?> name="VisLegal" class="input" required  readonly><br>
			</p>
			
			<p align='left'>
			Contact No &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input value=<?php echo $VISCON ?> type = "text" maxlength = "10" name="VisContact" class="input"required readonly>
			
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			Email-ID &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="email" name="VisEID" required class="input" value=<?php echo $VISEID ?> readonly><br>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			</p>
			
			<p align='left'>
			Locality &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="text" class="inputadd" name="VisAdd" required value=<?php echo $VISLOC ?> readonly>
			
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			Purpose &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="text" name="Vispup" required class="inputadd"  value=<?php echo $PURPOSE ?> readonly><br>
			
			</p>
			<br>
			<p align='left'>
			Entering time&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="text" class="loginselect" name="time1" required value=<?php echo $VISENTER ?> readonly>
			
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			Leaving time &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="time" name="time2" required class="loginselect" value=<?php echo $VISLEAVE ?> readonly><br><br>
			
			<p align='left'>
			Selected Department:&nbsp
			<input type="text" name="VisDept" required class="input" value=<?php echo $VISSDEPT ?> readonly>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			Selected Staff:
			<input type="text" name="VisStaff" required class="input" value=<?php echo $STAFFNAME ?> readonly><br><br>
			</p>
			
			<input type="text" name="VisID" required style=visibility:hidden class="input" maxlength="20"  value=<?php echo $VISID ?>>
			<center>
			<input type="button" value="Take Photo" class="takephotobutton" onclick="MyWindow=window.open('camera2.html','MyWindow',width=720,height=120); return false;"></input>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="button" value="Send SMS" class="smsbutton" onclick="MyWindow=window.open('way2.php','MyWindow',width=720,height=120); return false;"></input><br><br>
			<br><br>
			
			<input type="submit" name="submit" class="uloginsubmit"  value="Confirm Registration"></input>
			</center>
			<span id="result"></span>	
		</form>
		
		<?php		
        }

	
     ?>




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