<?php 

    function salam($waktu = "Datang",$nama = "Admins"){ // =" " -> berisikan default jika parameter tidak diisi
        return "selamat $waktu, $nama!";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan function</title>
</head>
<body>
    <h1><?= salam("Siang","Rahma") ?></h1>
</body>
</html>