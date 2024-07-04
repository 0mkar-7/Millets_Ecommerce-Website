<?php
$user=$_SESSION['uname'];
if(empty($user)){
header('location:login.php');
}
?>