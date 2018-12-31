<?php

session_start();

$ADUNAME =$_POST['AdUname'];
$ADPASS=$_POST['AdPass'];


if($ADUNAME&&$ADPASS)
{
$connect = mysql_connect("localhost","root","") or die("couldnt connect");

mysql_select_db("sysadmin")or die("couldnt connect");

// To display number of rows affected.
//$query = mysql_query("SELECT * FROM users");

$query = mysql_query("SELECT * FROM admin WHERE Admin_Uname='$ADUNAME'");
$numrow = mysql_num_rows($query);       //count the number of rows affected

if ($numrow!=0)
{
	//code to login

            while($row = mysql_fetch_assoc($query))

           {
            $dbusername = $row['Admin_Uname'];
            $dbpassword = $row['Admin_Pass'];
           }

     //check to see if they match

    if ($ADUNAME==$dbusername&&($ADPASS)==$dbpassword) 
    {
       echo "Your Credentials Was Successfully authenticated ";
	   echo "<a href='AdminDashboard.php'>Click here to continue</a>";
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