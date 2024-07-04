<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <h1 class="lead text-center alert alert-warning">Welcome Pleases Follow Below Steps To Register Your Account</h1>
    <form method="post" action="registeruser.php" onsubmit="return validate();">
        <div class="card-body w-50 mx-auto border border-secondary rounded">
            <div class="form-group mt-3 mx-2">

                <span class="fw-bold">Enter Full Name:</span><input type="text" class="form-control" id="name"
                    placeholder="Enter Your Name" name="name" required>
            </div>
            <div class="form-group mt-3 mx-2">

                <span class="fw-bold">Enter UserName:</span><input type="text" class="form-control" id="uname"
                    placeholder="Enter username" name="username" required>
            </div>
            <div class="form-group mt-3 mx-2">

                <span class="fw-bold">Enter EmailAddress:</span><input type="email" class="form-control" id="email"
                    placeholder="Enter Email" name="email" required>
            </div>
            <div class="form-group mt-3 mx-2">

                <span class="fw-bold">Enter Phone Number:</span><input type="number" class="form-control" id="phno"
                    placeholder="Enter Contact Number" name="phno" required>
            </div>
            


            <div class="form-group mx-2">

                <span class="fw-bold">Password:</span><input type="password" class="form-control" id="password"
                    placeholder="Enter Password" name="password" required>
            </div>

            <div class="form-group mt-3 mx-2">

                <span class="fw-bold">Enter Location :</span><input type="text" class="form-control" id="loc"
                    placeholder="Enter Location" name="loc" required>
            </div>



            <div class="card-footer mx-2 mt-2 text-center">
                <button id="btn-login"type="submit" class="btn btn-primary mb-3" name="login">Register</button>
            </div>


            <div class="card-footer mx-2 mt-2 text-center">
                <a href="login.php">Have a Account Login Here</a>
            </div>


        </div>





    </form>
     <script>
              const email = document.getElementById("email");
              const password = document.getElementById("password");
              const phoneNumber = document.getElementById("phno");
              const name = document.getElementById("name");
              const username = document.getElementById("uname");


              // function for form validation
              function validate() {


                // checking email
                if (!email.value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
                  alert("Please enter a valid email!");
                  email.focus();
                  return false;
                }
                // checking password
                if (!password.value.match(/^.{8,15}$/)) {
                  alert("Password length must be between 8-15 characters!");
                  password.focus();
                  return false;
                }
                // checking phone number
                if (!phoneNumber.value.match(/^[1-9][0-9]{9}$/)) {
                  alert("Phone number must be 10 characters long number and first digit can't be 0!");
                  phno.focus();
                  return false;
                }
                // checking name length
                if (name.value.length < 5 ) {
                  alert("Name Invalid");
                  name.focus();
                  return false;
                }
                // checking name length
                
                // checking name length
                if (username.value.length < 5 || username.value.length > 20) {
                  alert("UserName length should be more than 5 and less than 21");
                  username.focus();
                  return false;
                }




                return true;
              }
           </script>



</body>

</html>