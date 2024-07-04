<?php
session_start();
include('session_check.php');
include('conn.php');
if (isset($_POST['login'])) {

    $name = $_POST['name'];
    
    $contact = $_POST['phno'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $paymode = $_POST['pm'];
    $product = $_POST['pd'];



    $query = "INSERT INTO orders(username,name,contact,email,address,mode,product) VALUES ('$user','$name','$contact','$email','$address','$paymode','$product')";
    $query_run = mysqli_query($conn, $query);
    if ($query_run) {

        echo "<script>alert(' Order Successful')</script>";
        echo "<script>location.replace('index.php')</script>";




    } else {

        echo "<script>alert('Please Try Again!')</script>";
        echo "<script>location.replace('index.php')</script>";

    }
}


?>