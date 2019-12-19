<!-- membuat content -->
<?php
  include_once 'koneksi.php';
  //include('login_session.php');
  $title = 'kategori';
  $sql = 'SELECT * FROM barang';
  $result = mysqli_query($conn, $sql);
 ?>


<div id="content">
  <div class="row">
    <?php while($row = mysqli_fetch_array($result)): ?>
      <div class="box">
          <img src="<?php echo "{$row['gambar']}" ?>"  />
          <h3><?php echo $row['nama_barang']; ?></h3>
          <p>Harga : <?php echo number_format($row['harga_jual'], 2, ',', '.');?></p>
          <p><?php
    						$text = $row['deskripsi'];
    						$potong_text=substr($text, 0, 20);
    						echo $potong_text;?></td>
          </p>
          <a href="view.php?id=<?php echo $row['id_barang'];?>" class="btn btn-default">View detail</a>
      </div>
      <?php endwhile; ?>
  </div>
</div>
