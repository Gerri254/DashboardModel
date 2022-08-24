<?php

session_start();
if($_SESSION["loggedin"]!==true){
    header("location:login.php");
}


include "header.php";

?>
<div class="row m-2">
        
      <div class="col-lg-6"><h4 class="text-secondary">View Student Details</h4></div>
        
    
        <div class="col-lg-6"> <button class="btn btn-primary float-end">Download Details</button> </div>
     

</div>

<?php
$link =mysqli_connect('localhost','root','','motor');

$sql = "SELECT `id`, `fullname`, `email`, `phonenumber`, `location`, `dob`, `gender` FROM `students`";

$result = mysqli_query($link,$sql);

if($result){

    $data = mysqli_num_rows($result);

    if($data>0){
        echo "<table class='table table-stripped table-bordered'>";
        echo "<tr>";
        echo "<th>id</th>";
        echo "<th>Fullname</th>";
        echo "<th>Email</th>";
        echo "<th>Phone Number</th>";
        echo "<th>Location</th>";
        echo "<th>DOB</th>";
        echo "<th>Gender</th>";
        echo "<th>Action</th>";
        echo "</tr>";


        while ($row = mysqli_fetch_array($result)){
            
            echo "<tr>";
           
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['fullname']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['phonenumber']."</td>";
            echo "<td>".$row['location']."</td>";
            echo "<td>".$row['dob']."</td>";
            echo "<td>".$row['gender']."</td>";
            echo "<td>
              <a href='view.php?id=".$row['id']."'><i class= 'fa fa-eye'></i></a>
              <a href='update.php?id=".$row['id']."'><i class= 'fa fa-pencil'></i></a>
              <a href='delete.php?id=".$row['id']."'><i class= 'fa fa-trash'></i></a>

              </td>";
            
        }

    }else{
        echo "No data Found in Database";
    }

}else{
    echo "Error executing Query $sql".mysqli_error($link);

}

?>
