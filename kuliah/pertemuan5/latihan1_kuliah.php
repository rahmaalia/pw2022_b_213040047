<?php 

// ARRAY
// ARRAY adalah variabel yang dapat menyimpan lebih dari satu nilai sekaligus.

$hari1 = "senin";
$hari2 = "selasa";
$hari7 = "minggu";

$bulan1 = "Januari";
$bulan12 = "Desember";

$mahasiswa = "Rahma"; // susah untuk dikelompokkan karena terlalu banyak

// Membuat ARRAY
$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"]; // cara baru
$bulan = array("Januari", "Februari", "Maret"); //cara lama

$myArray = [100, "Rahma", true]; // bisa dicampur dengan tipe data lain

// menampilkan Array
// menampilkan 1 elemen menggunakan index, dimulai dari 0
echo $hari[1];
echo "<br>";
echo $bulan[2];
echo "<hr>";


// menampilkan semua isi array sekaligus
// var_dump() atau print_r() 
// khusus untuk debugging bukan untuk user

var_dump($hari);
echo "<br>";
print_r($bulan);

echo "<hr>";

// mencetak semua isi array menggunakan looping (boleh untuk user)
// for 
for($i = 0; $i < count($hari); $i++){
    echo $hari[$i];
    echo "<br>";
}

echo "<hr>";

// foreach (khusus untuk array)
foreach($bulan as $bln){
    echo $bln;
    echo "<br>";
}

echo "<hr>";

// Memanipulasi Array
// Menambahkan elemen di akhir array
$hari[] = "Minggu"; //ditimpa didalam array urutan terakhir
$hari[] = "Senin lagi";
var_dump($hari);





















?>