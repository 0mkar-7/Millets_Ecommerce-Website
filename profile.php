<?php
session_start();
require('session_check.php');
require('conn.php');
$query = "SELECT * FROM logincreds WHERE username='$user'";
$userdet = mysqli_query($conn, $query);
$sql = "SELECT * FROM orders WHERE username='$user'";
$orderdata = mysqli_query($conn, $sql);
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

    <link src="loginscript.js">
</head>

<body>
    <?php
    include('navbar.php');
    ?>

    <div class="banner">
    
        Get All your Information Here
    
   </div>
   <div class="userdetails">
    <p>Account</p>
</div>
<div class="account">
    
    <table class="details">
            
            <tbody>
                <?php


                while ($row = mysqli_fetch_assoc($userdet)) {

                    ?>
    
                </tbody>
                <tr>
                    <th>FirstName</th>
                    <td>
                        <?php echo $row['fullname']; ?>
                    </td>
                </tr>
                
                <tr>
                    <th>Username</th>
                    <td>
                        <?php echo $row['username'] ?>
                    </td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>
                        <?php echo $row['email']; ?>
                    </td>
                </tr>
                <tr>
                    <th>Phone Number</th>
                    <td>
                        <?php echo $row['phno']; ?>
                    </td>
                </tr>
                <tr>
                    <th>Location</th>
                    <td>
                        <?php echo $row['loc']; ?>
                        </td>
                 </tr>
    
    
            <?php } ?>
        </table>
    </div>
    <div class="userdetails">
        <p>Orders</p>
    </div>
    <div class="account">
        <table class="details">
    
            <tbody>
                <?php


                while ($row = mysqli_fetch_assoc($orderdata)) {

                    ?>
    
                </tbody>
    
                <tr>
                    <th>Product Name</th>
                    <td>
                        <?php echo $row['product'] ?>
                    </td>
                </tr>
                <tr>
                    <th> Name</th>
                    <td>
                        <?php echo $row['name'] ?>
                        </td>
                    </tr>
                    <tr>
                    <th> Contact</th>
                    <td>
                        <?php echo $row['contact'] ?>
                            </td>
                        </tr>
                        <tr>
                    <th> Email</th>
                    <td>
                        <?php echo $row['email'] ?>
                                </td>
                            </tr>
                            <tr>
                    <th> Address</th>
                    <td>
                        <?php echo $row['address'] ?>
                                    </td>
                                </tr>
                                <tr>
                    <th> Payment Mode</th>
                    <td>
                        <?php echo $row['mode'] ?>
                                        </td>
                                    </tr>
                            

               
    
    
    
    
            <?php } ?>
        </table>
    </div>







</body>

</html>