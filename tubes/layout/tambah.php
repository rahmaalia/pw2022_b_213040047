<?php 

require 'functions.php';

// cek apakah tombol submit telah ditekan atau belum
if (isset($_POST["submit"])) {


    // cek apakag data berhasil di tambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
        <script>
        alert('data berhasil ditambahkan')
        document.location.href='tables.php'
        </script>";
        
    } else {
        echo
        "        <script>
        alert('data gagal ditambahkan')
        document.location.href='tables.php'
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css" />

</head>
<body class="bg-main">

    <div class="container my-5 tambah">
        <div class="row justify-content-center">
            <div class="card col-sm-10 col-md-8">
                <div class="card-header">
                    <h4 class="card-title text-center">Tambah Data Barang</h4>
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="namaProduk" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" id="namaProduk" name="namaProduk" placeholder="masukkan nama produk" required autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="stok" class="form-label">Stok</label>
                            <input type="number" class="form-control" id="stok" name="stok" placeholder="masukkan jumlah stok" required >
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="number" class="form-control" id="harga" name="harga" placeholder="masukkan harga barang" required >
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar</label>
                            <input type="file" class="form-control picture" id="gambar" name="gambar" placeholder="masukkan nama gambar" onchange="previewImage()">
                            <img src="../gambar/blank.png" width="150" class="mt-3 d-block img-preview">
                        </div>
                        <div class="mb-3">
                            <label for="kategori" class="col-form-label">Kategori</label>
                            <select class="form-select" name="kategori" required="">
                                <option disabled="" selected="">Pilih kategori</option>
                                <option value="1">Backpack</option>
                                <option value="2">Totebag</option>
                                <option value="3">Slingbag</option>
                            </select>
                        </div>
                        
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
    <!--   Core JS Files   -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/jquery-3.5.1.js"></script>

</body>
</html>