<html>
	<head>
		<title>User Login</title>
		
	<!DOCTYPE html>
<html>
<head>
<style>


.button1 {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
	cursor:pointer;
	width:300px;
	font-family:TIMESNEWROMAN;
	font-size:30px;
	border-radius:50px
	
}

.button1:hover {
    background-color: #4CAF50;
    color: white;
}


.button3 {
    background-color: white; 
    color: black; 
    border: 2px solid #f44336;
	cursor:pointer;
	width:300px;
	font-family:TIMESNEWROMAN;
	font-size:30px;
	border-radius:50px
}

.button3:hover {
    background-color: #f44336;
    color: white;
}

.button-container form,
.button-container form div {
    display: inline;
}

.button-container button {
    display: inline;
    vertical-align: middle;
}

body{
background-color:rgb(0,255,170);
}
</style>

	</head>
	
	<body>
<center>
<font face="Calibri"><h3>
<img src='logo.JPG'></img>
<br><br>
					Please Select your login type
				<hr size="4" color="black" class="loginhr" width="260">
			</h3></font>

			<div class="button-container">
			<form action="login.php">
<div>
<button style=height:300px class="button1">Admin/Incharge Login</button>
</div>
</form>

<form action="loginvis.php">
<div>
<button style=height:300px class="button3">Visitor Login</button>
</div>
</form>


		</div>
		
			<!--<script type="text/javascript" src="jquery-1.8.1.min.js" ></script>
<script type="text/javascript" src="my_script.js" ></script>-->

	</body>
</html>