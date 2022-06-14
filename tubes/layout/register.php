<?php 
require 'functions.php';

if(isset($_POST["register"])){
    if(registrasi($_POST) > 0){
        echo"<script>
            alert('user baru berhasil ditambahkan!');
            document.location.href='login.php'
            </script>";
    }else{
        echo mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registrasi</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- css -->
    <link rel="stylesheet" href="../assets/css/style.css" />

</head>
<body class="regis-body">
    <div id="container">
        <div class="row vh-100 vw-100">
            <div class="col-md-6 p-5 d-flex align-items-center regis" >
                <h1 class="fw-bold text-white" style="font-size: 100px;"> Haloo !!</h1>
            </div>
            <div class="col-md-6">
                <div class="col-md-12 p-5 regis-form">
                    <h2 class="fw-bold mt-5 text-regis">Registrasi Admin</h2>
                    <form class="mt-5" action="" method="post">
                        <div class="mb-3 ">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control rounded-pill" id="username" name="username" placeholder="masukkan username" required autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label ">Password</label>
                            <input type="password" class="form-control rounded-pill" id="password" name="password" placeholder="masukkan password" minlength="3"  required>
                        </div>
                        <div class="mb-3">
                            <label for="password2" class="form-label">Konfirmasi password</label>
                            <input type="password" class="form-control rounded-pill" id="password2" name="password2" placeholder="masukkan konfirmasi password" minlength="3"  required>
                        </div>
                        
                        <button type="submit" class="btn btn-regis rounded-pill col-md-12 mt-3" name="register">Register</button>
                        <div class="d-flex flex-row bd-highlight mb-3">
                                <p class="p-2 bd-highlight">Sudah punya akun?</p> 
                                <a href="login.php" class="pt-2 bd-highlight text-daftar fw-bold text-decoration-none">Login</a>
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