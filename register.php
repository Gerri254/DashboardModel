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
<body class="bg-primary">
<div class="container p-4">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-5 col-lg-5">
                    <img src="images/cat.jpg" class="rounded" alt="loading" width="400" height="400">
                </div>
                <div class="col-md-7 col-lg-7">
                    <div class="text-center">
                        <h4 class="text-primary">Create an account</h4>
                    </div>
                    <form action="handleregister1..php" method="post">
                        <div class="row mb-3">
                            <div class="col-sm-6 col-lg-6">
                                <input class="form-control rounded-pill"  type="text" name="fname" placeholder=" Enter First name">
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <input class="form-control rounded-pill" type="text" name="sname" placeholder="Enter other name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md col-lg">
                                <input class="form-control rounded-pill" type="email" name="email" placeholder="e.g kwat@mail.com">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-6 col-lg-6">
                                <input class="form-control rounded-pill"  type="password" name="password" placeholder=" Enter Password" required>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <input class="form-control rounded-pill" type="password" name="cpassword" placeholder="Confirm password">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md col-lg">
                                <input class="col-sm-8 btn-primary rounded-pill"  type="submit" name="register" value="register">

                            </div>

                        </div>

                    </form>
                    <div class="row">
                        <div class="text-center">
                            <a href="#">Forgot password?Click here</a>
                        </div>
                        <div class="text-center">
                            <a href="login.php">Already have an Account? Login here</a>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>


</div>



</body>
</html>