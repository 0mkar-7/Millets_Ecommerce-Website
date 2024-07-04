<?php
session_start();
require('conn.php');
require('session_check.php');
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
    <div class="container">
        <h1>Connect with Us</h1>
    </div>
    <div class="contactBox">
        <div class="conleft">
            <h3>Send Your Request</h3>
            <form method="POST" action="message.php">
                <div class="input-row">
                    <div class="input-group">
                        <label> Full Name</label>
                        <input type="text" placeholder="Enter your name" required maxlength="50" minlength="7" name="name">
                    </div>
                    <div class="input-group">
                        <label>Phone</label>
                        <input type="number" placeholder="Enter your Contact Number" required maxlength="10" minlength="10" name="phone">
                    </div>
                    <div class="input-group">
                        <label>Email</label>
                        <input type="email" placeholder="Enter your Email Id" required name="email">
                    </div>
                    <div class="input-group">
                        <label>Subject</label>
                        <input type="text" placeholder="Enter Subject of Message" required name="subject">
                    </div>

                </div>
                <label>Message</label>
                <textarea  rows="5" placeholder=" Drop Your Message" required  name="message"></textarea>
                <button class="form-button" name="messageSend">Send</button>
            </form>
        </div>
        <div class="conright">
            <h3>Send Your Request</h3>
            <table>
                <tr>
                    <td>Email</td>
                    <td>healthymeals@gmail.com</td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td>9999999999</td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>Mumbai, Maharashtra, India</td>
                </tr>
            </table>


        </div>
    </div>







</body>

</html>