<?php 


// mengecek apakah ada id yang dikirim dari index
// jika tidak ada maka akan di redirect ke halaman index.php
if(!isset($_GET['id'])){
  header("Location : ../index.php");
  exit;
}

require 'functions.php';
// mengambil id dari url
$id = $_GET['id'];

$produk = query("SELECT * FROM produk join kategori on kategori.id_kategori = produk.kategori_id WHERE id_produk = $id");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Produk</title>
    <!-- css  -->
    <link rel="stylesheet" href="../assets/css/style.css" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- font awesome -->
    <link rel="stylesheet" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet" />
    
    <!-- js bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
</head>
<body class="index-body" style="background-color: #f1effc; ">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #B6A9EF;">
      <div class="container-fluid">
        <a class="navbar-brand" href="../index.php"><img src="../gambar/bg-seren.png" alt="bg" width="175"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-4">
            <li class="nav-item me-2">
              <a class="nav-link active  text-white" aria-current="page" href="../index.php">home</a>
            </li>
            <li class="nav-item me-2">
              <a class="nav-link active text-white" href="produk.php">produk</a>
            </li>
            <li class="nav-item dropdown active ">
              <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                lainnya
              </a>
              <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="#">halaman admin</a></li>
              </ul>
            </li>
          </ul>
          <a class="icon text-decoration-none d-flex text-white " href="#" >
            <i class="fa fa-heart"></i>
          </a>
          <a class="icon text-decoration-none d-flex text-white ms-3 " href="#" >
            <i class="fas fa-shopping-cart"></i>
          </a>
        </div>
      </div>
    </nav>
    <!-- END NAVBAR -->

    <section class="detail">
      <div class="container">
        <div class="row mt-3 mb-5">
        <?php foreach ($produk as $pro) : ?>
          <div class="col-md-6">
            <img src="../gambar/<?= $pro['gambar']; ?>" alt="" width="550">
          </div>
          <div class="col-md-6">
            <div class="wrapper mt-4">
              <p><?= $pro['nama_kategori']; ?></p>
              <h2 class="tittle"> <?= $pro['nama_produk']; ?></h2>
              <h5 class="mt-4" style="color:#E7510D ;"><strong><?= ubahRupiah($pro["harga"]) ; ?></strong></h5>
              <p class="mt-4"><?= $pro['keterangan']; ?></p>
              <p class="mt-4">Stok : <?= $pro['stok']; ?></p>
              <div class="mb-3 mt-4">
                <input type="number" class="form-control"  value="1" style="width:6ch ;" >
              </div>
              <div class="btn-group btn-keranjang mt-4" role="group" aria-label="Basic example">
                <button type="button" class="btn text-white" style="background-color:#8064a2 ;"> Tambahkan ke kerangjang</button>
                <button type="button" class="btn text-white" style="background-color: #adb5bd;"><i class="fa fa-heart"></i></button>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </section>

    

    <!-- FOOTER -->
    <footer class="footer">
          <div class="container pt-5">
            <div class="content">
              <div class="columns is-multiline">
                <div class="row">
                  <div class="column col-md-4">
                    <img src="../gambar/bg-seren.png" alt="" width="175">
                    <p class="mt-3"><strong> Bring your life</strong> </p>
                    <p style="margin-bottom:3px ;"><i class="fa-solid fa-location-dot"></i>   Cimahi, Jawa Barat, Indonesia </p>
                    <p style="margin-bottom:3px ;"><i class="fa-solid fa-phone"></i> 0211233456</p>
                    <p><i class="fa-solid fa-envelope"></i> serendipity@gmail.com</p>
                  </div>
                  <div class="column col-md-4">
                    <p style="margin-bottom:3px ;"><strong> Sitemap</strong></p>
                    <a class="text-decoration-none sitemap" href="#">home</a>
                    <a class="text-decoration-none sitemap" href="#">produk</a>
                    <a class="text-decoration-none sitemap" href="#">halaman admin</a>
                    <a class="text-decoration-none sitemap" href="#">menyukai</a>
                    <a class="text-decoration-none sitemap" href="#">keranjang</a>
                  </div>
                  <div class="column col-md-4">
                    <p style="margin-bottom:3px ;"><strong> Social Media</strong></p>
                    <a><i class="fa-brands fa-instagram"></i> @serendipity.house</a>
                    <a><i class="fa-brands fa-facebook-f"></i> serendipity.indo</a>
                    <a><i class="fa-brands fa-youtube"></i> serendipity.house</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </footer>

    <script src="assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>