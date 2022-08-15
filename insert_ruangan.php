<?php
session_start();
$id_ruangan=$_POST["id_ruangan"]; //manangkap data yang di parsing
$nama_ruangan=$_POST["nama_ruangan"];

mysql_connect("localhost","root","");
mysql_select_db("db_webakademis_php");

$rs=mysql_fetch_array(mysql_query("select * from ruangan where id_ruangan='$id_ruangan'"));
if ($rs)
{
	echo "<script>alert('Data Sudah Ada');</script>";
	include "i_ruangan.php";
}
else
{
	$query = "insert into ruangan(id_ruangan,nama_ruangan) values ('$id_ruangan','$nama_ruangan')";
	$hasil = mysql_query($query);
}


if ($hasil)
{
	include "sruangan.php";
}
?>


