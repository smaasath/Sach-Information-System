<?php
session_start();
$reset_email = $_SESSION["reset_email"];

require_once '../classes/DBConnector.php';
require_once '../classes/User.php';

use classes\DBConnector;
use classes\User;


$message = null;
if(isset($_GET["status"])){
    $status = $_GET["status"];
    if($status == 1){
        $message = "<h6 class='text-success'>Enter your new password</h6>";
    }
}
if($_SERVER["REQUEST_METHOD"] === "POST" ){
    if(isset($_POST["new_password"],$_POST["confirm_password"])){
        
        if(empty($_POST["new_password"]) || empty($_POST["confirm_password"])){
            $message = "<h6 class='text-danger'>Please fill both fields to proceed.</h6>";        
        }
        else{
            $new_password = trim($_POST["new_password"]);
            $confirm_password = trim($_POST["confirm_password"]);
           if($new_password === $confirm_password){
                
                $hashed_newPassword = password_hash($new_password,PASSWORD_BCRYPT);
                
                $user = new User(null,$hashed_newPassword,$reset_email);
                
                if($user->updatePassword(DBConnector::getConnection())){
                    $message = "<h6 class='text-success'>You have successfully updated your password.</h6>";     
                }else{
                    $message = "<h6 class='text-danger'>Failed to update password. Please try again later.</h6>"; 
                
            }
           }else{
            $message = "<h6 class='text-danger'>Passwords do not match..</h6>";              
           }
        }
           
    }else{
        $message = "<h6 class='text-danger'>Required values were not submitted.</h6>";
    }

}
 

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Forgotten Password</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="style.css">
         <link rel="stylesheet" href="../CSS/index.css">
    </head>
    <body>
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white m-0">
                        <a class="navbar-brand" href="#">
                            <img src="../Images/Logo.png" width="70" height="70" alt="logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="../index.php" style="color:rgb(20, 108, 148)">Home<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item" >
                                    <a class="nav-link" href="../about us page\about us.html" style="color:rgb(20, 108, 148)">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../WebinarHome.php" style="color:rgb(20, 108, 148)">Webinar</a>
                                </li>
                                <form class="form-inline my-2 my-lg-0"  action="../LOGIN/Login.php" method="get">
                                    <button class="btn btn my-2 my-sm-0" type="submit" style="color:white;background-color: rgb(20, 108, 148);">Log In</button>
                                </form> 
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        
        
        <section class="py-4 py-md-5 mt-5">
            <div class="container py-md-5">
                <div class="row d-flex align-items-center">       
                <div class="col-sm-4 p-3 bg-white text-center">
                    <img class="img-fluid w-100" src="illustrations/desk.svg">
                </div>                
                    <div class="col-md-5 col-xl-4 text-center text-md-start">
                        <h2 class="display-6 fw-bold mb-4">Forgot your password?</h2>
                        <?= $message ?>
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" data-bs-theme="light">
						    <div class="mb-3"><p class="text-muted">New password</p><input name="new_password" id="NewPassword" class="shadow form-control" type="password" placeholder="New Password"><br>
                            <p class="text-muted">Confirm new password</p><input name="confirm_password" id="ConfirmNewPassword" class="shadow form-control" type="password" placeholder="Confirm Password"></div>    
                            <div class="mb-5"><input onclick="return ValidateResetPasswordForm();" class="Submit-Btn" type="submit" value="FINISH" id="PasswordChangeBtn" ></div>                    
                        </form>
                    </div>               
               </div>
            </div>  
        <script src="validation.js" type="text/javascript"></script>     
    </body>
</html>


 


 


