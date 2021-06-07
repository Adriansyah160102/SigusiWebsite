<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
}

?>

<?php

if(!empty($_GET['act']))
{
	$id=$_GET['id_kelas'];
	$kls=$_GET['kelas'];
	$ak=$_GET['act'];
}
else
{
	include "../koneksi.php";
	$id=mysqli_query($con,"select coalesce(max(substring(id_kelas,2,9)),0)+1 as no from kelas") or die ('Gagal Pencarian Data!!!');
	$k = mysqli_fetch_assoc($id);
	$kode = $k['no'];
		for ($i=1; $i<=6-strlen($kode); $i++)
			{ $kode='0'.$kode;}
	$id = 'K'.$kode;
	$kls='';
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
        <title>SIGUSI - kelas</title>
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
			<div class="Title">Data Kelas</div>
            <form class="biodata" name="frm" action="../m_/m_kelas.php?ak=<?php echo $ak; ?>" method="post">
	            <div class="form">
		            <label>Id Kelas</label>
		            <input type="text" name="id_kelas" required=reuired value="<?php echo $id; ?>" readonly=readonly  /></br>
                </div>
	            <div class="form">
		            <label>Kelas</label>
		            <input type="text" name="kelas" required=required value="<?php echo $kls; ?>"/></br>
                </div>
	            <div class="form">
		            <input class="button" type="submit" value="Simpan"/> <input class="button" type="reset" value="Bersih"/>
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