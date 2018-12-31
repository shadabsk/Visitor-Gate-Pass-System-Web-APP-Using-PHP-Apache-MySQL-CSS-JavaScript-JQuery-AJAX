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
		<?php
error_reporting(0);
require "connect.php";
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$con=$_POST['cno'];
$dob=$_POST['dob'];
$gen=$_POST['gender'];
$age=$_POST['age'];
$blg=$_POST['bg'];
$emno=$_POST['Emno'];
$eid=$_POST['eid'];
$preadd=$_POST['preadd'];
$city=$_POST['city'];
$state=$_POST['state'];
$country=$_POST['country'];
$padd=$_POST['padd'];
$bname=$_POST['bname'];
$dept=$_POST['Dept'];
$shift=$_POST['Shift'];
$acno=$_POST['acno'];
$pcno=$_POST['pcno'];
$adno=$_POST['adno'];
$qua=$_POST['qua'];
$yop=$_POST['yop'];
$per=$_POST['per'];
$uni=$_POST['uni'];
if(isset($_POST['submit']))
{
	$qr=mysql_query("update admin_staff set Staff_Uname='$fname',Middle_Name='$mname',Lname='$lname',Contact='$con',DOB='$dob',Gender='$gen',Age='$age',BloodGroup='$blg',EmergencyNo='$emno',Email_ID='$eid',PresentAdd='$preadd',City='$city',State='$state',Country='$country',PermanentAdd='$padd',BankName='$bname',Staff_Dept='$dept',Shift='$shift',AccountNo='$acno',Pancard='$pcno',Adharcard='$adno',Qualification='$qua',YOP='$yop',Percentage='$per',University='$uni' where Staff_Uname=''");

}
if ($qr)
{
	?>
	
		<form name='Incharge_CreateVis.php' method='POST' action='Admin_CreateStaff1.php' class="loginform2" enctype="multipart/form-data">
			<center>
			<br><br><br>
				<font face="Calibri"><h3>
				Please Enter Following Information<br>About The Staff
				<hr size="4" color="black" class="loginhr" width="260"></h3>
			</font><center>
			<p align="left">
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			FirstName:
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="text" name="fname" required class="input" maxlength="20" pattern="[a-zA-Z]{4,}" title="Please Enter Proper Name With Alphbets Only">
			
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			MiddleName:
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="text" name="mname" required class="input" maxlength="20" pattern="[a-zA-Z]{4,}" title="Please Enter Proper Name With Alphbets Only"><br><br></p>
			
			<p align="left">
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			LastName:
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="lname" required class="input" maxlength="20" pattern="[a-zA-Z]{4,}" title="Please Enter Proper Name With Alphbets Only">
			
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			ContactNo:	
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input  name="cno" class='input'  pattern="[789]{1}[0-9]{9}" title="Please Enter Correct Phone Number In Format 9999999999" type = "text" maxlength = "10"  required /><br><br></p>
			<p align="left">
			
			
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			Date Of Birth:
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="date" name="dob" required  />
			
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			Gender:
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="radio" name="gender" value="male" /> Male
			<input type="radio" name="gender" value="female" /> Female<br><br></p>
			<p align="left">
			
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			Age:
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<select name='age' class="loginselect" required>
				<option></option>
				<option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option>
				<option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option>
				<option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option>
				<option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option><option>32</option>
				<option>33</option><option>34</option><option>35</option><option>36</option><option>37</option><option>38</option><option>39</option><option>40</option>
				<option>41</option><option>42</option><option>43</option><option>44</option><option>45</option><option>46</option><option>47</option><option>48</option>
				<option>49</option><option>50</option><option>51</option><option>52</option><option>53</option><option>54</option><option>55</option><option>56</option>
				<option>57</option><option>58</option><option>59</option><option>60</option><option>61</option><option>62</option><option>63</option><option>64</option>
				<option>65</option><option>66</option><option>67</option><option>68</option><option>69</option><option>70</option><option>71</option><option>72</option>
				<option>73</option><option>74</option><option>75</option><option>76</option><option>77</option><option>78</option><option>79</option><option>80</option>
				<option>81</option><option>82</option><option>83</option><option>84</option><option>85</option><option>86</option><option>87</option><option>88</option>
				<option>89</option><option>90</option><option>91</option><option>92</option><option>93</option><option>94</option><option>95</option><option>96</option>
				<option>97</option><option>98</option><option>99</option><option>100</option><option>101</option><option>102</option><option>103</option><option>104</option>
				<option>105</option><option>106</option><option>107</option><option>108</option><option>109</option><option>110</option><option>111</option><option>112</option>
				<option>113</option><option>114</option><option>115</option><option>116</option><option>117</option><option>118</option><option>119</option><option>120</option><option>121</option><option>122</option>
			</select>
			
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			BloodGroup:
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="text" name="bg" required class='input' ><br><br></p>
			<p align="left">
			
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			EmergencyNo:
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input name="Emno" required  pattern="[789]{1}[0-9]{9}" title="Please Enter Correct Phone Number In Format 9999999999"  type = "text"  maxlength = "10" class='input' />
			
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			Email_ID:
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="email" name="eid" required pattern="[a-zA-z0-9]{3,}@[a-z]{3,}.[a-z]{2,3}" title="Please Enter Valid Email support@example.com" class='input'><br><br></p>
			<p align="left">
			
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			PresentAddress:
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="text" name="preadd" required class='inputadd'>
			
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			City:
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="text" name="city" required class='inputadd'><br><br></p>
			<p align="left">
			
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			State:
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="text" name="state" required class='inputadd'>
			
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			Country:
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="text" name="country" required class='inputadd'><br><br></p>
			<input type="button" value="Take Photo" class="takephotobutton" onclick="MyWindow=window.open('camera.html','MyWindow',width=720,height=120); return false;"></input>
			
			<p align="left">
			
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			Permanent Address:
			&nbsp&nbsp&nbsp&nbsp
			<input type="text" name="padd" required class='inputadd'>
			
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			BankName:
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="text" name="bname" maxlength="20" pattern="[a-zA-Z]{3,}" title="Please Enter Proper Name With Alphbets Only" class="input" required></p>
			
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<p align="left">
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			Department:
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<select name="Dept" style="max-width: 100px"; required class="loginselect">
				<option>Department</option>
				<option>Computer</option>
				<option>Mechanical</option>
				<option>Civil</option>
				<option>Electronic</option>
				<option>EJ</option>
				</select>
				
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			Shift:
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<select name="Shift" required class="loginselect"><br>
				<option>Shift</option>
				<option>Shift1</option>
				<option>Shift2</option>
			</select></p>
			<p align="left">

						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			AccountNo:
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="Number" name="acno" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
    maxlength = "16" required class='input' />
			
			
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			Pancard:
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="text" name="pcno" required class='input' maxlength="10" pattern="[a-zA-Z1-9]{10,}" title="Please Enter atleast 10 digits"/><br></p>
			<p align="left">
			
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			AdharCard:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input  type = "text" maxlength = "12" pattern="[0123456789][0-9]{11}" title="Please Enter Correct Number must be of 12 digit" name="adno" class="input"required />
			
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			Qualification:
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="text" name="qua"   class='input' required/><br></p>
			<p align="left">
			
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			Year Of Passing:&nbsp&nbsp&nbsp
			<input type="date" name="yop" required >
			
			&nbsp&nbsp
			Percentage:
			&nbsp&nbsp&nbsp
			<input type="number" max-lenght="5" name="per" required class='input'>
			
			&nbsp&nbsp
			University:&nbsp&nbsp&nbsp<input type="text" name="uni" required class='input'><br><br></p>
			<input type="submit" name="submit" value="Submit" class="loginsubmit">
				</center>
		



			
			<p id="info-message">Registered Successfully</p>
								<?php
	
}
else{
echo "not inserted".mysql_error();
}
?>		
<script>
  setTimeout(function(){
    document.getElementById('info-message').style.display = 'none';
  }, 2000);
</script>
			</center>
		</form>
		
		
		
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