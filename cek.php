<?php
session_start();
if (!isset($_SESSION['USERNAME']))
{
header('Location: index.php');
echo "<script>alert('Anda Harus Login terlebih Dahulu');</script>";
exit;
}
?>