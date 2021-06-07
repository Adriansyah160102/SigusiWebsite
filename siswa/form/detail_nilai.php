<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
}
?>

<?php
if(!empty($_GET['act']))
{
	$id_penilaian=$_GET['id_penilaian'];
	$nis=$_GET['nis'];
	$id_kls=$_GET['id_kelas'];
	$sem=$_GET['semester'];
	$id_mpl=$_GET['id_mapel'];
	$tgl_pen=$_GET['tgl_penilaian'];
	$stts=$_GET['status'];
	$ket=$_GET['keterangan'];
	$kkm=$_GET['kkm'];
	$nilai=$_GET['nilai'];
	$ak=$_GET['act'];
}
else
{
	include "../koneksi.php";
	$id = mysqli_query($con,"select coalesce(max(substring(id_penilaian,2,9)),0)+1 as no from penilaian") or die ('Gagal Pencarian!!!');
	$k = mysqli_fetch_assoc($id);
	$kode = $k['no'];
		for($n=1; $n<=6-strlen($kode); $n++)
			{$kode='0'.$kode;}   /*end kode*/
		$id_penilaian='N'.$kode;
		$nis='';
		$id_kls='';
		$sem='';
		$id_mpl='';
		$tgl_pen='';
		$stts='';
		$ket='';
		$kkm='';
		$nilai='';
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
    	<link rel="stylesheet" href="../css/style_beranda.css">
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
                    	<a class="nav-item nav-link" href="../beranda_siswa.php">Beranda</a>
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
			<div class="Title">Data Penilaian</div>
            <form class="biodata" name="frm" action="../m_/m_penilaian.php?ak=<?php echo $ak; ?>" method="POST">
		        <div class="form">
			        <label>ID PENILAIAN</label>
			        <input type="text" placeholder="id_penilaian" name="id_penilaian" value="<?php echo "$id_penilaian"; ?>" readonly=readonly /></br>
                </div>
		        <div class="form">
			        <label>NAMA</label>
			        <select name="nis" required=required >
				        <?php include "../koneksi.php";
						$cari = mysqli_query($con,"select * from siswa") or die ('Pencarian Gagal !!!');
						if(mysqli_num_rows($cari)>0)
						{	
								while ($s = mysqli_fetch_assoc($cari))
								{	
									echo "<option value='".$s['nis']."'"; if($nis==$s['nis']){ echo 'selected=selected'; }  echo"> ".$s['nama']."</option>";
								}	
				    	} 
				        ?>
				    </select></br>
                </div>
                <div class="form">
			        <label>KELAS</label>
			        <select name="id_kelas" required=required >
				        <?php include "../koneksi.php";
						$cari = mysqli_query($con,"select * from kelas") or die ('Pencarian Gagal !!!');
						if(mysqli_num_rows($cari)>0)
						{	
								while ($k = mysqli_fetch_assoc($cari))
								{	
									echo "<option value='".$k['id_kelas']."'"; if($id_kls==$k['id_kelas']){ echo 'selected=selected'; }  echo"> ".$k['kelas']."</option>";
								}	
				    	} 
				        ?>
				    </select></br>
                </div>
                <div class="form">
			        <label>SEMESTER</label>
			        <input type="text" placeholder="semester"  name="semester" value="<?php echo "$sem"; ?>" /></br>
                </div>
                <div class="form">
			        <label>MAPEL</label>
			        <select name="id_mapel" required=required >
				        <?php include "../koneksi.php";
						$cari = mysqli_query($con,"select * from mata_pelajaran") or die ('Pencarian Gagal !!!');
						if(mysqli_num_rows($cari)>0)
						{	
								while ($m = mysqli_fetch_assoc($cari))
								{	
									echo "<option value='".$m['id_mapel']."'"; if($id_mpl==$m['id_mapel']){ echo 'selected=selected'; }  echo"> ".$m['nama_mapel']."</option>";
								}	
				    	} 
				        ?>
				    </select></br>
                </div>
				<div class="form">
			        <label>TANGGAL PENILAIAN</label>
			        <input type="date" name="tgl_penilaian" value="<?php echo "$tgl_pen"; ?>"/> </br>
                </div>
		        <div class="form">
			        <label>STATUS</label>
			        <input type="text" placeholder="status"  name="status" value="<?php echo "$stts"; ?>"></br>
                </div>
                <div class="form">
			        <label>KETERANGAN</label>
			        <input type="text" placeholder="keterangan"  name="keterangan" value="<?php echo "$ket"; ?>"></br>
                </div>
                <div class="form">
			        <label>KKM</label>
			        <input type="text" placeholder="kkm"  name="kkm" value="<?php echo "$kkm"; ?>"></br>
                </div>
				<div class="form">
			        <label>Nilai</label>
			        <input type="text" placeholder="nilai"  name="nilai" value="<?php echo "$nilai"; ?>"></br>
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