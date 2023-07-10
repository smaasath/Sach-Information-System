<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin profile</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="../Profile/Admin-form/style.css">
    </head>
    <body>
        
            <div class="container py-md-5">        
                        <div class="card shadow mb-3">
                            <div class="card-header py-3 text-center">
                                <p class="m-0 fw-bold">ADMIN PROFILE</p>
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
                                            <div class="mb-3"><label class="form-label" for="Name"><strong>Name</strong></label><input class="form-control" type="text" id="Name-4" placeholder="D.G.S.Pathulpana" name="Name"></div>
                                        </div>
                                    </div>                                
                            </div>
                            <div class="card-body">                                
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="tel"><strong>Contact</strong></label></div><input class="form-control" type="tel" placeholder="0777267345">
                                        </div>
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="email"><strong>Email Address</strong></label></div><input class="form-control" type="email" id="email-1" placeholder="aaa@gmail.com" name="email">
                                        </div>
                                    </div>                                
                            </div>
                            <div class="card-body">                                
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="User"><strong>User name</strong></label></div><input class="form-control" type="text" placeholder="ADMIN043">
                                        </div>
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="password"><strong>Password</strong></label></div><input class="form-control" type="password">
                                        </div>
                                    </div>
                                    <br>
                                    <button class="Submit-Btn" type="button" onclick="savestudent()">Save Changes</button>
                            </div>
                        </form>
                        </div>
                    </div>               
               </div>
            </div>  
            <script src="../Profile/Admin-form/validation.js" type="text/javascript"></script>
         <script src="../../JS/AdminDashboard.js"></script>
    </body>
</html>


 


 


