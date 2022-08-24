<?php

$link =mysqli_connect('localhost','root','','mater');

if(isset($_POST["mlogin"])){
    $fullname =$_POST["fname"];
    $username =$_POST["ename"];
    $pesa =$_POST["cname"];
    $uspassword =$_POST["mpassword"];

    $sql = "SELECT * FROM `members` WHERE username='$username'";

    $result =mysqli_query($link,$sql);
    if($result){
        $data =mysqli_num_rows($result);

        if($data == 1){
            while($row=mysqli_fetch_array($result)){
                $id =$row["id"];
                $email=$row["username"];
                $password= $row["password"];

                if(password_verify($uspassword,$password)){
                    session_start();
                    $_SESSION["loggedin"]=true;
                    $_SESSION["id"]=$id;
                    $_SESSION["username"]=$email;

                    header("location:mdashboard.php");
                }else{
                    echo "<h3> Password do not match </h3>";
                }

            }

        }else{
            echo "No data in database";
        }


    }else{
        echo "Error Logging in $sql".mysqli_error($link);
    }

}