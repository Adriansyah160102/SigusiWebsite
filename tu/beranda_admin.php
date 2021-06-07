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

    <title>SIGUSI Website : BERANDA ADMIN</title>
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
                    <a class="nav-item nav-link" href="tabel/tbl_kelas.php">Kelas</a>
                    <a class="nav-item nav-link" href="tabel/tbl_mapel.php">Mata Pelajaran</a>      
                    <a class="nav-item nav-link" href="tabel/tbl_pengajar.php">Data Pengajar</a>
                    <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Data
                      </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="tabel/tbl_tu.php">Admin</a>
                          <a class="dropdown-item" href="tabel/tbl_guru.php">Guru</a>
                          <a class="dropdown-item" href="tabel/tbl_siswa.php">Siswa</a>
                        </div>
                    </div>
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
            <img class="d-block w-100" src="gambar/polsek.JPG" alt="First slide">
            <div class="carousel-caption">
                <h1 class="display-4">Selamat Datang ADMIN <br><span>SMP NEGERI 20 SURABAYA</span> </h1>
              </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="gambar/guru.jpg" alt="Second slide">
            <div class="carousel-caption">
              <h1 class="display-5">“Siswa tidak membutuhkan guru yang sempurna. <br> Siswa membutuhkan seorang guru yang bahagia. siapa yang akan membuat mereka bersemangat untuk datang ke sekolah dan menumbuhkan kecintaan untuk belajar.”<br><span>Quarted Boykoter</span></h1>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="gambar/2. perkenalan.jpg" alt="Third slide">
            <div class="carousel-caption">
              <h1 class="display-6"> “Guru adalah ujung tombak generasi tunas bangsa, gurulah yang pertama mengukir akan dijadikan apa generasi muda ini.” <br><span>Quarted Boykoter</span></h1>
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