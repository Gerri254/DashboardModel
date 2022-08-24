<?php

include "header.php";
$link =mysqli_connect('localhost','root','','motor');


if(isset($_POST["submit"])){
  
    $id=$_POST["id"];

    $sql ="DELETE FROM `students` WHERE id='$id'";
    $result =mysqli_query($link,$sql);

    if($result){
        
        
        echo "<p class='alert alert-danger'>Record has been deleted successfully</p>";

    }else{
        echo "Error deleting record $sql".mysqli_error($link);
    }


}





?>
<div class="row m-2">
    
    <div class="alert alert-danger">
        <form  class="text-center"action="delete.php" method="post">
            <div></div>
                <label class="form-label"> Are you sure you wanna delete this record?</label>
                <input  class="form-control" type="hidden" name="id" value=<?php echo $_GET['id'];?>
                </div>
        <div class="p-2">
            <input class="btn btn-danger" type="submit" value="YES" name="submit">
            <a class= "btn btn-primary" href="documents.php">NO</a>
        </div>
</form>
    </div>


</div>
