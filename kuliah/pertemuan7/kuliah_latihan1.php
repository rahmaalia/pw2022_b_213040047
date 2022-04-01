<?php 
// SUPERGLOBAL
// Variable bawwan php yang bisa diakses dimanapun
// Bentuknya Array Assosiative
// $_GET
// $_POST
// $_SERVER
// $_GET=["nama"=> "Rahma", "email"=> "Rahmmaaliaputri@gmail.com"]; 
// $_GET["nama"] = 'Rahma';
// $_GET["email"] = 'rahmaaliaputri21@gmail.com';

// var_dump($_GET);




?>

<!-- <h1>Halo, <?= $_GET["nama"]; ?></h1> -->

<ul>
    <li>
        <a href="kuliah_latihan2.php?nama=Rahma&npm=213040047&email=rahmaaliaputri27@gmail.com">Rahma</a>
    </li>
    <li>
        <a href="kuliah_latihan2.php?nama=Alia&npm=213040048&email=alia27@gmail.com">alia</a>
    </li>
    <li>
        <a href="kuliah_latihan2.php?nama=Putri&npm=213040050&email=putri@gmail.com">putri</a>
    </li>
    <li>
        <a href="kuliah_latihan2.php?nama=Efendi&npm=213040055&email=efendi@gmail.com">efendi</a>
    </li>
</ul>