<?php
$user = $_SESSION['aname'];
if (empty($user)) {
    header('location:adminlogin.php');
}
?>