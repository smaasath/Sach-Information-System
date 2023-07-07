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
        <link rel="stylesheet" href="CSS/StudentDashboard.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <title></title>
    </head>
    <body>


        <div class="navbardah fixed-top d-flex flex-row-reverse">
            <a class="p-3" href="#" style="margin-right: 30px;">
                <i class="fa-solid fa-user fa-lg" style="color: #24457f;"></i>
            </a>

            <h6 class="p-3" href="#">
                User Name
            </h6>

            <div id= "resimage" class="p-1 w-50 d-block d-sm-none">
                <a href="#">
                    <img src="Images/Logo.png" alt="Home" class="img-fluid" style="width: 20%">
                </a>
            </div>
        </div>

        <!--  nav bar end-->

        <div class="container-lg rounded-5 p-2 nameimagecontainer h-auto" style="margin-top: 85px; margin-right: 33px; margin-left: 22px;">
            <div class="row">
                <div class="col-9 col-xs-12">

                    <h2>Welcome User Name!</h2>
                    <br>
                    <h7 class="d-none d-sm-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h7>
                </div>

                <div class="col-3 align-self-end d-none d-sm-block ">
                    <img src="Images/studentdashboradhhomeimage.png" alt="studentdashboradhhomeimage" class="img-fluid w-50" >
                </div>
            </div>
        </div> 


        <br><br><br>
        <div style="font-size: 12px;">Attendance and Marks</div>
        <div class="container-fluid bg-white">
            <div class="row">
                <div class="col-lg-4 p-3">
                    <div class="row justify-content-start">
                        <div class="col-3 p-3">
                            <div class="progressbar">
                                <div class="progtext">75%</div>
                            </div>
                        </div>
                        <div class="col-8 p-4">
                            <div class="coursename">Course Name</div>
                            <div class="progress" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-info text-dark" style="width: 50%;background-color: #146c94 !important;color: white !important;">50%</div>
                            </div>
                            <div style="
                                 padding-top: 10px;
                                 text-align-last: end;
                                 ">
                                <button type="button" class="btn btn-info"  style="
                                        font-size: 10px;
                                        ">See More</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 p-3">
                    <div class="row justify-content-start">
                        <div class="col-3 p-3">
                            <div class="progressbar">
                                <div class="progtext">75%</div>
                            </div>
                        </div>
                        <div class="col-8 p-4">
                            <div class="coursename">Course Name</div>
                            <div class="progress" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-info text-dark" style="width: 50%;background-color: #146c94 !important;color: white !important;">50%</div>
                            </div>
                            <div style="
                                 padding-top: 10px;
                                 text-align-last: end;
                                 ">
                                <button type="button" class="btn btn-info"  style="
                                        font-size: 10px;
                                        ">See More</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 p-3">
                    <div class="row justify-content-start">
                        <div class="col-3 p-3">
                            <div class="progressbar">
                                <div class="progtext">75%</div>
                            </div>
                        </div>
                        <div class="col-8 p-4">
                            <div class="coursename">Course Name</div>
                            <div class="progress" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-info text-dark" style="width: 50%;background-color: #146c94 !important;color: white !important;">50%</div>
                            </div>
                            <div style="
                                 padding-top: 10px;
                                 text-align-last: end;
                                 ">
                                <button type="button" class="btn btn-info"  style="
                                        font-size: 10px;
                                        ">See More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <br>
        <?php
        // put your code here
        ?>

        <script src="JS/StudentDashboard.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    </body>
</html>
