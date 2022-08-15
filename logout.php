<?php

session_start();
session_destroy();
/*
// if the user is logged in, unset the session

if (isset($_SESSION['logged-in'])) {

unset($_SESSION['logged-in']);

}*/

// now that the user is logged out,

// go to login page

header('Location: index.php');
?>