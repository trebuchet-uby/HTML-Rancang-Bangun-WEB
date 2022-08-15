<?php
$hostname = "localhost";
$user_db = "root";//adjust according to your mysql setting
$pass_db = ""; //adjust according to your mysql setting, i use no password here
$dbName = "db_webakademis_php";
mysql_connect($host, $user_db, $pass_db);
mysql_select_db($dbName)
or die ("Connect Failed !! :".mysql_error());
?>