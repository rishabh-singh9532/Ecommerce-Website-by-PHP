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


    <form action="verify.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <p class="text-center text-warning fs-3">Login</p>
                </div>

                <div class="mb-3">
                    <label class="form-label">Enter username</label>
                    <input type="text" class="form-control" name="username" placeholder="enter username">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="enter password">
                </div>
                
                <button  class="bg-danger fs-2 p-2 fw-bold mt-2 border border-danger text-white form-control">Upload</button>
                
        </div>

    </form>


</div>











    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/8e9a71e4fd.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>