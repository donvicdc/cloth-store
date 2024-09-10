<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="assets/jquery.js"></script>
    <script src="assets/bootstrap-5.3.2-dist/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="assets/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome-free-6.4.2-web/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="body.css">
    <title>body</title>
</head>
<body>
  
    <nav>
      <ul class="sidebar">
        <li onclick="hindSidebar()"><a href="#"><i class="fa-solid fa-xmark"></i></a></li>
        <div class="dropdown" style="margin-left: 18px;">
          <button type="button" class="btn dropdown-toggle text-dark" data-bs-toggle="dropdown">
            Home
          </button>
          <div class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Home</a></li>
            <li><a class="dropdown-item" href="">Shop</a></li>
            <li><a class="dropdown-item" href="">Product</a></li>
            <li><a class="dropdown-item" href="">location</a></li>
            <li><a class="dropdown-item" href="">footer</a></li>
          </div>
        </div>
        <li><a href="#">Blog</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">shop</a></li>
        <li><a href="#">Contact</a></li>
        <?php
            if(isset($_SESSION["useruid"])){
                echo"<li><a href='./profile.php'>Profile</a></li>";
                echo"<li  class='logout' style='border: 1px solid black;'><a href='includes/logout.inc.php'>LOGOUT</a></li>
";
            }
            else{
                echo"<li><a href='./signup.php'>signup</a></li>";
                echo"<li><a href='./login.php'>Login</a></li>";
            }
        ?>
      </ul>
      <ul>
        <div class="cloth"><img src="./assets/images/main-logo.png" alt=""></div>
        <ul class="dropdown">
          <button type="button" class="btn hindOnMobile dropdown-toggle text-dark" data-bs-toggle="dropdown">
            Home
          </button>
          <div class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Home</a></li>
            <li><a class="dropdown-item" href="#">Shop</a></li>
            <li><a class="dropdown-item" href="#">Product</a></li>
            <li><a class="dropdown-item" href="#">location</a></li>
          </div>
        </ul>
        <li class="vic hindOnMobile"><a href="#">Blog</a></li>
        <li class="di hindOnMobile"><a href="#">About</a></li>
        <li class="mi hindOnMobile"><a href="#">shop</a></li>
        <li class="od hindOnMobile"><a href="#">Contact</a></li>
        <?php
            if(isset($_SESSION["useruid"])){
                echo"<li class='od hindOnMobile'><a href='./profile.php'>Profile</a></li>";
                echo"<li class='logout hindOnMobile' style='border: 1px solid black; height: 40px;'><a href='includes/logout.inc.php'>LOGOUT</a></li>
";
            }
            else{
                echo"<li class='od hindOnMobile'><a href='./signup.php'>signup</a></li>";
                echo"<li class='od hindOnMobile'><a href='./login.php'>Login</a></li>";
            }
        ?>
        <li class="menu-button" onclick="showSidebar()"><a href="#"><i class="fa-solid fa-bars"></i></a></li>
      </ul>
    </nav>
  
    <script>
      function showSidebar(){
        const sidebar = document.querySelector('.sidebar')
        sidebar.style.display = 'flex'
      }
      function hindSidebar(){
        const sidebar = document.querySelector('.sidebar')
        sidebar.style.display = 'none'
      }
    </script>