<!DOCTYPE html>



<?php require'connect.php'; 
session_start();
if(isset($_SESSION['user'])){}
else
	header('Location: http://localhost/VGPSYS/login.php')
?>
<html>
	<head>
		<title>Admin Dashboard</title>
		<link rel="stylesheet" type="text/css" href="Design.css">
		<script type="text/javascript" src="js/loadPage.js"></script>	
			<script type="text/javascript" src="js/changeDropDown.js"></script>
			
			<script type="text/javascript" src='js/showpass.js'></script>
			
			
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
			
			
			<script type="text/javascript">
			disp_data();
function disp_data()
{
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET","update.php?status=disp",false);
  xmlhttp.send(null);
  document.getElementById("disp_data").innerHTML=xmlhttp.responseText;

}


function aa(a)
{
Unameid="Uname"+a;
txtUnameid="txtUname"+a;
var Uname=document.getElementById(Unameid).innerHTML;
document.getElementById(Unameid).innerHTML="<input type='text' value='"+Uname+"' id='"+txtUnameid+"'>";

Upassid="Upass"+a;
txtUpassid="txtUpass"+a;
var Upass=document.getElementById(Upassid).innerHTML;
document.getElementById(Upassid).innerHTML="<input type='text' value='"+Upass+"' id='"+txtUpassid+"'>";

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

Ushiftid="Ushift"+a;
txtUshiftid="txtUshift"+a;
var Ushift=document.getElementById(Ushiftid).innerHTML;
document.getElementById(Ushiftid).innerHTML="<input type='text' value='"+Ushift+"' id='"+txtUshiftid+"'>";


updateid="update"+a;
document.getElementById(a).style.visibility="hidden";
document.getElementById(updateid).style.visibility="visible";


}


function bb(b)
{
var Unameid="txtUname"+b;
var Uname=document.getElementById(Unameid).value;

var Upassid="txtUpass"+b;
var Upass=document.getElementById(Upassid).value;

var Ucontactid="txtUcontact"+b;
var Ucontact=document.getElementById(Ucontactid).value;

var Uaddid="txtUadd"+b;
var Uadd=document.getElementById(Uaddid).value;

var Uageid="txtUage"+b;
var Uage=document.getElementById(Uageid).value;

var UEIDid="txtUEID"+b;
var UEID=document.getElementById(UEIDid).value;

var Ushiftid="txtUshift"+b;
var Ushift=document.getElementById(Ushiftid).value;



update_value(b,Uname,Upass,Ucontact,Uadd,Uage,UEID,Ushift);


document.getElementById(b).style.visibility="visible";
document.getElementById("update"+b).style.visibility="hidden";


document.getElementById("Uname"+b).innerHTML=Uname;
document.getElementById("Upass"+b).innerHTML=Upass;
document.getElementById("Ucontact"+b).innerHTML=Ucontact;
document.getElementById("Uadd"+b).innerHTML=Uadd;
document.getElementById("Uage"+b).innerHTML=Uage;
document.getElementById("UEID"+b).innerHTML=UEID;
document.getElementById("Ushift"+b).innerHTML=Ushift;


}


function update_value(id,Uname,Upass,Ucontact,Uadd,Uage,UEID,Ushift)
{
var xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET","update.php?id="+id+"&Uname="+Uname+"&Upass="+Upass+"&Ucontact="+Ucontact+"&Uadd="+Uadd+"&Uage="+Uage+"&UEID="+UEID+"&Ushift="+Ushift+"&status=update",false);
  xmlhttp.send(null);
}


function delete1(id)
{
var xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET","update.php?id="+id+"&status=delete",false);
  xmlhttp.send(null);
  disp_data();
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
  xmlhttp.open("GET","update.php?Unm="+Unm+"&Ups="+Ups+"&Ucn="+Ucn+"&Uad="+Uad+"&Uag="+Uag+"&UED="+UED+"&Usf="+Usf+"&status=ins",false);
  xmlhttp.send(null);


disp_data();

document.getElementById("t1").value="";
document.getElementById("t2").value="";
document.getElementById("t3").value="";
document.getElementById("t4").value="";
document.getElementById("t5").value="";
document.getElementById("t6").value="";
document.getElementById("t7").value="";

}

disp_data();
function disp_data()
{
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET","update.php?status=disp",false);
  xmlhttp.send(null);
  document.getElementById("disp_data").innerHTML=xmlhttp.responseText;

}


function aa(a)
{
Unameid="Uname"+a;
txtUnameid="txtUname"+a;
var Uname=document.getElementById(Unameid).innerHTML;
document.getElementById(Unameid).innerHTML="<input type='text' value='"+Uname+"' id='"+txtUnameid+"'>";

Upassid="Upass"+a;
txtUpassid="txtUpass"+a;
var Upass=document.getElementById(Upassid).innerHTML;
document.getElementById(Upassid).innerHTML="<input type='text' value='"+Upass+"' id='"+txtUpassid+"'>";

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

Ushiftid="Ushift"+a;
txtUshiftid="txtUshift"+a;
var Ushift=document.getElementById(Ushiftid).innerHTML;
document.getElementById(Ushiftid).innerHTML="<input type='text' value='"+Ushift+"' id='"+txtUshiftid+"'>";


updateid="update"+a;
document.getElementById(a).style.visibility="hidden";
document.getElementById(updateid).style.visibility="visible";


}


