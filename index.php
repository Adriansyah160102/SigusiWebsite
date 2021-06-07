<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!-- Font -->

    <!-- Css -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>SIGUSI WEBSITE</title>
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
            <a class="nav-item nav-link" href="#Home">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#About">About</a>
            <a class="nav-item nav-link" href="#Contact">Contact</a>
            <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Log In
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="tu/login_tu.php">Admin</a>
                <a class="dropdown-item" href="guru/login_guru.php">Guru</a>
                <a class="dropdown-item" href="siswa/login_siswa.php">Siswa</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- akhir NavBar -->

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid" id="Home">
      <div class="container">
        <h1 class="display-4">Selamat Datang di <span>SIGUSI Website</span> <br>SMP NEGERI 20 SURABAYA</h1>
      </div>
    </div>
    <!-- Akhir Jumbotron -->

    <!-- Container -->
    <div class="container">
      <!-- Info Panel -->
      <div class="row justify-content-center">
        <div class="col-10 info-panel">
          <div class="row">
            <div class="col-lg">
              <img src="image/presentation.png" alt="presentation" class="float-left">
              <h4>Kelas</h4>
              <p>50 Ruang Kelas <br>3 Perpustakaan <br>2 Lab Komputer</p>
            </div>
            <div class="col-lg">
              <img src="image/monitor-screen.png" alt="monitor" class="float-left">
              <h4>Fasilitas</h4>
              <p>65 Unit Komputer <br>25 Unit LCD Proyektor</p>
            </div>
            <div class="col-lg">
              <img src="image/presentation_1.png" alt="guru" class="float-left">
              <h4>Guru</h4>
              <p>20 guru berpengalaman</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Akhir Info Panel -->

      <!-- Workingspace -->
      <div class="row Workingspace" id="About">
        <div class="col-lg-5">
          <img src="image/tanda tanya.png" alt="Workingspace" class="gambar2 img-fluid">
        </div>
        <div class="col-lg-6">
          <h3>APA SIH <span>SIGUSI</span> ITU ?</h3>
          <p>SIGUSI adalah singkatan dari SISTEM INFORMASI GURU DAN MURID <br>nahhh, disinilah para guru dan murid SMP Negeri 20 Surabaya dapat melihat dan mengimput data diri dan melihat perkembangan
            dalam proses belajar mengajar. dengan dibuatnya web ini kinerja guru juga akan semakin cepat dan lebih efektif untuk menginput 
            nilai-nilai para siswanya</p>
        </div>
      </div>

      <!-- Akhir Workingspace -->
      <!-- Workingspace 2-->
        <div class="row Workingspace2">
          <div class="col-lg">
            <img src="image/sekolah.png" alt="Workingspace2" class="gambar2 img-fluid">
          </div>
        </div>
      </div>

      <!-- Workingspace 3-->
      <div class="row Workingspace3">
        <div class="col-lg-6">
          <h3><span>VISI SEKOLAH</span></h3>
          <p>Menciptakan Sumber Daya Manusia berprestasi, berkarakter, berbudi pekertidan berbudaya lingkungan serta bebas Narkoba.</p>
        </div>
        <div class="col-lg-6">
          <h3><span>MISI SEKOLAH</span></h3>
          <p>1) Mewujudkan pendidikan yang menghasilkan lulusan cerdas, terampil, beriman, bertaqwa, dan memiliki keunggulan kompetitif, dibidang akademik, non akademik.<br>
            2) Mewujudkan proses pembelajaran dengan menggunakan media pembelajaran <br>berbasis teknologi informasi</p>
        </div>
      </div>
      <!-- Akhir Workingspace 3 -->

      <!-- Footer -->
      <footer>
        <div class="footer-content" id="Contact">
          <h3>Contact</h3>
          <p>Adriansyah Bagus Purwanto (19050974048)</p>
          <p>Sarifal Kudsi (19050974061)</p>
          <p>Dimas Dwi Putra (19050974066)</p>
          <p>M David Irsyadus Sholihin (19050974068)</p>
          <ul class="Sosial">
            <li><a href="https://www.youtube.com/channel/UCCiqIsYy68v8hkcggSEMlyA/featured"><i class="fa fa-youtube"></i></a></li>
            <li><a href="https://www.instagram.com/quartedfotografi/"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
        <div class="footer-bottom">
          <p>Copyright &copy;2021 QuartedBoykoter</p>
        </div>
      </footer>
      <!-- Akhir Footer -->
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>