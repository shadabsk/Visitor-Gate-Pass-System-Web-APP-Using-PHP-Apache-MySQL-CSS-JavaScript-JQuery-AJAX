<?php
 
 include "connect.php";
?>


<form name="form1" action="" method="post">
<table>
<tr>
<td> Select Staff &nbsp&nbsp </td>
<td><select id="deptdd" onChange="change_dropdown()">
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
<select>
<option>Select</option>
</select>
</div>
</td>
</tr>

</table>


</form>



			<script type="text/javascript" src="js/changeDropDown.js"></script>
		