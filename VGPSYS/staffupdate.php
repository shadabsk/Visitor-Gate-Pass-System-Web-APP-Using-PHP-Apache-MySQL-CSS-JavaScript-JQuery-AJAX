<?php
$status=$_GET["status"];

if($status=="disp")
{
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"sysadmin");
$res=mysqli_query($link,"select * from admin_staff");

echo "<table>";
while($row=mysqli_fetch_array($res))
{
echo "<tr>";
echo "<td>"; echo $row["Staff_ID"];  echo "</td>";
echo "<td>"; ?><div id="Sname<?php echo $row["Staff_ID"]; ?>"> <?php echo $row["Staff_Uname"]; ?> </div> <?php  echo "</td>";
echo "<td>"; ?><div id="Scontact<?php echo $row["Staff_ID"]; ?>"> <?php echo $row["Staff_Contact"]; ?> </div> <?php  echo "</td>";
echo "<td>"; ?><div id="Dept<?php echo $row["Staff_ID"]; ?>"> <?php echo $row["Staff_Dept"]; ?> </div> <?php  echo "</td>";
echo "<td>"; ?><div id="SEID<?php echo $row["Staff_ID"]; ?>"> <?php echo $row["Staff_EID"]; ?> </div> <?php  echo "</td>";
echo "<td>"; ?><div id="SShift<?php echo $row["Staff_ID"]; ?>"> <?php echo $row["Staff_Shift"]; ?> </div> <?php  echo "</td>";
echo "<td>"; ?><div id="SAge<?php echo $row["Staff_ID"]; ?>"> <?php echo $row["Staff_Age"]; ?> </div> <?php  echo "</td>";
echo "<td>"; ?><div id="SAdd<?php echo $row["Staff_ID"]; ?>"> <?php echo $row["Staff_Add"]; ?> </div> <?php  echo "</td>";
echo "<td>"; ?> <input type="button" id="<?php echo $row["Staff_ID"]; ?>" name="<?php echo $row["Staff_ID"]; ?>" value="delete" onClick="delete1s(this.id)"> <?php echo "</td>";
echo "<td>"; ?> 
<input type="button" id="<?php echo $row["Staff_ID"]; ?>" name="<?php echo $row["Staff_ID"]; ?>" value="edit" onClick="aas(this.id)"> 
<input type="button" id="update<?php echo $row["Staff_ID"]; ?>" name="<?php echo $row["Staff_ID"]; ?>" value="update" style="visibility:hidden " onClick="bbs(this.name)"> 


<?php echo "</td>";


echo "</tr>";


}
echo "</table>";
}

if($status=="update")
{
$Staff_ID=$_GET["id"];
$Staff_Sname=$_GET["Sname"];
$Staff_CONTACT=$_GET["Scontact"];
$Staff_DEPT=$_GET["Dept"];
$Staff_SEID=$_GET["SEID"];
$Staff_SSHIFT=$_GET["SShift"];
$Staff_SAGE=$_GET["SAge"];
$Staff_SADD=$_GET["SAdd"];

$Staff_Sname=trim($Staff_Sname);
$Staff_CONTACT=trim($Staff_CONTACT);
$Staff_DEPT=trim($Staff_DEPT);
$Staff_SEID=trim($Staff_AEID);
$Staff_SSHIFT=trim($Staff_SSHIFT);
$Staff_SAGE=trim($Staff_AGE);
$Staff_SADD=trim($Staff_SADD);


$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"sysadmin");
$res=mysqli_query($link,"update admin_staff set Staff_Sname='$Staff_Sname',Staff_Contact='$Staff_CONTACT',Staff_Dept='$Staff_DEPT',Staff_EID='$Staff_SEID',Staff_Shift='$Staff_SHIFT',Staff_Age='$Staff_AGE',Staff_Add='$Staff_ADD' where Staff_ID=$Staff_ID");
}


if($status=="delete")
{
$Staff_ID=$_GET["id"];

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"sysadmin");
$res=mysqli_query($link,"delete from admin_staff where Staff_ID=$Staff_ID");

}


if($status=="ins")
{
$UNM=$_GET["Snm"];
$UPS=$_GET["Scn"];
$UCN=$_GET["Sdp"];
$UAD=$_GET["SED"];
$UAG=$_GET["Ssf"];
$UED=$_GET["Sag"];
$USF=$_GET["Sad"];

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"sysadmin");
$res=mysqli_query($link,"insert into admin_staff values('','$UNM','$UPS','$UCN','$UAD','$UAG','$UED','$USF')");



}

?>