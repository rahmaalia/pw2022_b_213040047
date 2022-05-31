<!DOCTYPE html>
<html lang="en">
<head>
    <title>POST</title>
</head>
<body>
    
<form action="latihan4.php" method="post">
    Masukkan Nama:
    <input type="text" name="nama">
    <br>
    <button type="submit" name="submit">Kirim!</button>
</form>

<hr>

<?php if(isset($_POST["submit2"])): ?>
<h1>Halo, Selamat Datang <?= $_POST["namaa"]; ?></h1>
<?php endif; ?>

<form action="" method="post">
    Masukkan Nama untuk halaman ini:
    <input type="text" name="namaa">
    <br>
    <button type="submit" name="submit2">Kirim!</button>
</form>
</body>
</html>


<?php 

echo "<hr>";

$angka = 5;
function cetak_bintang($angka){
    for($a=$angka;$a>0;$a--){
        for($b=$angka;$b>=$a;$b--){
        echo "*";
        }
        echo "<br>";
        }
}



	

?>