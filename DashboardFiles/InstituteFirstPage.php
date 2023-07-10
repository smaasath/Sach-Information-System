<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Student Dashboard</title>
        <link rel="stylesheet" href="../CSS/StudentDashboard.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <title></title>
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

        <div class="container-lg rounded-5 p-2 nameimagecontainer h-auto" style="margin-top: 85px; margin-right: 33px; margin-left: 22px;">
            <div class="row">
                <div class="col-9 col-xs-12">

                    <h2>Mission!</h2>
                    <br>
                    <h7 class="d-none d-sm-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h7>
                </div>

                <div class="col-3 align-middle d-none d-sm-block ">
                    <img src="../Images/logo_uwu.png" alt="studentdashboradhhomeimage" class="img-fluid w-50" >
                </div>
            </div>
        </div> 
        <br><br><br>
        <h7>Counts</h7>
        <div class="container bg-white shadow-sm p-3 mb-5 bg-body-tertiary rounded ">
            <div class="row">
                <div class="col-md-8">
                    <div class="container-lg">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="backcolor m-2 admincount p-2 mb-4 rounded-4 ">
                                    <div class="row">
                                        <div class="col-1 text-center">   
                                            <i  href="" class="fa-solid fa-users fa-2xl p-5 ps-1"></i>
                                        </div>
                                        <div class="col-8 ps-5 d-flex justify-content-center align-items-center flex-column"> 
                                            <h7>Students</h7>
                                            <h2>1234</h2>
                                        </div>
                                    </div> 
                                </div> 
                            </div>
                            <div class="col-md-4">
                                <div class="backcolor  m-2 p-2 mb-4 rounded-4 admincount ">
                                    <div class="row">
                                        <div class="col-1 text-center">   
                                            <i  href="" class="fa-solid fa-user-tie fa-2xl p-5 ps-1"></i>
                                        </div>
                                        <div class="col-8 ps-5 d-flex justify-content-center align-items-center flex-column"> 
                                            <h7>Staffs</h7>
                                            <h2>1234</h2>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="backcolor p-2 m-2 mb-4 rounded-4 admincount ">
                                    <div class="row">
                                        <div class="col-1 text-center">   
                                            <i  href="" class="fa-solid fa-graduation-cap fa-2xl p-5 ps-1"></i>
                                        </div>
                                        <div class="col-8 ps-5 d-flex justify-content-center align-items-center flex-column"> 
                                            <h7>Courses</h7>
                                            <h2>1234</h2>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class=" backcolor m-2 p-2 mb-4 rounded-4 admincount ">
                                    <div class="row">
                                        <div class="col-1 text-center">   
                                            <i  href="" class="fa-solid fa-video fa-2xl p-5 ps-1"></i>
                                        </div>
                                        <div class="col-8 ps-5 d-flex justify-content-center align-items-center flex-column"> 
                                            <h7>Webinars</h7>
                                            <h2>1234</h2>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="backcolor p-2 m-2 mb-4 rounded-4 align-items-center admincount ">
                                    <div class="row">
                                        <div class="col-1 text-center">   
                                            <i  href="" class="fa-sharp fa-solid fa-building-columns fa-2xl p-5 ps-1"></i>
                                        </div>
                                        <div class="col-8 ps-5 d-flex justify-content-center align-items-center flex-column"> 
                                            <h7>Departments</h7>
                                            <h2>1234</h2>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div> 



                    </div>
                </div>


                <div class="col-4 d-flex justify-content-center  align-items-center">
                    <img src="../Images/uni.png" alt="studentdashboradhhomeimage" class="img-fluid" >
                </div>
            </div>   
        </div>

        <?php
        // put your code here
        ?>
 <script src="../JS/AdminDashboard.js"></script>
        <script src="../JS/StudentDashboard.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    </body>
</html>
