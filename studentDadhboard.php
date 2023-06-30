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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body >
        <div class="container-fluid">
            <div class="row">
                <div id="col2" class="col-2 sidebar colordashbord fixed-top">

                    <hr class="dashboardhr">
                    <ul class="nav nav-pills flex-column mb-auto logoutheight" >
                        <li class="nav-item">
                            <a href="#">
                                <img src="Images/Logo.png" alt="Home" class="logo" id="logo" >
                            </a>
                            <hr class="dashboardhr">


                            <a href="#" class="nav-link navbarcolor"   aria-current="page" id="navbarcolor">
                                <i class="fa-solid fa-gauge fa-xl icondash"></i>
                                <div class="dash" id="dash"> Dashboard</div>
                            </a>
                        </li>
                        <li>

                            <a href="#" class="nav-link navbarcolor"  id="navbarcolor1">
                                <i class="fa-solid fa-graduation-cap fa-xl icondash"></i>
                                <div class="dash" id="dash1"> Courses</div>
                            </a>

                        </li>
                        <li>
                            <a href="#" class="nav-link navbarcolor" id="navbarcolor2">
                                <i class="fa-solid fa-video fa-xl icondash"></i>
                                <div class="dash" id="dash2">  Webinars</div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link navbarcolor" id="navbarcolor3">
                                <i class="fa-solid fa-user fa-xl icondash"></i>
                                <div class="dash" id="dash3">  Profile</div>
                            </a>
                        </li>
                        <br>
                        <br>
                        <li>

                            <hr class="hr2" id="hr2">
                            <div class="shadow p-3 mb-5 rounded Coincard ag-courses-item_link" id="Coincard">

                                <div class="ag-courses-item_bg">
                                    <i class="fa-solid fa-coins fa-2xl coinicon" style="color: #146c94;"></i>
                                </div> 

                                <div class="headcoin">
                                    <div class="dash">  Coin Value
                                    </div>
                                    <br>
                                    <div class="coinvalue">
                                        10000
                                    </div>

                                </div>

                        </li>
                    </ul>

                    <hr>
                    <div class="dropdown">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-power-off fa-lg loggedicon" style="margin-left: 13px;"></i>
                            <strong class="loggedout" id="loggedout">Log Out</strong>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1" style="">

                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </div>
                <div id="col10"class="col-10 content">
                    <nav class="navbar navbardah flex-column fixed-top ">
                        <div class="container navcon" style="height:30px;">



                            <i class="fa-solid fa-user fa-2xl navuser" style="color: #001C30"></i>
                            <div class="name">User Name</div>

                            <button class="navbar-toggler icon" type="button" data-toggle="collapse" data-target="#sidebarCollapse" id="clickingbutton" style="
                                    margin-left: -18px;
                                    ">
                                <span class="navbar-toggler-icon"></span>
                            </button>


                        </div>
                    </nav>

                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>

                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>

                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>

                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>



        <?php
        // put your code here
        ?>


        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script src="JS/StudentDashboard.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>
