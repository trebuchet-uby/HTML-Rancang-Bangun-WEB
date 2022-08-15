<?php
include "db_connection.php";

 $NIM_MHS = $_POST['NIM_MHS'];
 $NAMA_MHS = $_POST['NAMA_MHS'];
 $PASSWORD = $_POST['PASSWORD'];


//query for update data in database
 $query = "UPDATE mahasiswa SET NAMA_MHS='$NAMA_MHS' ,PASSWORD='$PASSWORD' WHERE NIM_MHS='$NIM_MHS'" ;
 $hasil = mysql_query($query);
 //see the result
 if ($hasil) {
    include "e_mahasiswa.php";
		}

?>