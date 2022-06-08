<?php
 session_start();
  
 if( !isset($_SESSION["login"])) {
   header("location : index.php");
   exit;
 }
require 'functions.php';

$menu = query("SELECT * FROM listmenu");
$makanan = query("SELECT * FROM list_makanan");

// tombol cari
if(isset($_POST["cari"]) ) {
  $menu = cari($_POST["keyword"]);
} 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css 2/style2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Kaki Bukit.</title>
  </head>
  <body>
   <!-- Navbar -->
   <nav class="navbar navbar-expand-lg navbar-light bg-transparent" id="top">
    <div class="container">
      <a class="navbar-brand" href="halaman1.php">
        <img src="css/img/logo bar.png" /> 
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about-us">About us</a>
          </li>
          <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Menu
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                  <li><a class="dropdown-item" href="#drink">Drink</a></li>
                  <li><a class="dropdown-item" href="#meal">Meal</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <li class="nav-item">
            <a class="nav-link" href="#our-location">Our Location</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact-us">Contact us</a>
          </li>
          <li class="nav-item logout-btn">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  </nav>
   <!-- navbar end -->
   <!-- konten -->
   <!-- About us -->
   <section class="jumbotron text-center p-5">
     <img src="img/Profile.jpg" alt="Kaki Bukit" width="250" class="rounded-circle">
    <h1 class="display-4 text-center text-light md-4" id="about-us">About us</h1>
    <p class="lead text-center text-light md-4 p-3">Berdiri sejak 2019, Kaki Bukit merupakan sebuah nama yang sangat mewakili Lembang. Letaknya persis berada di area yang lebih tinggi daripada sekelilingnya namun lebih rendah dari gunung terdekatnya. Nama dengan sebuah harapan dan filosofi yang bersifat merendah / membumi namun sejatinya berada di ketinggian untuk bisa memperhatikan, mempelajari, menjangkau, dan memaknai apa yang terjadi di sekelilingnya.</p>
    </section>
    <!-- About us end -->
    <!-- menu -->
    <section id="menu">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1 class="text-center text-light">Menu</h1>
          </div>
          <!-- Coffe start -->
          <div class="row">
            <div class="col-md-3">
              <h5 class="text-start text-light" id="drink">Drink</h5>
            </div>
        </div>
        <div class="row">
        <?php $no = 1; foreach($menu as $mn) { ?>
          <div class="col-md-4 mb-3">
              <div class="card text-center">
                <div class="image">
                  <img src="img/<?= $mn["gambar"]; ?>" width="280">
                </div>
                <div class="about-product text-center">
                  <h4><?= $mn["nama_menu"]; ?></h4>
                  <h5><?= $mn["harga_menu"]; ?></h5>
                  <button class="btn btn-success">Order</button>
                </div>
              </div>
            </div>
            <?php } ?>
      </div>
      <div class="row">
          <h5 class="text-start text-light" id="meal">Meal</h5>
        </div>
        <?php $no = 1; foreach($makanan as $mkn) { ?>
          <div class="col-md-4 mb-3">
              <div class="card text-center">
                <div class="image">
                  <img src="img/<?= $mkn["gambarmakanan"]; ?>" width="280">
                </div>
                <div class="about-product text-center">
                  <h4><?= $mkn["namamakanan"]; ?></h4>
                  <h5><?= $mkn["hargamakanan"]; ?></h5>
                  <button class="btn btn-success">Order</button>
                </div>
              </div>
            </div>
            <?php } ?>
      </div>
      </div>
      </div>
    </section>
   <!-- Menu end -->
   <!-- location start -->
   <section class="jumbotron text-center">
     <h1 class="display-4 text-center text-light md-4"  id="our-location">Our Location</h1>
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.626351320772!2d107.6220733144989!3d-6.81521926855396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e18bccec05ef%3A0x5eb8f21c4c9c0435!2sKaki%20Bukit%20Coffee%20and%20Yard!5e0!3m2!1sid!2sid!4v1641105399329!5m2!1sid!2sid" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
     
   </section>
   <!-- location end -->
   <!-- contact start -->
   <section id="contact-us" class="contact">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#B7682E" fill-opacity="1" d="M0,160L24,170.7C48,181,96,203,144,229.3C192,256,240,288,288,298.7C336,309,384,299,432,272C480,245,528,203,576,165.3C624,128,672,96,720,106.7C768,117,816,171,864,197.3C912,224,960,224,1008,192C1056,160,1104,96,1152,64C1200,32,1248,32,1296,48C1344,64,1392,96,1416,112L1440,128L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path></svg>
     <div class="container">
       <div class="row">
         <div class="col">
           <h1 class="text-center text-dark">Contact us</h1>
          </div>
       </div>
       <div class="row justify-content-center">
         <div class="col-md-6">
           <form>
  <div class="mb-3">
    <label for="name" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" aria-describedby="nama">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="Email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="pesan" class="form-label">Pesan</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
         </div>
       </div> 
     </div>
     
   </section>
   <!-- contact end -->
   <!-- footer -->
   
   <footer class="text-center pb-4">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FFE5BE" fill-opacity="1" d="M0,128L24,138.7C48,149,96,171,144,154.7C192,139,240,85,288,85.3C336,85,384,139,432,138.7C480,139,528,85,576,106.7C624,128,672,224,720,218.7C768,213,816,107,864,80C912,53,960,107,1008,128C1056,149,1104,139,1152,122.7C1200,107,1248,85,1296,90.7C1344,96,1392,128,1416,144L1440,160L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path></svg>
     <p class="text-white">Created by 
       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-laughing" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
      <path d="M12.331 9.5a1 1 0 0 1 0 1A4.998 4.998 0 0 1 8 13a4.998 4.998 0 0 1-4.33-2.5A1 1 0 0 1 4.535 9h6.93a1 1 0 0 1 .866.5zM7 6.5c0 .828-.448 0-1 0s-1 .828-1 0S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 0-1 0s-1 .828-1 0S9.448 5 10 5s1 .672 1 1.5z"/>
    </svg>    
    
    <a class="text-white fw-bold" href="https://www.instagram.com/ainanajalah/">Ainan Bahrul Ihsan - 213040012</a></p>
    <a class="top-button bottom-50 end-50" href="#top"><img src="css 2/top-button.png" width="50px" alt=""></a>
   </footer>
   <!-- footer end -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>