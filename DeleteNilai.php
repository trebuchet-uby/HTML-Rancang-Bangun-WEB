<?php
$host = "localhost";
$user = "root";//adjust according to your mysql setting
$pass = ""; //adjust according to your mysql setting, i use no password here
$dbName = "db_webakademis_php";
mysql_connect($host, $user, $pass);
mysql_select_db($dbName)
or die ("Connect Failed !! : ".mysql_error());

 $NIM_MHS = $_GET['NIM_MHS']; 
 $ID_MATKUL = $_GET['ID_MATKUL']; 
 $query = "DELETE from nilai WHERE NIM_MHS = '$NIM_MHS' and ID_MATKUL='$ID_MATKUL'" ;
 $hasil = mysql_query($query);
 
 if ($hasil)
 {
    include "e_nilai.php";
 }

?>