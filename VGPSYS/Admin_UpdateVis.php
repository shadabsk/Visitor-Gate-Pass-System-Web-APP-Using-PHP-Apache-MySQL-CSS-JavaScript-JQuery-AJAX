<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<body>
<div id="disp_data1"></div>

<br><br><br><br><br><br><br>

<input type="button" id="button1" value="View Visitor" class="showbutton" onclick="disp_data1();" >

</form>
<script type="text/javascript" >

disp_data1();
function disp_data1()
{
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET","Admin_UpdateVis1.php?status=disp",false);
  xmlhttp.send(null);
  document.getElementById("disp_data1").innerHTML=xmlhttp.responseText;

}

function edit1(a)
{
Unameid="Uname"+a;
txtUnameid="txtUname"+a;
var Uname=document.getElementById(Unameid).innerHTML;
document.getElementById(Unameid).innerHTML="<input type='text' value='"+Uname+"' id='"+txtUnameid+"'>";

Ucontactid="Ucontact"+a;
txtUcontactid="txtUcontact"+a;
var Ucontact=document.getElementById(Ucontactid).innerHTML;
document.getElementById(Ucontactid).innerHTML="<input type='text' value='"+Ucontact+"' id='"+txtUcontactid+"'>";

Uaddid="Uadd"+a;
txtUaddid="txtUadd"+a;
var Uadd=document.getElementById(Uaddid).innerHTML;
document.getElementById(Uaddid).innerHTML="<input type='text' value='"+Uadd+"' id='"+txtUaddid+"'>";

Uageid="Uage"+a;
txtUageid="txtUage"+a;
var Uage=document.getElementById(Uageid).innerHTML;
document.getElementById(Uageid).innerHTML="<input type='text' value='"+Uage+"' id='"+txtUageid+"'>";

UEIDid="UEID"+a;
txtUEIDid="txtUEID"+a;
var UEID=document.getElementById(UEIDid).innerHTML;
document.getElementById(UEIDid).innerHTML="<input type='text' value='"+UEID+"' id='"+txtUEIDid+"'>";

updateid="update"+a;
document.getElementById(a).style.visibility="hidden";
document.getElementById(updateid).style.visibility="visible";


}


function bb1(b)
{
var Unameid="txtUname"+b;
var Uname=document.getElementById(Unameid).value;

var Ucontactid="txtUcontact"+b;
var Ucontact=document.getElementById(Ucontactid).value;

var Uaddid="txtUadd"+b;
var Uadd=document.getElementById(Uaddid).value;

var Uageid="txtUage"+b;
var Uage=document.getElementById(Uageid).value;

var UEIDid="txtUEID"+b;
var UEID=document.getElementById(UEIDid).value;



update_value(b,Uname,Ucontact,Uadd,Uage,UEID);


document.getElementById(b).style.visibility="visible";
document.getElementById("update"+b).style.visibility="hidden";
document.getElementById("Uname"+b).innerHTML=Uname;
document.getElementById("Ucontact"+b).innerHTML=Ucontact;
document.getElementById("Uadd"+b).innerHTML=Uadd;
document.getElementById("Uage"+b).innerHTML=Uage;
document.getElementById("UEID"+b).innerHTML=UEID;


}


function update_value(id,Uname,Upass,Ucontact,Uadd,Uage,UEID,Ushift)
{
var xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET","Admin_UpdateVis1.php?id="+id+"&Uname="+Uname+"&Ucontact="+Ucontact+"&Uadd="+Uadd+"&Uage="+Uage+"&UEID="+UEID+"&status=update",false);
  xmlhttp.send(null);
}


function deletee(id)
{
var xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET","Admin_UpdateVis1.php?id="+id+"&status=delete",false);
  xmlhttp.send(null);
  disp_data1();
}

function ins()
{

var Unm=document.getElementById("t1").value;
var Ups=document.getElementById("t2").value;
var Ucn=document.getElementById("t3").value;
var Uad=document.getElementById("t4").value;
var Uag=document.getElementById("t5").value;
var UED=document.getElementById("t6").value;
var Usf=document.getElementById("t7").value;

var xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET","Admin_UpdateVis1.php?Unm="+Unm+"&Ups="+Ups+"&Ucn="+Ucn+"&Uad="+Uad+"&Uag="+Uag+"&UED="+UED+"&Usf="+Usf+"&status=ins",false);
  xmlhttp.send(null);


disp_data1();

document.getElementById("t1").value="";
document.getElementById("t2").value="";
document.getElementById("t3").value="";
document.getElementById("t4").value="";
document.getElementById("t5").value="";
document.getElementById("t6").value="";
document.getElementById("t7").value="";
}


</script>