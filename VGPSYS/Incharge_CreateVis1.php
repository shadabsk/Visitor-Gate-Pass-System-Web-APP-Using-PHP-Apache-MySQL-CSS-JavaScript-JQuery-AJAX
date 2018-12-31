<!DOCTYPE html>
<html>
	<head>
		<title>Incharge Dashboard</title>
		<link rel="stylesheet" type="text/css" href="Design.css">
			
		<script src="jquery.js" type="text/JavaScript" language="javascript"></script>
        <script src="jquery.PrintArea.js" type="text/JavaScript" language="javascript"></script>
		<script type="text/javascript" src="js/loadPage.js"></script>	
			<script type="text/javascript" src="js/changeDropDown.js"></script>
			<script type="text/javascript" src="js/remove.js"></script>
			<script type="text/javascript" src='js/showpass.js'></script>
			<script type="text/javascript" src="js/update.js"></script>	
 	
	<script type="text/javascript" src="js/checkUser.js"></script>	

		<script type="text/javascript">
        <!--
setTimeout(function(){
    document.getElementById('info-message').style.display = 'none';
  }, 2000);
  
$(document).ready(function(){
         $("#print_button2").click(function(){
            var mode = 'iframe'; // popup
            var close = mode == "popup";
            var options = { mode : mode, popClose : close};
            $("div.content").printArea( options );
        });
    });

        //-->
        </script>
		
			
	</head>
	
	<body class="dashbody">
	
		<div class="dashright" id='anotherdiv'>
		
		<?php
