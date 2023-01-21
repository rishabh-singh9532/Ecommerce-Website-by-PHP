<?php

if(isset($_POST['submit'])){


    $conn = mysqli_connect("localhost", "root", "", "ecom");

    $productname = $_POST['pname'];
    $productprice = $_POST['pprice'];
    $productimage = $_FILES['pimage'];
    $image_location = $_FILES['pimage']['tmp_name'];
    $image_name = $_FILES['pimage'] ['name'];
    $img_desc = "uploadimg/" . $image_name;

    move_uploaded_file($image_location, $img_desc);
    $productcategory = $_POST['pages'];




    $query= "INSERT INTO `product`(`id`, `pname`, `pprice`, `pimage`, `pcategory`) VALUES (NULL,'    $productname','  $productprice','$img_desc ',' $productcategory')";

    $data = mysqli_query($conn, $query);

    if($data){
        echo "data inserted";
        header("location: ../product/index.php");
    }

   



















}




?>