<html>
	<head>
		<title>Visitor Report</title>
		<link rel="stylesheet" type="text/css" href="Design.css">
	</head>
	
	<body>


		<form name='Passgen1.php' method='POST' action='Passgen1.php' class="loginform2">
			<center>
			<font face="Calibri"><h3>
				Please Select Criteria To Print Visitor Pass
				<hr size="4" color="black" class="loginhr" width="260">
			</h3></font>

			
						<?php
						session_start();
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
		</div>
	</body>
</html>
