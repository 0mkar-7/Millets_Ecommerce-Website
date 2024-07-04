<?php
session_start();
include('conn.php');



$adminid = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM adminlogin WHERE admin_id='$adminid' AND password='$password'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
if ($adminid=="" && $password=="") {
    header('location:adminlogin.php');
}
if ($row['admin_id'] == $adminid && $row['password'] == $password) {
    
    header('location:addproduct.php');
    $_SESSION['aname'] = $row['admin_id'];

} else {
    echo "<script>alert('Wrong Credentials')</script>";
    echo "<script>location.replace('adminlogin.php')</script>";


}
?>