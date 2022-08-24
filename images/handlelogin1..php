<?php

$link = mysqli_connect("localhost","root","","motor");

if(isset($_POST["login"])){
    $useremail= $_POST["email"];
    $userpassword= $_POST["Fname"];
  

$sql = "SELECT * FROM `users` WHERE email=$useremail"

$result= mysqli_query($link,$sql);

if($result){

    $data = mysqli_num_rows($result);
    if($data==1){

        while($row= mysqli_fetch_array($result)){
            $id =$row["id"];
            $email = $row["email"];
            $password = $row["password"];

            #verify password

            if(password_verify($userpassword,$password)){
                session_start();
                $_SESSION["loggedin"]=true;
                $_SESSION["id"] = $id;
                $_SESSION["username"]= $email;

                header("location:dashboard.php");

            }else{
                echo "<h3> Password do not match </h3>"
            }

        }


    }else{
        echo "Login Successful";
    }
    


}else{
    echo "Error executing query $sql".mysqli_error($link);
}

}