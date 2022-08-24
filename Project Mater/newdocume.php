<?php



include "mheader.php";

?>
<div class="row m-2">
        
      <div class="col-lg-6"><h4 class="text-secondary">View Management Info</h4></div>
        
    
        <div class="col-lg-6"> <button class="btn btn-success text-white float-end">We Run 2 save Lives</button> </div>
     

</div>

<?php
$link =mysqli_connect('localhost','root','','mater');
$sql = "SELECT `id`, `fullname`, `username`, `Phonenumber`, `residence`, `gender`, `date`, `picture`, `certificate` FROM `samaritans` ";
$result =mysqli_query($link,$sql);

if($result){
    $data =mysqli_num_rows($result);

    if($data>0){
        echo "<table class='table table-stripped table-bordered'>";
        echo "<tr>";
        echo "<th>id</th>";
        echo "<th>Fullname</th>";
        echo "<th>Username</th>";
        echo "<th>Number</th>";
        echo "<th>Residence</th>";
        echo "<th>DOB</th>";
        echo "<th>Gender</th>";
        echo "<th>Action</th>";
        echo "</tr>";

        while($row =mysqli_fetch_array($result)){
            echo "<tr>";
           
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['fullname']."</td>";
            echo "<td>".$row['username']."</td>";
            echo "<td>".$row['Phonenumber']."</td>";
            echo "<td>".$row['residence']."</td>";
            echo "<td>".$row['gender']."</td>";
            echo "<td>".$row['date']."</td>";
            echo "<td>
              <a href='mview.php?id=".$row['id']."'><i class= 'fa fa-eye'></i></a>
              <a href='mupdate.php?id=".$row['id']."'><i class= 'fa fa-pencil'></i></a>
              <a href='mdelete.php?id=".$row['id']."'><i class= 'fa fa-trash'></i></a>

              </td>";
        
        }

    }else{
        echo "No data Found in Database";
    }
}else{
    echo "Error executing Query $sql".mysqli_error($link);
}

?>