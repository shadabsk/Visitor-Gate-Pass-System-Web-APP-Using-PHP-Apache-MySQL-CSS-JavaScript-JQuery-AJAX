<html>
	<head>
		<title>Creating incharge</title>
		<link rel="stylesheet" type="text/css" href="Design.css">

	</head>
<?php

require "connect.php";
$name=$_GET['name'];


if($name!="")
{
	require "connect.php";
	$query = mysql_query("SELECT * FROM admin_staff where Staff_Dept='$name'");
	echo "<select name='VisStaff' class=loginselect>";
	while($row = mysql_fetch_array($query))
	{

	echo "<option>"; echo $row['Staff_Uname']; echo"</option>";	
	}

	echo "</select>"; 
}


?>
</html>