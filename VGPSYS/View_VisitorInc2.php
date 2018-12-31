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
			
			
		<body>
	

		<form name='View_VisitorInc1.php' method='POST' action='View_VisitorInc2.php' class="loginform2">
			<center>
			<font face="Calibri"><h3>
				Please Select Criteria To View Visitor Report
				<hr size="4" color="black" class="loginhr" width="260">
			</h3></font>

			
						<?php
						
require "Connect.php";
?>
</center>
<center>
<table>
<tr>
<td> Select Department &nbsp&nbsp </td>
<td><select id="deptdd" class=loginselect onChange="change_dropdown()">
<option>Select</option>
<?php
$query = mysql_query("SELECT * FROM admin_staff");
$query = mysql_query("SELECT distinct Staff_Dept from admin_Staff");
while($row = mysql_fetch_array($query))
{
?>
<option value="<?php echo $row['Staff_Dept']; ?>"><?php echo $row['Staff_Dept']; ?></option>

<?php
}
?>
</select>
</td>



<td>&nbspSelect Staff</td>
<td>
<div id="facname">
<select class=loginselect>
<option>Select</option>

</select>


</div>

</td>
</tr>
</table>
</center>
<br>
<?php
echo "<input type='Submit' name='submit' class='uloginsubmit'>";
echo "</select>";
?>



<center>



			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<?php
			echo "<form action='View_VisitorInc2.php' method='post'>";
require "Connect.php";
$sql = "SELECT Vis_Date FROM visitor";
$result = mysql_query($sql);
echo "<br>"."<br>";
echo "<p align='middle'>
		"."Date Range 1&nbsp&nbsp"."
		<input type='date' name='dtime1' value='time' class=loginselect></input>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		"."Time Range 1&nbsp&nbsp"."
		<input type='time' name='time1' class=loginselect></input>"."
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
		
echo "<br><br>";

echo "<align='middle'>"."
	Date Range 2&nbsp&nbsp"."
	<input type='date' name='dtime2' value='time' class=loginselect></input>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	"."Time range 2&nbsp&nbsp"."
	<input type='time' name='time2' class=loginselect></input>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<br><br>";
echo "<input type='Submit' name='submit5' class='uloginsubmit' >"."</p>";
echo "</form>";
?>


<?php
require "Connect.php";
$sql = "SELECT distinct Staff_Dept FROM admin_staff";
$result = mysql_query($sql);
				
echo "<select name='dept' class='loginselect'>";
echo "<option>Select Department</option>";
while ($row = mysql_fetch_array($result))
{
    echo "<option value= ". $row['Staff_Dept'] .">".$row['Staff_Dept']."</option>";
}
echo "<input type='Submit' name='submit6' class='showselect'>";
echo "</select>";
echo "</form>";
?>


	<br><br> 
			
			</center>
			<br><br>
			
		
			
			<?php
error_reporting(0);

if(isset($_POST['submit']))
$Scrol =$_POST['VisStaff'];
$connect = mysql_connect("localhost","root","") or die("couldnt connect");

mysql_select_db("sysadmin")or die("couldnt connect");


$query = mysql_query("SELECT * FROM visitor WHERE Staff_Name='$Scrol' and Vinc_Name='{$_SESSION['user']}' ");
$numrow = mysql_num_rows($query);       

if ($numrow!='')
{
	echo "<table border=4 align=center>";

echo "<th>VisitorId</th><th>VisitorName</th><th>Username</th><th>Password</th><th>Contact</th><th>Locality</th><th>Age</th><th>Gender</th><th>Email</th><th>EntryTime</th><th>ExitTime</th><th>Date</th><th>LegalID</th><th>StaffDept</th><th>StaffName</th><th>Purpose</th><th>Image</th>";

	while($row = mysql_fetch_array($query))
            {
			
   echo "<tr>";
   echo "<td>".$row['Vis_ID']."</td>";
   echo "<td>".$row['Vis_Name']."</td>";
   echo "<td>".$row['Vis_Uname']."</td>";
   echo "<td>".$row['Vis_Pass']."</td>";
   echo "<td>".$row['Vis_Contact']."</td>";
   echo "<td>".$row['Vis_Locality']."</td>";
   echo "<td>".$row['Vis_Age']."</td>";
   echo "<td>".$row['Vis_Gen']."</td>";
   echo "<td>".$row['Vis_EID']."</td>";
   echo "<td>".$row['Vis_Enter']."</td>";
   echo "<td>".$row['Vis_Leave']."</td>";
   echo "<td>".$row['Vis_Date']."</td>";
   echo "<td>".$row['Vis_LegalID']."</td>";
   echo "<td>".$row['Vis_Sdept']."</td>";
   echo "<td>",$row['Staff_Name']."</td>";
echo "<td>",$row['Purpose']."</td>";
     echo "<td style=width:20px>"."<img src=".$row['Vis_Image']." width='50' height='50'>"."</td>";
  
            }
echo "</table></center>";
        }

	

     ?>
	 
	 
	<?php
