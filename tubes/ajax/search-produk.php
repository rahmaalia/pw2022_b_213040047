<?php 

require '../layout/functions.php';
$keyword = $_GET["keyword"];
$query = "SELECT * FROM produk JOIN kategori ON kategori.id_kategori = produk.kategori_id
            WHERE
            nama_produk LIKE '%$keyword%' OR
            stok LIKE '%$keyword%' OR
            harga LIKE '%$keyword%' OR
            nama_kategori LIKE '%$keyword%'
            AND 
            stok > 0 ORDER BY kategori_id
            ";
$produk = query($query);

?>

<section id="data" class="container text-center my-3 ">
        <div class="row mt-5 justify-content">
          <div class="  mb-4 ">
            <div class="col ">
              <h3 class="produk-text mb-4 fw-bold  d-inline float-start ">Produk Serendipity</h3>
            </div>
            <form action="" method="post">
            <div class="input-group col-3 float-end">
                <select class="form-select" id="inputGroupSelect04" name="kategori">
                  <option value="0">Semua Kategori</option>
                  <option value="1">Bacpack</option>
                  <option value="3">Slingbag</option>
                  <option value="2">Totebag</option>
                </select>
                <button class="btn btn-login" name="pilih" type="submit">Pilih</button>
              </form>
            </div>
          </div>  
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