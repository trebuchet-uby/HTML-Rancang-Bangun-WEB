<?php
$host = "localhost";
$user = "root";//adjust according to your mysql setting
$pass = ""; //adjust according to your mysql setting, i use no password here
$dbName = "db_webakademis_php";
mysql_connect($host, $user, $pass);
mysql_select_db($dbName)
or die ("Connect Failed !! : ".mysql_error());

$ID_RUANGAN = $_POST['ID_RUANGAN'];
$ID_MATKUL = $_POST['ID_MATKUL'];
$JAM = $_POST['JAM'];
$HARI = $_POST['HARI'];

//query for update data in database
 $query = "UPDATE jadwal SET HARI='$HARI',JAM='$JAM' where ID_RUANGAN='$ID_RUANGAN' AND ID_MATKUL='$ID_MATKUL'" ;
 $hasil = mysql_query($query);
 //see the result
if ($hasil) 
{
    include "e_jadwal.php";
}
?>