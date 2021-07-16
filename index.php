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
  <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'templates/navbar.php'; ?>
<!-- konten   -->
  <div class="container">
    <section class="content">
      <div class="slider">
        <div class="slides">
            <!--radio buttons start-->
          <input type="radio" name="radio-btn" id="radio1">
          <input type="radio" name="radio-btn" id="radio2">
          <input type="radio" name="radio-btn" id="radio3">
          <input type="radio" name="radio-btn" id="radio4">
            <!--radio buttons end-->
            <!--slide images start-->
          <div class="slide first">
            <img src="foto_produk/sepatu1.jpg" alt="">
          </div>
          <div class="slide">
            <img src="foto_produk/sepatu2.jpg" alt="">
          </div>
          <div class="slide">
            <img src="foto_produk/sepatu3.jpg" alt="">
          </div>
          <div class="slide">
            <img src="foto_produk/sepatu4.jpg" alt="">
          </div>
            <!--slide images end-->
            <!--automatic navigation start-->
          <div class="navigation-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
            <div class="auto-btn4"></div>
          </div>
          <!--automatic navigation end-->
        </div>
          <!--manual navigation start-->
          <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
          </div>
          <!--manual navigation end-->
      </div>
    </section>
    <section id="cliens" class="cliens section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">
          <div class="foto">

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="foto_produk/logo5.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="foto_produk/logo2.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="foto_produk/logo4.png" class="img-fluid" alt="">
            </div>
          </div>


        </div>

      </div>
    </section>
  </div>
  <div class="container">
    <img src="foto_produk/judul.png" alt="" class="responsive" width="" height=""  data-aos="fade-up" data-aos-duration="1000">
    <div class="row">
      <?php
      $ambil = $koneksi->query("SELECT * FROM produk");
      while($perproduk = $ambil->fetch_assoc()):
      ?>
      <div class="col-md-3">
        <div class="thumbnail">
          <img src="foto_produk/<?= $perproduk['foto_produk']; ?>">
          <div class="caption">
            <h3><?= $perproduk['nama_produk']; ?></h3>
            <h5>Rp. <?= number_format($perproduk['harga_produk']); ?>,-</h5>
            <a href="beli.php?id=<?= $perproduk['id_produk']; ?>" class="btn btn-primary">Beli</a>
            <a href="detail.php?id=<?= $perproduk['id_produk']; ?>" class="btn btn-default">Detail</a>
            <a href="https://api.whatsapp.com/send?phone=6289667880925" class="btn btn-success">Chat Penjual</a>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>
  <script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 4){
        counter = 1;
      }
    }, 5000);
  </script>
</body>
</html>