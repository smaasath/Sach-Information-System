<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Staff profile</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="../Profile/Staff/style.css">
    </head>
    <body> 
        <!--  nav bar start-->
        <div class="navbardah fixed-top d-flex flex-row-reverse">
            <a class="p-3" href="#" style="margin-right: 30px;">
                <i class="fa-solid fa-user fa-lg" style="color: #24457f;"></i>
            </a>

            <h6 class="p-3" href="#">
                User Name
            </h6>

            <div id= "resimage" class="p-1 w-50 d-block d-sm-none">
                <a href="#">
                    <img src="../Images/Logo.png" alt="Home" class="img-fluid" style="width: 20%">
                </a>
            </div>
        </div>

        <!--  nav bar end-->
            <div class="container py-md-5">
                <div class="row d-flex align-items-top">       
                <div class="col-sm-3 p-3 bg-white text-center">
                    <div class="card mb-3">
                        <div class="card-body text-center shadow d-none d-sm-block"><img class="rounded-circle mb-3 mt-4 img-fluid d-none d-sm-block" src="../Profile/Staff/staff.jpg"></div>
                    </div>
                </div>                
                    <div class="col-sm-9 text-center text-md-start">
                        <div class="card shadow mb-3">
                            <div class="card-header py-3 text-center">
                                <p class="m-0 fw-bold">STAFF PROFILE</p>
                            </div>
                            <form>
                            <div class="card-body">                                
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="Department"><strong>Department</strong></label><input class="form-control" type="text" id="Department" placeholder="Computer science and infomatics" name="Department" readonly></div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="Degree"><strong>Degree</strong></label><input class="form-control" type="text" id="Degree" placeholder="Computer science and technology" name="Degree" readonly></div>
                                        </div>
                                    </div>                                
                            </div>
                            <div class="card-body">                                
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="Name"><strong>Name</strong></label><input class="form-control" type="text" id="Name-4" placeholder="D.G.S.Pathulpana" name="Name" readonly></div>
                                        </div>
                                    </div>                                
                            </div>
                            <div class="card-body">                                
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="tel"><strong>Contact</strong></label></div><input class="form-control" type="tel" placeholder="0777267345" readonly>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="email"><strong>Email Address</strong></label></div><input class="form-control" type="email" id="email-1" placeholder="aaa@gmail.com" name="email" readonly>
                                        </div>
                                    </div>                                
                            </div>
                            <div class="card-body">                                
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="Position"><strong>Position</strong></label></div><input class="form-control" type="text" placeholder="Visiting lecturer" readonly>
                                        </div>                               
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="Staff_ID"><strong>Staff ID</strong></label></div><input class="form-control" type="text" placeholder="STAFF043" readonly>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="Dep_ID"><strong>Department ID</strong></label></div><input class="form-control" type="text" placeholder="DEP043" readonly>
                                        </div>
                                    </div>
                                    <br>
                                <a href="../DashboardFiles/StaffProfileEdit.php">
                                    <button class="Submit-Btn" type="button" >EDIT</button>
                                </a>
                            </div>
                        </form>
                        </div>
                    </div>               
               </div>
            </div>  
        <script src="../Profile/Staff/validation.js" type="text/javascript"></script>     
    </body>
</html>


 


 

