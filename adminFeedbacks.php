<?php
session_start();
require('session_check1.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Add Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div>
        <?php include('adminnav.php'); ?>
    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Feedback Msg</th>



                </tr>
            </thead>
            <tbody>
                <?php
                include('conn.php');
                $sqlquery = "SELECT * FROM feedback";
                $query = mysqli_query($conn, $sqlquery);

                while ($row = mysqli_fetch_array($query)) {

                    ?>
    
                </tbody>
                <tr>
                    <td>
                        <?php echo $row['name']; ?>
                    </td>
                    <td>
                        <?php echo $row['phone']; ?>
                    </td>
                    <td>
                        <?php echo $row['email']; ?>
                    </td>
    
                    </td>
                    <td>
                        <?php echo $row['subject']; ?>
    
                    </td>
                    <td>
                        <?php echo $row['message']; ?>
    
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>