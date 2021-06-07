<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
}

?>

<?php
$id=$_REQUEST['id_guru'];
$nm=$_POST['nama_guru'];
$user=$_POST['username'];
$pass=$_POST['password'];

include "../koneksi.php"; 

if(!empty($_GET['ak']) and $_GET['ak']=='edit'){
		mysqli_query($con,"update guru set nama_guru='$nm', username='$user', password='$pass' where id_guru='$id' ") or die('Gagal Edit Data!!!');
}
else
if(!empty($_GET['ak']) and $_GET['ak']=='hapus'){
	mysqli_query($con,"delete from guru where id_guru='$id'") or die('Gagal Hapus Data!!!');
}
else
{
	mysqli_query($con,"insert into guru values ('$id','$nm','$user','$pass')") or die ('Gagal Input Data!!!');
}
header('location:../tabel/tbl_guru.php');
?>