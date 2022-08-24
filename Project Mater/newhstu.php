<?php
include "mheader.php";

$link = mysqli_connect("localhost","root","","mater");

if (isset($_POST["submit"])){

    $fullname = $_POST["fullName"];
    $email = $_POST["emailAddress"];
    $phone = $_POST["phoneNumber"];
    $location = $_POST["location"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];

    $photoname = $_FILES["photo"]["name"];
    $tempname = $_FILES["photo"]["tmp_name"];
    $folder = "upload/".$photoname;


    $cvname = $_FILES["cv"]["name"];
    $cvtempname = $_FILES["cv"]["tmp_name"];
    $cvfolder = "upload/".$cvname;

    $sql ="INSERT INTO `newstu`( `fullname`, `email`, `phonenumber`, `location`, `dob`, `gender`, `photo`, `certifcate`)
     VALUES ('$fullname','$email','$phone','$location','$dob','$gender','$photoname','$cvname')";

    $result = mysqli_query($link,$sql);


    if(move_uploaded_file($tempname,$folder)){
        echo "<p class='alert alert-success'> Image has been uploaded</p>"; 
    }else{
        echo "Error uploading";
    }
    if(move_uploaded_file($cvtempname,$cvfolder)){
        echo "<p class='alert alert-success'> Cv has been uploaded</p>";
    }else{
        echo "Error uploading";
    }

    if($result){
        echo "<p class='alert alert-success'>Details stored successfully</p>";

    }else{
        echo "Error executing query $sql".mysqli_error($link);
    }

}