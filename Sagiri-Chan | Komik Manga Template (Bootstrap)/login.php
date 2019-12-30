<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
   require_once("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sagiri-chan | Tempatnya Baca Komik/Manga Bahasa Indonesia</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
   <link href="css/bootstrap-social.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   

    <!-- Custom styles for this template -->

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
         <a href="index.php"><img src="img/Sagiri-chan.png" style="height:50px" class="navbar-brand" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="nav-link" href="blog.php">Review
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="komik.php">Komik</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kontak.php">Kontak</a>
            </li>
            <li class="nav-item">
               <a href="daftar.php" class="btn btn-danger btn-rounded">Daftar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header with Background Image -->
  <br>
  <br>
          </div>
        </div>
      </div>
<br>
  </br>
   <div class="container ">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <form action="proses-login.php" method="post">
      <h2 class="text-left">Silahkan login dulu untuk menikmati fitur dari website kami</h2>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Username</label>
      <input class="form-control" name="username" type="text">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input class="form-control" name="password" type="password">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Saya bukan Robot
      </label>
    </div>
  </div>
  <input value="Login" type="submit">
</form><br>
 

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari informasi disini">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Cari</button>
                </span>
        </div>
            </div>    

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-light">
      <div class="container">
        <p class="m-0 text-center text-dark" >DIBUAT DENGAN  SAGIRI-CHAN © 2019.<a href="#"> HUBUNGI SAYA</a></p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
