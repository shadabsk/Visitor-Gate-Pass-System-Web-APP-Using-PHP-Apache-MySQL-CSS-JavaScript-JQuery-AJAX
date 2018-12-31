
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

$query = mysql_query("SELECT * FROM visitor WHERE Vis_Uname='$UNAME'");
$numrow = mysql_num_rows($query);       //count the number of rows affected
if ($numrow!=0)
{
	//code to login

            while($row = mysql_fetch_assoc($query))
           {
            $dbusername = $row['Vis_Uname'];
            $dbpassword = $row['Vis_Pass'];
           }

     //check to see if they match

    if ($UNAME==$dbusername&&$PASS==$dbpassword) 
    {
      header('Location: http://localhost/VGPSYS/Dashboard_Visitor.php');
     }else
     {
      header('Location: http://localhost/VGPSYS/login3.php');
       }
     }
elseif($UNAME!=$dbusername&&$PASS!=$dbpassword){
     header('Location: http://localhost/VGPSYS/login3.php');
}
}

   
  
   
?>
