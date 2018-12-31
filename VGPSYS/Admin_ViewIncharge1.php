
<!DOCTYPE html>

<?php require'connect.php'; 
session_start();
if(isset($_SESSION['user'])){}
else
	header('Location: http://localhost/VGPSYS/login.php')
?>

<html>
	<head>
		<title>Admin_Dashboard</title>
		<link rel="stylesheet" type="text/css" href="Design.css">
		
		<style>
.a:link, a:visited {
    background-color: rgb(200,0,0);
    color: white;
    padding: 14px 25px;
    text-align: center; 
    text-decoration: none;
    display: inline-block;
}

.a:hover, a:active {
    background-color: red;
}
.b{
    background-color: rgb(180,0,0);
    color: white;
    padding: 14px 25px;
    text-align: center; 
    text-decoration: none;
    display: inline-block;
}

.b:hover {
    background-color: red;
}
</style>
		
<script type="text/javascript" src="js/loadPage.js"></script>	
<script type="text/javascript" src="js/changeDropDown.js"></script>

<script type="text/javascript" src='js/showpass.js'></script>


<script src="jquery.js" type="text/JavaScript" language="javascript"></script>
<script src="jquery.PrintArea.js" type="text/JavaScript" language="javascript"></script>
<script type="text/javascript" src="js/tableExport.js"></script>
<script type="text/javascript" src="js/jquery.base64.js"></script>
<script type="text/javascript" src="js/jspdf/jspdf.js"></script>
<script type="text/javascript" src="js/jspdf/libs/sprintf.js"></script>
<script type="text/javascript" src="js/jspdf/libs/base64.js"></script>



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
			
		

<script type="text/javascript">
$(document).ready(function(e){
	$("#txt").click(function(e){
		
		$("#customers").tableExport({
			
			type:'txt',
			escape: 'false',
		});
	});
	
});
$(document).ready(function(e){
	$("#csv").click(function(e){
		
		$("#customers").tableExport({
			
			type:'csv',
			escape: 'false'
		});
	});
	
});
</script>

	</head>
	
		
		<body class="loginbody">
		<div class="dashright" id="anotherdiv">
		
	<!--	<img src="Admin_welcome.jpg" height="740px" width="1166px">-->
<?php
require "Connect.php";
$sql = "SELECT Inc_Uname FROM incharge";
$result = mysql_query($sql);
echo "<form   action='Admin_ViewIncharge1.php' method='POST' class='loginform2'>";
?>
<center>
			<font face="Calibri"><h3>
					Please Select Criteria To View Incharge Details
				<hr size="4" color="black" class="loginhr" width="260">
			</h3></font>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			Name&nbsp&nbsp&nbsp
			<?php
				
echo "<select name='Incharge' class='loginselect'>";
echo "<option>Select Incharge</option>";
while ($row = mysql_fetch_array($result))
{
    echo "<option value= ". $row['Inc_Uname'] .">".$row['Inc_Uname']."</option>";
}
echo "<input type='Submit' name='submit' class='showselect'>";
echo "</select>";
echo "</form>";
?>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
Select Shift &nbsp&nbsp&nbsp


<?php
require "Connect.php";
$sql = "SELECT distinct Inc_Shift FROM incharge";
$result = mysql_query($sql);
				
echo "<select name='Shift' class='loginselect'>";
echo "<option>Select Shift</option>";
while ($row = mysql_fetch_array($result))
{
    echo "<option value= ". $row['Inc_Shift'] .">".$row['Inc_Shift']."</option>";
}
echo "<input type='Submit' name='submit2' class='showselect'>";
echo "</select>";
echo "</form>";
?>
</center>;


	<div class="content">

		<?php
error_reporting(0);

if(isset($_POST['submit']))
$Scrol =$_POST['Incharge'];
$connect = mysql_connect("localhost","root","") or die("couldnt connect");

mysql_select_db("sysadmin")or die("couldnt connect");


$query = mysql_query("SELECT * FROM incharge WHERE Inc_Uname='$Scrol'");
$numrow = mysql_num_rows($query);       

if ($numrow!='')
{
	echo "<br>"."<br>"."<br>";
	echo"<center><table>";

echo "<table border=4 align=center id='customers'>";

echo "<th>InchargeId</th><th>InchargeName</th><th>IncPassword</th><th>Contact</th><th>InchargeAddress</th><th>IncAge</th><th>IncGender</th><th>IncEmailId</th><th>IncImage</th><th>IncShift</th><th>Date</th>";
	while($row = mysql_fetch_array($query))
            {
   echo "<tr>";
   echo "<td>".$row['Inc_ID']."</td>";
   echo "<td>".$row['Inc_Uname']."</td>";
   echo "<td>".$row['Inc_Pass']."</td>";
   echo "<td>".$row['Inc_Contact']."</td>";
   echo "<td>".$row['Inc_Add']."</td>";
   echo "<td>".$row['Inc_Age']."</td>";
   echo "<td>".$row['Inc_Gender']."</td>";
   echo "<td>".$row['Inc_EID']."</td>";
   echo "<td style=width:20px>"."<img src=".$row['Inc_Img']." width='60' height='60'>"."</td>";
   echo "<td>".$row['Inc_Shift']."</td>";
   echo "<td>".$row['Inc_Dtime']."</td>";
   echo "</tr>";
            }
echo "</table></center>";
        }


        ?>
		
		<?php
error_reporting(0);

if(isset($_POST['submit2']))
$Scrol =$_POST['Shift'];
$connect = mysql_connect("localhost","root","") or die("couldnt connect");

mysql_select_db("sysadmin")or die("couldnt connect");


$query = mysql_query("SELECT * FROM incharge WHERE Inc_Shift='$Scrol'");
$numrow = mysql_num_rows($query);       

if ($numrow!='')
{
	echo "<br>"."<br>"."<br>";
	echo"<center><table>";

echo "<table border=4 align=center id='customers'>";

echo "<th>InchargeId</th><th>InchargeName</th><th>IncPassword</th><th>Contact</th><th>InchargeAddress</th><th>IncAge</th><th>IncGender</th><th>IncEmailId</th><th>IncImage</th><th>IncShift</th><th>Date</th>";
	while($row = mysql_fetch_array($query))
            {
   echo "<tr>";
   echo "<td>".$row['Inc_ID']."</td>";
   echo "<td>".$row['Inc_Uname']."</td>";
   echo "<td>".$row['Inc_Pass']."</td>";
   echo "<td>".$row['Inc_Contact']."</td>";
   echo "<td>".$row['Inc_Add']."</td>";
   echo "<td>".$row['Inc_Age']."</td>";
   echo "<td>".$row['Inc_Gender']."</td>";
   echo "<td>".$row['Inc_EID']."</td>";
   echo "<td style=width:20px>"."<img src=".$row['Inc_Img']." width='60' height='60'>"."</td>";
   echo "<td>".$row['Inc_Shift']."</td>";
   echo "<td>".$row['Inc_Dtime']."</td>";
   echo "</tr>";
            }
echo "</table></center>";
        }


        ?>

		
</div>

		<div>
<br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 <a href="javascript:void(0);" id="print_button2" class="a">Export to PDF</a>	
<button id="txt" class="b"> Export as text </button>
<button id="csv" class="b"> Export as csv </button>
 </div>

 <script>
    $(document).ready(function(){
         $("#print_button2").click(function(){
			 
            var mode = 'iframe'; // popup
            var close = mode == "popup";
            var options = { mode : mode, popClose : close};
            $("div.content").printArea( options );
			
        });
    });

  </script>


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