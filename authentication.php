<?php
session_start();
include("conn.php");  



$username = $_POST['username'];
$password = $_POST['password'];
$enpass = md5($password);

$sql = "SELECT * FROM logincreds WHERE username='$username'AND password='$enpass'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
if ($username == "" && $password == "") {

    header('location:login.php');
}
if ($row['username'] == $username && $row['password'] == $enpass) {
    $_SESSION['uname'] = $row['username'];
    
    header('location:index.php');

} else {
    echo "<script>alert('Wrong Credentials')</script>";
    echo "<script>location.replace('login.php')</script>";


}
?>