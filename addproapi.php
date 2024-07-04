<?php

include('conn.php');


if (isset($_POST['submit_details'])) {


    $product_name = $_POST['proname'];

    $price = $_POST['proprice'];

    $proteins = $_POST['proproteins'];
    $fats = $_POST['profats'];
    $energy = $_POST['proenergy'];







    $part_img = $_FILES['proimg']['name'];

    $query = "INSERT INTO products (product_name,price,proteins,fats,energy,product_img) VALUES ('$product_name','$price','$proteins','$fats','$energy','$part_img')";
    $query_run = mysqli_query($conn, $query);
    if ($query_run) {
        move_uploaded_file($_FILES["proimg"]["tmp_name"], "products/" . $_FILES["proimg"]["name"]);

        echo "<script>alert(' Product Added Successfully')</script>";
        echo "<script>location.replace('addproduct.php')</script>";


    } else {

        echo "<script>alert('Cannot Add Product')</script>";
    }
}


?>