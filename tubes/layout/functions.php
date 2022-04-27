<?php 

    // koneksi ke databse
$conn = mysqli_connect("localhost", "root", "", "penjualan");


function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

// TAMBAH DATA
function tambah($data){
    global $conn;
    // ambil data dar tiap elemen dalam form
    $namaProduk = htmlspecialchars($data["namaProduk"]);
    $stok = htmlspecialchars($data["stok"]);
    $harga = htmlspecialchars($data["harga"]);
    $gambar = htmlspecialchars($data["gambar"]);
    $kategori = htmlspecialchars($data["kategori"]);
    
    // query insert data
    $query = "INSERT INTO produk
                VALUES
                ('', '$namaProduk', '$stok', '$harga', '$gambar', '$kategori')
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// HAPUS
function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM produk WHERE id_produk=$id");
    return mysqli_affected_rows($conn);
}

// UPDATE
function ubah($data){
    global $conn;

    $id = $data["id_produk"];
    // ambil data dar tiap elemen dalam form
    $namaProduk = htmlspecialchars($data["namaProduk"]);
    $stok = htmlspecialchars($data["stok"]);
    $harga = htmlspecialchars($data["harga"]);
    $gambar = htmlspecialchars($data["gambar"]);
    $kategori = htmlspecialchars($data["kategori_id"]);

    // query insert data
    $query = "UPDATE produk SET 
                nama_produk = '$namaProduk',
                stok = '$stok',
                harga = '$harga',
                gambar = '$gambar',
                kategori_id = '$kategori'  
                WHERE id_produk = $id;";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

?>