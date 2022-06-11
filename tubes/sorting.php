<!-- Sorting/mengurutkan Ascending dan Descending -->

<style>
    .input-group i {
        font-size: 22px;
    }

</style>

<?php 

if (isset($_POST["harga_naik"])) {
    $menu = query("SELECT * FROM listmenu ORDER BY harga_menu ASC;");
 }

if (isset($_POST["id_naik"])) {
    $menu = query("SELECT * FROM listmenu ORDER BY id ASC;");
 } 

if (isset($_POST["harga_turun"])) {
    $menu = query("SELECT * FROM listmenu ORDER BY harga_menu DESC;");
 }

if (isset($_POST["id_turun"])) {
    $menu = query("SELECT * FROM listmenu ORDER BY id DESC;");
 } 


?>


<form action="" method="POST">
    <div class="container-urutan">
        <div class="col d-inline-flex">
         <div class="input-group me-3">
             <button class="btn btn dropdown-toggle" style="background-color:#f5d1ad ;" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-sort-down-alt"></i>&nbsp;</button>
                <ul class="dropdown-menu" style="background-color:#f5d1ad ;">
                    <li><button class="dropdown-item" name="harga_naik" type="submit">Harga</button></li>
                    <li><button class="dropdown-item" name="id_naik" type="submit">Tanggal di tambahkan</button></li>
                </ul>
         </div>
         <div class="input-group">
             <button class="btn btn-outline dropdown-toggle" style="background-color:#f5d1ad;" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-sort-down"></i>&nbsp;</button>
                <ul class="dropdown-menu" style="background-color:#f5d1ad ;">
                    <li><button class="dropdown-item" name="harga_turun" type="submit">Harga</button></li>
                    <li><button class="dropdown-item" name="id_turun" type="submit">Tanggal di tambahkan</button></li>
                </ul>
         </div>
      </div>
 </div>
 </form>