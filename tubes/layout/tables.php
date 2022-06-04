<?php 
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';
$produk = query("SELECT * FROM produk join kategori on kategori.id_kategori = produk.kategori_id ORDER BY id_produk DESC");

$hTinggi = query("SELECT * FROM produk join kategori on kategori.id_kategori = produk.kategori_id ORDER BY harga DESC");

$hRendah = query("SELECT * FROM produk join kategori on kategori.id_kategori = produk.kategori_id ORDER BY harga ASC");


// jika tombol cari diklik
if( isset($_POST ["cari"]) ) {
  $produk = cari($_POST["keyword"]);
} 

// jika dropdown tinggi diklik
if( isset($_POST ["tinggi"]) ) {
  $produk = $hTinggi;
}

// jika dropdown rendah diklik
if( isset($_POST ["rendah"]) ) {
  $produk = $hRendah;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>admin serendipity</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport" />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/cf066d9bb1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/style.css" />
  </head>

  <body class="">
    <div class="wrapper">
      <div class="sidebar" data-color="white" data-active-color="danger">
        <div class="logo">
          <a href="dashboard.php" class="simple-text logo-normal ml-4">
             <h5>SERENDIPITY</h5>
          </a>
        </div>
        <div class="sidebar-wrapper">
          <ul class="nav">
            <li>
              <a href="./dashboard.php">
                <i class="nc-icon nc-bank"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="active">
              <a href="./tables.php">
                <i class="nc-icon nc-tile-56"></i>
                <p>Data penjualan</p>
              </a>
            </li>
            <li class=" col-md-12">
            <a href="cetak.php" type="button" class="btn btn-primary text-white" target="_blank"> Cetak</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
          <div class="container-fluid">
            <div class="navbar-wrapper">
              <div class="navbar-toggle">
                <button type="button" class="navbar-toggler">
                  <span class="navbar-toggler-bar bar1"></span>
                  <span class="navbar-toggler-bar bar2"></span>
                  <span class="navbar-toggler-bar bar3"></span>
                </button>
              </div>
              <a class="navbar-brand" href="javascript:;">Data penjualan</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-bar navbar-kebab"></span>
              <span class="navbar-toggler-bar navbar-kebab"></span>
              <span class="navbar-toggler-bar navbar-kebab"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
              <!-- SEACRH -->
              <form action="" method="post">
                <div class="input-group no-border">
                  <input type="text" name="keyword" value="" class="form-control" placeholder="Cari..." autocomplete="off" id="keyword" />
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <i class="nc-icon nc-zoom-split"></i>
                    </div>
                  </div>
                </div>
              </form>
              <!-- END SEARCH -->
              <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link btn-magnify" href="logout.php">
                    <i class="fas fa-sign-out-alt"></i>
                    <p>
                      <span class="d-lg-none d-md-block">Account</span>
                    </p>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header m-3" >
                  <div class="row justify-content-between ">
                  <h4 class="card-title ">Serendipity</h4>
                  <div class="d-flex justify-content-end">
                    <form action="" method="post">
                      <div class="dropdown">
                        <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                          Filter Harga
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <Button class="dropdown-item" name="tinggi" type="submit" >Tertinggi</Button>
                          <Button class="dropdown-item" name="rendah" type="submit">Terendah</Button>
                        </div>
                      </div>
                    </form>
                    <a href="tambah.php" class="btn btn-success  float-sm-end">+ tambah data</a>
                  </div>
                  
                  </div>
                </div>
                <div class="card-body">
                  <div class="table">
                    <div id="container">
                      <!-- TABEL -->
                      <table class="table">
                        <thead class="text-primary">
                          <th>No</th>
                          <th class="text-right">Aksi</th>
                          <th>Gambar</th>
                          <th>Nama</th>
                          <th>Stok</th>
                          <th>Harga</th>
                          <th>Kategori</th>
                          <th>Keterangan</th>
                        </thead>
                        <tbody>
                          <?php $i = 1; ?>
                          <?php foreach($produk as $pro): ?>
                          <tr>
                          <td><?= $i; ?></td>
                          <td class="text-right">
                              <a href="ubah.php?id_produk=<?= $pro["id_produk"]; ?>"><i class="far fa-edit fa-1x text-warning"></i></a>
                              <a href="hapus.php?id_produk=<?= $pro["id_produk"]; ?>"onclick="return confirm('Yakin?')"><i class="far fa-trash-alt fa-1x text-danger"></i></a>
                          </td>
                          <td><img src="../gambar/<?= $pro["gambar"]; ?>" width="100" alt=""></td>
                          <td class="font-weight-bold" ><?= $pro["nama_produk"]; ?></td>
                          <?php if($pro["stok"] > 0): ?>
                            <td class="font-weight-bold text-secondary"><?= $pro["stok"]; ?></td>
                          <?php elseif($pro["stok"] < 1): ?>
                            <td class="col-1 text-danger font-weight-bold">STOK HABIS</td>
                          <?php endif; ?>
                          <td><?= ubahRupiah($pro["harga"]) ; ?></td>
                          <td class="font-weight-bold text-secondary"><?= $pro["nama_kategori"]; ?></td>
                          <td><?= $pro["keterangan"]; ?></td>
                          
                          </tr>
                          <?php $i++; ?>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                      <!-- end tabel -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer class="footer footer-black footer-white">
          <div class="container-fluid">
            <div class="row">
              <div class="credits ml-auto">
                <span class="copyright">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with <i class="fa fa-heart heart"></i> by Creative Tim
                </span>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- Chart JS -->
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
    <script src="../tubes/assets/js/script.js" type="text/javascript"></script>
    
    <script>

      var keyword = document.getElementById('keyword');
      var tombolCari = document.getElementById('tombol-cari');
      var container = document.getElementById('container');

      // tambahkan event ketika keyword ditulis
      keyword.addEventListener('keyup', function () {
        // buat object ajax
      var xhr = new XMLHttpRequest();

      // cek kesiapan ajax
      xhr.onreadystatechange = function(){
      if( xhr.readyState == 4 && xhr.status == 200){
        container.innerHTML = xhr.responseText;
      }
      }

      // eksekusi ajax
      xhr.open ('GET', '../ajax/penjualan.php?keyword=' + keyword.value, true);
      xhr.send();
      });

      
    </script>                        


    
  </body>
</html>
