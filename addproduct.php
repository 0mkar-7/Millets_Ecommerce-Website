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
</head>

<body>
    <div>
        <?php include('adminnav.php');?>
    </div>
    <h1 class="lead text-center">Add Your Product Data Here!</h1>
    <form method="post" action="addproapi.php" enctype="multipart/form-data" onsubmit="return validate();">
        <div class="card-body w-50 mx-auto border border-secondary rounded">
            <div class="form-group mt-3 mx-2">

                <span class="fw-bold">Product Name:</span><input type="text" class="form-control" id="productname"
                    placeholder="Enter Product Name" name="proname" required>
            </div>


            <div class="form-group mx-2">

                <span class="fw-bold">Price:</span><input type="number" class="form-control" id="price"
                    placeholder="price of the product" name="proprice" required>
            </div>

            <div class="form-group mx-2">

                <span class="fw-bold">Proteins</span><input type="text" class="form-control" id="proteins"
                    placeholder="Proteins in gms" name="proproteins" required>
            </div>
            <div class="form-group mx-2">

                <span class="fw-bold">Fats</span><input type="text" class="form-control" id="fats"
                    placeholder="fats in gms" name="profats" required>
            </div>
            <div class="form-group mx-2">

                <span class="fw-bold">Energy</span><input type="text" class="form-control" id="energy"
                    placeholder="Proteins in gms" name="proenergy" required>
            </div>



            <div class="form-group mx-2">
                <span class="fw-bold">Image of Product:</span><input type="file" class="form-control"
                    id="img" placeholder="Image of product" name="proimg" required>
            </div>


            <div class="card-footer mx-2 mt-2">
                <button type="submit" class="btn btn-primary mb-3" name="submit_details">Add Product</button>
            </div>


        </div>
        <!-- /.card-body -->




    </form>
    <script>
        const productname = document.getElementById("productname");
        const price = document.getElementById("price");
        const proteins = document.getElementById("proteins");
        const fats = document.getElementById("fats");
        const energy = document.getElementById("energy");


        // function for form validation
        function validate() {




            // checking password

            // checking phone number

            // checking name length

            // checking name length
            if (price.value.length < 2 || price.value.length > 11) {
                alert("Price should be more than 5 digits and less than 11");
                price.focus();
                return false;
            }
            // checking name length
            if (productname.value.length < 2 || productname.value.length > 20) {
                alert("Part Name length should be more than 2 and less than 21");
                productname.focus();
                return false;
            }
            if (proteins.value.length < 1 || proteins.value.length > 5) {
                alert("Proteins should be more than 1 digits and less than 5");
                proteins.focus();
                return false;
            }
            if (fats.value.length < 1 || fats.value.length > 5) {
                alert("Fats should be more than 1 digits and less than 5");
                fats.focus();
                return false;
            }
            if (energy.value.length < 1 || energy.value.length > 5) {
                alert("Energy should be more than 1 digits and less than 5");
                energy.focus();
                return false;
            }
          




            return true;
        }
    </script>

</body>

</html>