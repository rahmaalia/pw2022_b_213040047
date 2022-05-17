<?php 

require 'functions.php';
$produk = query("SELECT * FROM produk join kategori on kategori.id_kategori = produk.kategori_id WHERE stok > 0 ORDER BY kategori_id ; ");

if( isset($_POST ["cari"]) ) {
  $produk = cari($_POST["keyword"]);
} 
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

    <!-- HEADER -->
    <section class="header">
        <div class="container">
            <div class="wrapper-center">
                <h1 class="pt-3 "><strong> Dapatkan produk terbaik</strong></h1>
                <h1 class=""><strong> untuk dirimu</strong></h1>
            </div>
            <div class="col-md-4 p-0 mt-4" >
                <form action="" method="POST"  >
                    <div class="input-group  ">
                        <span class="input-group-text bg-white" id="addon-wrapping"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="cari.." name="keyword" autocomplete="off" >
                        <button type="submit" name="cari">Cari</button>
                    </div>
                </form>
            </div>
        </div>
        
    </section>
    <!-- END HEADER  -->

    <!-- CARD PRODUK -->
    <section id="data" class="container text-center my-3 ">
      <div class="row mt-5 justify-content">
        <h3 class="produk-text mb-4 fw-bold ">Produk Serendipity</h3>
        <?php foreach ($produk as $pro) : ?>
          <div class="col-sm-5 col-md-3 zoom">
            <a href="detail.php?id=<?= $pro['id_produk'] ?>"">
            <div class="card text-center mb-3">
              <img src="../gambar/<?= $pro["gambar"]; ?>" class="card-img-top" width="200px">
              <div class="card-body">
                <a class="btn btn-4 col-12 text-uppercase fw-bold fs-6 text-left" href="detail.php?id=<?= $pro['id_produk'] ?>">
                  <?= $pro["nama_produk"]; ?>
                </a>
                <p class="text-left col-12"><?= ubahRupiah($pro["harga"]) ; ?></p>
              </div>
            </div>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
    </section>
    <!-- END CARD -->

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