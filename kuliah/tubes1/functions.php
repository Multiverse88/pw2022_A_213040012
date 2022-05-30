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
    global $conn;
    $namamenu = htmlspecialchars($data["namamenu"]);
    $hargamenu = htmlspecialchars($data["hargamenu"]); 
    $gambar = htmlspecialchars($data["gambar"]); 

 //  query insert data
$query = "INSERT INTO listmenu
VALUES
('', '$namamenu', '$hargamenu', '$gambar')
";
mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    
    mysqli_query($conn, "DELETE FROM listmenu WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data) {
    $conn = koneksi();
    $id = $data["id"];
    $namamenu = htmlspecialchars($data["namamenu"]);
    $hargamenu = htmlspecialchars($data["hargamenu"]); 
    $gambar = htmlspecialchars($data["gambar"]); 

 //  query update data
$query = "UPDATE listmenu SET
            nama_menu = '$namamenu',
            harga_menu = '$hargamenu',
            gambar = '$gambar'
        WHERE id = $id ";

mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
}

function tambahmkn($data) {
    global $conn;
    $namamakanan = htmlspecialchars($data["namamakanan"]);
    $hargamakanan = htmlspecialchars($data["hargamakanan"]); 
    $gambarmakanan = htmlspecialchars($data["gambarmakanan"]); 

 //  query insert data
$query = "INSERT INTO list_makanan VALUE ('','$namamakanan', '$hargamakanan', '$gambarmakanan')";
mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
}

function hapusmkn($id) {
    global $conn;
    
    mysqli_query($conn, "DELETE FROM list_makanan WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubahmkn($data) {
    $conn = koneksi();
    $id = $data["id"];
    $namamakanan = htmlspecialchars($data["namamakanan"]);
    $hargamakanan = htmlspecialchars($data["hargamakanan"]); 
    $gambarmakanan = htmlspecialchars($data["gambarmakanan"]); 

 //  query update data
$query = "UPDATE list_makanan SET
            namamakanan = '$namamakanan',
            hargamakanan = '$hargamakanan',
            gambarmakanan = '$gambarmakanan'
        WHERE id = $id ";

mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM listmenu WHERE nama_menu LIKE '$keyword%' OR harga_menu LIKE '$keyword%'
    ";

    return query($query);
}
?>