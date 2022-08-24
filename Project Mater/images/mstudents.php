<?php

include "mheader.php";

?>

<form action="mHS.php" method="post" enctype="multipart/form-data">

<div class="row m-2">
    <div class="col-md-6 col-lg-6">

    <label class="form-label red text-success">Full Name</label>
    <input class="form-control text-danger" type="text" name="fullName" placeholder="">

    </div>

    <div class="col-md-6 col-lg-6">

    <label class="form-label red text-success">Username</label>
    <input class="form-control text-danger" type="text" name="emaIl" placeholder="">

    </div>


</div>

<div class="row m-2">
    <div class="col-md-6 col-lg-6">

    <label class="form-label red text-success">Phone Number</label>
    <input class="form-control text-danger" type="text" name="phoneNumber" placeholder="">

    </div>

    <div class="col-md-6 col-lg-6">

    <label class="form-label red text-success">Residence</label>
    <input class="form-control text-danger" type="text" name="resIdence" placeholder="">

    </div>


</div>
<div class="row m-2">
    

    <div class="col-md-6 col-lg-6">
   
        <label class="form-label grey">Gender</label>
        <select class="form-control" name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="Cannot Say">Other</option>
        </select>
     

    </div>

    <div class="col-md-6 col-lg-6">

    <label class="form-label red text-success">Date Of Birth</label>
    <input class="form-control text-danger" type="date" name="daTe" placeholder="">

    </div>


</div>

<div class="row p-2">
        <div class="col-md-12">
            <label class="form-label ">Picture Here</label>
            <input class="form-control bg-dark text-white" type="file" name="photo">

        </div>
    </div>
    <div class="row p-2">
        <div class="col-md-12">
            <label class="form-label ">Display Cerificate</label>
            <input class="form-control bg-dark text-white" type="file" name="cv">

        </div>

    </div>

   
    </div>
<div class="row m-2 p-2">
        <div class="text-center">
            <input type="submit" name="submit" class="col-6 btn btn-dark" value="SUBMIT">
        </div>

    </div>
</form>

