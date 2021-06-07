<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
}

?>

<?php
if(!empty($_GET['act']))
{
	$nis=$_GET['nis'];
	$nm=$_GET['nama'];
	$nik=$_GET['nik'];
	$tmp_lhr=$_GET['tmp_lahir'];
	$tgl_lhr=$_GET['tgl_lahir'];
	$jenis_k=$_GET['jenis_kelamin'];
	$status_k=$_GET['status_keluarga'];
	$anak_k=$_GET['anak_ke'];
	$jml_sdr=$_GET['jml_sdr'];
	$agm=$_GET['agama'];
	$hobi=$_GET['hobi'];
	$cita=$_GET['cita'];
	$alm=$_GET['alamat'];
	$kls=$_GET['id_kelas'];
	$thn_ajaran=$_GET['tahun_ajaran'];
	$no_tlp=$_GET['no_telp'];
	$nm_ayah=$_GET['nama_ayah'];
	$nik_ayah=$_GET['nik_ayah'];
	$pdkn_ayah=$_GET['pendidikan_ayah'];
	$pkrjn_ayah=$_GET['pekerjaan_ayah'];
	$nm_ibu=$_GET['nama_ibu'];
	$nik_ibu=$_GET['nik_ibu'];
	$pdkn_ibu=$_GET['pendidikan_ibu'];
	$pkrjn_ibu=$_GET['pekerjaan_ibu'];
	$alm_ortu=$_GET['alamat_ortu'];
	$no_telp_ortu=$_GET['no_telp_ortu'];
	$user=$_GET['username'];
	$pass=$_GET['password'];
	$ak=$_GET['act'];
}
else
{
	/* kode otomatis*/
	include "../koneksi.php";
	$id = mysqli_query($con,"select coalesce(max(substring(nis,2,9)),0)+1 as no from siswa") or die ('Gagal Pencarian!!!');
	$k = mysqli_fetch_assoc($id);
	$kode = $k['no'];
		for($i=1; $i<=6-strlen($kode); $i++)
			{$kode='0'.$kode;}   /*end kode*/
		$nis='U'.$kode;
		$nm='';
		$nik='';
		$tmp_lhr='';
		$tgl_lhr='';
		$jenis_k='';
		$status_k='';
		$anak_k='';
		$jml_sdr='';
		$agm='';
		$hobi='';
		$cita='';
		$alm='';
		$kls='';
		$thn_ajaran='';
		$no_tlp='';
		$nm_ayah='';
		$nik_ayah='';
		$pdkn_ayah='';
		$pkrjn_ayah='';
		$nm_ibu='';
		$nik_ibu='';
		$pdkn_ibu='';
		$pkrjn_ibu='';
		$alm_ortu='';
		$no_telp_ortu='';
		$user='';
		$pass='';
		$ak='';
}
?>

