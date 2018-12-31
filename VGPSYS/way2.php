
<?php
require_once "connect.php";

error_reporting(0);
	
?>

<html>
	<head>
		<title>Creating incharge</title>
		<link rel="stylesheet" type="text/css" href="sms.css">
		<style type="text/css">
			button
			{
			  background: white;
			  width: 200px;
			  border: 0;
			  font-size: 16pt;
			  font-family:"Arial";
			  color: black;
			}
			button:hover
			{
				border: 1px solid rgb(0, 255, 150);
				border-radius: 5%;
			}
		</style>
	</head>


<div id='cnt'>
<form name="form1" action="way2.php" method="post">
<table>
<tr>
<td> Select Staff &nbsp&nbsp </td>
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
</tr>

<tr>
<td>Select Department</td>
<td>
<div id="facname">
<select class='loginselect'>
<option>Select</option>
</select>
</div>
</td>
</tr>

</table>
<br>
<input type='Submit' name='submit' class='showselect'>


		<?php
if(isset($_POST['submit']))
$Scrol =$_POST['VisStaff'];
$connect = mysql_connect("localhost","root","") or die("couldnt connect");

mysql_select_db("sysadmin")or die("couldnt connect");


$query = mysql_query("SELECT * FROM admin_staff WHERE Staff_Uname='$Scrol'");
$numrow = mysql_num_rows($query);       

if ($numrow!='')
{
	
	echo"<center><table>";

echo "<table border=4 align=center>";
echo "<br>";
echo "<th>ID</th><th>StaffName</th><th>Contact</th><th>Email-ID</th><th>Shift</th>";
	while($row = mysql_fetch_array($query))
            {
   echo "<tr>";
   echo "<td>".$row['StaffID']."</td>";
   echo "<td>".$row['Staff_Uname']."</td>";
   echo "<td>".$row['Contact']."</td>";
   echo "<td>".$row['Email_ID']."</td>";
   echo "<td>".$row['Shift']."</td>";
   echo "</tr>";
            }
echo "</table></center>";
echo "<br>";
echo "<button id='ldwy' name='submit' class='showselect'>Send Message</button>";
        }
echo "</form>";
        ?>

</form>
</div>
<br><br><br>
<hr style="background-color: black;border: 1px solid black;"></hr>
<iframe id='content' style='width:100%; height:100%;border: 0;left: 0;' src="about:blank" >

</iframe>
</html>

<script type="text/javascript">
function change_dropdown()
{
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.open("GET","select_staff3.php?name="+document.getElementById("deptdd").value,false);
	xmlhttp.send(null);
	document.getElementById("facname").innerHTML=xmlhttp.responseText;
}
</script>
<script src="js/jquery-3.3.1.min.js"></script>
<script>
	$(document).ready(function(){
	$("#ldwy").on("mouseover",function(){
		$("#content").attr("src","http://www.way2sms.com/send-sms");
		$("#content").css("background-color", "white");
	});
});
</script>


