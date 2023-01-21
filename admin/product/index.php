<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="admin/product/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- boxicon -->

    <link rel="stylesheet" href="boxicons.min.css">

  
    

</head>

<body>

 <div class="container my-4">

        <div class="col-md-6 border border-primary p-4">


    <form action="insert.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <p class="text-center text-warning fs-3">Product Details</p>
                </div>

                <div class="mb-3">
                    <label class="form-label">Product Name:</label>
                    <input type="text" class="form-control" name="pname" placeholder="enter product name">
                </div>
                <div class="mb-3">
                    <label class="form-label">Product price:</label>
                    <input type="text" class="form-control" name="pprice" placeholder="enter product price">
                </div>
                <div class="mb-3">
                    <label class="form-label">Product Image:</label>
                    <input type="file" name="pimage" class="form-control" >
                </div>
                <div class="mb-3">
                    <label class="form-label" >Select Page category:</label>
                    <select class="form-select"  name="pages" >
                       <option value="home">home</option>
                         <option value="laptop">laptop</option>
                        <option value="bag">bag</option>
                        <option value="mobile">mobile</option>
                    </select>
                    
                </div>
                <button name="submit" class="bg-danger fs-2 p-2 fw-bold mt-2 border border-danger text-white form-control">Upload</button>
                
        </div>

    </form>


</div>

<div class="container">

<div class="row">

<div class="col-md8 m-auto">




<table class="table table-dark table-striped border border-warning fa-5 bg-dark text-white   table-hover" >
  <thead class="bg-dark text-white text-center">
   <th>id</th>
   <th>Name</th>
   <th>Price</th>
   <th>Image</th>
   <th>Category</th>
   <th>Update</th>
   <th>Delete</th>
   


  </thead>


 





  <tbody>
    <?php 
     
    $conn = mysqli_connect("localhost", "root", "", "ecom");

    $query = "SELECT * FROM `product`";

    $data = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($data)){


        echo "
    <tr>


    <td class='td'>$row[id] </td>
    <td>$row[pname]</td>
    <td>$row[pprice]</td>
    
    <td><img src='$row[pimage]' height='50px' class='w-100' alt=''></td>
    <td>$row[pcategory]</td>
    <th><a href='' class='btn btn-primary' >Update</a></th>
    <th><a href='' class='btn btn-danger' >Delete</a></th>
    </tr>
    
    
    
    
    
    
    ";

    }




    ?>






  </tbody>






</table>


</div>
</div>


</div>





    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/8e9a71e4fd.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>