
<?php
session_start();

if (isset($_COOKIE['admin'])) {
    ?>

    <!DOCTYPE html>
    <!--
    Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
    Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
    -->
    <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=10">
            <title>Super Admin Dashboard</title>
            <link rel="stylesheet" href="../CSS/StudentDashboard.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">

            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        </head>
        <body >
            <div class="container-fluid">
                <div class="row flex-wrap flex-row-reverse">
                    <!-- large Side bar start-->

                    <div id="col2" class="col-2 colordashbord fixed-top">

                        <hr class="dashboardhr">
                        <ul class="nav nav-pills flex-column mb-auto logoutheight" >
                            <button onclick="bigtosmal()" style="background-color: transparent;
                                    border: none;"><i class="fa-solid fa-arrow-right-to-bracket fa-flip-horizontal fa-lg" style="color: #ffffff;"></i></button>

                            <a href="#">
                                <img src="../Images/Logo.png" alt="Home"  class="logo">
                            </a>
                            <hr class="dashboardhr">
                            <ul class="nav nav-pills flex-column mb-auto">
                                <li class="nav-item">
                                    <a href="#"  onclick="SuperIns()" class="nav-link navbarcolor"  aria-current="page">
                                        <i class="fa-sharp fa-solid fa-building-columns fa-xl icondash"></i>
                                        Institutes
                                    </a>
                                </li>





                                <li>

                                    <a href="#" onclick="SuperProfile()" class="nav-link navbarcolor" >

                                        <i class="fa-solid fa-user fa-xl icondash"></i>
                                        Profile
                                    </a>
                                </li>
                                <br>
                                <br>

                            </ul>

                            <hr class="dashboardhr">
                            <div style="margin-left: -9px;">
                                    
                                   <div class="navbarcolor" onclick="logout('admin')">       

                                <i class="fa-solid fa-power-off fa-lg icondash navbarcolor" > </i>
                                      
                         logout</div>

                                        

                                
                                    </div>
                            <hr class="dashboardhr">
                            </div>

                            <!--  large Side bar end-->

                            <!--  small Side bar start-->
                            <div id="col1" class="col-1 flex-column colordashbord fixed-top">

                                <hr class="dashboardhr">

                                <div class="p-2">
                                    <button onclick="smalltobig()" id="smalltobig" style="background-color: transparent;
                                            border: none;"><i class="fa-solid fa-arrow-right-to-bracket fa-flip-vertical fa-lg" style="color: #ffffff;"></i></button>
                                </div>
                                <div class="p-2">
                                    <a href="#">
                                        <img src="../Images/Logo.png" alt="Home" class="img-fluid">
                                    </a>
                                </div>
                                <hr class="dashboardhr">
                                <div style="margin-left: -9px;">
                                    <i  href="" onclick="SuperIns()" class="fa-solid fa-gauge fa-xl icondash nav-link navbarcolorafter"></i>
                                </div>







                                <div style="margin-left: -9px;">

                                    <i href="" onclick="SuperProfile()" class="fa-solid fa-user fa-xl icondash nav-link navbarcolorafter"></i>

                                </div>
                                <br><br>


                                <hr class="dashboardhr">
                                   <div style="margin-left: -9px;">
                                    
                                           
  
                                   <div class="navbarcolor" onclick="logout('admin')">       

                                <i class="fa-solid fa-power-off fa-lg icondash navbarcolor" > </i>
                                      
                         logout</div>


                                        

                                
                                    </div>
                             
                                <hr class="dashboardhr">

                            </div>

                            <!--  small Side bar End-->



                            <!--  body-->
                            <div id="col10"class="col-10 col10edit">

    <?php include '../DashboardFiles/SuperAdminInstitute.php'; ?>

                            </div>

                    </div>

                </div>







    <?php
} else {
    $ins_ID = $_SESSION["admin"];
    $expiration = time() + (30 * 24 * 60 * 60);
    setcookie("admin", $ins_ID, $expiration, "/");
    header("Location: " . $_SERVER['REQUEST_URI']);
}
?>   


            <script>
                function logout(cookieName) {
                    // Delete the cookie by setting its expiration time to a past date
                    document.cookie = cookieName + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";

                    // Redirect to the logout script or another page
                    window.location.href = "../lOGIN/Login.php";
                }
            </script>
            <script src="../JS/AdminDashboard.js"></script>
            <script src="../JS/StudentDashboard.js"></script>
            <script src="../JS/SuperAdminDashboard.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>
