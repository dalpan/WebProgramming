<?php
echo "S";
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
} else { 
   $username = $_SESSION['username']; 
}
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
   <link href="css/social.css" type="text/css" media="screen">
	 <link href="css/bootstrap-social.css" rel="stylesheet">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 

    <!-- Custom styles for this template -->
    <link href="css/business-frontpage.css" rel="stylesheet">

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
               <a href="logout.php" class="btn btn-danger btn-rounded">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <!-- Header with Background Image -->
    <header class="business-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="text-left mt-4"><br><br><br>Dapatkan notifikasi khusus untuk<br> Update komik terbaru di <b>Sagiri-chan</b></h1>
			<h5 class="mt-4">Lebih dari 5 komik update setiap harinya</h5>
			<div class="input-group">
         <input type="email" class="form-control" placeholder="Enter your email" style="width:30px">
         <span class="input-group-btn">
         <button class="btn btn-danger btn-rounded" type="submit">Submit</button>
         </span>
          </div>
          </div>
        </div>
      </div>
    </header>
    <br>
  </br>
    <!-- Page Content -->
<div class="container">
<h1 class="text-center"> Komik Terbaru </h1>
<br>
	</br>
    <div class="row">
        <div class="col-md-6">
          <a href="#">
            <img class="img-fluid rounded float-right mb-3 mb-md-0" src="img/com1.jpg" alt="">
          </a>
        </div>
        <div class="col-md-5">
          <h3><b>Hero? I Quit A Long Time Ago Bahasa Indonesia</b></h3>
          <p><b>Keterangan : </b></p>
          <ul>
          	<li>Genres: Action, Fantasy, Sci-Fi, Shounen </li>
          	<li>Status: Ongoing </li>
          	<li>Released: 2017 </li>
          	<li>Author: Hai Luo, Wu Liao Kan Kan Tian </li>
          	<li>Type: Manhua Total </li>
          	<li>Chapter: ? </li>
          	<li>Updated on: October 12, 2019 </li>
          </ul>
          <p><b>Sinopsis : </b></p>
          <p>

ero was mankind’s first real superhero. Under his watch, countless other superheros appeared and followed in his footsteps. However, after 5 years of war, Zero disappeared without a trace.
</p>
          <a class="btn btn-primary" href="artikel.php">Baca Komik ></a>
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Project Two -->
      <div class="row">
        <div class="col-md-6">
          <a href="#">
            <img class="img-fluid rounded float-right mb-3 mb-md-0" src="img/com2.jpg" alt="">
          </a>
        </div>
        <div class="col-md-5">
          <h3><b>The Hunter Bahasa Indonesia</b></h3>
          <p><b>Keterangan : </b></p>
          <ul>
          	<li>Genres: Action, Drama, Fantasy, Martial Arts, Romance</li>
          	<li>Status: Ongoing </li>
          	<li>Released: 2018 </li>
          	<li>Author: Author: 聂备 Nie Bei (Arts) , 比格熊 Big Bear (Story </li>
          	<li>Type: Manhua </li>
          	<li>Chapter: ? </li>
          	<li>Updated on: October 12, 2019 </li>
          </ul>
          <p><b>Sinopsis : </b></p>
          <p>
          Chen BeiMing pernah menjadi pemburu muda dan berbakat dari Aliansi Surgawi, sampai ia dikhianati dan dibunuh oleh The Five Lords. Dia akan dibangkitkan ke masa lalu sementara ingatannya masih utuh dan bersumpah bahwa dia akan membalas dendam pada orang-orang yang mengkhianatinya. Dengan bantuan sprite pertempurannya, dia pernah naik ke jalan untuk menjadi yang terkuat lagi …</p>
          <a class="btn btn-primary" href="artikel.php">Baca Komik ></a>
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Project Three -->
      <div class="row">
        <div class="col-md-6">
          <a href="#">
            <img class="img-fluid rounded float-right mb-3 mb-md-0" src="img/com3.jpg" alt="">
          </a>
        </div>
        <div class="col-md-5">
          <h3><b>Kimetsu no Yaiba Bahasa Indonesia</b></h3>
          <p><b>Keterangan : </b></p>
         <ul>
          	<li>Genres: Action, Demons, Historical, Shounen, Supernatural</li>
          	<li>Status: Ongoing </li>
          	<li>Released: Feb 15, 2016 </li>
          	<li>Author: Author: Gotouge, Koyoharu (Story & Art) </li>
          	<li>Type: Manga </li>
          	<li>Chapter: ? </li>
          	<li>Updated on: October 12, 2019 </li>
          </ul>
          <p><b>Sinopsis : </b></p>
          <p>
          Disetting pada era Taisho Jepang. Tanjirou adalah seorang anak muda yang baik hati yang hidup damai dengan keluarganya sebagai penjual batubara. kehidupan normal mereka berubah sepenuhnya ketika keluarganya dibantai oleh setan. salah satu yang selamat lainnya, adik Tanjirou ini Nezuko, telah menjadi setan ganas. Dalam rangka untuk kembali Nezuko normal dan membalas dendam pada setan yang membunuh keluarga mereka, mereka berdua berangkat pada perjalanan. Dari bakat muda, kisah petualangan darah dan pedang dimulai!</p>
          <a class="btn btn-primary" href="artikel.php">Baca Komik ></a>
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Project Four -->
	  <br>
	  <br>
	  <a href="#" style="font-size:25px;color:black"><b><u> Baca Komik Lainya</b> </u></a></h3>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
<br>
</br>
    <!-- Footer -->

<div class="p-3 mb-3 bg-dark text-white">
<!-- Footer -->

    <!-- Footer Links -->
    <div class="container text-left text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-6 mx-auto">

          <!-- Content -->
          <h5 class="font-weight-bold mt-4 mb-4">Jangan sampai kelewatan update Komik terbaru dari <strong>Sagiri-chan</strong></h5>
          <p>Daftar jadi mailist setia untuk mendapatkan update terbaru, langsung ke email anda. Tidak dipungut biaya:</p>
	<div class="single">
	<div class="input-group">
         <input type="email" class="form-control" placeholder="Enter your email">
         <span class="input-group-btn">
         <button class="btn btn-primary" type="submit"> Daftar</button>
         </span>
          </div>
	</div>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->

        <hr class="clearfix w-50 d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold  text-center mt-3 mb-4">Ayo Kenalan</h5>

          <ul class="social">
              <i class="fa fa-facebook-official" style="font-size:20px"> Facebook</i><br>
              <i class="fa fa-twitter" style="font-size:20px"> Twitter</i><br>
			  <i class="fa fa-github-alt" style="font-size:20px"> Kontak</i>
          </ul>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

</footer>
<!-- Footer -->
	</div>
	</div>
</div>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
