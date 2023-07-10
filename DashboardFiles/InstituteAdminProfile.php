<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Institute profile</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="../Profile/Institute/style.css">
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
                        <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4 img-fluid d-none d-sm-block" src="../Profile/Institute/institute.jpg"></div>
                    </div>
                </div>                
                    <div class="col-sm-9 text-center text-md-start">
                        <div class="card shadow mb-3">
                            <div class="card-header py-3 text-center">
                                <p class="m-0 fw-bold">INSTITUTE PROFILE</p>
                            </div>
                            <form>
                            <div class="card-body">                                
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="Name"><strong>Name</strong></label><input class="form-control" type="text" id="Name-4" placeholder="Uwa Wellassa University" name="Name" readonly></div>
                                        </div>
                                    </div>                                
                            </div>
                            <div class="card-body">                                
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="LOGO"><strong>LOGO URL</strong></label><input class="form-control" type="text" id="LOGO" placeholder="https://upload.wikimedia.org/wikipedia/en/3/37/Uva_Wellassa_University_Logo.jpg" name="LOGO" readonly></div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="Ins_ID"><strong>Institute ID</strong></label></div><input class="form-control" type="text" placeholder="INS043" readonly>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="Ins_Code"><strong>Institute Code</strong></label></div><input class="form-control" type="text" placeholder="UWUINS01" readonly>
                                        </div>
                                    </div>                                
                            </div>
                            <div class="card-body">                                
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="tel"><strong>Contact</strong></label></div><input class="form-control" type="tel" placeholder="0777267345" readonly>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="Address"><strong>Address</strong></label></div><input class="form-control" type="text" id="Address" placeholder="Uva Wellassa University, Passara Road, Badulla." name="Address" readonly>
                                        </div>
                                    </div>                                
                            </div>
                            <div class="card-body">                                
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="Year"><strong>Year Estabilish</strong></label></div><input class="form-control" type="text" placeholder="01/07/2005" readonly>
                                        </div>                               
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="Mission"><strong>Mission</strong></label></div><input class="form-control" type="text" placeholder="To produce well-rounded, employable, technocratic and entrepreneurial graduates equipped with knowledge, skills, values and attitudes to make outstanding contributions to the national development." readonly>
                                        </div>                               
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="Vission"><strong>Vision</strong></label></div><input class="form-control" type="text" placeholder="Be the centre of excellence for value addition to the national resource base" readonly>
                                        </div>                               
                                    </div>
                                   <br>

                                <a href="../DashboardFiles/InstituteAdminProfileEdit.php">
                                    <button class="Submit-Btn" type="button" >EDIT</button>
                                </a> 
                            </div>
                        </form>

                        </div>
                    </div>               
               </div>
            </div>  
        <script src="../Profile/Institute/validation.js" type="text/javascript"></script>     

    </body>
</html>










