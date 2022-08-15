<?php
session_start();
$id_dosen=$_POST["id_dosen"]; //menangkap data yang di parsing
$username=$_POST["username"];
$password=$_POST["password"];

mysql_connect("localhost","root","");
mysql_select_db("db_webakademis_php");

$rs=mysql_fetch_array(mysql_query("select * from admin where id_dosen='$id_dosen'"));
$rs2=mysql_fetch_array(mysql_query("select * from admin where username='$username'"));
if ($rs2)
{
	echo "<script>alert('Username yang digunakan sudah dipakai oleh yang lain');</script>";
	include "i_admin.php";
}
if ($rs)
{
	echo "<script>alert('ID Dosen Sudah Ada');</script>";
	include "i_admin.php";
}
else
{

	$query = "insert into admin(id_dosen,username,password_admin) values ('$id_dosen','$username','$password')";
	//echo $query;
	$hasil = mysql_query($query);
}


if ($hasil)
{
	include "sadmin.php";
}
?>
