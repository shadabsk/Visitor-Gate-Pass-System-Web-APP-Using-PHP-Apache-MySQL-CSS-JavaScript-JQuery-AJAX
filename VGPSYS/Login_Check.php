
<?php

error_reporting(0);
session_start();

$UNAME =$_POST['Uname'];
$PASS=$_POST['Pass'];
$_SESSION['user']=$UNAME;


if($UNAME&&$PASS)
{
$connect = mysql_connect("localhost","root","") or die("couldnt connect");

mysql_select_db("sysadmin")or die("couldnt connect");

// To display number of rows affected.
//$query = mysql_query("SELECT * FROM users");

$query = mysql_query("SELECT * FROM incharge WHERE Inc_Uname='$UNAME'");
$numrow = mysql_num_rows($query);       //count the number of rows affected
if ($numrow!=0)
{
	//code to login

            while($row = mysql_fetch_assoc($query))
           {
            $dbusername = $row['Inc_Uname'];
            $dbpassword = $row['Inc_Pass'];
           }

     //check to see if they match

    if ($UNAME==$dbusername&&$PASS==$dbpassword) 
    {
      header('Location: http://localhost/VGPSYS/Dashboard_Incharge.php');
     }else
     {
      header('Location: http://localhost/VGPSYS/login2.php');
       }
     }
elseif($UNAME!=$dbusername&&$PASS!=$dbpassword){
  $query = mysql_query("SELECT * FROM admin WHERE Admin_Uname='$UNAME'");
  $numrow = mysql_num_rows($query);       //count the number of rows affected
if ($numrow!=0)
{

            while($row = mysql_fetch_assoc($query))

           {
            $adusername = $row['Admin_Uname'];
            $adpassword = $row['Admin_Pass'];
           }
}
if ($UNAME==$adusername&&$PASS==$adpassword) 
    {
     header('Location: http://localhost/VGPSYS/Dashboard_Admin.php');
     }
     else{
     header('Location: http://localhost/VGPSYS/login2.php');
}

}}
   
  
   
?>
