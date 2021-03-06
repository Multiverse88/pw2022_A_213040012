<?php 

  session_start();
  
if( !isset($_SESSION["login"])) {
  header("location: index.php");
  exit;
}
require 'functions.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!-- My Css -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap" rel="stylesheet">
    <title>Kaki bukit.</title>
  </head>
  <body>
    <!-- Background -->
    <img class="vector2" src="css/img/Vector2.png">
    <img class="vector1" src="css/img/Vector1.png">
 
    <!-- Nav-bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
      <div class="container">
        <a class="navbar-brand" href="#">
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
              <a class="nav-link" href="#">About us</a>
            </li>
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Menu
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Drink</a></li>
                    <li><a class="dropdown-item" href="#">Meal</a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <li class="nav-item">
              <a class="nav-link" href="#">Our Location</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact us</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    </nav>
    <!-- navbar end -->
    <!-- konten -->
    <div class="content">
      <h1>Kaki Bukit</h1>
      <p>Sebuah ruang multifungsi untuk bersilaturahmi, mencari inspirasi ataupun sekedar bercanda dan tertawa bersama seseorang yang kamu cinta.</p>
    </div>
    <!-- konten end -->
    <!-- logo -->
    <div class="home-pict">
      <img class="rectangle2" src="css/img/Rectangle 2.png">
      <img class="pict-kopi"  src="css/img/pict kopi.png">
    </div>
    <!-- explore button -->
    <button type="button" class="btn"> 
    
      <a href="content.php">Explore</a>
    </button>
    <a class="facebook-btn" href="#">
      <img src="css/img/facebook.png">
    </a>
    <a class="instagram-btn" href="#">
      <img src="css/img/instagram.png">
    </a>
    <a class="maps-btn" href="#">
      <img src="css/img/maps.png">
    </a>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
