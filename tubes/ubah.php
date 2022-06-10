<?php 
session_start();
  
if( !isset($_SESSION["login"])) {
  header("location: index.php");
  exit;
}
require 'functions.php';

// ambil data di url 
$id = $_GET["id"];
//query data menu berdasarkan id
$mnu = query("SELECT * FROM listmenu WHERE id = $id")[0];


// ketika tombol tambah di klik
if( isset($_POST["ubah"]) ){

//cek pengiriman ubah data
  if( ubah($_POST) > 0) {
    echo "<script>
    alert('data berhasil di ubah'); document.location.href = 'databasemenu.php'; </script>";
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

    <title>Ubah Data Menu</title>
  </head>
  <body>
    
    <div class="container">
      <h1>Form Ubah Data  Menu</h1>

      <a href="databasemenu.php" class="btn btn-primary">Kembali ke data menu</a>
      <form action="" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?= $mnu["id"];?>">
      <input type="hidden" name="gambarLama" value="<?= $mnu["gambar"];?>">
      <ul>
        <li>
          <label for="namamenu">Nama menu</label>
          <input type="text" name="namamenu" id="namamenu" required value="<?= $mnu["nama_menu"];?>">
        </li>
        <li> 
          <label for="hargamenu">Harga menu</label><br>
          <input type="text" name="hargamenu" id="hargamenu" required value="<?= $mnu["harga_menu"];?>"></li>
        <li> 
          <label for="gambar">Gambar menu</label>
          <img src="img/<?= $mnu['gambar'];?>" width="100px"><br>
          <input type="file" name="gambar" id="gambar "></li>
        <li>
          <button type="submit" name="ubah">Ubah Data</button>
        </li>
      </ul>
      </form>
   
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>