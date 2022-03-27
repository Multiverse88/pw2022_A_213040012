<?php
// Studi kasus

$mahasiswa = [
    ["nama" => "Ainan Bahrul Ihsan",
    "npm" => "213040012",
    "email" => "ainanihj@gmail.com", 
    "jurusan" => "Teknik Informatika"],
    ["nama" =>"Wildan Fauzan", 
    "npm" => "213040025",
    "email" => "wildanfauzan@gmail.com",
    "jurusan" => "Teknik Informatika"],
    ["nama"  =>   "Moch Haykal Alvegio Hadian", 
    "npm" => "213040025", 
    "email" => "Haykal@gmail.com", 
    "jurusan" => "Teknik Informatika"]
];

//var_dump($mahasiswa[0]["email"]);
// Array associative
// Array yang index nya berupa string yang berasosiasi dengan nilainya
?>

<?php

foreach($mahasiswa as $mhs) {
?>
<ul>
    <li>Nama :<?php echo $mhs["nama"]?></li>
    <li>NRP : <?php echo $mhs["npm"]?></li>
    <li>Email  <?php echo $mhs["email"]?></li>
    <li>Jurusan : <?php echo $mhs["jurusan"]?></li>
</ul>

<?php }?>
