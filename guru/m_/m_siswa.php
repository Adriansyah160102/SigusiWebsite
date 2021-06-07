<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
}
?>
<?php
$nis=$_REQUEST['nis'];
$nm=$_POST['nama'];
$nik=$_POST['nik'];
$tmp_lhr=$_POST['tmp_lahir'];
$tgl_lhr=$_POST['tgl_lahir'];
$jenis_k=$_POST['jenis_kelamin'];
$status_k=$_POST['status_keluarga'];
$anak_k=$_POST['anak_ke'];
$jml_sdr=$_POST['jml_sdr'];
$agm=$_POST['agama'];
$hobi=$_POST['hobi'];
$cita=$_POST['cita'];
$alm=$_POST['alamat'];
$kls=$_POST['id_kelas'];
$thn_ajaran=$_POST['tahun_ajaran'];
$no_tlp=$_POST['no_telp'];
$nm_ayah=$_POST['nama_ayah'];
$nik_ayah=$_POST['nik_ayah'];
$pdkn_ayah=$_POST['pendidikan_ayah'];
$pkrjn_ayah=$_POST['pekerjaan_ayah'];
$nm_ibu=$_POST['nama_ibu'];
$nik_ibu=$_POST['nik_ibu'];
$pdkn_ibu=$_POST['pendidikan_ibu'];
$pkrjn_ibu=$_POST['pekerjaan_ibu'];
$alm_ortu=$_POST['alamat_ortu'];
$no_telp_ortu=$_POST['no_telp_ortu'];
$user=$_POST['username'];
$pass=$_POST['password'];

include "../koneksi.php";
if(!empty($_GET['ak']) and $_GET['ak']=='edit'){
	mysqli_query($con,"update siswa set nama='$nm',nik='$nik',tmp_lahir='$tmp_lhr',tgl_lahir='$tgl_lhr',jenis_kelamin='$jenis_k',status_keluarga='$status_k',anak_ke='$anak_k',jml_sdr='$jml_sdr',agama='$agm',hobi='$hobi',cita='$cita',alamat='$alm',id_kelas='$kls',tahun_ajaran='$thn_ajaran',no_telp='$no_tlp',nama_ayah='$nm_ayah',nik_ayah='$nik_ayah',pendidikan_ayah='$pdkn_ayah',pekerjaan_ayah='$pkrjn_ayah',nama_ibu='$nm_ibu',nik_ibu='$nik_ibu',pendidikan_ibu='$pdkn_ibu',pekerjaan_ibu='$pkrjn_ibu',alamat_ortu='$alm_ortu',no_telp_ortu='$no_telp_ortu',password='$pass' where nis='$nis'") or die('Gagal Edit Data!!!');
}
else 
if(!empty($_GET['ak']) and $_GET['ak']=='hapus'){
	mysqli_query($con,"delete from siswa where nis='$nis'") or die('Gagal Hapus Data!!!');

}
else
{
	mysqli_query($con,"insert into siswa values ('$nis','$nm','$nik','$tmp_lhr','$tgl_lhr','$jenis_k','$status_k','$anak_k','$jml_sdr','$agm','$hobi','$cita','$alm','$kls','$thn_ajaran','$no_tlp','$nm_ayah','$nik_ayah','$pdkn_ayah','$pkrjn_ayah','$nm_ibu','$nik_ibu','$pdkn_ibu','$pkrjn_ibu','$alm_ortu','$no_telp_ortu','$user','$pass')") or die ('Gagal Input Data!!!');
}
header('location:../tabel/tbl_siswa.php');
?>