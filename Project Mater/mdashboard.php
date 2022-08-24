<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <script src="bootstrap/java/bootstrap.min.js"></script>
    <script src="bootstrap/java/popper.min.js"></script>
    <script src="bootstrap/java/jquery.min.js"></script>

</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-lg-3 bg-danger">

            <ul class="nav flex-column">
                <li class="nav-item navsep">
                    <a class="nav-link active" aria-current="page" href="#">
                        <i class="fa fa-heartbeat fa-3x text-black"> </i>
                        <span class="h4 text-white">About Us</span>
                    </a>
                </li>
                <hr class="bg-black">
                <li class="nav-item navsep">
                    <a class="nav-link" href="newdocume.php">
                        <i class="fa fa-linux fa-2x text-black"></i>
                        <span class="text-white h5">Management </span>

                    </a>
                </li>
                <li class="nav-item navsep">
                    <a class="nav-link" href="newstu.php">
                        <i class="fa fa-users fa-2x text-black"></i>
                        <span class="text-white h5">Members </span>

                    </a>
                </li>
                <hr class="bg-black">
                <li class="nav-item navsep">
                    <a class="nav-link" href="#">
                        <i class="fa fa-globe fa-2x text-black"></i>
                        <span class="text-white h5">E-Tender </span>

                    </a>
                </li>
                
                <li class="nav-item navsep">
                    <a class="nav-link" href="#">
                        <i class="fa fa-dollar fa-2x text-black"></i>
                        <span class="text-white h5">Contributions </span>

                    </a>
                </li>
                <hr class="bg-black">
                <li class="nav-item navsep">
                    <a class="nav-link" href="#">
                        <i class="fa fa-line-chart fa-2x text-black"></i>
                        <span class="text-white h5">Statistics </span>

                    </a>
                </li>
                <li class="nav-item navsep">
                    <a class="nav-link" href="mlogout.php">
                        <i class="fa fa-minus-circle fa-2x text-black"></i>
                        <span class="text-white h5">Log Out </span>

                    </a>
                </li>
                

            </ul>


        </div>

        <div class="col-md-9 col-lg-9 bg-light">
            <div class="row bg-white">

                <div class="col-md-7 col-lg-7">
                    <nav class="navbar navbar-light ">
                        <div class="container-fluid">
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-primary" type="submit">Search</button>
                            </form>
                        </div>
                    </nav>



                </div>
                <div class="col-md-5 col-lg-5">
                    <nav class="navbar navbar-expand-lg navbar-light ">
                        <div class="container-fluid">

                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarText">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">
                                        <i class="fa fa-bell gap-lg- text-warning"></i>
                                        <span class="badge bg-danger">100</span>
                                        
                                    
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Features</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <i class="fa fa-envelope fa-lg text-secondary"></i>
                                            <span class="badge bg-danger rounded-pill"> 5 </span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a  class="nav-link" href="#">MHR</a>
                                    </li>

                                    <li class="nav-item">
                                        <img src="images/download.jpg " alt="loading"class="rounded-circle" width="50" height="50">
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </nav>

                </div>
            </div>
            <div class="row m-2">
                <div class="col-sm-6">
                    <h3 class="text-secondary">Mater Heart Run</h3>
                </div>
                <div class="col-sm-6">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Launch Mater Programme
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Welcome to E-Mobilis</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    This is a non-profit organization
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        <div class="row m-2">
            <div class="col-sm">
                <div class="card-body  border-left-primary">
                    <span>Target Contribution</span>
                    <span class="float-end">
                        KSH.12,500,000
                        <i class="fa fa-dollar fa-lg text-secondary"></i>
                    </span>

                </div>

            </div>
            <div class="col-sm">
                <div class="card-body  border-left-warning">
                    <span>Past Contributions</span>
                    <span class="float-end">
                        <i class="fa fa-bars fa-lg text-secondary"></i>
                    </span>

                </div>

            </div>
            <div class="col-sm">
                <div class="card-body  border-left-success">
                    <span>Messages</span>
                    <span class="float-end">
                        <i class="fa fa-comments fa-lg text-secondary"></i>
                    </span>

                </div>

            </div>





        </div>
            <div class="row m-2">
                <div class="col-sm-6 col-lg-6">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Aim of Contribution
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Aim of the project.</strong> The Mater Heart Run is an annually held initiative in the efforts to raise awareness and donations to support children with heart conditions from families that cannot afford the cost of cardiac surgery. Every year, Syngenta donates and participates towards this noble cause.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Benefitiaries of the Project
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Limitations on the development
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Individuals benefit from the project.</strong>“Last year, from the Sh64 million raised, we managed to carry out 229 open heart operations on children and over 18,000 were screened through the free cardiac outreach camps in various parts of the country,” said Alexander Irungu, Mater Hospital’s director of operations and administration.

Eight-year-old Brian Wachira, a beneficiary of the event, narrated how the programme had changed his life.

“I could not walk, go to school or play. I took medicine daily but my situation never improved. I got lucky when I was taken to Mater for open heart surgery. I can now ride a bike and go to school without feeling tired,” he said.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="col-sm-6 col-lg-6">

                        <div class="bg-white">
                            <div class="m-2 p-2">
                                <span>Orphan Neglection</span>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> 25%</div>
                                </div>
                            </div>
                            <div class="m-2 p-2">
                                <span>Education Background</span>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                            </div>
                            </div>


                            <div class="m-2 p-2">
                            <span>Successfull Surgeries</span>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                            </div>
                            </div>


                            <div class="p-2 m-2">
                                <span>Moral Support</span>
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                            </div>
                            </div>

                            

                            <div class="m-2 p-2">
                                <span>Government Finance</span>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                </div>
                                </div>

                        </div>

                    </div>




                </div>

            <div class="row m-2">
                

                <div class="col-sm-6">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Under 5 months
                            <span class="badge bg-secondary rounded-pill">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                             1-5 years
                            <span class="badge bg-dark rounded-pill">22</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            6-12 years
                            <span class="badge bg-warning rounded-pill">13</span>
                                                    </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            13-18 years
                            <span class="badge bg-primary rounded-pill">133</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            19-29 years
                            <span class="badge bg-dark rounded-pill">123</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Over 30 years
                            <span class="badge bg-danger rounded-pill">132</span>
                        </li>
                    </ul>
                </div>

            </div>


            </div>



        </div>

    </div>



</div>
</body>