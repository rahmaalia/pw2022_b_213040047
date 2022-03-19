<?php 
// Array assosiative
// array yang index nya berupa string, yang berasosisasi/berpasangan dengan nilainya

$mahasiswa = [
    [
        "nama" => "Rahma Aliaputri Efendi",
        "npm" => "213040047",
        "email" => "rahmaaliaputri27@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Emilia Paradilas",
        "npm" => "213040043",
        "email" => "emiliaparadilas@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Putri Aulia",
        "npm" =>'213040055',
        "email" => "putri@gmai.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Lita Yusdia",
        "npm" => "213040059", 
        "email" => "Lita@gmail.com", 
        "jurusan" => "Teknik Informatika"
    ]
];

// var_dump($mahasiswa[1]["email"]);

?>

<?php foreach($mahasiswa as $mhs){ ?>
    <ul>
        <li>Nama    : <?php echo $mhs["nama"] ?> </li>
        <li>NPM     : <?php echo $mhs["npm"] ?> </li>
        <li>Email   : <?php echo $mhs["email"] ?></li>
        <li>Jurusan : <?php echo $mhs["jurusan"] ?></li>
    </ul>
    <?php } ?>

    





