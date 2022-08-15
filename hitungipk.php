<?php
session_start();
$host = "localhost";
$username = "root";
$password = "";
$db = "db_webakademis_php";
@mysql_connect($host,$username,$password) or die ("error");
@mysql_select_db($db) or die("error");


$query = "SELECT n.*, m.* FROM nilai n, mata_kuliah m where NIM_MHS=".$_SESSION['NIM_MHS']." and n.ID_MATKUL=m.ID_MATKUL";
$result= mysql_query($query);

$total = 0;
$t_sks = 0;
$ipk=0;
	while ($data= mysql_fetch_assoc($result))
	{
		$total = $total + convert($data['NILAI'])*($data['SKS_MATKUL']);
		$t_sks = $t_sks + ($data['SKS_MATKUL']);
	}
	$ipk=round($total/$t_sks,2);
	echo "Ipk anda adalah  $ipk" ;

	function convert($param = null){
		if($param=='A')
		{
			return 4;
		}
		if($param=='B')
		{
			return 3;
		}
		if($param=='C')
		{
			return 2;
		}
		if($param=='D')
		{
			return 1;
		}
		if($param=='E')
		{
			return 0;
		}
	}
?>						
