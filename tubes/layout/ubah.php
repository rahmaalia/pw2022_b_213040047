<?php 
session_start();
if(!isset($_SESSION["login"])){
  header("Location:login.php");
  exit;
}
require 'functions.php';

// ambil data di url
$id = $_GET["id_produk"];

// query data mahasiswa berdasarkan id
$pro = query("SELECT * FROM produk WHERE id_produk = $id ")[0];
// var_dump($pro); die;

// cek apakah tombol submit telah ditekan atau belum
if (isset($_POST["submit"])) {

    // cek apakag data berhasil di ubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diubah')
                document.location.href='tables.php'
            </script>";
    } else {
        echo
        "        <script>
        alert('data gagal diubah')
        document.location.href='tables.php'
        </script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ubah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css" />

</head>
<body class="bg-main">

    <div class="container my-5 tambah">
        <div class="row justify-content-center">
            <div class="card col-sm-10 col-md-8">
                <div class="card-header">
                    <h4 class="card-title text-center">Ubah Data Barang</h4>
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_produk" value="<?= $pro["id_produk"]; ?>">
                    <input type="hidden" name="gambarLama" value="<?= $pro["gambar"]; ?>">

                    
                        <div class="mb-3">
                            <label for="namaProduk" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" id="namaProduk" name="namaProduk" value="<?= $pro["nama_produk"]; ?>" required autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="stok" class="form-label">Stok</label>
                            <input type="number" class="form-control" id="stok" name="stok" value="<?= $pro["stok"]; ?>" required >
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="number" class="form-control" id="harga" name="harga" value="<?= $pro["harga"]; ?>" required >
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar</label>
                            <input type="file" class="form-control picture" id="gambar" name="gambar" onchange="previewImage()" >
                            <img src="../gambar/<?= $pro["gambar"]; ?>" alt="" width="150" class="mt-3 d-block img-preview">
                        </div>
                        <div class="mb-3">
                            <label for="kategori" class="col-form-label">Kategori</label>
                            <select class="form-select" name="kategori_id" required >
                                <option disabled="" selected="" value="">Pilih kategori</option>
                                <option value="1" <?php if($pro['kategori_id'] == "1") { echo "selected";} ?> >Backpack</option>
                                <option value="2" <?php if($pro['kategori_id'] == "2") { echo "selected";} ?>>Totebag</option>
                                <option value="3" <?php if($pro['kategori_id'] == "3") { echo "selected";} ?>>Slingbag</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Keterangan</label>
                            <textarea class="form-control" id="keterangan" name="keterangan"  rows="3"  required   ><?php echo htmlspecialchars($pro["keterangan"]); ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        <a href="tables.php" class="mx-1 btn text-secondary">Kembali</a>
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