<?php
//include('login_session.php');
$q="";
if(isset($_GET['submit'])&& !empty($_GET['q'])){
  $q= $_GET['q'];
  $sql_where = " WHERE nama_barang LIKE '{$q}%'";
}
$title = 'Data Barang';
include_once 'koneksi.php';
$sql = "SELECT b.id_barang,b.id_kategori,b.nama_barang,k.nama_kategori,b.harga_jual,b.harga_beli,b.stok,b.deskripsi,b.gambar
FROM barang b JOIN kategori k on b.id_kategori=k.id_kategori";
$sql_count = "SELECT COUNT(*) FROM barang";
if (isset($sql_where)){
  $sql .=$sql_where;
  $sql_count .=$sql_where;
}
$result_count = mysqli_query($conn, $sql_count);
$count = 0;
if ($result_count){
  $r_data = mysqli_fetch_row($result_count);
  $count = $r_data[0];
}
$per_page = 3;
$num_page = ceil($count / $per_page);
$limit = $per_page;
if (isset($_GET['page'])){
  $page = $_GET['page'];
  $offset = ($page - 1) * $per_page;
}else{
  $offset = 0;
  $page = 1;
}
$sql .= " LIMIT {$offset}, {$limit}";
$result = mysqli_query($conn, $sql);
include_once 'header.php';
?>
<div class="content_b">
  <div class="main">
    <?php echo '<a href="form_barang.php" class="btn btn-large">Tambah Barang</a>';  ?>
    <form action="barang.php" method="get">
      <label for="q">Cari data: </label>
      <input type="text" id="q" name="q" class="input-q" value="<?php echo $q ?>">
      <input type="submit" name="submit" value="Cari" class="btn btn-primary">
    </form>
    <form action="barang.php" method="post">
    </form>
    <?php
if($result):
     ?>
     <table>
       <tr>
         <th>Gambar</th>
         <th>Nama Barang</th>
         <th>Kategori</th>
         <th>Harga Jual</th>
         <th>Harga Beli</th>
         <th>Stok</th>
         <th>Deskripsi</th>
         <th>Aksi</th>
       </tr>
       <?php while($row = mysqli_fetch_array($result)): ?>
         <tr>
           <td><?php echo "<img src=\"{$row['gambar']}\" />"; ?></td>
          <td><?php echo $row['nama_barang']; ?></td>
           <td><?php echo $row['nama_kategori']; ?></td>
           <td class="right"><?php echo number_format($row['harga_jual'],2,',','.'); ?></td>
           <td class="right"><?php echo number_format($row['harga_beli'],2,',','.'); ?></td>
           <td class="right"><?php echo $row['stok'];?></td>
           <td><?php echo $row['deskripsi']; ?></td>
           <td class="center">
             <a class="btn btn-default" href="edit_barang.php?id=<?php echo $row['id_barang']; ?>">Edit</a>
             <a class="btn btn-alert" onclick="return confirm('Yakin akan menghapus data?');" href="hapus_barang.php?id=<?php echo $row['id_barang'];?>">Delete</a>
           </td>
         </tr>
       <?php endwhile;?>
     </table>
     <ul class="pagination">
       <li><a href="#">&laquo;</a></li>
       <?php for ($i=1; $i <=$num_page; $i++) {
         $link = "?page={$i}";
         if (!empty($q)) $link .= "&q={$q}";
         $class = ($page == $i ? 'active' : '');
         echo "<li><a class=\"{$class}\" href=\"{$link}\">{$i}</a></li>";
                } ?>
                <li>
                  <a href="">...</a>
                  <a href="">9</a>
                  <a href="">10</a>
                  <a href="">11</a>
                </li>
                <li><a href="#">&raquo;</a></li>
              </ul>
  <?php endif; ?>
</div>
</div>
<?php include_once 'footer.php'; ?>
