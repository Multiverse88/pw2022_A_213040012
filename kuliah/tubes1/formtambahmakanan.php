<?php 
require 'functions.php';
$conn = mysqli_connect("localhost", "root", "", "tubes_213040012");
// ketika tombol tambah di klik
if( isset($_POST["submit"]) ){

//cek pengiriman data
  if( tambahmkn($_POST) > 0) {
    echo "<script>
    alert('databerhasil di tambahkan'); document.location.href = 'databasemenu.php'; </script>";
  }
} 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tambah Data Menu</title>
  </head>
  <body>
    
    <div class="container">
      <h1>Form Tambah Data  Makanan</h1>
      <a href="databasemenu.php" class="btn btn-primary">Kembali ke data menu</a>
      <form action="" method="POST">
      <ul>
        <li>
          <label for="namamakanan">Nama makanan</label>
          <input type="text" name="namamakanan" id="namamakanan" required>
        </li>
        <li> 
          <label for="hargamakanan">Harga makanan</label>
          <input type="text" name="hargamakanan" id="hargamakanan" required></li>
        <li> 
          <label for="gambarmakanan">Gambar makanan</label>
          <input type="text" name="gambarmakanan" id="gambarmakanan" required>
        </li>
        <button type="submit" name="submit">Submit</button>
      </ul>
      
      </form>
   
    </div>