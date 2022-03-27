
<?php
// Studi kasus

$mahasiswa = [
    ["gambar" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRIz7sgUQBiE1iDfSuCvGg62sbfNxQYXJqQg&usqp=CAU",
    "nama" => "Ainan Bahrul Ihsan",
    "npm" => "213040012",
    "email" => "ainanihj@gmail.com", 
    "jurusan" => "Teknik Informatika"],
    ["gambar" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTQq9pnf7nMkJO0UMvqnJGW8xx-AmAE4agug&usqp=CAU",
    "nama" =>"Wildan Fauzan", 
    "npm" => "213040025",
    "email" => "wildanfauzan@gmail.com",
    "jurusan" => "Teknik Informatika"],
    ["gambar" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShyn6Jlf7tLn-S20JeA9zlckHDVHGU1oN1cQ&usqp=CAU",
    "nama"  =>   "Moch Haykal Alvegio Hadian", 
    "npm" => "213040028", 
    "email" => "Haykal@gmail.com", 
    "jurusan" => "Teknik Informatika"], 
    ["gambar" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRIz7sgUQBiE1iDfSuCvGg62sbfNxQYXJqQg&usqp=CAU",
    "nama" => "Mohammad Afandi Hidayat",
    "npm" => "213040012",
    "email" => "afandi@gmail.com", 
    "jurusan" => "Teknik Informatika"],
    ["gambar" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRIz7sgUQBiE1iDfSuCvGg62sbfNxQYXJqQg&usqp=CAU",
    "nama" => "Aufaa Husniati",
    "npm" => "213040018",
    "email" => "aufaa@gmail.com", 
    "jurusan" => "Teknik Informatika"],
    ["gambar" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRIz7sgUQBiE1iDfSuCvGg62sbfNxQYXJqQg&usqp=CAU",
    "nama" => "Diva Nur Haffifah",
    "npm" => "213040001",
    "email" => "diva@gmail.com", 
    "jurusan" => "Teknik Informatika"],
    ["gambar" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRIz7sgUQBiE1iDfSuCvGg62sbfNxQYXJqQg&usqp=CAU",
    "nama" => "Revina Bella Trisna",
    "npm" => "213040016",
    "email" => "revina@gmail.com", 
    "jurusan" => "Teknik Informatika"],
    ["gambar" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRIz7sgUQBiE1iDfSuCvGg62sbfNxQYXJqQg&usqp=CAU",
    "nama" => "Mohamad Afandi Hidayat",
    "npm" => "213040022",
    "email" => "afandi@gmail.com", 
    "jurusan" => "Teknik Informatika"],
    ["gambar" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRIz7sgUQBiE1iDfSuCvGg62sbfNxQYXJqQg&usqp=CAU",
    "nama" => "Fauzi Ilyas Nuryadi",
    "npm" => "213040032",
    "email" => "fauzi@gmail.com", 
    "jurusan" => "Teknik Informatika"],
    ["gambar" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRIz7sgUQBiE1iDfSuCvGg62sbfNxQYXJqQg&usqp=CAU",
    "nama" => "Gilang Ramadhan",
    "npm" => "213040004",
    "email" => "gilang@gmail.com", 
    "jurusan" => "Teknik Informatika"],
];

//var_dump($mahasiswa[0]["email"]);
// Array associative
// Array yang index nya berupa string yang berasosiasi dengan nilainya
?>

<?php

foreach($mahasiswa as $mhs) {
?>
<?php }?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Detail mahasiswa</title>
  </head>
  <body>
    <div class="container">
        <h1>Detail mahasiswa</h1>
        <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?= $_GET["gambar"]; ?>" class="img-fluid rounded-start">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $_GET["nama"]; ?></h5>
        <p class="card-text"><?= $_GET["npm"]; ?></p>
        <p class="card-text"><?= $_GET["email"]; ?></p>
        <p class="card-text">Teknik Informatika</p>

        <a href="kuliah_latihan3.php">Kembali</a>
      </div>
    </div>
  </div>
</div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>