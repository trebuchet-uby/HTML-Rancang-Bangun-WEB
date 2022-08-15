<?php
include "db_connection.php";
mysql_connect($host, $user, $pass);
mysql_select_db($dbName)
or die ("Connect Failed !! : ".mysql_error());

 $NIM_MHS = $_GET['NIM_MHS']; 
 $query = "DELETE from mahasiswa WHERE NIM_MHS = '$NIM_MHS'" ;
 $hasil = mysql_query($query);
 
 if ($hasil)
 {
    include "e_mahasiswa.php";
 }

?>