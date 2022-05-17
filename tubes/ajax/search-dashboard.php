<?php 

require '../layout/functions.php';
$keyword = $_GET["keyword"];
$query = "SELECT * FROM produk JOIN kategori ON kategori.id_kategori = produk.kategori_id
            WHERE
            nama_produk LIKE '%$keyword%' OR
            stok LIKE '%$keyword%' OR
            harga LIKE '%$keyword%' OR
            nama_kategori LIKE '%$keyword%'
            ";
$produk = query($query);

?>

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