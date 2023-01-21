<?php


$conn = mysqli_connect("localhost", "root", "", "ecom");

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM  `login` WHERE username='$username' AND password='$password '";

$data = mysqli_query($conn, $query);
session_start();

if(mysqli_num_rows($data)){

    $_SESSION['name'] = $username;
    echo "login successfull";
    header("location:../mystore.php");


}





?>