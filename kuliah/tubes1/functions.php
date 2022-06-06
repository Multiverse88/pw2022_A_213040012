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
    
    // upload gambar
    $gambar = upload();
    if(!$gambar) {
        return false;
    }

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
    global $conn;
    $conn = koneksi();
    $id = $data["id"];
    $namamenu = htmlspecialchars($data["namamenu"]);
    $hargamenu = htmlspecialchars($data["hargamenu"]); 
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    
    
    // cek gambar 
    if( $_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }
 //  query update data
$query = "UPDATE listmenu SET
            nama_menu = '$namamenu',
            harga_menu = '$hargamenu',
            gambar = '$gambar'
        WHERE id = $id ";

mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
}

function upload() {
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName  = $_FILES['gambar']['tmp_name'];

    // mengecek gambar yang di upload

    if( $error === 4) {
        echo "<script>alert('pilih gambar terlebih dahulu</script>";
        return false;
    }
    // pengecekan type data
    $ekstensiGambarValid = ['jgp', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "<script>alert('yang di upload bukan gambar')</script>";
        return false; 
    }

    // cek size

    if($ukuranFile > 2000000) {
        echo "<script>alert('ukuran gambar terlalu besar!')</script>";
        return false;
    }
    // generate nama
    $namaFileBaru = uniqid();
    $namaFileBaru .='.';
    $namaFileBaru .= $ekstensiGambar;
    // pemindahan gambar
    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
 

    return $namaFileBaru;

}
function tambahmkn($data) {
    global $conn;
    $conn = koneksi();
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

function registerpengguna($data) {
    global $conn;
    $conn = koneksi();
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    

    // pengecekan username pengguna
    $result = mysqli_query($conn, "SELECT username FROM user_pengguna WHERE
                username = '$username'");

    if(mysqli_fetch_assoc($result)) {
        echo"<script> alert('Username yang sama sudah terdaftar')</script>";
        return false;
    }
        if($password !== $password2) {
            echo "<script> alert('Password tidak cocok')</script>";
            return false;
        }

        // enkripsi password pengguna
        $password = password_hash($password, PASSWORD_DEFAULT);

        // query pengguna
        mysqli_query($conn, "INSERT INTO user_pengguna VALUE ('', '$username', 
        '$password')");
        
        return mysqli_affected_rows($conn);
    
}

function registeradmin($data) {
    global $conn;
    $conn = koneksi();
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // pengecekan username yang sama
    $result = mysqli_query($conn, "SELECT username FROM user WHERE 
    username = '$username'");

    if( mysqli_fetch_assoc($result) ) {
        echo "<script> alert ('Username yang sama sudah terdaftar')</script>";
        return false;
    }
    // konfirmasi password
    if( $password !== $password2) {
        echo "<script>alert ('Password tidak sama')</script>";
        return false;
    }
    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user
    mysqli_query($conn, "INSERT INTO user VALUE ('', '$username',
     '$password')" );

     return mysqli_affected_rows($conn);
}

?>