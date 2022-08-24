<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/jquery.min.js"></script>

</head>
<body class="bg-danger">
<div class="container p-5">
    <div class="card">
        <div class="card-body bg-dark">
            
            <div class="row">
            <div class="col-md-5 col-lg-5">
            <img src="images/download.jpg" class="rounded" alt="loading" width="400" height="400">

            </div>
            <div class="col-md-6 col-lg-6">
            <div class="text-center">
                        <h4 class="text-success">Log In</h4>
                    </div>
                    <form action="mhandlelogin.php" method="post">
<div class="input-group mb-3">
  <span class="input-group-text btn btn-success" id="basic-addon1">Full Name</span>
  <input type="text" class="form-control"  name="fname" placeholder="Enter your Name" >
</div>

<div class="input-group mb-3">
  <input type="text" class="form-control"   name="ename" placeholder="User's username" >
  <span class="input-group-text btn btn-success" id="basic-addon2">@gmail.com</span>
</div>



<div class="input-group mb-3">

  <span class="input-group-text btn btn-success">Amount Contributed</span>
  <input type="text" class="form-control"name="cname"aria-label="Amount (to the nearest dollar)">
  <span class="input-group-text">.00</span>
</div>

<div class="input-group mb-3">
  <input type="password" class="form-control" placeholder="Password" name="mpassword">
 
  
</div>
<div class="row">
                            <div class="col-md-12 col-lg-12 p-2">
                                <input class="col-md-12 col-lg-12 btn-success rounded-pill"  type="submit" name="mlogin" value="LOG IN">

                            </div> 
                            <button type="button" class="btn btn-danger btn-lg p-2">Exit</button>

                        <div class="text-center text-color secondary" >
                            <a href="mregister.php">Dont have an account? Sign up.</a>
                        </div>

                        

            </div>

            </div>
    </div>
                    </div>
            </div>

            </body>
</html>