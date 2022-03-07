<?php

// 4- FUNCTION
// built-in function

// date()
// untuk mengetahui waktu saat ini
// default timezone: UTC (-7 jam)
echo date("l, j F Y ");
echo "<hr>";
echo date("l", time());
echo "<hr>";

// time()
// UNIX Timestamp / EPOCH Time
// Detik yang sudah berlaku sejak 1 januari 1970 (awal mula waktu komputer)
echo time(); // saat ini
echo "<br>";
echo time() + 60 * 60 * 24; // satu hari yang akan datang
echo "<hr>";
// hari apa 100 hari kebelakang 
echo date("l",time() - 60 * 60 * 24 * 100); // hari yang dimanipulasi
echo "<hr>";

// mktime() (kita bikin sendiri kita mau sampe tnaggal berapa)
// membuat waktu berdasarkan format
// mktime(0,0,0,0,0,0);
// jam, menit, detik, bulan, tanggal, tahun
echo mktime(10,47,60,3,5,2022);
echo "<hr>";
echo date("l", mktime(0,0,0,04,21,2003)); //mencari tau kita lahir hari apa
echo "<hr>";
echo strtotime("2 june 2003"); // string to time (menejermahkan ke waktu)
echo "<br>";
echo mktime(0,0,0,06,2,2003);
echo "<hr>";

// fungsi matematika
// pow() untuk pangkat
echo pow(2,3); // 2 pangkat 3
echo "<br>";
echo rand(1,10); // bilangan random
echo "<br>";
// pembulatan
echo round(2.5); // melakukan pembulatan ke nilai terdekat
echo "<br>";
echo ceil(2.1); // melakukan pembulatan ke atas (ceiling / langit2)
echo "<br>";
echo floor(4.5); // pembulatan ke bawah (floor / lantai)



?>