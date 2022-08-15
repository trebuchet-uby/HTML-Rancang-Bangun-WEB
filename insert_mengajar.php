<?php
session_start();
$id_matkul=$_POST["id_matkul"]; //manangkap data yang di parsing
$id_dosen=$_POST["id_dosen"];


mysql_connect("localhost","root","");
mysql_select_db("db_webakademis_php");

$a=mysql_fetch_array(mysql_query("select * from mata_kuliah where id_matkul = '$id_matkul '"));
$b=mysql_fetch_array(mysql_query("select * from dosen where id_dosen = '$id_dosen '"));
if ($rs)
{
	echo "<script>alert('Data Sudah Ada');</script>";
	include "i_mengajar.php";
}
else
{
	if($a AND $b)
	{
		$query = "insert into mengajar(id_dosen,id_matkul) values ('$id_dosen','$id_matkul')";
		$hasil = mysql_query($query);
	}
	else
	{
		echo "<script>alert('Data Mata Kuliah atau Dosen Tidak ada di Tabel');</script>";
		include "i_mengajar.php";
	}
}


if ($hasil)
{
	include "smengajar.php";
}
?>

