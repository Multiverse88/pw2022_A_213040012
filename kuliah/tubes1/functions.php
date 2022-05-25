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
    $namamenu = $data["namamenu"];
 $hargamenu = $data["hargamenu"]; 
 $gambarmenu = $data["gambarmenu"]; 

 //  query insert data
$query = "INSERT INTO listmenu
VALUES
('', '$namamenu', '$hargamenu', '$gambarmenu')
";
mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
}
?>