<?php 
 
require 'config.php';
error_reporting(0);
 
session_start();
if (isset($_SESSION['username'])) {
    header("Location: berhasil_login.php");
}
 
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = password_hash($password, PASSWORD_DEFAULT)($_POST['password']);
 
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: berhasil_login.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
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
    <title>Kaki bukit.</title>
</head>
<body>
        <?php echo $_SESSION['error']?>
 
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 34px; font-weight: 800; margin-bottom: -15px;">Kaki Bukit
            <div class="d-flex justify-content-center">
            <img src="img/logo 1.png" style="margin-bottom: 10px;">
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
            <p class="register-text">Anda belum punya akun? <a href="register.php">Register</a></p>
        </form>

        <div class="halaman-admin register-text">
            <a href="loginadmin.php">Halaman Admin</a>
        </div>
    </div>
</body>
</html>