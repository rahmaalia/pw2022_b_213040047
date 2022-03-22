<?php 
    $mahasiswaa = [["Rahma Aliaputri Efendi", "213040047","rahmaaliaputri@gmail.com", "Teknik Informatika"],
    ["Rahma", "213040045","rahmaa@gmail.com", "Teknik Informatika"]
];

// array assosiative
// definisi nya sama dengan array numerik, kecuali
// key nya dalah string yang kita buat sendiri
$mahasiswa = [
    [
        "gambar" => "2.jpg",
        "nama" => "Rahma Aliaputri Efendi",
        "npm" => "213040047",
        "email" => "rahmaaliaputri27@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "gambar" => "gambar1.jpg",
        "nama" => "Emilia Paradilas",
        "npm" => "213040043",
        "email" => "emiliaparadilas@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "gambar" => "2.jpg",
        "nama" => "Putri Aulia",
        "npm" =>'213040055',
        "email" => "putri@gmai.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "gambar" => "gambar1.jpg",
        "nama" => "Lita Yusdia",
        "npm" => "213040059", 
        "email" => "Lita@gmail.com", 
        "jurusan" => "Teknik Informatika"
    ]
]; 



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs ["gambar"]; ?>" alt="" width="50px">
        </li>
        <Li>Nama : <?= $mhs ["nama"]; ?></li>
        <li>NRP : <?= $mhs["npm"]; ?></li>
        <li>Jurusan : <?= $mhs ["jurusan"]; ?></li>
        <li>Email : <?= $mhs ["email"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>