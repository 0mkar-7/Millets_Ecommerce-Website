<?php
session_start();
require('session_check.php');
require('conn.php');
$sql = "SELECT * FROM products";
$all_product = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthyMeals</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link src="loginscript.js">
</head>

<body>
    <div>
    <?php
    include('navbar.php');
    ?>
    </div>

    <?php
            while($row=mysqli_fetch_assoc($all_product)){
        ?>
        <div class="card-parts">
            <div class="image">
                <img src="products/<?php echo $row["product_img"]; ?>" alt="">
            </div>
            <div class="caption">
                <input type="hidden" id='pid' class="book_id" value=<?php echo $row["product_name"]; ?>>
                <p class="title">Product Name:
                    <?php echo $row["product_name"]; ?>
                </p>
                <p class="title">Price:<b>
                        <?php echo $row["price"]; ?>
                    </b></p>
                <p class="title">Proteins(Per 100gm):
                    <?php echo $row["proteins"]; ?>
                </p>
                <p class="title">Fats(Per 100gm):
                    <?php echo $row["fats"]; ?>
                </p>
                <p class="title">Energy(Per 100gm):
                    <?php echo $row["energy"]; ?>
                </p>
                <p class="title">Quantity:1KG
                </p>
               
    
                </div>
                <button class="add" id="btn-book" onclick="order()" >Buy Now</button>
            </div>
        <?php
            }
            ?>
    <script>
    function order(){
        var productid = document.getElementById('pid').value;
        // console.log(productid);
        localStorage.setItem('pid',productid);
        window.location.href="placeorder.php";
    }
    </script>
    






</body>

</html>