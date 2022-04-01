<?php 
// cek apakah tidak ada data di $_GET
if(!isset($_GET["nama"]) ||
    !isset($_GET["npm"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["gambar"])){
    // redirect
    header("Location: latihan1.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Detail mahasiswa</title>
</head>
<body>
    
    <ul>
        <li><img src="img/<?= $_GET["gambar"]; ?>" alt="" width="50px"></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["npm"]; ?></li>
        <li><?= $_GET["email"]; ?></li>
        <li><?= $_GET["jurusan"]; ?></li>
    </ul>

    <a href="latihan1.php">kembali ke daftar mahasiswa</a>
</body>
</html>