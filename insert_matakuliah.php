<?php
session_start();
$id_matkul=$_POST["id_matkul"]; //menangkap data yang di parsing
$NAMA_MATKUL=$_POST["NAMA_MATKUL"]; //manangkap data yang di parsing
$sks_matkul=$_POST["sks_matkul"];
$semester=$_POST["semester"];

mysql_connect("localhost","root","");
mysql_select_db("db_webakademis_php");

$rs=mysql_fetch_array(mysql_query("select * from mata_kuliah where id_matkul='$id_matkul'"));
if ($rs)
{
	echo "<script>alert('Data Sudah Ada');</script>";
	include "i_matakuliah.php";
}
else
{
 $query = "insert into mata_kuliah(id_matkul,NAMA_MATKUL,sks_matkul,semester) values ('$id_matkul','$NAMA_MATKUL','$sks_matkul','$semester')";
 $hasil = mysql_query($query);
 
}

if ($hasil)
{
	include "smatakuliah.php";
}
?>