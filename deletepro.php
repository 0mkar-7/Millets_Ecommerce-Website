<?php



include('conn.php');












if (isset($_POST['deleteProSet'])) {
    $productname = $_POST['deletepro'];
    $query = " DELETE FROM products WHERE pid ='$productname'";
    mysqli_query($conn, $query);
}





?>