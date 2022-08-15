<?php
session_start();
$nim_mhs=$_POST["nim_mhs"]; //menangkap data yang di parsing
$id_matkul=$_POST["id_matkul"]; //manangkap data yang di parsing
$nilai=$_POST["nilai"];

mysql_connect("localhost","root","");
mysql_select_db("db_webakademis_php");

$rs=mysql_fetch_array(mysql_query("select * from nilai where nim_mhs='$nim_mhs' and id_matkul='$id_matkul'"));
$a=mysql_fetch_array(mysql_query("select * from mahasiswa where nim_mhs = '$nim_mhs '"));
$b=mysql_fetch_array(mysql_query("select * from mata_kuliah where id_matkul = '$id_matkul '"));
	if ($rs)
	{
		echo "<script>alert('NIM Sudah Ada');</script>";
		include "i_nilai.php";
	}
	else
	{
		if($a AND $b)
		{
			$query = "insert into nilai(nim_mhs,id_matkul,nilai) values ('$nim_mhs','$id_matkul','$nilai')";
			$hasil = mysql_query($query); 
		}
		else
		{
			echo "<script>alert('Data Mata Kuliah atau Mahasiswa Tidak ada di Tabel');</script>";
			include "i_nilai.php";
		}
	}


if ($hasil)
{
	include "snilai.php";
}
?>
