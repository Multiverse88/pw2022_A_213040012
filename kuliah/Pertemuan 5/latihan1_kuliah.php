<?php
// ARRAY
// Array adalah variable yang dapat menampung lebih dari satu nilai sekaligus

// Membuat array
$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat"]; // Cara baru

$bulan = array("Januari", "Februari", "Maret"); //Cara lama

$myArray = [100, "Ainan", true];

// Mencetak array
// Mencetak 1 elemen/ nilai menggunakan indexnya, index dalam php di mulai dari 0
echo $hari[1];
echo "<br>";
echo $bulan[2];
echo "<br>";
// mencetak semua elemen pada array
// var_dump() atau print_r()
// khusus untuk debugging

var_dump($hari);
echo "<hr>";
print_r($bulan);

// Mencetak menggunakan looping
// for
for ($i = 0; $i < count($hari); $i++) {
    echo $hari[$i];
    echo "<br>";
}

echo "<hr>";

// Foreach (Khusus untuk array)

foreach($bulan as $b) {
    echo $b;
    echo "<br>";
}
echo "<hr>";
foreach ($hari as $key => $value) {
    echo "Key: $key, Value: $value";
    echo "<br>";
}

echo "<hr>";

// Memanipulasi isi array
// Menambah elemen baru di akhir array

$hari[  ] = "Sabtu";
$hari[count($hari)] = "Minggu";
var_dump($hari);


?>