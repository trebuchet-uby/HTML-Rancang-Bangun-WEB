<?php
session_start();

$USERNAME=$_POST['NIM'];
$PASSWORD=$_POST['PASSWORD'];
include "db_connection.php";

$query="SELECT NIM_MHS,PASSWORD FROM mahasiswa WHERE NIM_MHS='$USERNAME' and PASSWORD='$PASSWORD'";
$result=mysql_query($query);
if($data=mysql_fetch_array($result)) 
	{
		$_SESSION['logged-mhs-in'] = true;
		$_SESSION['NIM_MHS'] = $_POST['NIM'];
		header('Location: user_homepage.php');
	}
	else if($USERNAME=="" or $PASSWORD="")
	{
		$_SESSION['kosong']='kosong';
		header ('Location: index.php');		
	}
	else
	{
		$_SESSION['salah']='salah';
		header ('Location: index.php');
	}
?>