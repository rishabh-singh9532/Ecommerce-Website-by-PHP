<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="../admin/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    
    <link rel="stylesheet" href="boxicons.min.css">
    </head>
    <body>

    <?php

    session_start();
    if(isset($_SESSION['cart'])){

      $count = 0;
      $count = count($_SESSION['cart']);

    }



    ?>


      <nav class="navbar bg-light">
     <div class="container-fluid">
    <a class="navbar-brand">Ecom.com</a>

   
    <div>
    <a href="index.php" class="text-warning text-decoration-none pe-2"> <i class="fa-solid fa-house"></i>Home</a>
    <a href="viewcart.php" class="text-warning text-decoration-none pe-2"> <i class="fa-solid fa-cart-shopping"></i>Cart(<?php echo $count ?>)</a>

    <span class="text-warning pe-2 text-decoration-none">
    <i class="fa-solid fa-user "></i>| Hello, |
    <a href="" class="text-warning text-decoration-none pe-2"><i class="fa-solid fa-right-to-bracket"></i>  Login</a>
    <a href="../admin/mystore.php" class="text-warning text-decoration-none pe-2">Admin</a>

    </span>
  
   
    
</nav>
</div>

<div class="bg-danger">

<ul class="list-unstyled d-flex justify-content-center">
  <li class="text-white textdecoration-none fs-4 px-4 py-2"><a href=""></a>LAPTOPS</li>
  <li class="text-white textdecoration-none fs-4 px-4 py-2"><a href=""></a>MOBILES</li>
  <li class="text-white textdecoration-none fs-4 px-4 py-2"><a href=""></a>BAGS</li>
</ul>
</div>



    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/8e9a71e4fd.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
    </html>