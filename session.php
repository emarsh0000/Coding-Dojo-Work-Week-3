<?php session_start();

var_dump($_SESSION);

$_SESSION['first_name'] = $_POST['first_name'];
$_SESSION['last_name'] = $_POST['last_name'];	

var_dump($_SESSION);

?>