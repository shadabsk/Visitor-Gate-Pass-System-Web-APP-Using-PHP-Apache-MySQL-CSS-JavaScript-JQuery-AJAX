<!DOCTYPE html>
<html>
<head>
	<title>Scroll</title>
	<link rel="stylesheet" type="text/css" href="Design.css">
</head>
<style type="text/css">table,th,td
{
border:1px solid black ;
}
</style>
<body>
<body >
	
	
<?php
require "Connect.php";
$sql = "SELECT Inc_Uname FROM incharge";
$result = mysql_query($sql);
echo "<form   action='Admin_ViewIncharge1.php' method='POST' class='loginform2'>";
?>
<center>
			<font face="Calibri"><h3>
					Please Select Criteria To View Incharge Details
				<hr size="4" color="black" class="loginhr" width="260">
			</h3></font>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			Name&nbsp&nbsp&nbsp
			<?php
				
echo "<select name='Incharge' class='loginselect'>";
echo "<option>Select Incharge</option>";
while ($row = mysql_fetch_array($result))
{
    echo "<option value= ". $row['Inc_Uname'] .">".$row['Inc_Uname']."</option>";
}
echo "<input type='Submit' name='submit' class='showselect'>";
echo "</select>";
echo "</form>";
?>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
Select Shift &nbsp&nbsp&nbsp


<?php
require "Connect.php";
$sql = "SELECT distinct Inc_Shift FROM incharge";
$result = mysql_query($sql);
				
echo "<select name='Shift' class='loginselect'>";
echo "<option>Select Shift</option>";
while ($row = mysql_fetch_array($result))
{
    echo "<option value= ". $row['Inc_Shift'] .">".$row['Inc_Shift']."</option>";
}
echo "<input type='Submit' name='submit2' class='showselect'>";
echo "</select>";
echo "</form>";
?>
</center>;
	
</body>
</html>

        

