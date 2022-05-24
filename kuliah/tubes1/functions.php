<?php 

function koneksi() {
    $conn = mysqli_connect('localhost', 'root', '', 'tubes_213040012') or die('KONEKSI GAGAL!');

    return $conn;
}

function query($query) {
    $conn = koneksi();
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    $conn = koneksi();

    $namamenu = $data["nama menu"];
    $hargamenu = $data["harga menu"];
    $gambar = $data["gambar"];
    

    $query = "INSERT INTO listmenu VALUES (null, '$namamenu', '$hargamenu', '$gambar')";

    mysqli_query($conn, $query) or die (mysqli_error($conn));

    return mysqli_affected_rows($conn);

}
?>