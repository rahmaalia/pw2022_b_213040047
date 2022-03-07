<?php 

    // DATE
    // untuk menampilkan tanggal dengan format tertentu
    echo date("l"); // hari
    echo "<br>";
    echo date("d"); // tanggal
    echo "<br>";
    echo date("M"); // bulan singkat (jul , augts, dll)
    echo "<br>";
    echo date("m"); // bulan dalam bentuk angka (april => 04)
    echo "<br>";
    echo date("l, d-M-Y"); // menampilkan tanggal bulan tahun hari ini

    echo "<hr>";

    // TIME
    // UNIX Timestamp / EPOCH time
    // detik yang sudah berlalu sejak 1 Januari 1970
    echo time();
    echo "<br>";
    echo date("l", time()+172800); // tampilkan bhari saat ini ditamabh sekian detik
    echo "<br>";
    echo date("l", time()+ 60*60*24*100); // kita bisa mnegetahui 100 hari lagi hari apa
    echo "<br>";
    echo date("d M Y", time() - 60*60*24*100); // 100 hari sebelum hari ini

    echo "<hr>";

    // mktime
    // membuat sendiri detik
    // mktime(0,0,0,0,0,0)
    // jam, menit, detik, bulan, tanggal, tahun
    echo date("l",mktime(0,0,0,04,21,2003));

    echo "<hr>";

    // strtotime
    echo date("l",strtotime("21 apr 2003"));





?>