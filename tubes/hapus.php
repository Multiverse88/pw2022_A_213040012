<?php 
$conn = mysqli_connect("localhost", "root", "", "tubes_213040012");
require 'functions.php';

$id = $_GET["id"];

if ( hapus($id) > 0) {
    echo "<script>
    alert('data berhasil di hapus'); document.location.href = 'databasemenu.php'; </script>";
    }  


 ?>