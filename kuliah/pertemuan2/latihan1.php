<?php 
    // pertemuan 2, elajar sintaks PHP

    // NILAI
    // angka (integer), tulisan (string), true/false (boolean)
    echo 10; //integer
    echo "<br>";
    echo "rahma"; //string
    echo "<br>";
    echo true; //boolean (1)
    echo "<br>";
    echo false; //boolean null

    echo '<hr>'; //membuat garis baru

    // VARIABEL
    // tempat menampung NILAI
    // awali dengan tanda $, nama nya bebas
    // boleh mengandung angka, tidak boleh diawali angka
    // tidak boleh ada spasi
    $nama = "rahma aliaputri efendi"; // (=) adalah inisialisasi
    echo $nama;

    echo '<hr>';

    // STRING
    // '' , " "
    $hari = "juma'at";
    echo $hari;
    echo "<br>";
    echo 'Rahma: "halo, semua lopyuu"';
    echo '<br>';
    echo 'Rahma : "selamat hari jum\'at"';
    echo '<br>';
    echo "Rahma : \"selamat hari jum'at\"";
    echo '<br>';
    //interpolasi
    // mencetak langsung isi variabel
    //hanya bisa oleh " "
    echo "Halo, nama saya $nama";
    echo '<br>';
    echo 'Halo, nama saya $nama';


    echo '<hr>';

    // concat / penggabung string
    // .
    $nama_depan = "Rahma";
    $nama_belakang = "Aliaputri";
    echo $nama_depan ." " . $nama_belakang;
    echo '<br>';
    echo 'Rahma : "Selamat ' . "hari jum'at\"";

    echo '<hr>';

    // OPERATOR
    // Aritmatika
    // + , -, *, /, % (modulus/modulo/ sisa bagi)
    echo 1+1;
    echo "<br>";
    echo "hasil 1 + 1 adalah" . " " . 1+1;
    echo "<br>";
    echo (1 + 2) * 3 - 4; //KaBaTaKu
    echo "<br>";
    echo 10 % 5;
    echo "<br>";
    echo 1 + "1" + 1;

    echo '<hr>';

    // PERBANDINGAN
    // <, >, <=, >=, ==, !=
    echo 1 < 5; // true (1)
    echo "<br>";
    echo 1 == 1;

    echo '<hr>';

    // identitas / strict comparison
    // ===, !==
    echo 1 === "1";

    echo '<hr>';

    // increment / decrement
    // tambah / kurang 1
    // ++, --
    $x = 10;
    echo ++$x;
    echo "<br>";
    echo $x++;

    echo '<hr>';

    // Logika
    // &&, ||,!
    $x = 10;
    var_dump ($x < 20 && $x % 2 == 0);













?>