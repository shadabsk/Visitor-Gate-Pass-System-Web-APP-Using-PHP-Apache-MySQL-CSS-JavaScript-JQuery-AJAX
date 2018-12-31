<?php
$connect=mysql_connect('localhost','root','') or die ("mysql_error()");
$database=mysql_select_db("sysadmin") or die (mysql_error());
//set random name for the image, used time() for uniqueness

$filename =  time() . '.jpg';
$filepath = 'Images/visitor/';
//read the raw POST data and save the file with file_put_contents()
$result = file_put_contents( $filepath.$filename, file_get_contents('php://input') );

if (!$result) {
	print "ERROR: Failed to write data to $filename, check permissions\n";
	exit();
}

$rs= $filepath.$filename;
echo $rs;

$sql=mysql_query("Insert into visitor values('','','','','','','','','','','',now(),'','','','','$rs','')");


?>

