<?php
$host = "localhost";
$user = "root";//adjust according to your mysql setting
$pass = ""; //adjust according to your mysql setting, i use no password here
$dbName = "db_webakademis_php";
mysql_connect($host, $user, $pass);
mysql_select_db($dbName)
or die ("Connect Failed !! : ".mysql_error());

 $ID_RUANGAN = $_POST['ID_RUANGAN'];
 $NAMA_RUANGAN = $_POST['NAMA_RUANGAN'];

//query for update data in database
 $query = "UPDATE ruangan SET NAMA_RUANGAN='$NAMA_RUANGAN' WHERE ID_RUANGAN='$ID_RUANGAN'" ;
 $hasil = mysql_query($query);
 //see the result
 if ($hasil) {
    include "e_ruangan.php";
		}
?>