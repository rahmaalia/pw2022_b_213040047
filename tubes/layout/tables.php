<?php 

require 'functions.php';
$produk = query("SELECT * FROM produk join kategori on kategori.id_kategori = produk.kategori_id ORDER BY id_produk DESC");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>serendipity</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport" />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/cf066d9bb1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />
  </head>

  <body class="">
    <div class="wrapper">
      <div class="sidebar" data-color="white" data-active-color="danger">
        <div class="logo">
          <a href="https://www.creative-tim.com" class="simple-text logo-mini">
            <div class="logo-image-small">
              <img src="../assets/img/logo-small.png" />
            </div>
            <!-- <p>CT</p> -->
          </a>
          <a href="https://www.creative-tim.com" class="simple-text logo-normal">
            SERENDIPITY
            <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
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
              <form>
                <div class="input-group no-border">
                  <input type="text" value="" class="form-control" placeholder="Search..." />
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
            <div class="col-md-12">
              <div class="card">
                <div class="card-header m-3" >
                  <div class="row justify-content-between ">
                  <h4 class="card-title ">Serendipity</h4>
                  <a href="tambah.php" class="btn btn-success  float-sm-end">+ tambah data</a>
                  </div>
                </div>
                <div class="card-body">
                  <div class="table">
                    <!-- TABEL -->
                    <table class="table">
                      <thead class="text-primary">
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Nama</th>
                        <th>Stok</th>
                        <th>Harga</th>
                        <th>Kategori</th>
                        <th class="text-right">Aksi</th>
                      </thead>
                      <tbody>
                        <?php $i = 1; ?>
                        <?php foreach($produk as $pro): ?>
                        <tr>
                        <td><?= $i; ?></td>
                        <td><img src="../gambar/<?= $pro["gambar"]; ?>" width="100" alt=""></td>
                        <td><?= $pro["nama_produk"]; ?></td>
                        <td><?= $pro["stok"]; ?></td>
                        <td>Rp.<?= $pro["harga"]; ?></td>
                        <td><?= $pro["nama_kategori"]; ?></td>
                        <td class="text-right">
                            <a href="ubah.php?id_produk=<?= $pro["id_produk"]; ?>"><i class="far fa-edit fa-2x text-warning"></i></a> |
                            <a href="hapus.php?id_produk=<?= $pro["id_produk"]; ?>"onclick="return confirm('Yakin?')"><i class="far fa-trash-alt fa-2x text-danger"></i></a>
                        </td>
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
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="../assets/demo/demo.js"></script>

    
  </body>
</html>
