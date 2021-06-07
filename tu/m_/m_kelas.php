<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
}

?>

<?php
$id = $_REQUEST['id_kelas'];
$kls=$_POST['kelas'];

include "../koneksi.php";

if(!empty($_GET['ak']) and $_GET['ak']=='edit'){
	mysqli_query($con,"update kelas set kelas='$kls' where id_kelas='$id'") or die('Gagal Edit Data!!!');
}
else
if(!empty($_GET['ak']) and $_GET['ak']=='hapus'){
	mysqli_query($con,"delete from kelas where id_kelas='$id'") or die('Gagal Hapus Data!!!');
}
else
{
	mysqli_query($con,"insert into kelas values('$id','$kls')") or die('Gagal Input Data!!!');
}
    header('location:../tabel/tbl_kelas.php');
?>