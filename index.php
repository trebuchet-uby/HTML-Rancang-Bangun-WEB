<?php
	session_start();
	
	if (isset($_SESSION['NIM_MHS'])) 
	{
		
		header('Location: user_homepage.php');
	}
?>

<html>
<title>
		User Login Page
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
<div id="headerlogin">

	<div class="header_login">
   
    </div>
    <br><br><br><br><br><br><br><br><br>
<div class="login_form">
<center><table >
<tr align='center'>
	<td height='20px'><font face='Verdana' size='4' color='#a7432b' align='center'>---LOGIN MAHASISWA---</td>
</tr>
<tr>
	<td>
		<form class="niceform" name='LOGIN' method='post' action="userValidate.php">
		<table border=0>
		<tr>
			<td width='90px'><label>Username: </label></td>
			<td>
				<input size="35" type='text' name='NIM' >
			</td>
		</tr>
		<br>
		<tr>
			<td><label>Password:</label> </td>
			<td>
				<input size="35" type='password' name='PASSWORD'>
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