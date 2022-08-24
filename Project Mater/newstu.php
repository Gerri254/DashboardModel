<?php   


include "mheader.php";
?>

<form action="newhstu.php" method="post" enctype="multipart/form-data">
    <div class="row m-2">

    <div class="col-md-6">
        <label class="form-label black">Full Name</label>
        <input class="form-control bg-dark text-white" type="text" name="fullName" placeholder="">
    </div>

    <div class="col-md-6">
        <label class="form-label grey">Email Adress</label>
        <input class="form-control bg-dark text-white" type="text" name="emailAddress">
    </div>




    </div>
    <div class="row m-2 p-2">
    <div class="col-md-6">
        <label class="form-label grey">Phone Number</label>
        <input class="form-control bg-dark text-white" type="text" name="phoneNumber">
    </div>
    <div class="col-md-6">
        <label class="form-label grey">Address Location</label>
        <input class="form-control bg-dark text-white" type="text" name="location" >
    </div>

</div>
<div class="row m-2 p-2">
    <div class="col-md-6">
        <label class="form-label grey">Date of Birth</label>
        <input class="form-control bg-dark text-white" type="date" name="dob" >
    </div>
    <div class="col-md-6">
        <label class="form-label grey">Gender</label>
        <select class="form-control" name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="Cannot Say">Other</option>
        </select>
    </div>

<div class="row p-2">
        <div class="col-md-12">
            <label class="form-label grey">Your Photo</label>
            <input class="form-control bg-dark text-white" type="file" name="photo">

        </div>
    </div>
    <div class="row p-2">
        <div class="col-md-12">
            <label class="form-label grey">Your CV</label>
            <input class="form-control bg-dark text-white" type="file" name="cv">

        </div>

    </div>

   
    </div>
<div class="row m-2 p-2">
        <div class="text-center">
            <input type="submit" name="submit" class="col-12 btn btn-success" value="SUBMIT">
        </div>

    </div>
</form>
