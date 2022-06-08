<?php 
require '../functions.php';
$keyword = $_GET["keyword"];

$query = "SELECT * FROM listmenu WHERE nama_menu LIKE '%$keyword%' OR harga_menu LIKE '%$keyword%'";
$menu = query($query);


?>
<h3>Minuman</h3>
      <a href="formtambahmenu.php" class="btn btn-primary">Tambah Data Menu Minuman</a>
      <a href="formtambahmakanan.php" class="btn btn-primary">Tambah Data Menu Makanan</a>
      <a href="logoutadmin.php" class="btn btn-danger position-absolute top-0 end-0">Logout</a>
    
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Gambar</th>
            <th scope="col">Nama Menu</th>
            <th scope="col">Harga</th>
         
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
            <td>
              <a href="ubah.php?id=<?= $mn["id"]; ?>" class="btn badge bg-warning">edit</a>
              <a href="hapus.php?id=<?= $mn["id"]; ?>" class="btn badge bg-danger" onclick="
              return confirm('Apakah yakin akan menghapus data?');">delete</a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    