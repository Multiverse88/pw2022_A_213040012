<?php
//Pertemuan membahas syntaks PHP
// Nilai : Interger, string, boolean

echo 10;

echo "<hr>";

//VARIABLE
// Wadah untuk meyimpan Nilai
// nama variavle bebas , tidak boleh di awali angka
// dan tidak boleh ada spasi
$nama = 'Ainan Bahrul Ihsan';

echo $nama;
echo "<hr>";
// Bisa di timpa / overwrite

$nama = 'kucing';

echo $nama;
echo "<hr>";
// String 
echo "<hr>";
// '', "",
echo "jum'at";
echo "<br>";
echo 'Ainan : "Halo semua"';
// Escape character 
// \
echo "<br>";
echo 'Ainan : "Jum\'at"';
echo "<br>";
// Interpolasi
// Mencetak isi variable
// Hanya bisa di gunakan oleh ""

echo "Halo nama saya $nama";
echo "<br>";
$price = 200;
echo "Price: $$price";
// Operator
// Aritmatika
// +, -, /, * modulus / sisa bagi
echo "<br>";
echo 1 + 1;
echo "<hr>";

$alas = 10;
$tinggi = 20;
$luas_segitiga = ($alas * $tinggi) / 2;
echo $luas_segitiga;
echo "<br>";
echo 3 % 2;

echo "<hr>";
// Concat
// Penggabungan String
// .

$namaDepan = "Ainan";
$namaBelakang = "Ihsan";

echo $namaDepan . " " . $namaBelakang;
echo "<hr>";

// perbandingan
// <, >, <=, >=, ==, !=

echo 1 < 5;

echo "<hr>";

//Identitas / strict comparison
// ===, !==

echo 10 === "10";
echo "<hr>"; 

// Incerment /Decrement
// Penambahan / Pengurangan 1
// ++, --

$x = 10;
$x++;
echo $x++;

//Logika
// &&, //, !

$x = 10;
var_dump($x < 20 || $x % 2 == 0);
?>