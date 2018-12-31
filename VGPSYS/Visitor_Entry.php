<!DOCTYPE html>
<html>
<head>
	<title>Scroll</title>
	<link rel="stylesheet" type="text/css" href="Design.css">
	
	<script type="text/javascript">
	var fistInput = document.getElementById("first").value;
var secondInput = document.getElementById("second").value;


if(firstInput === secondInput)
{
alert("both time cant be same");
}
else if(firstInput < secondInput)
{
alert("check the time");
}
else
{

}
	
	</script>
</head>
<style type="text/css">table,th,td
{
border:1px solid black ;
}
</style>

<body >
	
	
<?php
session_start();
$connect = mysql_connect("localhost","root","") or die("couldnt connect");

mysql_select_db("sysadmin")or die("couldnt connect");


$query = mysql_query("SELECT * FROM visitor WHERE Vis_Uname='{$_SESSION['user']}' ");
$numrow = mysql_num_rows($query);       

if ($numrow!='')
{
	



	while($row = mysql_fetch_array($query))
            {
			
  
			   $VISID=$row['Vis_ID'];
			   $VISNAME=$row['Vis_Name'];
			   $VISUNAME=$row['Vis_Uname'];
			   $VISPASS=$row['Vis_Pass'];
			   $VISCON=$row['Vis_Contact'];
			   $VISLOC=$row['Vis_Locality'];
			   $VISAGE=$row['Vis_Age'];
			   $VISGEN=$row['Vis_Gen'];
			   $VISEID=$row['Vis_EID'];
			   $VISLEG=$row['Vis_LegalID'];
			   $VISIMG=$row['Vis_Image'];
            }

					
			
			?>
			<body class="loginbody">
	
		<form id='Incharge_CreateVis' method='POST' action='Vis_Reg.php' class="loginform2" enctype="multipart/form-data">
			<center>
				<font face="Calibri" ><h3>
				Please Enter Following Information<br>About The Visitor
				<hr size="4" color="black" class="loginhr" width="260"></h3>
			</font>
			
			
			
			<p align='left'>
			
			Name&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="text" name="VisUname" required class="input" maxlength="20"  value=<?php echo $VISNAME ?> readonly>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			Gender&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="text" name="Vis1" class="input" required value=<?php echo $VISGEN ?> readonly> &nbsp&nbsp&nbsp
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			</p>
			
			
			
			
			Username&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			
			<input type="text" name="VisUsname" id="username" required class="input" maxlength="20" value=<?php echo $VISUNAME ?> readonly>
			<div id="msg"></div>
			<br>
			
			Password&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="password" name="VisPass" required class="input" id="secret" value=<?php echo $VISPASS?> readonly><br>
			<div class='labelpass'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="radio" id="radio1" name="radio1" value="on" onchange="ShowHide();">Show
            <input type="radio" id="radio2" name="radio1" value="off" onchange="ShowHide();" checked>Hide</div><br>
			<p align ='left'>
			
			Select Age &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="text" name='VisAge' class="input"required value=<?php echo $VISAGE ?> readonly>
				
			
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			Aadhar No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input  type = "text" maxlength = "12" value=<?php echo $VISLEG ?> name="VisLegal" class="input" required  readonly><br>
			</p>
			
			<p align='left'>
			Contact No &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input value=<?php echo $VISCON ?> type = "text" maxlength = "10" name="VisContact" class="input"required readonly>
			
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			Email-ID &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="email" name="VisEID" required class="input" value=<?php echo $VISEID ?> readonly><br>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			</p>
			
			<p align='left'>
			Locality &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="text" class="inputadd" name="VisAdd" required value=<?php echo $VISLOC ?> readonly>
			
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			Purpose &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="text" name="Vispup" required class="inputadd" ><br>
			
			</p>
			<br>
			<p align='left'>
			Entering time&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="time" class="loginselect" name="time1" id="first" required />
			
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			Leaving time &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="time" name="time2" required class="loginselect" id="second" /><br><br>
			
			</p>
			
			<p align='left'>
			<table style='width:710px' border=0 align='middle'>
				
				<tr>
					<td> Select Department </td>
					<td><select id="deptdd" name="VisDept" onChange="change_dropdown()" class="loginselect">

						<option>Select Dept</option>
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
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
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					</td>
					
					<td>
					
					
					Select Staff&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </td>
					<td>
					  <div id="facname">
						<select name="VisStaff" class="loginselect">
						<option>Select Staff</option>
						</select>
					  </div>
					</td>
				</tr>
			</p>
			
			</table>
			<input type="text" name="VisID" required style=visibility:hidden class="input" maxlength="20"  value=<?php echo $VISID ?>>
			<input type="text" name="VisIMG" required style=visibility:hidden class="input" maxlength="20"  value=<?php echo $VISIMG ?>>
			<br><br>
			
			<input type="submit" name="submit" class="uloginsubmit"  value="Confirm Registration"></input>
			</center>
			<span id="result"></span>	
		</form>
		
		<?php		
        }


     ?>
</center>;
	
</body>
</html>

        

