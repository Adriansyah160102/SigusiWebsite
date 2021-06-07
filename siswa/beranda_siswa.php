<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
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
    <link rel="stylesheet" href="../style_beranda.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>SIGUSI Website : BERANDA SISWA</title>
  </head>
  <body>
    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">SIGUSIWebsite</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link" href="#carouselExampleIndicators">Beranda</a>
                    <a class="nav-item nav-link" href="#Data Siswa">Data Siswa</a>
                    <a class="nav-item nav-link" href="#Lihat Nilai">Lihat Nilai</a>
                    <a class="nav-item btn btn-primary tombol" href="logout.php">Log Out</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- akhir NavBar -->

    <!-- Slider Picture -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="image/12.jpg" alt="First slide">
            <div class="carousel-caption">
                <h1 class="display-4">Selamat Datang Para Siswa <br><span>SMP NEGERI 20 SURABAYA</span> </h1>
              </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="image/6.jpg" alt="Second slide">
            <div class="carousel-caption">
              <h1 class="display-5">“Pendidikan adalah senjata paling mematikan di dunia, <br> karena dengan pendidikan, <br> Anda dapat mengubah dunia.” <br><span>Nelson Mandela</span></h1>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="image/10.jpg" alt="Third slide">
            <div class="carousel-caption">
              <h1 class="display-6">"Tidak ada sesuatu yang lebih menyenangkan, <br>selain menimbulkan senyum di wajah orang lain, <br>terutama wajah yang kita cintai" <br><span>R.A. Kartini</span></h1>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Akhir Slider Picture -->

    <!-- Workingspace -->
    <div class="row Workingspace" id="Data Siswa">
      <div class="col-lg-5">
        <img src="image/15.JPG" alt="Workingspace" class="gambar2 img-fluid">
      </div>
      <div class="col-lg-6">
        <h3><span>Data Siswa</span></h3>
        <p>Data Siswa digunakan siswa untuk mengedit data diri</p>
        <a href="tabel/tbl_siswa.php" class="btn btn-primary">Data Siswa</a>
      </div>
    </div>
    <div class="row Workingspace3" id="Lihat Nilai">
      <div class="col-lg-6">
        <h3><span>Lihat Nilai</span></h3>
        <p>Pada halaman ini digunakan untuk melihat nilai-nilai yang didapat setiap siswa</p>
        <a href="tabel/tbl_penilaian.php" class="btn btn-primary"> Lihat Nilai</a>
      </div>
      <div class="col-lg-5">
        <img src="image/19.jpg" alt="Workingspace" class="gambar2 img-fluid">
      </div>
    </div>
    <!-- Akhir Workingspace -->

    <footer>
      <div class="footer-bottom">
        <p>Copyright &copy;2021 QuartedBoykoter</p>
      </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>