session_start();
error_reporting(0);
require "connect.php";
$VISUNAME=$_POST['VisUname'];
$VISUSNAME=$_POST['VisUsname'];
$VISPASS=$_POST['VisPass'];
$VISCONTACT=$_POST['VisContact'];
$VISADD=$_POST['VisAdd'];
$VISAGE=$_POST['VisAge'];
$VISGEN=$_POST['Vis1'];
$VISEID=$_POST['VisEID'];
$TIME1=$_POST['time1'];
$TIME2=$_POST['time2'];
$VISLEGAL=$_POST['VisLegal'];
$VISDEPT=$_POST['VisDept'];
$VISSTAFF=$_POST['VisStaff'];
$VISPUP=$_POST['Vispup'];
$SUBMIT = $_POST['submit'];
if(isset($SUBMIT))
{
	
$qr=mysql_query("update visitor set Vis_Name='$VISUNAME',Vis_Uname='$VISUSNAME',Vis_Pass='$VISPASS',Vis_Contact='$VISCONTACT',Vis_Locality='$VISADD',Vis_Age='$VISAGE',Vis_Gen='$VISGEN',Vis_EID='$VISEID',Vis_Enter='$TIME1',Vis_Leave='$TIME2',Vis_Date=now(),Vis_LegalID='$VISLEGAL',Vis_Sdept='$VISDEPT',Staff_Name='$VISSTAFF',Purpose='$VISPUP',Vinc_Name='{$_SESSION['user']}' where Vis_Name=''");
if ($qr)
{
	?>
	
		<body class="loginbody">
	
		<form id='Incharge_CreateVis' method='POST' action='Incharge_CreateVis1.php' class="loginform2" enctype="multipart/form-data">
			<center>
				<font face="Calibri" ><h3>
				Please Enter Following Information<br>About The Visitor
				<hr size="4" color="black" class="loginhr" width="260"></h3>
			</font>
			
			Name&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="text" name="VisUname" required class="input" maxlength="20" pattern="[a-zA-Z]{4,}" title="Please Enter Proper Name With Alphbets Only"/>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			
			Gender&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="radio" name="Vis1" value="Male" required />&nbsp&nbspMale
			<input type="radio" name="Vis1" value="Female" required />&nbsp&nbspFemale<br><br>
			
			Username&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			
			<input type="text" name="VisUsname" id="username" required class="input" maxlength="20" pattern="[a-zA-Z1-9]{4,}" title="Please Enter atleast 4 character" onkeyup="chckUserfun(this.value)"/>
			<div id="msg"></div>
			<br>
			
			Password&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="password" name="VisPass" required class="input" id="secret" maxlength="20" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"/><br>
			<div class='labelpass'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="radio" id="radio1" name="radio1" value="on" onchange="ShowHide();">Show
            <input type="radio" id="radio2" name="radio1" value="off" onchange="ShowHide();" checked>Hide</div><br>
			
			
			Select Age &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<select name='VisAge' class="loginselect"required>
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
			
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			Aadhar No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input  type = "text" maxlength = "12" pattern="[0123456789][0-9]{11}" title="Please Enter Correct Number must be of 12 digit" name="VisLegal" class="input"required /><br>
			
			Contact No &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input pattern="[789]{1}[0-9]{9}" title="Please Enter Correct Phone Number In Format 9999999999" type = "text" maxlength = "10" name="VisContact" class="input"required />
			
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			Email-ID &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="email" name="VisEID" required class="input" pattern="[a-zA-z0-9]{3,}@[a-z]{3,}.[a-z]{2,3}"/><br>
			
			Locality&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="text" class="inputadd" name="VisAdd" required />
			
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			Purpose &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="text" name="Vispup" required class="inputadd" /><br>
			
			Entering time&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="time" class="loginselect" name="time1" required />
			
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			Leaving time &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="time" name="time2" required class="loginselect" /><br><br>
			
			<table style='width:710px'>
				
				<tr>
					<td> Select Department &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
					<td><select id="deptdd" name="VisDept" onChange="change_dropdown()" class="loginselect">
						<option>Select Dept</option>
					
						<?php
						require "connect.php";
						$query = mysql_query("SELECT * FROM admin_staff");
						$query = mysql_query("SELECT distinct Staff_Dept from admin_Staff");
						while($row = mysql_fetch_array($query))
						{
						?>
						<option value="<?php echo $row['Staff_Dept']; ?>"><?php echo $row['Staff_Dept']; ?></option>
						<?php
						}
						?>
						</select>
					</td>
					
					<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSelect Staff&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
					<td>
					  <div id="facname">
						<select name="VisStaff" class="loginselect">
						<option>Select Staff</option>
						</select>
					  </div>
					</td>
				</tr>
			
			
			</table><br><br>
			<input type="button" value="Verify Contact" class="smsbutton" onclick="MyWindow=window.open('way2vis.php','MyWindow',width=720,height=120); return false;"></input>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="button" value="Take Photo" class="takephotobutton" onclick="MyWindow=window.open('camera2.html','MyWindow',width=720,height=120); return false;"></input>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="button" value="Send SMS" class="smsbutton" onclick="MyWindow=window.open('way2.php','MyWindow',width=720,height=120); return false;"></input><br><br>
		
			
			
		<?php echo"<input type='readonly' disabled='disabled' name='l1' style='visibility:hidden' value=".$_SESSION['user'].">";?>
	
			<input type="submit" name="submit" class="uloginsubmit"  value="Create Visitor"></input>
			
			
	
			
			
	
			<p id="info-message">Registered Successfully</p>
								<?php
	
}
else{
echo "not inserted".mysql_error();
}
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
				<input type="button" value="Home" class="dashbutton "onclick=" load('anotherdiv', 'Dashhome_Incharge.php');"><br><hr class="dashhr">
				<input type="button" value="Create Visitor" class="dashbutton "onclick=" load('anotherdiv', 'Incharge_CreateVis.php');"><br><hr class="dashhr">
				<input type="button" value="Existing Visitor" class="dashbutton "onclick=" load('anotherdiv', 'Existing_Visitor.php');"><br><hr class="dashhr">
				<input type="button" value="View Visitor Report" class="dashbutton" onclick=" load('anotherdiv', 'View_VisitorInc1.php');"><br><hr class="dashhr">
				<input type="button" value="Print Visitor Pass" class="dashbutton" onclick=" load('anotherdiv', 'Passgen.php');"><br><hr class="dashhr">
				<a href="Logout.php"><input type="button" value="Log Out" class="dashbutton" ><br><hr class="dashhr"></a>
			</div>
		</div>
	</body>
</html>