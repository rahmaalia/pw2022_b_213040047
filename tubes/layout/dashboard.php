<?php 

require 'functions.php';
$produk = query("SELECT * FROM produk join kategori on kategori.id_kategori = produk.kategori_id ORDER BY id_produk DESC");

// mengambil data barang
$data_barang = mysqli_query($conn,"SELECT * FROM produk");
// menghitung data barang
$jumlah_barang = mysqli_num_rows($data_barang);

// menghitung stok
$jumlahStok = query("SELECT SUM(stok) FROM produk;");

// jumlah kategori
$kategori = mysqli_query($conn,"SELECT * FROM kategori");
$jumlah_kategori = mysqli_num_rows($kategori);

// jika tombol cari diklik
if( isset($_POST ["cari"]) ) {
  $produk = cari($_POST["keyword"]);
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />
  </head>

  <body class="">
    <div class="wrapper">
      <div class="sidebar" data-color="white" data-active-color="danger">
        <div class="logo">
          <a href="dashboard.html" class="simple-text logo-normal ms-3">
            <strong> SERENDIPITY </strong>
            
          </a>
        </div>
        <div class="sidebar-wrapper">
          <ul class="nav">
            <li class="active">
              <a href="./dashboard.php">
                <i class="nc-icon nc-bank"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li>
              <a href="./tables.php">
                <i class="nc-icon nc-tile-56"></i>
                <p>Data penjualan</p>
              </a>
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
              <a class="navbar-brand" href="javascript:;">Selamat Datang Admin</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-bar navbar-kebab"></span>
              <span class="navbar-toggler-bar navbar-kebab"></span>
              <span class="navbar-toggler-bar navbar-kebab"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
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
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link btn-magnify" href="javascript:;">
                    <i class="nc-icon nc-layout-11"></i>
                    <p>
                      <span class="d-lg-none d-md-block">Stats</span>
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link btn-rotate" href="javascript:;">
                    <i class="nc-icon nc-settings-gear-65"></i>
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
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-body">
                  <div class="row">
                    <div class="col-5 col-md-4">
                      <div class="icon-big text-center icon-warning">
                        <i class="nc-icon nc-bag-16 text-warning"></i>
                      </div>
                    </div>
                    <div class="col-7 col-md-8">
                      <div class="numbers">
                        <p class="card-category">Item</p>
                        <p class="card-title"><?= $jumlah_barang; ?></p>
                        <p></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <hr />
                  <div class="stats">
                    *jumlah barang keseluruhan
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-body">
                  <div class="row">
                    <div class="col-5 col-md-4">
                      <div class="icon-big text-center icon-warning">
                        <i class="nc-icon nc-paper text-success"></i>
                      </div>
                    </div>
                    <div class="col-7 col-md-8">
                      <div class="numbers">
                        <p class="card-category">Stok seluruh</p>
                        <?php foreach($jumlahStok as $js): ?>
                        <p class="card-title"><?php echo $js['SUM(stok)'] ;?></p>
                        <?php endforeach; ?>
                        <p></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <hr />
                  <div class="stats">
                    *stok keseluruhan barang
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-body">
                  <div class="row">
                    <div class="col-5 col-md-4">
                      <div class="icon-big text-center icon-warning">
                        <i class="nc-icon nc-bookmark-2 text-danger"></i>
                      </div>
                    </div>
                    <div class="col-7 col-md-8">
                      <div class="numbers">
                        <p class="card-category">Kategori</p>
                        <p class="card-title"><?= $jumlah_kategori; ?></p>
                        <p></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <hr />
                  <div class="stats">
                    *Jumlah kategori
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Data Barang</h4>
              </div>
              <div class="card-body">
                <div class="table">
                  <div id="container">
                    <!-- TABLE -->
                    <table class="table">
                        <thead class="text-primary">
                          <th>No</th>
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
                          <td><img src="../gambar/<?= $pro["gambar"]; ?>" width="100" alt=""></td>
                          <td class="font-weight-bold" ><?= $pro["nama_produk"]; ?></td>
                          <?php if($pro["stok"] > 0): ?>
                            <td class="font-weight-bold text-secondary" ><?= $pro["stok"]; ?></td>
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
                    <!-- end table -->
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
    <!--  Notifications Plugin    -->
    <script src="../assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
    <script>
      $(document).ready(function () {
        // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
        demo.initChartsPages();
      });
    </script>
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
      xhr.open ('GET', '../ajax/search-dashboard.php?keyword=' + keyword.value, true);
      xhr.send();
      });


      </script>

  </body>
</html>
