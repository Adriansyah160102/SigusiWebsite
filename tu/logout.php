<?php
session_start();
$log=$_SESSION['level'];
session_destroy();

if($log=='tu') 
	{ header('location:../index.php'); }

?>