<?php
$host = "localhost";
$user = "root";//adjust according to your mysql setting
$pass = ""; //adjust according to your mysql setting, i use no password here
$dbName = "db_webakademis_php";
mysql_connect($host, $user, $pass);
mysql_select_db($dbName)
or die ("Connect Failed !! : ".mysql_error());

 $ID_DOSEN = $_GET['ID_DOSEN']; 
 $query = "DELETE from dosen WHERE ID_DOSEN = '$ID_DOSEN'" ;
 $hasil = mysql_query($query);
 
 if ($hasil)
 {
    include "e_dosen.php";
 }

?>