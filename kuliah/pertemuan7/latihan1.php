<?php 
// Variable scope / lingkup variable

// variabel lokal  
$x = 10;

function tampilx(){
    $x = 20;
    echo $x; // hanya membaca variabel yanga da didalam function
}

tampilx();
echo "<br>"; 
echo $x;


// variabel global
$y = 30;

function tampily(){
    global $y;
    echo $y;
}

echo "<br>"; 
tampily();

// SUPERGLOBALS
// variable global milik php
// merupakan Array Associative

// $_GET
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
    <title>GET</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>
    <?php foreach( $mahasiswa as $mhs): ?>
        <ul>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&npm=<?= $mhs["npm"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        </ul>
    <?php endforeach; ?>
</body>
</html>



