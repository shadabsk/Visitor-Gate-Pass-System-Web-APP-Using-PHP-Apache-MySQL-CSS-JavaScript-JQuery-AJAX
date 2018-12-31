<html>
	<head>
		<title>Visitor Report</title>
		<link rel="stylesheet" type="text/css" href="Design.css">
		<script type="text/javascript" src="js/loadPage.js"></script>	
			<script type="text/javascript" src="js/changeDropDown.js"></script>
			<script type="text/javascript" src="js/remove.js"></script>
			<script type="text/javascript" src='js/showpass.js'></script>
			<script type="text/javascript" src="js/update.js"></script>
		
	</head>
	
	<body class="loginbody">


		<form name='View_Visitor.php' method='POST' action='Admin_ViewReport1.php' class="loginform2">
			<center>
			<font face="Calibri"><h3>
				Please Select Criteria To View Visitor Report
				<hr size="4" color="black" class="loginhr" width="260">
			</h3></font>
			
			
			

				<?php
						session_start();
require "Connect.php";
?>
</center>
<center>
<table>
<tr>
<td> Select Department &nbsp&nbsp </td>
<td><select id="deptdd" class='loginselect' onChange="change_dropdown()">
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
			echo "<form action='Admin_ViewReport1.php' method='post'>";
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
$sql = "SELECT Inc_Uname FROM incharge";
$result = mysql_query($sql);
echo "<select name='Incharge' class='loginselect'>";
echo "<option>Select Incharge</option>";
while ($row = mysql_fetch_array($result))
{
    echo "<option value= ". $row['Inc_Uname'] .">".$row['Inc_Uname']."</option>";
}
echo "<input type='Submit' name='submit2' class='showselect'>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	";
echo "</select>";
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


</center>

			<br><br> 
			
			
		</form>
		</div>
	</body>
</html>



