<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
        
        <section class="py-4 py-md-5 mt-5">
            <div class="container py-md-5">
                <div class="row d-flex align-items-center">       
                <div class="col-sm-4 p-3 bg-white text-center">
                    <img class="img-fluid w-100" src="illustrations/login.svg">
                </div>                
                    <div class="col-md-5 col-xl-4 text-center text-md-start">
                        <h2 class="display-6 fw-bold mb-4">Login</h2>                        
                        <form method="post" data-bs-theme="light">
                            <div class="mb-3"><input class="shadow form-control" type="email" id="forgotPassEmail" name="email" placeholder="Email"></div>
                            <div class="mb-3"><input class="shadow form-control" type="password" name="password" placeholder="Password"></div>
                            <div class="mb-5"><input onclick="return ValidateForgotPasswordForm();" class="Submit-Btn" type="submit" value="Login" id="PasswordResetBtn" ></div>                    
                        </form>
                        <p class="text-muted"><a href="forgotten-password.html">Forgot your password?</a></p>
                    </div>               
               </div>
            </div>  
        <script src="validation.js" type="text/javascript"></script>     
    </body>
</html>


 


 


