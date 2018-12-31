<!DOCTYPE html>
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
setTimeout(function(){
    document.getElementById('info-message').style.display = 'none';
  }, 99999999);
  
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
session_start();
error_reporting(0);
require "connect.php";
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
$SUBMIT = $_POST['submit'];
if(isset($SUBMIT))
{
	
$qr=mysql_query("update visitor set Vis_Name='$VISUNAME',Vis_Uname='$VISUSNAME',Vis_Pass='$VISPASS',Vis_Contact='$VISCONTACT',Vis_Locality='$VISADD',Vis_Age='$VISAGE',Vis_Gen='$VISGEN',Vis_EID='$VISEID',Vis_Enter='$TIME1',Vis_Leave='$TIME2',Vis_Date=now(),Vis_LegalID='$VISLEGAL',Vis_Sdept='$VISDEPT',Staff_Name='$VISSTAFF',Purpose='$VISPUP',Vinc_Name='{$_SESSION['user']}' where Vis_Name=''");
if ($qr)
{
	?>
		 <br>
	 <br>
	 
	 
	 <font face="TIMESNEWROMAN" ><h2>
					
	
	<p id="info-message" align='left'>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	
	Visitor with username <?php echo "$VISUSNAME"; ?>	Has been Authorized, proceed to generate the Pass
					</p>
			</h2></font>
			
			
			
								<?php
	
}
else{
echo "not inserted".mysql_error();
}
}
?>		
<script>
  setTimeout(function(){
    document.getElementById('info-message').style.display = 'none';
  }, 9999999999);
  
  
</script>
		
		</center>
		</form>
		
		
		
		
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