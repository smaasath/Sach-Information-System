<?php
$message = null;
if(isset($_GET["status"])){
    $status = $_GET["status"];
    if($status == 0){
        $message = "<h6 class='text-danger'>Required values were not submitted.</h6>";
    }elseif($status == 1){
        $message = "<h6 class='text-danger'>Please provide your username and password to proceed. Both fields are required for access.</h6>";        
    }elseif($status == 2){
        $message = "<h6 class='text-danger'>The entered email and password are incorrect. Please try again</h6>";
    }else{
        $message = "<h6 class='text-danger'>Oops! An unexpected error occurred. Please try again.</h6>"; 
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="style.css">
            <link rel="stylesheet" href="../../CSS/index.css">
    </head>
    <body>
               
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white m-0">
                        <a class="navbar-brand" href="#">
                            <img src="../../Images/Logo.png" width="70" height="70" alt="logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="../../index.php" style="color:rgb(20, 108, 148)">Home<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item" >
                                    <a class="nav-link" href="../../about us page/about us.html" style="color:rgb(20, 108, 148)">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../../WebinarHome.php" style="color:rgb(20, 108, 148)">Webinar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="Login.php" style="color:rgb(20, 108, 148)">Join Now</a>
                                </li>

                        </div>
                    </nav>
                </div>
            </div>
        </div>

        
        <section class="py-4 py-md-5 mt-5">
            <div class="container py-md-5">
                <div class="row d-flex align-items-center">       
                <div class="col-sm-4 p-3 bg-white text-center">
                    <img class="img-fluid w-100" src="illustrations/login.svg">
                </div>                
                    <div class="col-md-5 col-xl-4 text-center text-md-start">
                        <h2 class="display-6 fw-bold mb-4">Login</h2>   
                        <?= $message ?>                     
                        <form action="../../loginProcess.php" method="POST" data-bs-theme="light">
                            <div class="mb-3"><input class="shadow form-control" type="email" id="forgotPassEmail" name="email" placeholder="Email"></div>
                            <div class="mb-3"><input class="shadow form-control" type="password" name="password" placeholder="Password"></div>
                            <div class="mb-5"><input onclick="return ValidateForgotPasswordForm();" class="Submit-Btn" type="submit" value="Login" id="PasswordResetBtn" ></div>                    
                        </form>
                        <p class="text-muted"><a href="../../fp1/fp1.html">Forgot your password?</a></p>
                    </div>               
               </div>
            </div>  
        <script src="validation.js" type="text/javascript"></script>     
    </body>
</html>


 


 


