<?php

include('conn.php');


if (isset($_POST['login'])) {

    $fullname = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phno = $_POST['phno'];
    $loc = $_POST['loc'];
    $enpass=md5($password);


    $qry = "SELECT * FROM logincreds WHERE email='$email'";
    $res = mysqli_query($conn, $qry);
    $exist = mysqli_fetch_assoc($res);
    $sqlqry = "SELECT * FROM logincreds WHERE username='$username'";
    $resuser = mysqli_query($conn, $sqlqry);
    $confirm = mysqli_fetch_assoc($resuser);

    $query = "INSERT INTO logincreds (username,password,fullname,email,phno,loc) VALUES ('$username','$enpass','$fullname','$email','$phno','$loc')";

    if ($exist > 0) {
        echo "<script>alert('Account already Exists with that Email!')</script>";
        echo "<script>location.replace('login.php')</script>";
    } elseif ($confirm > 0) {
        echo "<script>alert('Username Already Taken')</script>";
        echo "<script>location.replace('register.php')</script>";

    } else {
        $sqlquery = mysqli_query($conn, $query);
        echo "<script>alert('Account Registered Successfully!')</script>";
        echo "<script>location.replace('login.php')</script>";
    }

} else {

    echo "<script>alert('Cannot Register')</script>";
    echo "<script>location.replace('register.php')</script>";

}




?>