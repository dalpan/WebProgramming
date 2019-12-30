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
              <a class="nav-link" href="panduan.php">Komik</a>
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
	<br>
	<br>
       <div class="p-5 mb-2 bg-info text-white text-center">
	  <p>DAPATKAN NOTIFIKASI KHUSUS TENTANG UPDATE KOMIK TERBARU <b>SAGIRI-CHAN</b></p>
	   	<div class="single">
	<div class="input-group">
         <input type="email" class="form-control" placeholder="Enter your email">
         <span class="input-group-btn">
         <button class="btn btn-danger btn-primary" type="submit"> Daftar</button>
         </span>
          </div>
			</div>
				</div>
					</div>
        </div>
      </div>
<br>
	</br>
   <div class="container ">
<center><h1 style="font-family: Bookman, URW Bookman L, serif">Komik Update</h1></center>
<hr>
      <div class="row">

        <!-- Blog Entries Column -->
   <div class="card-group">
  <div class="card">
    <img class="card-img-top" src="img/com4.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title font-weight-bold">Chainsawman Bahasa Indonesia</h5>
      <p class="card-text">
<b>Sinopsis: </b>

Seorang Pemuda Membasmi zombie dengan gergaji mesin
</p>
      <button class="btn btn-dark"><a href="#">Baca Komik</a></button>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/com5.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title font-weight-bold">Virus Girlfriend Bahasa Indonesia</h5>
      <p class="card-text">
<b>Sinopsis : </b>

Menghadapi hari kiamat, kekuatan khusus di dalam Ling Mo terbangun. Dia menyadari bahwa dia bisa mengendalikan zombie. Oleh karena itu dia bisa berjalan melewati kerumunan zombie dengan aman dan nyaman menggunakan kekuatannya, dan akhirnya dia bertemu pacar kesayangannya – Ye Lian, tetapi hanya untuk mengetahui bahwa dia sudah berubah, berubah menjadi zombie. Untuk membantu Ye mendapatkan kembali ingatannya, Ling Mo memulai untuk bertahan hidup di hari kiamat.
</p>
   <button class="btn btn-dark"><a href="#">Baca Komik</a></button>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/com6.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title font-weight-bold">Such a Cute Spy Bahasa Indonesia</h5>
      <p class="card-text">
<b>Sinopsis : </b>

Mata-mata Korea Utara Anna Rhee harus merayu seorang jenius matematika Korea Selatan Donggu Park dan kembali bersamanya ke Korea Utara!
</p>
      <button class="btn btn-dark"><a href="#">Baca Komik</a></button>
    </div>
  </div>
</div>
 <div class="row">
   <div class="card-group">
  <div class="card">
    <img class="card-img-top" src="img/com7.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title font-weight-bold">Dosanko Gyaru Is Mega Cute Bahasa Indonesia</h5>
      <p class="card-text"><b>Sinopsis : </b>

Natsukawa Tsubasa baru saja pindah dari Tokyo ke Hokkaido, di tengah musim dingin. Tidak cukup menghargai seberapa jauh kota-kota di negara itu, ia turun taksi di kota berikutnya dari tujuannya, sehingga ia dapat melihat pemandangan di sekitar rumahnya. Tapi dia kaget ketika mengetahui “kota sebelah” berjarak 3 jam berjalan kaki. Tapi dia juga bertemu dengan Dosanko (lahir dan dibesarkan di Hokkaido) yang lucu bernama gyaru bernama Fuyuki Minami yang menantang 8 derajat celcius di bawah 0 cuaca dalam pakaian gyaru standar berupa rok pendek dan kaki telanjang!
</p>
      <button class="btn btn-dark"><a href="#">Baca Komik</a></button>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/com8.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title font-weight-bold">Yaoguai Mingdan Bahasa Indonesia</h5>
     <p class="card-text"><b>Sinopsis : </b>

      Sebuah penggoda foxy. Sebuah aneh setan pohon berkabut. Seorang gadis dengan kekuatan dewi Xianjia! Tertangkap antara perempuan merupakan prestasi di dalamnya sendiri, tapi pahlawan kita Feng Xi harus berjuang untuk melindungi perdamaian dan menyelamatkan dunia!
    </p>

      <button class="btn btn-dark"><a href="#">Baca Komik</a></button>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/com9.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title font-weight-bold">Kono Subarashii Sekai ni Shukufuku wo! Bahasa Indonesia</h5>
      <p class="card-text">
        <p class="card-text"><b>Sinopsis : </b>
        Kazuma Sato adalah permainan cinta video yang menutup-in-atau setidaknya ia, sampai kecelakaan lalu lintas memalukan membawa kehidupan mudanya berakhir sebelum waktunya. Tapi setelah kematiannya, seorang gadis cantik yang mengaku sebagai seorang dewi mengundang dia untuk memasuki dunia lain dan mendapatkan beberapa fasilitas yang terhormat dalam proses. Tapi pilihan Kazuma ini akan memiliki konsekuensi serius bagi dewi dan orang yang meninggal sama … </p>
      </p>
      <button class="btn btn-dark"><a href="#">Baca Komik</a></button>
    </div>
  </div>
</div>

<!-- Bagian Card Kedua -->

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
