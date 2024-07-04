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
                    <th scope="col">ID</th>
                    <th scope="col">Product Name Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Product Image</th>
                    <th scope="col">Delete</th>
                    
                    

                </tr>
            </thead>
            <tbody>
                <?php
                require('conn.php');
                $sqlquery = "SELECT * FROM products";
                $query = mysqli_query($conn, $sqlquery);
                while ($row = mysqli_fetch_array($query)) {

                    ?>
    
                </tbody>
    
    
    
    
                <tr>
                    <td>
                        <?php echo $row['pid']; ?>
    
                    </td>
                    <input type="hidden" class="productname" value=<?php echo $row["pid"]; ?>>
                    <td>
                        <?php echo $row['product_name']; ?>
                    </td>
                    <td>
                        <?php echo $row['price'] ?>
                    </td>
                    
                    <td>
                        <img class="product_img" src="products/<?php echo $row["product_img"]; ?>" alt="">
                    </td>
                    <td>
                        <a class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <script>
        $(document).ready(function () {
            $('.btn').click(function (e) {
                e.preventDefault();
                // alert('hello');
                var deletepro = $(this).closest("tr").find('.productname').val();
                // console.log(bookpart);
                Swal.fire({
                    title: 'Are you sure?',
                    text: "Do you want to delete this product!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Delete Product!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: "POST",
                            url: "deletepro.php",
                            data: {
                                "deleteProSet": 1,
                                "deletepro": deletepro,
                            },

                            success: function (response) {
                                Swal.fire("Deleted successfully!", {
                                    icon: "success",
                                }).then((result) => {
                                    location.reload();
                                });


                            }
                        });

                    }
                })
            });
        });
    </script>