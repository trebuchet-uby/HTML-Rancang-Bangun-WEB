<?php
$host = "localhost";
$user = "root";//adjust according to your mysql setting
$pass = ""; //adjust according to your mysql setting, i use no password here
$dbName = "db_webakademis_php";
mysql_connect($host, $user, $pass);
mysql_select_db($dbName)
or die ("Connect Failed !! : ".mysql_error());

 $ID_MATKUL = $_POST['ID_MATKUL'];
 $NAMA_MATKUL = $_POST['NAMA_MATKUL'];
 $SKS_MATKUL = $_POST['SKS_MATKUL'];
$SEMESTER = $_POST['SEMESTER'];

//query for update data in database
 $query = "UPDATE mata_kuliah SET NAMA_MATKUL='$NAMA_MATKUL' ,SKS_MATKUL='$SKS_MATKUL',SEMESTER='$SEMESTER' WHERE ID_MATKUL='$ID_MATKUL'" ;
 $hasil = mysql_query($query);
 //see the result
 if ($hasil) {
    include "e_matakuliah.php";
		}

?>