function bb(b)
{
var Unameid="txtUname"+b;
var Uname=document.getElementById(Unameid).value;

var Upassid="txtUpass"+b;
var Upass=document.getElementById(Upassid).value;

var Ucontactid="txtUcontact"+b;
var Ucontact=document.getElementById(Ucontactid).value;

var Uaddid="txtUadd"+b;
var Uadd=document.getElementById(Uaddid).value;

var Uageid="txtUage"+b;
var Uage=document.getElementById(Uageid).value;

var UEIDid="txtUEID"+b;
var UEID=document.getElementById(UEIDid).value;

var Ushiftid="txtUshift"+b;
var Ushift=document.getElementById(Ushiftid).value;



update_value(b,Uname,Upass,Ucontact,Uadd,Uage,UEID,Ushift);


document.getElementById(b).style.visibility="visible";
document.getElementById("update"+b).style.visibility="hidden";


document.getElementById("Uname"+b).innerHTML=Uname;
document.getElementById("Upass"+b).innerHTML=Upass;
document.getElementById("Ucontact"+b).innerHTML=Ucontact;
document.getElementById("Uadd"+b).innerHTML=Uadd;
document.getElementById("Uage"+b).innerHTML=Uage;
document.getElementById("UEID"+b).innerHTML=UEID;
document.getElementById("Ushift"+b).innerHTML=Ushift;


}


function update_value(id,Uname,Upass,Ucontact,Uadd,Uage,UEID,Ushift)
{
var xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET","update.php?id="+id+"&Uname="+Uname+"&Upass="+Upass+"&Ucontact="+Ucontact+"&Uadd="+Uadd+"&Uage="+Uage+"&UEID="+UEID+"&Ushift="+Ushift+"&status=update",false);
  xmlhttp.send(null);
}


function delete1(id)
{
var xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET","update.php?id="+id+"&status=delete",false);
  xmlhttp.send(null);
  disp_del();
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
  xmlhttp.open("GET","update.php?Unm="+Unm+"&Ups="+Ups+"&Ucn="+Ucn+"&Uad="+Uad+"&Uag="+Uag+"&UED="+UED+"&Usf="+Usf+"&status=ins",false);
  xmlhttp.send(null);


disp_data();

document.getElementById("t1").value="";
document.getElementById("t2").value="";
document.getElementById("t3").value="";
document.getElementById("t4").value="";
document.getElementById("t5").value="";
document.getElementById("t6").value="";
document.getElementById("t7").value="";

}


disp_del();
function disp_del()
{
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET","delete.php?status=disp",false);
  xmlhttp.send(null);
  document.getElementById("disp_data").innerHTML=xmlhttp.responseText;

}


			
			</script>
			
		
				</head>
	
	<body>
		<div class="dashright" id="anotherdiv">
		<img src="Admin_welcome.jpg" height="740px" width="1166px">
		</div>
	
		<div class="dashleft">
			<div class="dashleftfont">
				<input type="button" value="Home" class="dashbutton "onclick=" load('anotherdiv', 'Dashhome_Admin.php');"><br><hr class="dashhr">
				<input type="button" value="Create Incharge" class="dashbutton" onclick="load('anotherdiv', 'Admin_CreateInc.php');"><br><hr class="dashhr">
				<input type="button" value="Update Incharge" class="dashbutton" onclick="load('anotherdiv', 'Admin_UpdateInc.php');"><br><hr class="dashhr">
				<input type="button" value="Remove Incharge" class="dashbutton" onclick="load('anotherdiv', 'Admin_RemoveInc.php');"><br><hr class="dashhr">
				<input type="button" value="Remove Visitor" class="dashbutton" onclick="load('anotherdiv', 'Admin_UpdateVis.php');"><br><hr class="dashhr">	
				<input type="button" value="View Incharge Details" class="dashbutton" onclick="load('anotherdiv', 'Admin_ViewIncharge.php');"><br><hr class="dashhr">
				<input type="button" value="View Visitor Report" class="dashbutton" onclick="load('anotherdiv', 'View_Visitor.php');"><br><hr class="dashhr">
				<input type="button" value="Staff Registration" class="dashbutton" onclick="load('anotherdiv', 'Admin_CreateStaff.php');"><br><hr class="dashhr">
				
				<a href="Logout.php"><input type="button" value="Log Out" class="dashbutton" ><br><hr class="dashhr"></a>
			</div>
		</div>
	</body>
</html>