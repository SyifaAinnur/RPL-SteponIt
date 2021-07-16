<?php
session_start();
//koneksi ke database
include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Step On It</title>
  <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<body>

<?php include 'templates/navbar.php'; ?>

<!-- konten   -->
<section class="content">
  <div class="container">
    <h1>Cara Pemesanan</h1>
    <hr>
    <p>Untuk melakukan Pembelian tekan menekan tombol <a class="btn btn-primary">beli</a></p>
    <p>Untuk melihat deskripsi produk tekan tombol <a class="btn btn-default">diskripsi</a></p>
    <p>Untuk mengirimkan pesan kepada pembeli tekan tombol <a class="btn btn-success" >chat penjual</a></p>
  </div>
</section>
  
</body>
</html>