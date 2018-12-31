`<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form name="form1" action="" method="post">
<div id="disp_data1"></div>

<input type="text" id="t1" placeholder="Sname">
<input type="text" id="t2" placeholder="Scontact">
<input type="text" id="t3" placeholder="Dept">
<input type="text" id="t4" placeholder="SEID">
<input type="text" id="t5" placeholder="SShift">
<input type="text" id="t6" placeholder="SAGE">
<input type="text" id="t7"  placeholder="SADD" >
<input type="button" id="but1" value="insert" onClick="inss();">

</form>
<script type="text/javascript">
disp_staff();
function disp_staff()
{
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET","staffupdate.php?status=disp",false);
  xmlhttp.send(null);
  document.getElementById("disp_data1").innerHTML=xmlhttp.responseText;

}


function aas(a)
{
Snameid="Sname"+a;
txtSnameid="txtSname"+a;
var Sname=document.getElementById(Snameid).innerHTML;
document.getElementById(Snameid).innerHTML="<input type='text' value='"+Sname+"' id='"+txtSnameid+"'>";


Scontactid="Scontact"+a;
txtScontactid="txtScontact"+a;
var Scontact=document.getElementById(Scontactid).innerHTML;
document.getElementById(Scontactid).innerHTML="<input type='text' value='"+Scontact+"' id='"+txtScontactid+"'>";

Deptid="Dept"+a;
txtDeptid="txtDept"+a;
var Dept=document.getElementById(Deptid).innerHTML;
document.getElementById(Deptid).innerHTML="<input type='text' value='"+Dept+"' id='"+txtDeptid+"'>";

SEIDid="SEID"+a;
txtSEIDid="txtSEID"+a;
var SEID=document.getElementById(SEIDid).innerHTML;
document.getElementById(SEIDid).innerHTML="<input type='text' value='"+SEID+"' id='"+txtSEIDid+"'>";




SAddid="SAdd"+a;
txtSAddid="txtSAdd"+a;
var SAdd=document.getElementById(SAddid).innerHTML;
document.getElementById(SAddid).innerHTML="<input type='text' value='"+SAdd+"' id='"+txtSAddid+"'>";

SAgeid="SAge"+a;
txtSAgeid="txtSAge"+a;
var SAge=document.getElementById(SAgeid).innerHTML;
document.getElementById(SAgeid).innerHTML="<input type='text' value='"+SAge+"' id='"+txtSAgeid+"'>";

SEIDid="SEID"+a;
txtSEIDid="txtSEID"+a;
var SEID=document.getElementById(SEIDid).innerHTML;
document.getElementById(SEIDid).innerHTML="<input type='text' value='"+SEID+"' id='"+txtSEIDid+"'>";

SShiftid="SShift"+a;
txtSShiftid="txtSShift"+a;
var SShift=document.getElementById(SShiftid).innerHTML;
document.getElementById(SShiftid).innerHTML="<input type='text' value='"+SShift+"' id='"+txtSShiftid+"'>";


updateid="update"+a;
document.getElementById(a).style.visibility="hidden";
document.getElementById(updateid).style.visibility="visible";


}


function bbs(b)
{
var Snameid="txtSname"+b;
var Sname=document.getElementById(Snameid).value;

var Scontactid="txtScontact"+b;
var Scontact=document.getElementById(Scontactid).value;

var Deptid="txtDept"+b;
var Dept=document.getElementById(Deptid).value;

var SEIDid="txtSEID"+b;
var SEID=document.getElementById(SEIDid).value;

var SShiftid="txtSShift"+b;
var SShift=document.getElementById(SShiftid).value;
 
var SAgeid="txtSAge"+b;
var SAge=document.getElementById(SAgeid).value;

var SAddid="txtSAdd"+b;
var SAdd=document.getElementById(SAddid).value;




update_values(b,Sname,Dept,Scontact,SAdd,SAge,SEID,SShift);


document.getElementById(b).style.visibility="visible";
document.getElementById("update"+b).style.visibility="hidden";


document.getElementById("Sname"+b).innerHTML=Sname;
document.getElementById("Scontact"+b).innerHTML=Scontact;
document.getElementById("Dept"+b).innerHTML=Dept;
document.getElementById("SEID"+b).innerHTML=SEID;
document.getElementById("SShift"+b).innerHTML=SShift;
document.getElementById("SAge"+b).innerHTML=SAge;
document.getElementById("SAdd"+b).innerHTML=SAdd;

}


function update_values(id,Sname,Dept,Scontact,SAdd,SAge,SEID,SShift)
{
var xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET","staffupdate.php?id="+id+"&Sname="+Sname+"&Dept="+Dept+"&Scontact="+Scontact+"&SAdd="+SAdd+"&SAge="+SAge+"&SEID="+SEID+"&SShift="+SShift+"&status=update",false);
  xmlhttp.send(null);
}


function delete1s(id)
{
var xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET","staffupdate.php?id="+id+"&status=delete",false);
  xmlhttp.send(null);
  disp_staff();
}

function inss()
{

var Snm=document.getElementById("t1").value;
var Scn=document.getElementById("t2").value;
var Sdp=document.getElementById("t3").value;
var SED=document.getElementById("t4").value;
var Ssf=document.getElementById("t5").value;
var Sag=document.getElementById("t6").value;
var Sad=document.getElementById("t7").value;

var xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET","staffupdate.php?Snm="+Snm+"&Scn="+Scn+"&Sdp="+Sdp+"&SED="+SED+"&Ssf="+Ssf+"&Sag="+Sag+"&Sad="+Sad+"&status=ins",false);
  xmlhttp.send(null);


disp_staff();

document.getElementById("t1").value="";
document.getElementById("t2").value="";
document.getElementById("t3").value="";
document.getElementById("t4").value="";
document.getElementById("t5").value="";
document.getElementById("t6").value="";
document.getElementById("t7").value="";

}
</script>
</body>
</html>
