<?php
$host = "localhost";
$user = "root";//adjust according to your mysql setting
$pass = ""; //adjust according to your mysql setting, i use no password here
$dbName = "db_webakademis_php";
mysql_connect($host, $user, $pass);
mysql_select_db($dbName)
or die ("Connect Failed !! : ".mysql_error());

$NIM_MHS = $_POST['NIM_MHS'];
$ID_MATKUL = $_POST['ID_MATKUL'];
$NILAI = $_POST['NILAI'];


//query for update data in database
 $query = "UPDATE nilai SET NILAI='$NILAI' where NIM_MHS='$NIM_MHS' AND ID_MATKUL='$ID_MATKUL'" ;
 $hasil = mysql_query($query);
 //see the result
if ($hasil) 
{
    include "e_nilai.php";
}
?>