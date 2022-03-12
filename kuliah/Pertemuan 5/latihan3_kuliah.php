<?php
// Studi kasus

$mahasiswa = [
    ["Ainan Bahrul Ihsan", "213040012", "ainanihj@gmail.com", "Teknik Informatika"],
    ["Wildan Fauzan", "213040025", "wildanfauzan@gmail.com", "Teknik Informatika"],
    ["Moch Haykal Alvegio Hadian", "213040025", "Haykal@gmail.com", "Teknik Informatika"]
];

var_dump($mahasiswa);

echo "<hr>";
?>

<?php

foreach($mahasiswa as $mhs) {
?>
<ul>
    <li>Nama :<?php echo $mhs[0]?></li>
    <li>NRP : <?php echo $mhs[1]?></li>
    <li>Email  <?php echo $mhs[2]?></li>
    <li>Jurusan : <?php echo $mhs[3]?></li>
</ul>

<?php }?>
