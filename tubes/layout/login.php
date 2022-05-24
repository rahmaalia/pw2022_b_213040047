<?php 
session_start();

if( isset($_SESSION["login"]) ) {
    header("Location: dashboard.php");
    exit;
}

require 'functions.php';

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
            <div class="col-md-6 p-5 regis-form ">
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
                        <input type="text" class="form-control " id="username" name="username" placeholder="masukkan username" autocomplete="off">
                    </div>
                    <div class="mb-3 mt-4">
                        <label for="password" class="form-label ">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="masukkan password">
                    </div>
                    <button type="submit" class="btn btn-regis mt-3" name="login">Login</button>
                </form>
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