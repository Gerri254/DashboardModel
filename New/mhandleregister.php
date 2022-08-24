<?php

$link= mysqli_connect("localhost","root","","mater");

if(isset($_POST["mregister"])){


    $fullname =$_POST["fname"];
    $username =$_POST["email"];
    $residence =$_POST["location"];
    $amount =$_POST["amount"];
    $password =$_POST["mpassword"];
    $confirm_pass= $_POST["mcpassword"];

    if($password != $confirm_pass){
        $error_c ="Password does not match";
        echo $error_c;
    }

    if(strlen($password)<6){
        $error_l ="Password is too short";
        echo $error_l;
    }

    if(empty($error_c)and empty($error_l)){
        $pass_s =password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO `members`( `fullname`, `username`, `residence`, `amount`, `password`)
         VALUES ('$fullname','$username','$residence','$amount','$password')";

        $rere =mysqli_query($link,$sql);

        if($rere){
            echo "Thank you for your support";
            header("location:mlogin.php");
        }else{
            echo "Dont give with a fist hand $sql".mysqli_error($link);
        }

    }




}
?>