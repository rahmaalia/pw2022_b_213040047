<?php 
    $mahasiswa = [
        [
            "gambar" => "img/2.jpg",
            "nama" => "Rahma Aliaputri Efendi",
            "npm" => "213040047",
            "email" => "rahmaaliaputri27@gmail.com",
            "jurusan" => "Teknik Informatika"
        ],
        [
            "gambar" => "img/gambar1.jpg",
            "nama" => "Emilia Paradilas",
            "npm" => "213040043",
            "email" => "emiliaparadilas@gmail.com",
            "jurusan" => "Teknik Industri"
        ],
        [
            "gambar" => "img/2.jpg",
            "nama" => "Putri Aulia",
            "npm" =>'213040055',
            "email" => "putri@gmai.com",
            "jurusan" => "Teknik Pangan"
        ],
        [
            "gambar" => "img/gambar1.jpg",
            "nama" => "Lita Yusdia",
            "npm" => "213040059", 
            "email" => "Lita@gmail.com", 
            "jurusan" => "Teknik Mesin"
        ]
    ]; 
?>

<h1>Detail Mahasiswa</h1>

<h3><?= $_GET["nama"]; ?></h3>
<p><?= $_GET["npm"]; ?></p>
<p><?= $_GET["email"]; ?></p>

<a href="kuliah_latihan1.php">Kembali</a>