<?php
$status=$_GET["status"];

if($status=="disp")
{
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"sysadmin");
$res=mysqli_query($link,"select * from incharge");

echo "<table border=4 align=center>";

echo "<br>"."<br>"."<br>"."<br>";
echo "<th>InchargeId</th><th>InchargeName</th><th>IncPassword</th><th>Contact</th><th>InchargeAddress</th><th>IncAge</th><th>IncGender</th><th>IncEmailId</th><th>IncShift</th><th>Date</th><th>Edit</th>";
while($row=mysqli_fetch_array($res))
{
echo "<tr>";
echo "<td>"; echo $row["Inc_ID"];  echo "</td>";
echo "<td>"; ?><div id="Uname<?php echo $row["Inc_ID"]; ?>"> <?php echo $row["Inc_Uname"]; ?> </div> <?php  echo "</td>";
echo "<td>"; ?><div id="Upass<?php echo $row["Inc_ID"]; ?>"> <?php echo $row["Inc_Pass"]; ?> </div> <?php  echo "</td>";
echo "<td>"; ?><div id="Ucontact<?php echo $row["Inc_ID"]; ?>"> <?php echo $row["Inc_Contact"]; ?> </div> <?php  echo "</td>";
echo "<td>"; ?><div id="Uadd<?php echo $row["Inc_ID"]; ?>"> <?php echo $row["Inc_Add"]; ?> </div> <?php  echo "</td>";
echo "<td>"; ?><div id="Uage<?php echo $row["Inc_ID"]; ?>"> <?php echo $row["Inc_Age"]; ?> </div> <?php  echo "</td>";
echo "<td>"; ?><div id="Ugen<?php echo $row["Inc_ID"]; ?>"> <?php echo $row["Inc_Gender"]; ?> </div> <?php  echo "</td>";
echo "<td>"; ?><div id="UEID<?php echo $row["Inc_ID"]; ?>"> <?php echo $row["Inc_EID"]; ?> </div> <?php  echo "</td>";
echo "<td>"; ?><div id="Ushift<?php echo $row["Inc_ID"]; ?>"> <?php echo $row["Inc_Shift"]; ?> </div> <?php  echo "</td>";
echo "<td>"; ?><div id="Udtime<?php echo $row["Inc_ID"]; ?>"> <?php echo $row["Inc_Dtime"]; ?> </div> <?php  echo "</td>";
echo "<td>"; ?>  
<input type="button" id="<?php echo $row["Inc_ID"]; ?>" name="<?php echo $row["Inc_ID"]; ?>" value="edit" onClick="aa(this.id)" class="uloginsubmit"> 
<input type="button" id="update<?php echo $row["Inc_ID"]; ?>" name="<?php echo $row["Inc_ID"]; ?>" value="update" style="visibility:hidden " onClick="bb(this.name)" class="uloginsubmit"> 


<?php echo "</td>";


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
$INC_SHIFT=$_GET["Ushift"];

$INC_UNAME=trim($INC_UNAME);
$INC_PASS=trim($INC_PASS);
$INC_CONTACT=trim($INC_CONTACT);
$INC_ADD=trim($INC_ADD);
$INC_AGE=trim($INC_AGE);
$INC_EID=trim($INC_EID);
$INC_SHIFT=trim($INC_SHIFT);


$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"sysadmin");
$res=mysqli_query($link,"update incharge set Inc_Uname='$INC_UNAME',Inc_Pass='$INC_PASS',Inc_Contact='$INC_CONTACT',Inc_Add='$INC_ADD',Inc_Age='$INC_AGE',Inc_EID='$INC_EID',Inc_Shift='$INC_SHIFT' where Inc_ID=$INC_ID");



}


if($status=="delete")
{
$INC_ID=$_GET["id"];

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"sysadmin");
$res=mysqli_query($link,"delete from incharge where Inc_ID=$INC_ID");

}


if($status=="ins")
{
$UNM=$_GET["Unm"];
$UPS=$_GET["Ups"];
$UCN=$_GET["Ucn"];
$UAD=$_GET["Uad"];
$UAG=$_GET["Uag"];
$UED=$_GET["UED"];
$USF=$_GET["Usf"];

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"sysadmin");
$res=mysqli_query($link,"insert into incharge values('','$UNM','$UPS','$UCN','$UAD','$UAG','$UED','$USF')");



}

?>