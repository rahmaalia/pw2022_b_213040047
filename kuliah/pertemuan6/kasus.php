<?php 

$buku = [
    [
        "isbn" => "978-623-96074-4-9",
        "judul" => "Rembulan tenggelam di wajahmu",
        "pengarang" => "Tere Liye ",
        "penerbit" => "PT Sabak Grip Nusantara",
        "gambar" => "rembulan.jpg"
    ],
    [
        "isbn" => "978-602-06-5228-3",
        "judul" => "Lumpu",
        "pengarang" => "Tere Liye ",
        "penerbit" => "PT. Gramedia Pustaka Utama",
        "gambar" => "lumpu.jpg"
    ],
    [
        "isbn" => "978-602-06-5225-2",
        "judul" => "Si Putih",
        "pengarang" => "Tere Liye ",
        "penerbit" => "PT. Gramedia Pustaka Utama",
        "gambar" => "siputih.jpg"
    ],
    [
        "isbn" => "978-623-95545-5-2",
        "judul" => "Rindu",
        "pengarang" => "Tere Liye ",
        "penerbit" => "PT Sabak Grip Nusantara",
        "gambar" => "rindu.jpg"
    ],
    [
        "isbn" => "978-602-06-3951-2",
        "judul" => "Selena",
        "pengarang" => "Tere Liye ",
        "penerbit" => "PT. Gramedia Pustaka Utama",
        "gambar" => "selena.jpg"
    ],
    [
        "isbn" => "	978-602-06-2339-9",
        "judul" => "Komet minor",
        "pengarang" => "Tere Liye ",
        "penerbit" => "PT. Gramedia Pustaka Utama",
        "gambar" => "kometminor.jpg"
    ],
    [
        "isbn" => "978-602-06-1793-0",
        "judul" => "Hujan",
        "pengarang" => "Tere Liye ",
        "penerbit" => "PT. Gramedia Pustaka Utama",
        "gambar" => "hujan.jpg"
    ],
    [
        "isbn" => "	978-602-03-8829-8",
        "judul" => "Negeri para bedebah",
        "pengarang" => "Tere Liye ",
        "penerbit" => "PT. Gramedia Pustaka Utama",
        "gambar" => "negriparabedebah.jpg"
    ],
    [
        "isbn" => "	978-602-03-8416-0",
        "judul" => "Daun yang jatuh tak pernah membenci angin",
        "pengarang" => "Tere Liye ",
        "penerbit" => "PT. Gramedia Pustaka Utama",
        "gambar" => "daunyangjatuh.jpg"
    ],
    [
        "isbn" => "978-602-9474-12-1",
        "judul" => "Harga sebuah percaya",
        "pengarang" => "Tere Liye ",
        "penerbit" => "Mahaka Publishing",
        "gambar" => "hargasebuahpercaya.jpg"
    ],
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>

    <?php foreach( $buku as $bk ) : ?>
    <ul>
        <li>
            <img src="img/<?= $bk ["gambar"]; ?>" alt="" width="100px" height="auto">
        </li>
        <Li>ISBN : <?= $bk ["isbn"]; ?></li>
        <li>Judul : <?= $bk["judul"]; ?></li>
        <li>Pengarang : <?= $bk ["pengarang"]; ?></li>
        <li>Penerbit : <?= $bk ["penerbit"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>