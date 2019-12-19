<?php
require 'config/config.php';
//include('login_session.php');

$id =  $_GET['id'];
$sql = "DELETE FROM kategori WHERE id_kategori ='{$id}'";
$result = mysqli_query($con, $sql);
header('location: kategori.php');
?>