if(isset($_POST['submit5']))
{
$Scrol1 =$_POST['dtime1'];
$Scrol2 =$_POST['dtime2'];
$Scrol3 =$_POST['time1'];
$Scrol4 =$_POST['time2'];
$connect = mysql_connect("localhost","root","") or die("couldnt connect");

mysql_select_db("sysadmin")or die("couldnt connect");


$query = mysql_query("SELECT * FROM visitor WHERE Vis_Date BETWEEN '$Scrol1' and '$Scrol2' and Vis_Enter BETWEEN '$Scrol3' and '$Scrol4' and Vinc_Name='{$_SESSION['user']}'");
$numrow = mysql_num_rows($query);       

if ($numrow!='')
{
echo "<table border=4 align=center>";

echo "<th>VisitorId</th><th>VisitorName</th><th>Username</th><th>Password</th><th>Contact</th><th>Locality</th><th>Age</th><th>Gender</th><th>Email</th><th>EntryTime</th><th>ExitTime</th><th>Date</th><th>LegalID</th><th>StaffDept</th><th>StaffName</th><th>Purpose</th><th>Image</th>";

	while($row = mysql_fetch_array($query))
            {
				
   echo "<tr>";
   echo "<td>".$row['Vis_ID']."</td>";
   echo "<td>".$row['Vis_Name']."</td>";
   echo "<td>".$row['Vis_Uname']."</td>";
   echo "<td>".$row['Vis_Pass']."</td>";
   echo "<td>".$row['Vis_Contact']."</td>";
   echo "<td>".$row['Vis_Locality']."</td>";
   echo "<td>".$row['Vis_Age']."</td>";
   echo "<td>".$row['Vis_Gen']."</td>";
   echo "<td>".$row['Vis_EID']."</td>";
   echo "<td>".$row['Vis_Enter']."</td>";
   echo "<td>".$row['Vis_Leave']."</td>";
   echo "<td>".$row['Vis_Date']."</td>";
   echo "<td>".$row['Vis_LegalID']."</td>";
   echo "<td>".$row['Vis_Sdept']."</td>";
   echo "<td>",$row['Staff_Name']."</td>";
   echo "<td>",$row['Purpose']."</td>";
   echo "<td style=width:10px>"."<img src=".$row['Vis_Image']." width='60' height='60'>"."</td>";
            }
echo "</table></center>";
        }
else
{
	echo "no records found";
}
}

        ?>
	 

	 <?php
error_reporting(0);

if(isset($_POST['submit6']))
$Scrol =$_POST['dept'];
$connect = mysql_connect("localhost","root","") or die("couldnt connect");

mysql_select_db("sysadmin")or die("couldnt connect");


$query = mysql_query("SELECT * FROM visitor WHERE Vis_Sdept='$Scrol' and Vinc_Name='{$_SESSION['user']}'");
$numrow = mysql_num_rows($query);       

if ($numrow!='')
{
	echo "<table border=4 align=center id='customers'>";


echo "<th>VisitorId</th><th>VisitorName</th><th>Username</th><th>Password</th><th>Contact</th><th>Locality</th><th>Age</th><th>Gender</th><th>Email</th><th>EntryTime</th><th>ExitTime</th><th>Date</th><th>LegalID</th><th>StaffDept</th><th>StaffName</th><th>Purpose</th><th>Image</th>";

	while($row = mysql_fetch_array($query))
            {
				
   echo "<tr>";
   echo "<td>".$row['Vis_ID']."</td>";
   echo "<td>".$row['Vis_Name']."</td>";
   echo "<td>".$row['Vis_Uname']."</td>";
   echo "<td>".$row['Vis_Pass']."</td>";
   echo "<td>".$row['Vis_Contact']."</td>";
   echo "<td>".$row['Vis_Locality']."</td>";
   echo "<td>".$row['Vis_Age']."</td>";
   echo "<td>".$row['Vis_Gen']."</td>";
   echo "<td>".$row['Vis_EID']."</td>";
   echo "<td>".$row['Vis_Enter']."</td>";
   echo "<td>".$row['Vis_Leave']."</td>";
   echo "<td>".$row['Vis_Date']."</td>";
   echo "<td>".$row['Vis_LegalID']."</td>";
   echo "<td>".$row['Vis_Sdept']."</td>";
   echo "<td>",$row['Staff_Name']."</td>";
   echo "<td>",$row['Purpose']."</td>";
   echo "<td style=width:10px>"."<img src=".$row['Vis_Image']." width='60' height='60'>"."</td>";
   
            }
echo "</table></center>";
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