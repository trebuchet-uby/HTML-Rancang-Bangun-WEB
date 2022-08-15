<?php
$host = "localhost";
$user = "root";//adjust according to your mysql setting
$pass = ""; //adjust according to your mysql setting, i use no password here
$dbName = "db_webakademis_php";
mysql_connect($host, $user, $pass);
mysql_select_db($dbName)
or die ("Connect Failed !! : ".mysql_error());

 $ID_MENGAJAR = $_GET['ID_MENGAJAR']; 
 $ID_MATKUL = $_GET['ID_MATKUL']; 
 
 $query = "DELETE from mengajar WHERE ID_MENGAJAR = '$ID_MENGAJAR' AND ID_MATKUL='$ID_MATKUL'" ;
 $hasil = mysql_query($query);
 
 if ($hasil)
 {
    include "e_mengajar.php";
 }

?>