<?php 

//array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memliki tipe data yang berbeda
// pasangan atara key dan value
// key-nya adalah index, yang dimulai dari 0
$nama = "Rahma";

echo "<br>";

// membuat array
// cara lama
$hari = array('senin', 'Selasa', 'rabu');

// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

// menampilakn array
// var_dump() / print_r()
var_dump($hari);
echo "<br>";
print_r($bulan);


// menmapilkan 1 elemen pada array
echo "<br>";
echo $arr1[0];
echo "<br>";
echo $bulan[1];

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jumat";
echo "<br>";
var_dump($hari);















?>