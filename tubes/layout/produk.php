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
                <h1 class="pt-3 text-white"><strong> Dapatkan produk terbaik</strong></h1>
                <h1 class="text-white"><strong> untuk dirimu</strong></h1>
            </div>
            <div class="col-md-4 p-0 mt-4" >
                <form action="" method="POST"  >
                    <div class="input-group  ">
                        <span class="input-group-text bg-white" id="addon-wrapping"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="cari.." name="keyword" autocomplete="off" >
                    </div>
                </form>
            </div>
            
        </div>
        
    </section>
    <!-- END HEADER  -->



    <script src="assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>