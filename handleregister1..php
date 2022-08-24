<?php

$link= mysqli_connect("localhost","root","","motor");


if(isset($_POST["register"])){

    $firstname = $_POST["fname"];
    $othername= $_POST["sname"];
    $email= $_POST["email"];
    $password= $_POST["password"];
    $confirm_pass= $_POST["cpassword"];

    #Matching password

    if($password != $confirm_pass){
        $c_pass_error = "Password does not match";
        echo  $c_pass_error;
    }


    # Length of pass

    if(strlen($password)<6){
        $l_pass_error = "Password must have 6 characters";
        echo $l_pass_error;
    }

    

    if(empty($c_pass_error)and empty($l_pass_error)){

        $store_pass = password_hash($password, PASSWORD_DEFAULT);


        $SQL = "INSERT INTO `users`(`firstname`, `othername`, `email`, `password`)
         VALUES ('$firstname','$othername','$email','$store_pass')";


         $result = mysqli_query($link,$SQL);

         if ($result){
             echo "You have been registered";
             header("location:login.php");

         }else{
             echo "Error executing query $SQL".mysqli_error($link);
         }

    }
    





}

?>