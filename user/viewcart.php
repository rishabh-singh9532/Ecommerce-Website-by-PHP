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

    <div class="container">
        <div class="row">
            <div class="col-lg-12 tex-center mb-5 bg-light rounded">
                <h1 class="text-danger">My Cart</h1>





            </div>



        </div>




    </div>
    <div class="container-fluid">
        <div class="row justify-content-around">
            <div class="col-md-4 col-lg-9">
              <table class="table table-bordered">
                <thead class="bg-danger text-white">

                <th>Index no</th>
                <th>Product name</th>
                <th>product price</th>
                <th>product quantity</th>
                <th>total price</th>
                <th>update</th>
                <th>delete</th>
                </thead>


                <tbody>

                 

                <?php


                // session_start();
                $total = 0;
                if(isset($_SESSION['cart'])){
                    foreach ($_SESSION['cart'] as $key => $value) {
                  $total=  $value['productprice'] * $value['productquantity'];

                    $i = $key+1;

                        echo "
                        <form action='insertcart.php' method='POST'>
                        <tr>
                        
                        <td>$i</td>
                        <td> <input type='hidden' name='pname' value='$value[productname]'>$value[productname]</td>
                        <td>  <input type='hidden' name='pprice' value='$value[productprice]'>$value[productprice]</td>
                        <td>   <input type='text' name='pquantity' value='$value[productquantity]'></td>
                        <td>$total</td>
                        <td><button class='btn btn-warning' name='update'>Update</button></td>
                        <td><button class='btn btn-danger' name='remove'>Delete</button></td>
                        <td><input type='hidden' name='item' value='$value[productname]'></td>

                        </tr>
                        </form>
                      
                     
                     ";




                    }



                }
                
                ?>
                </tbody>
              </table>

            </div>
        </div>
    </div>










      <!-- font awesome -->
      <script src="https://kit.fontawesome.com/8e9a71e4fd.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
    </html>