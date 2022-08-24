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
                        <h4 class="text-success">Create Contibute Account</h4>
                    </div>
                    <form action="mhandleregister.php" method="post">
<div class="input-group mb-3">
  <span class="input-group-text btn btn-success" id="basic-addon1">Full Name</span>
  <input type="text" class="form-control"  name="fname" placeholder="Enter your Name" >
</div>

<div class="input-group mb-3">
  <input type="text" class="form-control"   name="email" placeholder="User's username" >
  <span class="input-group-text btn btn-success" id="basic-addon2">@gmail.com</span>
</div>

<label for="basic-url" class="form-label text-success">Place Of Residence</label>
<div class="input-group mb-3">
  <span class="input-group-text btn btn-success" id="basic-addon3">Kenya/Kisumu</span>
  <input type="text" class="form-control"  name="location" id="basic-url" >
</div>

<div class="input-group mb-3">

  <span class="input-group-text btn btn-success">Amount Contributed</span>
  <input type="text" class="form-control"name="amount"aria-label="Amount (to the nearest dollar)">
  <span class="input-group-text">.00</span>
</div>

<div class="input-group mb-3">
  <input type="password" class="form-control" placeholder="Password" name="mpassword">
 
  <input type="password" class="form-control" placeholder="Confirm Password" name="mcpassword">
</div>
<div class="row">
                            <div class="col-md-12 col-lg-12 p-2">
                                <input class="col-md-12 col-lg-12 btn-success rounded-pill"  type="submit" name="mregister" value="REGISTER">

                            </div> 
</form>
                            <button type="button" class="btn btn-danger btn-lg p-2">Exit</button>

                        <div class="text-center text-color secondary" >
                            <a href="mlogin.php">Already have existing Account? Login here</a>
                        </div>

                        

            </div>

            </div>
    </div>
                    </div>
            </div>

            </body>
</html>