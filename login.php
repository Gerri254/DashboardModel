<?php_
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">


    <script src="bootstrap/java/bootstrap.min.js"></script>
    <script src="bootstrap/java/popper.min.js"></script>
    <script src="bootstrap/java/jquery.min.js"></script>
</head>
<body class="bg-primary" >
<div class="container p-4" >
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-5 col-lg-5">
                    <img src="images/cat.jpg"class="rounded" alt="loading" width="400" height="400">
                </div>
                <div class="col-md-7 col-lg-7">
                    <div>
                        <h4 class="text-danger">Log In Here</h4>

                    </div>
                    <form action="handlelogin.php" method="post">

                        <div class="row mb-3">
                            <div class="col-md col-lg">
                                <input  class="form-control rounded-pill" name="email"placeholder="e.g kwats@mail.com">

                            </div>
                        </div>
                        <div class="row mb-3" >
                            <div class="col-sm-12 col-lg-12">
                                <input type="password" class="form-control rounded-pill" name="Fname" placeholder="Enter Password">
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="col-md col-lg">
                                <input  class=" col-sm-12  btn btn-primary rounded-pill" type="submit" name="login" value="Register">



                            </div>




                        </div>


                    </form>

                    <div class="row">
                        <div class="text-center">
                            <a href="">Forgot Password? Click Here</a>
                        </div>
                        <div class="text-center">
                            <a href="register.php">Already have an account? Login here</a>
                        </div>

                    </div>

                </div>
            </div>


        </div>
    </div>

</div>

</body>
</html>