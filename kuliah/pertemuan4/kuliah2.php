<?php
// definisikan masing masing sisi kubus
$a = 9;
$b = 4;


// hitung masing2 volume kubus
$volume_a = pow($a,3); // a pangkat 3
$volume_b = pow($b,3); // b pangkat 3

// hitung total 2 volume
$total = $volume_a + $volume_b;

// kembalikan nilai tottal
echo "jumlah dari volume kubus A dengan sisi $a dan kubus B dengan sisi $b adalah $total ";


echo "<hr>";

// Deklarasi / definisi function
function totalVolumeDuaKubus($a, $b){

    $volume_a = pow($a,3); // a pangkat 3
    $volume_b = pow($b,3); // b pangkat 3

    $total = $volume_a + $volume_b;
    // $total = pow($a,3) + pow($b,3) -> disederhanakan / refactoring

    return "jumlah dari volume kubus dengan sisi $a dan kubus dengan sisi $b adalah $total ";
}

// pemanggilan / eksekusi function
echo totalVolumeDuaKubus(9,4);
echo "<br>";
echo totalVolumeDuaKubus(9,5);
echo "<br>";
echo totalVolumeDuaKubus(10,3);

echo "<hr>";

// buat sebuah fungsi untuk menghitung luas segitiga
function luasSegiTiga($a,$t){

    $luas = 0.5 * $a * $t;
    
    return "luas segitiga dengan alas $a dan tinggi $t adalah $luas";
}

echo luasSegiTiga(2,4);


?>