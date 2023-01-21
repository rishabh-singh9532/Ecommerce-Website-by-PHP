







<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="../admin/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- boxicon -->

    <link rel="stylesheet" href="boxicons.min.css">

  </head>

  <?php

session_start();


  if(!  $_SESSION['name']){


    header("location:form/login.php");
  }




?>
  <body>


   <!-- navbar start  -->

   <nav class="navbar bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-white"><h3>My Store</h3></a>
   

    <span>

    <i class="fa-solid fa-user text-white" ></i>
    <a href="#" class="text-white">Hello,  <?php echo $_SESSION['name'];  ?>    |</a> 
     <i class="fa-solid fa-right-from-bracket text-white" ></i>
     <a href="form/logout.php " class="text-white text-decoration-none">Logout |</a>
     <a href="userpanel.php " class="text-white text-decoration-none">User panel</a>



    </span>
  </div>
</nav>


   <!-- navbar ends    -->


      <h3 class="title">Dashboared</h3>
   <div class="container">
     
     <a href="product/index.php">Add Post</a>
     <a href="usercount.php">Users</a>

   </div>





















     <!-- font awesome -->
     <script src="https://kit.fontawesome.com/8e9a71e4fd.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>