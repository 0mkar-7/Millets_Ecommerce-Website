<?php

include('conn.php');
if (isset($_POST['messageSend'])) {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    $query = "INSERT INTO feedback (name,phone,email,subject,message) VALUES ('$name','$phone','$email','$subject','$message')";
    $query_run = mysqli_query($conn, $query);
    if ($query_run) {

        echo "<script>alert(' Feedback Successful')</script>";
        echo "<script>location.replace('about.php')</script>";




    } else {

        echo "<script>alert('Please Try Again!')</script>";
        echo "<script>location.replace('about.php')</script>";

    }
}


?>