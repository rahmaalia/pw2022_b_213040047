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
    $kategori = htmlspecialchars($data["kategori"]);

    // upload gambar
    $gambar = upload();
    if(!$gambar){
        return false;
    }
    
    // query insert data
    $query = "INSERT INTO produk
                VALUES
                ('', '$namaProduk', '$stok', '$harga', '$gambar', '$kategori')
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function upload(){

    $namaFile = $_FILES["gambar"]["name"];
    $ukuranFile = $_FILES["gambar"]["size"];
    $error = $_FILES["gambar"]["error"];
    $tmpName = $_FILES["gambar"]["tmp_name"];

    // cek apakah tidak ada gambar yang diupload
    if($error === 4){
        echo "<script>
                alert('pilih gambar terlebih dahulu!');
            </script>";
        return false;
    }

    // cek apakah yang di uplpoad adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar)) ;
    if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
        echo "<script>
                alert('yang anda upload bukan gambar!');
            </script>";
        return false;
    }

    // cek jika ukurannya terlalu besar
    if($ukuranFile > 5000000){
        echo "<script>
                alert('ukuran gambar terlalu besar!');
            </script>";
        return false;
    }

    // lolos pengecekan, gambar siap diupload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;


    move_uploaded_file($tmpName, '../gambar/' . $namaFileBaru);
    return $namaFileBaru;
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


// CARI
function cari($keyword) {
    $query = "SELECT * FROM produk JOIN kategori ON kategori.id_kategori = produk.kategori_id
                WHERE
                nama_produk LIKE '%$keyword%' OR
                stok LIKE '%$keyword%' OR
                harga LIKE '%$keyword%' OR
                kategori_id LIKE '%$keyword%'
            ";
    return query($query);
}

?>