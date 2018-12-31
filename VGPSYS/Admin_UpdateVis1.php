<?php
error_reporting(0);
$status=$_GET["status"];
if($status=="disp")
{
 
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"sysadmin");
$res=mysqli_query($link,"select * from visitor ");


echo "<table border=4 align=center>";
echo "<br><br><br><br>";
echo "<th>VisitorName</th><th>VisitorUsername</th><th>VisitorPassword</th><th>VisitorContact</th><th>VisitorLocality</th><th>VisiorAge</th><th>VisitorEmailID</th><th>Delete</th>";              
  while($row = mysqli_fetch_array($res))
            {
   echo "<tr  >";
   echo "<td >"; ?><div id="Uname<?php echo $row["Vis_ID"]; ?>"> <?php echo $row["Vis_Name"]; ?> </div> <?php  echo "</td>";
   echo "<td >"; ?><div id="Uname<?php echo $row["Vis_ID"]; ?>"> <?php echo $row["Vis_Uname"]; ?> </div> <?php  echo "</td>";
   echo "<td >"; ?><div id="Uname<?php echo $row["Vis_ID"]; ?>"> <?php echo $row["Vis_Pass"]; ?> </div> <?php  echo "</td>";
   echo "<td>"; ?><div id="Ucontact<?php echo $row["Vis_ID"]; ?>"> <?php echo $row["Vis_Contact"]; ?> </div> <?php  echo "</td>";
   echo "<td>"; ?><div id="Uadd<?php echo $row["Vis_ID"]; ?>"> <?php echo $row["Vis_Locality"]; ?> </div> <?php  echo "</td>";
   echo "<td>"; ?><div id="Uage<?php echo $row["Vis_ID"]; ?>"> <?php echo $row["Vis_Age"]; ?> </div> <?php  echo "</td>";
   echo "<td>"; ?><div id="UEID<?php echo $row["Vis_ID"]; ?>"> <?php echo $row["Vis_EID"]; ?> </div> <?php  echo "</td>";
    ?>  
    <?php
echo "<td>";
?>
<input type="button" id="<?php echo $row["Vis_ID"]; ?>" name="<?php echo $row["Vis_ID"]; ?>" value="Delete" onClick="deletee(this.id)" class="uloginsubmit"> 
<?php
echo"</td>";
echo "</tr>";


}
echo "</table>";
}

if($status=="update")
{
$INC_ID=$_GET["id"];
$INC_UNAME=$_GET["Uname"];
$INC_PASS=$_GET["Upass"];
$INC_CONTACT=$_GET["Ucontact"];
$INC_ADD=$_GET["Uadd"];
$INC_AGE=$_GET["Uage"];
$INC_EID=$_GET["UEID"];

$INC_UNAME=trim($INC_UNAME);
$INC_PASS=trim($INC_PASS);
$INC_CONTACT=trim($INC_CONTACT);
$INC_ADD=trim($INC_ADD);
$INC_AGE=trim($INC_AGE);
$INC_EID=trim($INC_EID);


$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"sysadmin");
$res=mysqli_query($link,"update visitor set Vis_name='$INC_UNAME',Vis_Contact='$INC_CONTACT',Vis_Locality='$INC_ADD',Vis_Age='$INC_AGE',Vis_EID='$INC_EID' where Vis_ID=$INC_ID");
}


if($status=="delete")
{
$INC_ID=$_GET["id"];
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"sysadmin");
$res=mysqli_query($link,"delete from visitor where Vis_ID=$INC_ID");
}

