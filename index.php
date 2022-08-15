<?php
	session_start();
	
	if (isset($_SESSION['USERNAME'])) 
	{
		
		header('Location: admin_homepage.php');
	}
?>

<html>
<title>
		Admin Login Page
	</title>
<head>
<script language="javascript" type="text/javascript" src="niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="css/niceforms-default.css" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>

<body>
<div id="header">
	<div class="shell">
		<!-- Logo + Top Nav -->
		<div id="top"><br>
			<img src = "css/images/STMIKKianSantang.png">
			<div id="top-navigation">
			</div>
		</div>
		<!-- End Logo + Top Nav -->
<br><br><br><br><br><br><br><br><br>
<div id="headerlogin">

	<div class="header_login">
   
    </div>
<div class="login_form">
<center><table >
<tr align='center'>
	<td height='20px'><font face='Verdana' size='4' color='#a7432b' align='center'>---LOGIN ADMIN---</td>
</tr>
<tr>
	<td>
		<form class="niceform" name='LOGIN' method='post' action="adminValidate.php">
		<table border=0>
		<tr>
			<td width='90px'><label>Username: </label></td>
			<td>
				<input size="35" type='text' name='USERNAME' >
			</td>
		</tr>
		<br>
		<tr>
			<td><label>Password:</label> </td>
			<td>
				<input size="35" type='password' name='PASSWORD_ADMIN'>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type='SUBMIT' name='SUBMIT' value='LOGIN'>
			</td>
		</tr>
		</table></form></td>
</tr>
</table></center>
         </div>  
</div>	
</div>  
</div>	
<?php
    if(isset($_SESSION['kosong']))
	{
	unset($_SESSION['kosong']);
	echo"<script>alert('username or password must be insert')</script>";
	}

	
	if(isset($_SESSION['salah']))
	{
	unset($_SESSION['salah']);
	echo"<script>alert('username or password is wrong')</script>";
	}
?>

</body>
</html>