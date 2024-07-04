<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
   
    <h1 class="lead text-center alert alert-warning">Welcome Please Login to Continue!</h1>
    <form method="post" action="authentication.php" onsubmit= return >
        <div class="card-body w-50 mx-auto border border-secondary rounded">
            <div class="form-group mt-3 mx-2">

                <span class="fw-bold">Enter UserName:</span><input type="text" class="form-control" id="uname"
                    placeholder="Enter UserName" name="username" required>
            </div>


            <div class="form-group mx-2">

                <span class="fw-bold">Password:</span><input type="password" class="form-control" id="password"
                    placeholder="Enter Password" name="password" required>
            </div>

           

            <div class="card-footer mx-2 mt-2 text-center">
                <button type="submit" class="btn btn-primary mb-3" name="login">Login</button>
            </div>
            
             <div class="card-footer mx-2 mt-2 text-center">
                <a href="register.php">Not Registered Yet Click Here to register</a>
            </div>
             <div class="card-footer mx-2 mt-2 text-center">
                <a href="adminlogin.php">Login As Admin</a>
            </div>


        </div>
      




    </form>
    
   

</body>

</html>