<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
}
?>

<?php
echo $_REQUEST['id_penilaian'];

	$id_penilaian= $_REQUEST['id_penilaian'];
	$nis=$_POST['nis'];
	$id_kls=$_POST['id_kelas'];
	$sem=$_POST['semester'];
    $id_mpl=$_POST['id_mapel'];
    $tgl_pen=$_POST['tgl_penilaian'];
    $stts=$_POST['status'];
    $ket=$_POST['keterangan'];
    $kkm=$_POST['kkm'];
    $nilai=$_POST['nilai'];

	include "../koneksi.php";

	if(!empty($_GET['ak']) and $_GET['ak']=='edit'){
		mysqli_query($con,"update penilaian set nis='$nis',id_kelas='$id_kls',semester='$sem',id_mapel='$id_mpl',tgl_penilaian='$tgl_pen',status='$stts',keterangan='$ket',kkm='$kkm',nilai='$nilai' where id_penilaian='$id_penilaian'") or die('Gagal Edit Data!!!');
	}
	else
	if(!empty($_GET['ak']) and $_GET['ak']=='hapus'){
			mysqli_query($con,"delete from penilaian where id_penilaian='$id_penilaian'") or die('Gagal hapus data!!!');
			echo "string";
		}
	else
	{
		mysqli_query($con,"insert into penilaian values('$id_penilaian','$nis','$id_kls','$sem','$id_mpl','$tgl_pen','$stts','$ket','$kkm','$nilai')") or die ('Gagal Input Data !!!');
	}
	header('location:../tabel/tbl_penilaian.php');


?>