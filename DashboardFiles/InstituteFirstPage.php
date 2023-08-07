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


        <?php
        include '../DashboardPHP/connection.php';
        
        $userID = $_COOKIE['Ins_Login'];
        ?>
        <!--  nav bar start-->
        <div class="navbardah fixed-top d-flex  align-items-center justify-content-end">

            <div id= "resimage" class="p-1 w-50 d-block d-sm-none">
                <a href="#">
                    <img src="../Images/Logo.png" alt="Home" class="img-fluid" style="width: 20%">
                </a>
            </div>

            <h6 class="p-3" href="#">
                <?php
                $query = "SELECT instituteName FROM institute WHERE instituteId = :userID";
                $stmtInsName = $conn->prepare($query);
                $stmtInsName->bindParam(':userID', $userID, PDO::PARAM_INT);
                $stmtInsName->execute();

// Fetch the result
                $rowName = $stmtInsName->fetch(PDO::FETCH_ASSOC);

                if ($rowName) {
                    echo $rowName["instituteName"];
                }

// Close the statement
                $stmtInsName = null;

// Close the PDO connection
                ?>   
            </h6>





            <div class="col-1">
                <a class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php
// Construct and execute the query using a prepared statement
                    $queryUserImage = "SELECT Logo FROM institute WHERE instituteId = :userID";
                    $stmtUserImage = $conn->prepare($queryUserImage);
                    $stmtUserImage->bindParam(':userID', $userID, PDO::PARAM_INT);
                    $stmtUserImage->execute();

// Fetch the result
                    $rowUserImage = $stmtUserImage->fetch(PDO::FETCH_ASSOC);

                    if ($rowUserImage && isset($rowUserImage["Logo"])) {
                        $imageData = $rowUserImage["Logo"];
                        echo '<img src="data:image/jpeg;base64,' . base64_encode($imageData) . '" style="width:30%">';
                    } else {
                        echo "Image not found.";
                    }

// Close the statement
                    $stmtUserImage = null;

// Close the PDO connection
                    ?>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1" style="">

                    <li><a class="dropdown-item" onclick="logout('Ins_Login')">Sign out</a></li>
                </ul>
            </div>

        </div>

        <!--  nav bar end-->

        <div class="container-lg rounded-5 p-2 nameimagecontainer h-auto" style="margin-top: 85px; margin-right: 33px; margin-left: 22px;">
            <div class="row">
                <div class="col-9 col-xs-12">

                    <h2> 

                        <?php
// Construct and execute the query using a prepared statement
                        $queryVission = "SELECT vission FROM institute WHERE instituteId = :userID";
                        $stmtVission = $conn->prepare($queryVission);
                        $stmtVission->bindParam(':userID', $userID, PDO::PARAM_INT);
                        $stmtVission->execute();

// Fetch the result
                        $rowVission = $stmtVission->fetch(PDO::FETCH_ASSOC);

                        if ($rowVission && isset($rowVission["vission"])) {
                            echo $rowVission["vission"];
                        } else {
                            echo "Vission not found.";
                        }

// Close the statement
                        $stmtVission = null;
                        ?>  
                    </h2>
                    <br>
                    <h7 class="d-none d-sm-block">
                        <?php
                        $queryMission = "SELECT mission FROM institute WHERE instituteId = :userID";
                        $stmtMission = $conn->prepare($queryMission);
                        $stmtMission->bindParam(':userID', $userID, PDO::PARAM_INT);
                        $stmtMission->execute();

// Fetch the result
                        $rowMission = $stmtMission->fetch(PDO::FETCH_ASSOC);

                        if ($rowMission && isset($rowMission["mission"])) {
                            echo $rowMission["mission"];
                        } else {
                            echo "Mission not found.";
                        }

// Close the statement
                        $stmtMission = null;
                        ?> 
                    </h7>
                </div>

                <div class="col-3 d-none d-sm-block" style="text-align-last: center;">
                    <?php
                    echo '<img src="data:image/jpeg;base64,' . base64_encode($imageData) . '" class="image-fluid w-50">';
                    ?>
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
                                        <h2>  
                                            <?php
// Construct and execute the query using a prepared statement
                                            $queryStudentCount = "SELECT COUNT(*) AS studentCount FROM student WHERE instituteId = :userID";
                                            $stmtStudentCount = $conn->prepare($queryStudentCount);
                                            $stmtStudentCount->bindParam(':userID', $userID, PDO::PARAM_INT);
                                            $stmtStudentCount->execute();

