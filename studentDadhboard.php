<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Student Dashboard</title>
        <link rel="stylesheet" href="CSS/StudentDashboard.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body >
        <div class="container-fluid">
            <div class="row flex-wrap flex-row-reverse">
                <div id="col2" class="col-2 sidebar colordashbord fixed-top">

                    <hr class="dashboardhr">
                    <ul class="nav nav-pills flex-column mb-auto logoutheight" >
                       <button onclick="bigtosmal()" style="background-color: transparent;
    border: none;"><i class="fa-solid fa-arrow-right-to-bracket fa-flip-horizontal fa-lg" style="color: #ffffff;"></i></button>
    
                        <a href="#">
                            <img src="Images/Logo.png" alt="Home"  class="logo">
                        </a>
                        <hr class="dashboardhr">
                        <ul class="nav nav-pills flex-column mb-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link navbarcolor"  aria-current="page">
                                    <i class="fa-solid fa-gauge fa-xl icondash"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li>

                                <a href="#" class="nav-link navbarcolor" >
                                    <i class="fa-solid fa-graduation-cap fa-xl icondash"></i>
                                    Courses
                                </a>

                            </li>
                            <li>
                                <a href="#" class="nav-link navbarcolor" >
                                    <i class="fa-solid fa-video fa-xl icondash"></i>
                                    Webinars
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link navbarcolor" >
                                    <i class="fa-solid fa-user fa-xl icondash"></i>
                                    Profile
                                </a>
                            </li>
                            <br>
                            <br>
                            <li>

                              <hr class="dashboardhr">
                                <div class="shadow p-3 mb-4 rounded Coincard ag-courses-item_link">

                                    <div class="ag-courses-item_bg">
                                        <i class="fa-solid fa-coins fa-2xl coinicon" style="color: #146c94;"></i>
                                    </div> 

                                    <div class="headcoin">
                                        Coin Value
                                    </div>
                                    <br>
                                    <div class="coinvalue">
                                        10000
                                    </div>

                                </div>

                            </li>
                        </ul>

                         <hr class="dashboardhr">
                        <div class="dropdown">
                            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-power-off fa-lg loggedicon"></i>
                                <strong class="loggedout">Log Out</strong>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1" style="">

                                <li><a class="dropdown-item" href="#">Sign out</a></li>
                            </ul>
                        </div>
                         <hr class="dashboardhr">
                </div>
              
                
                <div id="col1" class="col-1 sidebar colordashbord fixed-top">

                    <hr class="dashboardhr">
                    <ul class="nav nav-pills flex-column mb-auto logoutheight" >
                        <button onclick="smalltobig()" style="background-color: transparent;
    border: none;"><i class="fa-solid fa-arrow-right-to-bracket fa-flip-vertical fa-lg" style="color: #ffffff;"></i></button>
                        <a href="#">
                            <img src="Images/Logo.png" alt="Home" class="logoafter">
                        </a>
                        <hr class="dashboardhr">
                        <ul class="nav nav-pills flex-column mb-auto">
                            <li class="nav-item">
                              
                                    <i  href="" class="fa-solid fa-gauge fa-xl icondash nav-link navbarcolorafter"></i>
                                    
                            
                            </li>
                            <li>

                               
                                    <i  href="" class="fa-solid fa-graduation-cap fa-xl icondash nav-link navbarcolorafter"></i>
                                   
                               

                            </li>
                            <li>
                                
                                    <i  href="" class="fa-solid fa-video fa-xl icondash nav-link navbarcolorafter"></i>
                              
                            </li>
                            <li>
                                
                                    <i href="" class="fa-solid fa-user fa-xl icondash nav-link navbarcolorafter"></i>
                                   
                                
                            </li>
                            <br>
                            <br>
                            <li>

                            
                                

                            </li>
                        </ul>

                         <hr class="dashboardhr">
                        <div class="dropdown">
                            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-power-off fa-lg icondash"></i>
                              
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1" style="">

                                <li><a class="dropdown-item" href="#">Sign out</a></li>
                            </ul>
                        </div>
                          <hr class="dashboardhr">
                </div>


<div id="col10"class="col-10 content col10edit">
                <nav class="navbar navbardah">
                    <div class="container navcon" style="height:30px;">

                        <i class="fa-solid fa-user fa-2xl navuser" style="color: #146c94"></i>
                        <div class="name">User Name</div>

                    </div>
                </nav>
    
     
    
</div>
            </div>

        </div>
        <?php
        // put your code here
        ?>



        <script src="JS/StudentDashboard.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>
