<?php

include "header.php";
$link =mysqli_connect('localhost','root','','motor');


if(isset($_GET['id'])and !empty($_GET['id'])){
    $id = $_GET["id"];

   $sql= "SELECT * FROM `students` WHERE id='$id'";

   $result = mysqli_query($link,$sql);

   if($result){

    $data =mysqli_num_rows($result);

    if($data==1){

        $row =mysqli_fetch_array($result);

        $fullname =$row['fullname'];
        $email =$row['email'];
        $phonenumber =$row['phonenumber'];
        $location =$row['location'];
        $dob =$row['dob'];
        $gender= $row['gender'];
        $photo= $row['photo'];


        $filepath="uploads/$photo";

        ?>
        <div class="row m-2">

        <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <img src="<?php echo $filepath; ?>" alt="Loading" height="150" width="150" class="rounded-circle">
                        </div>
                        <div>
                            <label class="form-label h6">FULL NAME:</label>
                            <p><?php echo $fullname ?></p>
                        </div>

                    </div>

                </div>
        </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <label class="form-label h6"> EMAIL:</label>
                            <p><?php echo $email ?></p>            
                        </div>

                        <div>
                            <label class="form-label h6"> PHONE NUMBER:</label>
                            <p><?php echo $phonenumber ?></p>            
                        </div>
                        <div>
                            <label class="form-label h6"> LOCATION:</label>
                            <p><?php echo $location ?></p>            
                        </div>

                    </div>

                </div>

            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <label class="form-label h6"> DATE OF BIRTH:</label>
                            <p><?php echo $dob ?></p>            
                        </div>

                        <div>
                            <label class="form-label h6"> GENDER:</label>
                            <p><?php echo $gender ?></p>            
                        </div>
                       

                    </div>

                </div>

            </div>





        </div>



        <?php




    }else{
        echo "No Data was found";
    }

   }else{
       echo "Error Executing Query $sql".mysqli_error($link);
   }

}