// Fetch the result
                                            $rowStudentCount = $stmtStudentCount->fetch(PDO::FETCH_ASSOC);

                                            if ($rowStudentCount && isset($rowStudentCount["studentCount"])) {
                                                echo $rowStudentCount["studentCount"];
                                            } else {
                                                echo "Student count not found.";
                                            }

// Close the statement
                                            $stmtStudentCount = null;
                                            ?>
                                        </h2>
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
                                        <h2>
                                            <?php
                                            // Construct and execute the query using a prepared statement
                                            $queryStaffCount = "SELECT COUNT(*) AS staffCount FROM staff WHERE institudeID = :userID";
                                            $stmtStaffCount = $conn->prepare($queryStaffCount);
                                            $stmtStaffCount->bindParam(':userID', $userID, PDO::PARAM_INT);
                                            $stmtStaffCount->execute();

// Fetch the result
                                            $rowStaffCount = $stmtStaffCount->fetch(PDO::FETCH_ASSOC);

                                            if ($rowStaffCount && isset($rowStaffCount["staffCount"])) {
                                                echo $rowStaffCount["staffCount"];
                                            } else {
                                                echo "Staff count not found.";
                                            }

// Close the statement
                                            $stmtStaffCount = null;
                                            ?>
                                        </h2>
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
                                        <h2>
                                            <?php
                                            // Construct and execute the query using a prepared statement
                                            $queryCourseCount = "SELECT COUNT(*) AS courseCount FROM course WHERE InstituteId10 = :userID";
                                            $stmtCourseCount = $conn->prepare($queryCourseCount);
                                            $stmtCourseCount->bindParam(':userID', $userID, PDO::PARAM_INT);
                                            $stmtCourseCount->execute();

// Fetch the result
                                            $rowCourseCount = $stmtCourseCount->fetch(PDO::FETCH_ASSOC);

                                            if ($rowCourseCount && isset($rowCourseCount["courseCount"])) {
                                                echo $rowCourseCount["courseCount"];
                                            } else {
                                                echo "Course count not found.";
                                            }

// Close the statement
                                            $stmtCourseCount = null;
                                            ?>
                                        </h2>
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
                                        <h2>
                                            <?php
                                            // Construct and execute the query using a prepared statement
                                            $queryWebinarCount = "SELECT COUNT(*) AS webinarCount FROM webinar WHERE instituteId = :userID";
                                            $stmtWebinarCount = $conn->prepare($queryWebinarCount);
                                            $stmtWebinarCount->bindParam(':userID', $userID, PDO::PARAM_INT);
                                            $stmtWebinarCount->execute();

// Fetch the result
                                            $rowWebinarCount = $stmtWebinarCount->fetch(PDO::FETCH_ASSOC);

                                            if ($rowWebinarCount && isset($rowWebinarCount["webinarCount"])) {
                                                echo $rowWebinarCount["webinarCount"];
                                            } else {
                                                echo "Webinar count not found.";
                                            }

// Close the statement
                                            $stmtWebinarCount = null;
                                            ?>
                                        </h2>
                                    </div>
                                </div> 
                            </div>
                        </div>

                        <div class="col-md-4 ">
                            <div class=" backcolor m-2 p-2 mb-4 rounded-4 admincount ">
                                <div class="row">
                                    <div class="col-1 text-center">   
                                        <i  href="" class="fa-solid fa-graduation-cap fa-2xl p-5 ps-1"></i>
                                    </div>
                                    <div class="col-8 ps-5 d-flex justify-content-center align-items-center flex-column"> 
                                        <h7>Degree</h7>
                                        <h2>
                                            <?php
                                            // Construct and execute the query using a prepared statement
                                            $queryDegreeCount = "SELECT COUNT(*) AS degreeCount FROM degree WHERE instituteId = :userID";
                                            $stmtDegreeCount = $conn->prepare($queryDegreeCount);
                                            $stmtDegreeCount->bindParam(':userID', $userID, PDO::PARAM_INT);
                                            $stmtDegreeCount->execute();

// Fetch the result
                                            $rowDegreeCount = $stmtDegreeCount->fetch(PDO::FETCH_ASSOC);

                                            if ($rowDegreeCount && isset($rowDegreeCount["degreeCount"])) {
                                                echo $rowDegreeCount["degreeCount"];
                                            } else {
                                                echo "Degree count not found.";
                                            }

// Close the statement
                                            $stmtDegreeCount = null;
                                            ?>
                                        </h2>
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
