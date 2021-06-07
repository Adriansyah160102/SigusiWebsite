<?php
session_start();
$log=$_SESSION['level'];
session_destroy();

if($log=='siswa') 
	{ header('location:../index.php'); }

?>