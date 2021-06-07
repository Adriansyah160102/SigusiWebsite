<?php

session_start();
session_destroy();

header("Location: index.php");

?>

<?php
session_start();
$log=$_SESSION['level'];
session_destroy();

if($log=='guru') 
	{ header('location:guru/index.php'); }
else if($log=='tu') 
	{ header('location:tu/index.php'); }
else
	{ header('location:index.php'); }

?>