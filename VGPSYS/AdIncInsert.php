<?php
$INUNAME=$_POST['InUname'];
$INPASS=$_POST['InPass'];
$INCONTACT=$_POST['InContact'];
$INADD=$_POST['InAdd'];
$INAGE=$_POST['InAge'];
$INEID=$_POST['InEID'];
$INSHIFT=$_POST['InShift'];
$SUBMIT = strip_tags($_POST['submit']);
if($SUBMIT)
{
$connect=mysql_connect('localhost','root','') or die ("mysql_error()");
$database=mysql_select_db("sysadmin") or die (mysql_error());
$qr=mysql_query("INSERT INTO incharge VALUES ('$INUNAME','$INPASS','$INCONTACT','$INADD','$INAGE','$INEID','$INSHIFT')");
if ($qr)
{
/*echo "Successfully Registered";
echo ""*/

}
else{
echo "not inserted".mysql_error();
}
}
?>