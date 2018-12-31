<?php

mysql_connect("127.0.0.1","root","");
mysql_select_db("sysadmin");

if(isset($_POST['username']))
{
	$username = mysql_real_escape_string($_POST['username']);
	
	if(!empty($username))
	{
		$query = mysql_query("SELECT * FROM visitor WHERE Vis_Uname='$username'");
		$username_result = mysql_num_rows($query);
		
		if($username_result==0)
		{
			echo "Username Available";
		}
		else if($username_result!=0)
		{
			echo "Sorry, That username is taken";
		}
	}
}

?>