<?php

session_start();

$INUNAME =$_POST['InUname'];
$INPASS=$_POST['InPass'];


if($INUNAME&&$INPASS)
{
$connect = mysql_connect("localhost","root","") or die("couldnt connect");

mysql_select_db("sysadmin")or die("couldnt connect");

// To display number of rows affected.
//$query = mysql_query("SELECT * FROM users");

$query = mysql_query("SELECT * FROM incharge WHERE Inc_Uname='$INUNAME'");
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

    if ($INUNAME==$dbusername&&($INPASS)==$dbpassword) 
    {
       /*echo "Successfully Login";
	   echo "<a href='Incharge_CreateVis.php'>Click here to register the visitor</a>"*/;
	   header('Location: http://localhost/VGPSYS/Incharge_CreateVis.php');
     }
       else
	echo "Incorrect Password";
}
else
	die("User doesnt exist");
//echo $numrow;
}
 else
echo "Please enter user name and password";
?>