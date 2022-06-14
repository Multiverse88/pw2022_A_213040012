<?php
require 'functions.php';

$menu = query("SELECT * FROM listmenu");
$makanan = query("SELECT * FROM list_makanan");

// tombol cari
if(isset($_POST["cari"]) ) {
  $menu = cari($_POST["keyword"]);
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
    <style>
      @media print {
        .logout, .tambah, .form-cari, .aksi{
          display: none;
        }
      }
    </style>

    <title>Daftar Menu</title>
  </head>
  <body>
    <div class="container">
      <h1>Daftar Menu</h1>

      <form action="" method="POST" class="form-cari">
        <input type="text" name="keyword" id="keyword" size="20" autofocus placeholder="Masukan Nama Menu" autocomplete="off">
        <button type="submit" id="tombol-cari" name="cari">Cari</button>
      </form>
      <br>

      <?php require 'sorting.php'; ?>

      <div id="container">
      <h3>Minuman</h3>
      <a href="formtambahmenu.php" class="tambah btn btn-primary">Tambah Data Menu Minuman</a>
      <a href="formtambahmakanan.php" class="tambah btn btn-primary">Tambah Data Menu Makanan</a> |
      <a href="cetak.php" target="_blank" class="tambah btn btn-success">Print</a>
      <a href="logoutadmin.php" class="logout btn btn-danger position-absolute top-0 end-0">Logout</a>
      <a href="https://docs.google.com/spreadsheets/d/1K2RjmQusPRZzlKHtkumRTB33sZq1O_6J1vOmE8N-BGs/edit?resourcekey#gid=1477784169" class="btn btn-info">Form data</a>
    
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Gambar</th>
            <th scope="col">Nama Menu</th>
            <th scope="col">Harga</th>
            <th class="aksi" scope="col">Aksi</th>
         
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; foreach($menu as $mn) { ?>
          <tr class="align-middle">
            <th scope="row"><?= $no++; ?></th>
            <td>
              <img src="img/<?= $mn["gambar"]; ?>" width="50" class="rounded-circle">
            </td>
            <td><?= $mn["nama_menu"]; ?></td>
            <td><?= $mn["harga_menu"]; ?></td>
            <td class="aksi">
              <a href="ubah.php?id=<?= $mn["id"]; ?>" class="btn badge bg-warning">edit</a>
              <a href="hapus.php?id=<?= $mn["id"]; ?>" class="btn badge bg-danger" onclick="
              return confirm('Apakah yakin akan menghapus data?');">delete</a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
     </div>
    </div>
  <!-- list menu makanan -->
  <div class="container">
      <h3>Makanan</h3>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Gambar</th>
            <th scope="col">Nama Menu makanan</th>
            <th scope="col">Harga makanan</th>
            <th class="aksi" scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; foreach($makanan as $mkn) { ?>
          <tr class="align-middle">
            <th scope="row">
              <?= $no++; ?>
            </th>
            <td>
              <img src="img/<?= $mkn["gambarmakanan"]; ?>" width="50" class="rounded-circle">
            </td>
            <td><?= $mkn["namamakanan"]; ?></td>
            <td><?= $mkn["hargamakanan"]; ?></td>
            <td>
              <a href="ubahmkn.php?id=<?= $mkn["id"]; ?>" class="btn badge bg-warning">edit</a>
              <a href="hapusmkn.php?id=<?= $mkn["id"]; ?>" class="btn badge bg-danger" onclick="
              return confirm('Apakah yakin akan menghapus data?');">delete</a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
   

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>