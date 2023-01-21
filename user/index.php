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

      include("header.php");
      ?>
      <div class="container-fluid">
      <div class="col-md-12">
        <div class="row">

       
       <h1 class="text-center text-warning fs-4">Home</h1>

     

       <?php 
         
         $conn = mysqli_connect("localhost", "root", "", "ecom");

       $query = "SELECT * FROM product";
       $data = mysqli_query($conn, $query);

       while ($row = mysqli_fetch_assoc($data)) {
      
          



      




               echo " 

           <div class='col-md-3 col-lg-3 m-auto mb-3'>
           <form action='insertcart.php' method='POST'>
        
              <div class='card' style='width: 18rem;'>
        <img src='../admin/product/$row[pimage]' class='card-img-top m-auto alt='...'>
        <div class='card-body text-center'>

          <h5 class='card-title text-danger fs-4 fw-bold'>$row[pname]</h5>
          <p class='card-text text-danger fs-4 fw-bold'>Rs:$row[pprice]</p>
              
          <input type='hidden' value='$row[pname]' name=pname>
          <input type='hidden' value='$row[pprice]' name=pprice>
          
          <input type='number' name='pquantity' value='max=99 min=1'>
          <input type='submit' name='addcart' class='w-100 btn btn-warning text-white mt-3 ' value='Add to Cart'>
         
        </div>
      </div>
      </form>
      </div>
            ";
           }

           


       

        ?>
        </div>
        </div>
      </div>

     

      <!-- font awesome -->
      <script src="https://kit.fontawesome.com/8e9a71e4fd.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
    </html>