<!doctype html>
<html lang="en">
    <head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    	<!-- Css -->
    	<link rel="stylesheet" href="../css/style.css">
        <title>SIGUSI - siswa</title>
    </head>
    <body>
        <!-- nav -->
        <header>
		<!-- NavBar -->
		<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
			<div class="container">
          	<a class="navbar-brand" href="#">SIGUSIWebsite</a>
          	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            	<span class="navbar-toggler-icon"></span>
          	</button>
            	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                	<div class="navbar-nav ml-auto">
                    	<a class="nav-item nav-link" href="../beranda_admin.php">Beranda</a>
                    	<a class="nav-item btn btn-primary tombol" href="../logout.php">Log Out</a>
                	</div>
            	</div>
        	</div>
    	</nav>
    	<!-- akhir NavBar -->
        </header>
		<!-- akhir nav -->

		<!--mulai content -->
        <main class="content">
			<div class="Title">Data Siswa</div>
            <form class="biodata" name="frm" action="../m_/m_siswa.php?ak=<?php echo $ak; ?>" method="POST">
		        <div class="form">
			        <label>NIS</label>
			        <input type="text" name="nis" required=required value="<?php echo "$nis"; ?>" readonly=readonly /></br>
                </div>
		        <div class="form">
			        <label>Nama</label>
			        <input type="text" placeholder="nama"  name="nama" value="<?php echo "$nm"; ?>" /></br>
                </div>
                <div class="form">
			        <label>NIK</label>
			        <input type="text" placeholder="16 digit lihat di KK"  name="nik" value="<?php echo "$nik"; ?>" /></br>
                </div>
                <div class="form">
			        <label>Tempat Lahir</label>
			        <input type="text" placeholder="tempat lahir"  name="tmp_lahir" value="<?php echo "$tmp_lhr"; ?>" /></br>
                </div>
		        <div class="form">
			        <label>Tanggal Lahir</label>
			        <input type="date" name="tgl_lahir" value="<?php echo "$tgl_lhr"; ?>"/> </br>
                </div>
		        <div class="form">
			        <label>Jenis Kelamin</label>
			        <input type="radio" name="jenis_kelamin" value="Laki-laki" <?php if ($jenis_k == "Laki-laki"){
			        echo "checked=checked "; } ?> /><center>Laki-laki</center> </br>

			        <input type="radio" name="jenis_kelamin" value="Perempuan" <?php if ($jenis_k == "Perempuan"){
			        echo " checked=checked"; } ?> /><center>Perempuan</center> </br>
		        </div>
                <div class="form">
			        <label>Status Keluarga</label>
			        <input type="text" placeholder="status keluarga"  name="status_keluarga" value="<?php echo "$status_k"; ?>"></br>
                </div>
		        <div class="form">
			        <label>Anak Ke</label>
			        <input type="text" placeholder="anak ke"  name="anak_ke" value="<?php echo "$anak_k"; ?>"></br>
                </div>
                <div class="form">
			        <label>Jumlah Saudara</label>
			        <input type="text" placeholder="jumlah saudara"  name="jml_sdr" value="<?php echo "$jml_sdr"; ?>"></br>
                </div>
                <div class="form">
			        <label>Agama</label>
			        <select name="agama" required=required>
				        <option value="islam" <?php if($agm=='islam') { echo'selected=selected';} ?> >ISLAM</option>
				        <option value="kristen" <?php if($agm=='kristen') {echo'selected=selected';} ?> >KRISTEN</option>
				        <option value="katolik" <?php if($agm=='katolik') { echo'selected=selected';} ?> >KATOLIK</option>
				        <option value="hindu" <?php if($agm=='hindu') {echo'selected=selected';} ?> >HINDU</option>
				        <option value="buddha" <?php if($agm=='buddha') { echo'selected=selected';} ?> >BUDDHA</option>
				        <option value="kong hu cu" <?php if($agm=='kong hu cu') {echo'selected=selected';} ?> >KONG HU CU</option>
			        </select> </br>
                </div>
                <div class="form">
			        <label>Hobi</label>
			        <input type="text" placeholder="hobi"  name="hobi" value="<?php echo "$hobi"; ?>"></br>
                </div>
                <div class="form">
			        <label>Cita-cita</label>
			        <input type="text" placeholder="cita-cita"  name="cita" value="<?php echo "$cita"; ?>"></br>
                </div>
                <div class="form">
			        <label>Alamat</label>
					<input type="text" placeholder="alamat (kel, kec, kab)"  name="alamat" value="<?php echo "$alm"; ?>"></br>
                </div>
		        <div class="form">
			        <label>Kelas</label>
			        <select name="id_kelas" required=required >
			        	<?php include "../koneksi.php";
					    	$cari = mysqli_query($con,"select * from kelas") or die ('Pencarian Gagal !!!');
					    	if(mysqli_num_rows($cari)>0)
					    	{	
								while ($k = mysqli_fetch_assoc($cari))
								{	
									echo "<option value='".$k['id_kelas']."'"; if($kls==$k['id_kelas']){ echo 'selected=selected'; }  echo" >".$k['kelas']."</option>";
								}	
			    	    	} 
			        	?>
			        </select></br>
                </div>
                <div class="form">
			        <label>Tahun Ajaran</label>
			        <input type="text" placeholder="tahun ajaran"  name="tahun_ajaran" value="<?php echo "$thn_ajaran"; ?>"></br>
                </div>
		        <div class="form">
			        <label>No Hp/Telp</label>
			        <input type="text" placeholder="no hp/telp"  name="no_telp" value="<?php echo "$no_tlp"; ?>"></br>
                </div>
		        <div class="form">
			        <label>Nama Ayah</label>
			        <input placeholder="nama ayah"  type="text" name="nama_ayah" value="<?php echo "$nm_ayah"; ?>"></br>
                </div>
                <div class="form">
			        <label>NIK Ayah</label>
			        <input placeholder="16 digit lihat di KK"  type="text" name="nik_ayah" value="<?php echo "$nik_ayah"; ?>"></br>
                </div>
                <div class="form">
			        <label>Pendidikan Ayah</label>
			        <input placeholder="pendidikan terkahir ayah"  type="text" name="pendidikan_ayah" value="<?php echo "$pdkn_ayah"; ?>"></br>
                </div>
                <div class="form">
			        <label>Pekerjaan Ayah</label>
			        <input placeholder="pekerjaan ayah"  type="text" name="pekerjaan_ayah" value="<?php echo "$pkrjn_ayah"; ?>"></br>
                </div>
                <div class="form">
			        <label>Nama Ibu</label>
			        <input placeholder="nama ibu"  type="text" name="nama_ibu" value="<?php echo "$nm_ibu"; ?>"></br>
                </div>
                <div class="form">
			        <label>NIK Ibu</label>
			        <input placeholder="16 digit lihat di KK"  type="text" name="nik_ibu" value="<?php echo "$nik_ibu"; ?>"></br>
                </div>
                <div class="form">
			        <label>Pendidikan Ibu</label>
			        <input placeholder="pendidikan terkahir ibu"  type="text" name="pendidikan_ibu" value="<?php echo "$pdkn_ibu"; ?>"></br>
                </div>
                <div class="form">
			        <label>Pekerjaan Ibu</label>
			        <input placeholder="pekerjaan ibu"  type="text" name="pekerjaan_ibu" value="<?php echo "$pkrjn_ibu"; ?>"></br>
                </div>
                <div class="form">
			        <label>Alamat Orang Tua</label>
					<input type="text" placeholder="alamat (kel, kec, kab)"  name="alamat_ortu" value="<?php echo "$alm_ortu"; ?>"></br>
                </div>
                <div class="form">
			        <label>No Hp/Telp Orang Tua</label>
			        <input type="text" placeholder="no hp/telp orang tua"  name="no_telp_ortu" value="<?php echo "$no_telp_ortu"; ?>"></br>
                </div>
                <div class="form">
			        <label>Username</label>
			        <input type="text" placeholder="username"  name="username" value="<?php echo "$user"; ?>"></br>
                </div><div class="form">
			        <label>Password</label>
			        <input type="text" placeholder="password"  name="password" value="<?php echo "$pass"; ?>"></br>
                </div>
		        <div class="form">
			        <input class="button" type="submit" value="Simpan"/> <input class="button" type="reset" value="Bersih">
                </div>
            </form>
        </main>
		<!-- akhir content -->
		<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    </body>
</html>