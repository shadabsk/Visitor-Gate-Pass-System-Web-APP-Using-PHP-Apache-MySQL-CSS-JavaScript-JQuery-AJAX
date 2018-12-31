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

<body >
	
	
<?php
session_start();
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
	
</body>
</html>

        

