<?php 

$mahasiswa = [
    ["Rahma Aliaputri Efendi", "213040047", "rahmaaliaputri27@gmail.com", "Teknik Informatika"],
    ["Emilia Paradilas", "213040043", "emiliaparadilas@gmail.com", "Teknik Informatika"],
    ["Putri Aulia", '213040055', "putri@gmai.com", "Teknik Informatika"],
    ["Lita Yusdia", "213040059", "Lita@gmail.com", "Teknik Informatika"]
];

?>


    <?php foreach($mahasiswa as $mhs){ ?>
    <ul>
        <li>Nama    : <?php echo $mhs[0] ?> </li>
        <li>NPM     : <?php echo $mhs[1] ?> </li>
        <li>Email   : <?php echo $mhs[2] ?></li>
        <li>Jurusan : <?php echo $mhs[3] ?></li>
    </ul>
    <?php } ?>


