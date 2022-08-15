<?php
$host = "localhost";
$user = "root";//adjust according to your mysql setting
$pass = ""; //adjust according to your mysql setting, i use no password here
$dbName = "db_webakademis_php";
mysql_connect($host, $user, $pass);
mysql_select_db($dbName)
or die ("Connect Failed !! : ".mysql_error());

 $ID_MATKUL = $_GET['ID_MATKUL']; 
 $ID_RUANGAN = $_GET['ID_RUANGAN']; 
 $query = "DELETE from jadwal WHERE ID_MATKUL = '$ID_MATKUL' AND ID_RUANGAN = '$ID_RUANGAN'" ;
 $hasil = mysql_query($query);
 
 if ($hasil)
 {
    include "e_jadwal.php";
 }

?>