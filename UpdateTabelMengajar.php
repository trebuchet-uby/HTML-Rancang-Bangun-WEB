<?php
$host = "localhost";
$user = "root";//adjust according to your mysql setting
$pass = ""; //adjust according to your mysql setting, i use no password here
$dbName = "db_webakademis_php";
mysql_connect($host, $user, $pass);
mysql_select_db($dbName)
or die ("Connect Failed !! : ".mysql_error());

 $ID_MENGAJAR = $_POST['ID_MENGAJAR'];
 $ID_DOSEN = $_POST['ID_DOSEN'];
 $ID_MATKUL = $_POST['ID_MATKUL'];


//query for update data in database
 $query = "UPDATE mengajar SET ID_DOSEN='$ID_DOSEN' WHERE ID_MENGAJAR='$ID_MENGAJAR' AND ID_MATKUL='$ID_MATKUL'" ;
 $hasil = mysql_query($query);
 //see the result
 if ($hasil) {
    include "e_mengajar.php";
		}


?>