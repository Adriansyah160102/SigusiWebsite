<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
}

?>
<?php

$id= $_REQUEST['id_tatausaha'];
$nama= $_POST['nama'];
$jab= $_POST['jabatan'];
$us= $_POST['username'];
$pas= $_POST['password'];

include "../koneksi.php";

if(!empty($_GET['ak']) and $_GET['ak']=='edit'){
	mysqli_query($con,"update tata_usaha set nama='$nama',jabatan='$jab',username='$us',password='$pas' WHERE id_tatausaha='$id' ") or die('Gagal ubah data !');
}
else
if(!empty($_GET['ak']) and $_GET['ak']=='hapus'){
	mysqli_query($con,"delete from tata_usaha where id_tatausaha='$id'") or die('Gagal Hapus Data!!!');
}
else
{	
	mysqli_query($con,"insert into tata_usaha values('$id','$nama','$jab','$us','$pas') ") or die('Gagal input data !!!');
}

header('location:../tabel/tbl_tu.php');

?>