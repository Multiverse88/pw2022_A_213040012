<?php 

require 'functions.php';
// ketika tombol tambah di klik

if(isset($_POST["tambah"])) {
    // jalankan fungsi tambah()

    tambah($_POST);

    if(tambah($_POST) > 0) {
        echo "<script>alert('databerhasil di tambahkan'); document.location.href = 'databasemenu.php'; </script>";
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
      <h1>Form Tambah Data  Menu</h1>

      <a href="databasemenu.php" class="btn btn-primary">Kembali ke data menu</a>

    <div class="row mt-3">
        <div class="col-5">

        <form action="" method="POST" autocomplete="off">
        <!-- Form Nama menu -->
        <div class="mb-3">
            <label for="namamenu" class="form-label">Nama menu</label>
            <input type="text" class="form-control" id="namamenu" name="namamenu" required>
        </div>

        <!-- Form harga menu -->
        <div class="mb-3">
            <label for="harga-menu" class="form-label">Harga menu</label>
            <input type="text" class="form-control" id="hargamenu" name="hargamenu" required>
        </div>

        <!-- Form Gambar  -->
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="text" class="form-control" id="gambar" name="gambar">
        </div>
        <!-- Button submit -->
        <button type="submit" class="btn btn-primary" name="tambah">Tambah data menu</button>
        </form>
        

        </div>
    </div>
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