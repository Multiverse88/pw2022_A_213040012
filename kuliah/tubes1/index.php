<?php 
session_start();
require 'functions.php';
$conn = mysqli_connect('localhost', 'root', '', 'tubes_213040012') or die('KONEKSI GAGAL!');

// cek cookie
if(isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
        $id = $_COOKIE['id'];
        $key = $_COOKIE['key'];
    

    // mengambil username berdasarkan id
    $result = mysqli_query($conn, "SELECT username 
    FROM user_pengguna WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    if($key === hash('sha256', $row['username'])){
        $_SESSION['login'] = true;
    }

    if(isset($_SESSION['login'])) {
    header("location: halaman1.php");
    exit;
    }
}

 if( isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user_pengguna WHERE
    username = '$username'");

    if( mysqli_num_rows($result) === 1) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        
        if( password_verify($password, $row["password"]) ) {
            // set session
            $_SESSION["login"] = true;

            // cek remember me
            if(isset($_POST['remember'])){
                setcookie('id', $row['id'], time() + 60);
                setcookie('key', hash('sha256', $row['username']), time() + 60);
            }
            echo "<script>
        alert('Selamat datang pelanggan'); document.location.href = 'halaman1.php'; </script>";
            exit;
        }
    }

    $error = true;

 }

 
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="img/logo 1.ico">
    <title>Kaki bukit.</title>
</head>
<body>
    <div class="container">
    
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 34px; font-weight: 800; margin-bottom: -15px;">Kaki Bukit
            <div class="d-flex justify-content-center">
            <img src="img/logo 1.png" style="margin-bottom: 10px;">
            </div>
            <?php if (isset($error)) : ?>
    <p style="color: red; font-style:italic; text-align: center;">Username / Password salah</p>
    <?php endif; ?>
            <div class="input-group">
                <input type="username" placeholder="Username" id="username" name="username"  required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" id="username" name="password"  required>
            </div>
                <label for="remember">Remember me</label>
                <input type="checkbox" name="remember" id="remember" style="padding-top: -10px;">
            <div class="input-group">
                <button type="submit" name="login" class="btn">Login</button>
            </div>
            
            <p class="register-text">Anda belum punya akun? <a href="registerpengguna.php">Register</a></p>
        </form>

        <div class="halaman-admin register-text">
            <a href="loginadmin.php">Halaman Admin</a>
        </div>
    </div>
</body>
</html>