<?php
$host = "localhost";
$user = "root";//adjust according to your mysql setting
$pass = ""; //adjust according to your mysql setting, i use no password here
$dbName = "db_webakademis_php";
mysql_connect($host, $user, $pass);
mysql_select_db($dbName)
or die ("Connect Failed !! : ".mysql_error());

 $ID_DOSEN = $_POST['ID_DOSEN'];
 $NAMA_DOSEN = $_POST['NAMA_DOSEN'];


//query for update data in database
 $query = "UPDATE dosen SET NAMA_DOSEN='$NAMA_DOSEN' WHERE ID_DOSEN='$ID_DOSEN'" ;
 $hasil = mysql_query($query);
 //see the result
 if ($hasil) {
    include "e_dosen.php";
		}


?>