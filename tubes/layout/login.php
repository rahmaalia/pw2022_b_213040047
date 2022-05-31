<?php 
session_start();
require 'functions.php';

// cek cookie
if(isset($_COOKIE['id_user']) && isset($_COOKIE['key'])){
    $id = $_COOKIE['id_user'];
    $key = $_COOKIE['key'];

    // ambil username berdasarkan id
    $result = mysqli_query ($conn, "SELECT username FROM user WHERE id_user = $id");
    
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan usernmae
    if( $key === hash('sha256', $row ['username'])){
        $_SESSION['login'] = true;
    }
    

}

if( isset($_SESSION["login"]) ) {
    header("Location: dashboard.php");
    exit;
}

if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    if(mysqli_num_rows($result) === 1){
        // cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password,$row["password"])){
            // set session
            $_SESSION["login"] = true;

            // cek remember me
            if(isset($_POST['remember'])){
                // buat coocie
                setcookie('id_user', $row['id_user'], time()+60);
                setcookie('key', hash('sha256', $row['username']), time()+60);
            }

            header("Location:dashboard.php");
            exit;
        }
    }

    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- css -->
    <link rel="stylesheet" href="../assets/css/style.css" />

</head>
<body class="regis-body">
    <div id="container">
        <div class="row vh-100 vw-100">
            <div class="col-md-6 p-5 d-flex align-items-center regis" >
                <h1 class="fw-bold text-white" style="font-size: 80px;"> Welcome Back!!</h1>
            </div>
            <div class="col-md-6">
                <div class="col-md-12  regis-form p-5">
                <?php if(isset($error)): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Peringatan!</strong> Username/Password salah
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
                    <h2 class="fw-bold mt-5 text-regis">Login</h2>
                    
                    <form class="mt-5" action="" method="post">
                        <div class="mb-3 ">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control rounded-pill " id="username" name="username" placeholder="masukkan username" autocomplete="off" required>
                        </div>
                        <div class="mb-3 mt-4">
                            <label for="password" class="form-label ">Password</label>
                            <input type="password" class="form-control rounded-pill" id="password" name="password" placeholder="masukkan password" required>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="remember" name="remember">
                            <label class="form-check-label" for="flexCheckDefault">
                                Ingat Saya
                            </label>
                        </div>
                        <button type="submit" class="btn btn-regis mt-3 rounded-pill col-md-12" name="login">Login</button>
                        <div class="d-flex flex-row bd-highlight mb-3">
                            <p class="p-2 bd-highlight">Belum punya akun?</p> 
                            <a href="register.php" class="pt-2 bd-highlight text-daftar fw-bold text-decoration-none">Daftar</a>
                            <p class="m-2">|</p>
                            <a href="../index.php" class="pt-2 bd-highlight text-daftar fw-bold text-decoration-none">kembali</a>
                        </div>
                        
                    </form>
                </div>
            </div>
            
        </div>
    </div>
    <script src="assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>