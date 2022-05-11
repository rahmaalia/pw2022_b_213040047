<?php 

require 'layout/functions.php';
$produk = query("SELECT * FROM produk join kategori on kategori.id_kategori = produk.kategori_id ORDER BY id_produk LIMIT 4; ");
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />


    <!-- js bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
</head>
<body class="index-body" style="background-color: #f1effc; ">

    <nav class="navbar navbar-light navbar-expand-lg" style="background-color: #B6A9EF;">
        <div class="container-fluid">
            <a class="navbar-brand" href=""><img src="gambar/bg-seren.png" alt="bg" width="175"></a>
            <ul class="navbar-nav">
                <a href="" class="btn btn-login me-2 fw-bold text-white" style="font-family: 'Poppins', sans-serif;">Login</a>
            </ul>
        </div>
    </nav>

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

    <section id="data" class="container text-center my-3 ">
    <div class="row mt-5 justify-content-evenly">
      <h3 class="produk-text mb-4 fw-bold ">produk</h3>
      <?php foreach ($produk as $pro) : ?>
        <div class="col-sm-5 col-md-3">
          <a href="php/detail.php?id=<?= $pro['id_produk'] ?>"">
          <div class="card text-center mb-3">
            <img src="gambar/<?= $pro["gambar"]; ?>" class="card-img-top" width="200px">
            <div class="card-body">
              <a class="btn btn-4 col-12 text-uppercase fw-bold" href="php/detail.php?id=<?= $pro['id_produk'] ?>">
                <?= $pro["nama_produk"]; ?>
              </a>
            </div>
          </div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
    <a href="shoe.php" class="btn btn-login btn-3 mb-3 text-white rounded-pill">lihat produk lainnya</a>
  </section>


    <script src="assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>