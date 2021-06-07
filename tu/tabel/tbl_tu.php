<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
}

?>

<?php
    include "../koneksi.php";
	$cari = mysqli_query($con,"select * from tata_usaha") or die ('Pencarian Gagal !!!');
?>

<!DOCTYPE html>
<html lang="en">
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style_tabel.css"/>
  <title>Tabel Admin</title>
  <script type="text/javascript">
    function konfir_hapus(url,ket)
    {
        pil = confirm("anda yakin ingin menghapus data '"+ket+"' ?");
        if(pil==true)
            { document.location=url; }
    }
	</script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark fixed-top">
          <div class="container">
            <a class="navbar-brand" href="#">SIGUSIWebsite</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"><img src="Open-Menu.png"></span>
            </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav ml-auto">
                      <a class="nav-item nav-link" href="../beranda_admin.php">Beranda</a>
                      <a class="nav-item btn btn-primary tombol" href="../logout.php">Log Out</a>
                  </div>
              </div>
          </div>
      </nav>
    <a href="../form/tu.php"><button><img src="../icon/addadmin.png" width="30" height="30"/></button></a></br></br>
    <table class="table">
            <thead>
                <th>NO</th>
                <th>ID Admin</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Aksi</th> 
            </thead>
            <?php
	if(mysqli_num_rows($cari)==0)
		{ echo "	
				<tr>
					<td colspan='7' > Data kosong !!!</td>
				</tr>"; }
	else{
		$no = 1;
		while ($tampil = mysqli_fetch_assoc($cari))
		{ echo "<tr class='satu'>
				<td >".$no."</td>
				<td >".$tampil['id_tatausaha']."</td>
				<td >".$tampil['nama']."</td>
				<td >".$tampil['jabatan']."</td>
				<td><a href='../form/tu.php?form=tu&act=edit&id_tatausaha=".$tampil['id_tatausaha']." & nama=".$tampil['nama']." & jabatan=".$tampil['jabatan']." & username=".$tampil['username']." & password=".$tampil['password']."'><img src='../icon/edit.png' width='30' height='30' align='center'/></a> 
				";
?>
				 <a href='#' onclick="konfir_hapus('<?php echo "../m_/m_tu.php?ak=hapus&id_tatausaha=".$tampil['id_tatausaha']; ?>','<?php echo $tampil['nama'];?>')"><img src='../icon/delete.png' width='30' height='30' align='center'/></a>
					<?php
					echo"
				</td>
				</tr>";
				$no++;

		}
	}
?>
        </table>
        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>