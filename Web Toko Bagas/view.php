<?php
error_reporting(E_ALL);
include('koneksi.php');

$title = 'Data Barang';
$id = $_GET['id'];
$sql = "SELECT * FROM barang WHERE id_barang = '{$id}'";
$result = mysqli_query($conn, $sql);
if (!$result) die('Error : Data tidak tersedia');
$data = mysqli_fetch_array($result);

function is_select($var, $val) {
    if ($var == $val) return 'selected="selected"';
    return false;
}

include('header.php')

?>

<div class="content_b">


    <div class="main">
    <table>
        <tr>
            <th>Gambar</th>
            <th>Nama Barang</th>
            <th>Harga Jual</th>
            <th>Stok</th>
            <th>Deskripsi</th>
        </tr>
        <tr>
            <td><?php echo "<img src=\"{$data['gambar']}\"/>";?></th>
            <td><?php echo $data['nama_barang']; ?></td>
			<td class="right"><?php echo number_format($data['harga_jual'],2,',','.'); ?></td>
			<td class="right"><?php echo $data['stok']; ?></td>
			<td> <?php echo $data['deskripsi']; ?></td>
        </tr>
    </table>
    <hr/>
        <div class="daftar">
        <h3>SILAKAN ORDER</h3>
            <hr> <br/>
        <p><pre>
        Nama            : Bagas Tri Usada <br>
        No. Hp          : 08438473847 <br>
        No. Rekening    : (BCA) 2591109156 a/n Bagas Tri U. <br><pre/>
        </p>
        </div>
    </div>
</div>
<?php include_once('footer.php') ?>