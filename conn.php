<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "millets";



$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
// if ($conn->connect_error) {
//     die("". $conn->connect_error);
// }
// else{
//     echo "Connection Successful!";
// }
?>