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
            <a href="ubah.php?id_produk=<?= $pro["id_produk"]; ?>"><i class="far fa-fa-1x text-warning"></i></a>
            <a href="hapus.php?id_produk=<?= $pro["id_produk"]; ?>"onclick="return co('Yakin?')"><i class="far fa-trash-alt fa-1x text-danger"></i></a>
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