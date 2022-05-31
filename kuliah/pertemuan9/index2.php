<?php 

// koneksi ke databse
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

//ambil data dari data mahasisswa/query
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
// var_dump($result) ;

// KALO MU LIAT ERROR
// if (!$result) {
//     echo mysqli_error($conn);
// }

// ambil data (fecth) mahasiswa dari objek result
// mysqli_fetch_row() // mengembalikan array numeric
// mysqli_fetch_assoc() // mengembalikan array associative
// mysqli_fetch_array () // mengembalikan keduanya
// mysqli fetch_object ()

// MENAMPILAKN SEMUA DATA DENGAN LOOPING
// while( $mhs = mysqli_fetch_assoc ($result) ) {
//     var_dump ($mhs ["nama"]);
// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Admin</title>
</head>
<body>
    <h1>daftar mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>


        <?php $i = 1; ?>
        <?php while( $row = mysqli_fetch_assoc($result) ): ?>
        <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="">ubah</a> |
            <a href="">hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"]; ?>" width="50" alt=""></td>
        <td><?= $row["nrp"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
    </table>

</body>
</html>