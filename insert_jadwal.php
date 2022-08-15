<?php
session_start();
$id_matkul=$_POST["id_matkul"];
$id_ruangan=$_POST["id_ruangan"]; //manangkap data yang di parsing
$hari=$_POST["hari"];
$jam=$_POST["jam"];
$status = $_POST["status"];

mysql_connect("localhost","root","");
mysql_select_db("db_webakademis_php");

$rs=mysql_fetch_array(mysql_query("select * from jadwal where id_matkul='$id_matkul' and id_ruangan='$id_ruangan'"));
$a=mysql_fetch_array(mysql_query("select * from mata_kuliah where id_matkul = '$id_matkul '"));
$b=mysql_fetch_array(mysql_query("select * from ruangan where id_ruangan = '$id_ruangan '"));
if ($rs)
{
	echo "<script>alert('Data Sudah Ada');</script>";
	include "i_jadwal.php";
}
else
{
	if($a AND $b)
	{
		$query = "insert into jadwal(id_ruangan,id_matkul,hari,jam,STATUS) values ('$id_ruangan','$id_matkul','$hari','$jam','$status')";
		$hasil = mysql_query($query); 
	}
	else
	{
		echo "<script>alert('Data Mata Kuliah atau Ruangan Tidak ada di Tabel');</script>";
		include "i_jadwal.php";
	}
}


if ($hasil)
{
	include "sjadwal.php";
}
?>
