<?php 

$mahasiswa = ["Rahma Aliaputri", "213040047", "Teknik Informatika","rahmaaliaputri27@gmail.com"];

$mahasiswas = [
    ["Rahma Aliaputri", "213040047", "Teknik Informatika","rahmaaliaputri27@gmail.com"],
    ["Rahma", "213040047", "Teknik Informatika","rahmaaliaputri27@gmail.com"],
    [" Aliaputri", "213040047", "Teknik Informatika","rahmaaliaputri27@gmail.com"],
    [" Alia", "213040047", "Teknik Informatika","rahmaaliaputri27@gmail.com"],
];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiwa</title>
</head>
<body>
    
    <h1>Daftar mahasiswa</h1>

    <ul>
        <?php foreach($mahasiswa as $mhs): ?>
            <li><?php echo $mhs; ?></li>
        <?php endforeach ?>
    </ul>
    <br>
    <ul>
        <li><?php echo $mahasiswa[0]; ?></li>
        <li><?php echo $mahasiswa[1]; ?></li>
        <li><?php echo $mahasiswa[2]; ?></li>
        <li><?php echo $mahasiswa[3]; ?></li>
    </ul>
    <hr>

    <?php foreach($mahasiswas as $mhss): ?>
        <ul>
            <li>Nama :<?php echo $mhss[0]; ?></li>
            <li>NRP  :<?php echo $mhss[1]; ?></li>
            <li>Jurusan :<?php echo $mhss[2]; ?></li>
            <li>Email :<?php echo $mhss[3]; ?></li>
        </ul>
    <?php endforeach; ?>    
</body>
</html>