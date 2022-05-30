<?php 
require 'functions.php';
$conn = mysqli_connect("localhost", "root", "", "pw2022_a_213040012");
    // jalankan fungsi tambah()

    if( hapus($_GET["id"]) > 0) {
        echo "<script>alert('data berhasil di hapus'); document.location.href = 'index.php'; </script>";
    }




?>