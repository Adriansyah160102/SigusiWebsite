<?php
session_start();
$log=$_SESSION['level'];
session_destroy();

if($log=='guru') 
	{ header('location:../index.php'); }

?>