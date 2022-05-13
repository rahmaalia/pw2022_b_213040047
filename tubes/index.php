<?php 

require 'layout/functions.php';
$produk = query("SELECT * FROM produk join kategori on kategori.id_kategori = produk.kategori_id WHERE stok > 0 ORDER BY id_produk LIMIT 4 ; ");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>serendipity</title>
    <!-- css  -->
    <link rel="stylesheet" href="assets/css/style.css" />

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
        <a class="navbar-brand" href="index.php"><img src="gambar/bg-seren.png" alt="bg" width="175"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-4">
            <li class="nav-item me-2">
              <a class="nav-link active  text-white" aria-current="page" href="index.php">home</a>
            </li>
            <li class="nav-item me-2">
              <a class="nav-link active text-white" href="layout/produk.php">produk</a>
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

    <!-- KAROSEL -->
    <div class="home">
      <div id="carouselExampleIndicators" class="carousel slide karosel" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="gambar/karosel2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="gambar/karosel1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="gambar/karosel3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <!-- PRODUK FAFORITE -->
    <section id="data" class="container text-center my-3 ">
      <div class="row mt-5 justify-content-evenly">
        <h3 class="produk-text mb-4 fw-bold ">produk favorit</h3>
        <?php foreach ($produk as $pro) : ?>
          <div class="col-sm-5 col-md-3 zoom">
            <a href="php/detail.php?id=<?= $pro['id_produk'] ?>"">
            <div class="card text-center mb-3">
              <img src="gambar/<?= $pro["gambar"]; ?>" class="card-img-top" width="200px">
              <div class="card-body">
                <a class="btn btn-4 col-12 text-uppercase fw-bold fs-6 text-left" href="php/detail.php?id=<?= $pro['id_produk'] ?>">
                  <?= $pro["nama_produk"]; ?>
                </a>
                <p class="text-left col-12"><?= ubahRupiah($pro["harga"]) ; ?></p>
              </div>
            </div>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
      <a href="layout/produk.php" class="btn btn-login btn-3 mb-3 mt-4 fs-6 text-white rounded-pill">lihat produk lainnya</a>
    </section>

    <!-- KATEGORI -->
    <section id="kategori" class="kategori text-center  "  >
      <div class="container">
        <div class="row mt-5 justify-content-evenly">
          <h3 class="produk-text mb-4 fw-bold mt-4 ">kategori</h3>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class=" col-xs-12 col-md-6 pull-right">
                    <div class="well gendong tall" >
                        <img src="gambar/gendong-remove.png" alt="" style="width:300px; ">
                    </div>      
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="well sling tall">
                      <img src="gambar/sling-remove.png" alt="" style="width:320px;">
                    </div>
                </div>
                <div class="col-xs-12 col-md-12 pull-right mt-4 mb-4" >
                    <div class="well tote">
                      <img src="gambar/totebag-remove.png" alt="" style="width:320px;">
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer">
          <div class="container pt-5">
            <div class="content">
              <div class="columns is-multiline">
                <div class="row">
                  <div class="column col-md-4">
                    <img src="gambar/bg-seren.png" alt="" width="175">
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