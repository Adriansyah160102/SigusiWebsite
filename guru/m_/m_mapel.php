<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
}
?>

<?php

$id= $_REQUEST['id_mapel'];
$nm= $_POST['nama_mapel'];
$tngkt= $_POST['tingkat'];
$kkm= $_POST['kkm'];

include "../koneksi.php";

if(!empty($_GET['ak']) and $_GET['ak']=='edit'){
	mysqli_query($con,"update mata_pelajaran set nama_mapel='$nm', tingkat='$tngkt', kkm='$kkm' where id_mapel='$id'") or die ('Gagal Edit Data!!!');
}
else
if(!empty($_GET['ak']) and $_GET['ak']=='hapus'){
	mysqli_query($con,"delete from mata_pelajaran where id_mapel='$id' ") or die('Gagal Hapus Data!!!');
}
else
{
	mysqli_query($con,"insert into mata_pelajaran values('$id','$nm','$tngkt','$kkm')") or die ('Gagal Input Data !!!');
}
header('location:../tabel/tbl_mapel.php');

?>
