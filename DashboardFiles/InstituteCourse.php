<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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

                    <li><a class="dropdown-item" href="../index.php">Sign out</a></li>
                </ul>
            </div>

        </div>

        <!--  nav bar end-->
        <br>

        <!-- add button -->
        <div class="container w-25 mt-5" >
            <div class="backcolor m-2 admincount p-2 mb-4 rounded-4 ">
                <div class="row">
                    <div class="col-1 text-center">   
                        <i  href="" class="fa-solid fa-graduation-cap fa-2xl p-5 ps-1"></i>
                    </div>
                    <div class="col-8 ps-5 d-flex justify-content-center align-items-center flex-column"> 
                        <h7>Course</h7>
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

        <!-- add button -->

        <!-- Table -->

        <div class="p-5 ">


            <div class="rounded-top-4 p-0 border border-dark-subtle" style="padding-left: 12px;padding-right: 22px;">
                <div class="row align-items-center">
                    <div class="col-4">           
                        <div class="input-group rounded p-3">
                            <input type="search" class="form-control rounded" placeholder="Search ID" aria-label="Search" aria-describedby="search-addon" >



                        </div>
                    </div>
                    <div class="col-4"> 
                        <select class="form-select"  name="degree" id="degree" aria-label="Default select example">
                            <?php
                            // Construct and execute the query using a prepared statement
                            $queryGetDegree = "SELECT degreeName, degreeId FROM degree WHERE instituteId = :userID";
                            $stmtGetDegree = $conn->prepare($queryGetDegree);
                            $stmtGetDegree->bindParam(':userID', $userID, PDO::PARAM_INT);
                            $stmtGetDegree->execute();

// Fetch results
                            $resultDegrees = $stmtGetDegree->fetchAll(PDO::FETCH_ASSOC);

                            foreach ($resultDegrees as $rowDegree) {
                                echo '<option value="' . $rowDegree["degreeId"] . '">' . $rowDegree["degreeName"] . '</option>';
                            }

// Close the statement
                            $stmtGetDegree = null;
                            ?> 


                        </select>
                    </div>


                    <div class="col-4 "> 
                        <button type="button" class="btn btn-primary bgcol" onclick="AddCourse(<?php echo $userID; ?>)">Add Course</button>
                    </div>
                </div>




            </div>
            <!-- Table body -->
            <div class="container bg-white mt-0" style=" max-height: 373px; overflow: scroll;">
                <table class="table table-hover">
                    <tr class="sticky-top">

                        <th class="col-2 bgcol p-2">ID</th>
                        <th class="col-3 bgcol p-2">Course Name</th>
                        <th class="col-1 bgcol p-2">Accedemic Year</th>
                        <th class="col-1 bgcol p-2">Credits</th>
                        <th class="col-1 bgcol p-2">Lecturer ID</th>
                        <th class="col-2 bgcol p-2">Lecturer Name</th>
                        <th class="col-2 bgcol p-2"></th>


                    </tr>
                    <!-- Table row -->
                    <?php
                    $queryGetTable = "SELECT * FROM course WHERE InstituteId10 = :userID";

// Prepare and execute the query using a prepared statement
                    $stmtGetTable = $conn->prepare($queryGetTable);
                    $stmtGetTable->bindParam(':userID', $userID, PDO::PARAM_INT);
                    $stmtGetTable->execute();

                    if ($stmtGetTable) {
                        // Fetch results
                        $resultTable = $stmtGetTable->fetchAll(PDO::FETCH_ASSOC);

                        if ($resultTable) {
                            // Output data of each row
                            foreach ($resultTable as $rowtable) {
                                $queryGetTableStaff = "SELECT * FROM staff WHERE staffId = :userID";

// Prepare and execute the query using a prepared statement
                                $stmtGetstaff = $conn->prepare($queryGetTableStaff);
                                $stmtGetstaff->bindParam(':userID', $rowtable["staffId"], PDO::PARAM_INT);
                                $stmtGetstaff->execute();
                                $row = $stmtGetstaff->fetch(PDO::FETCH_ASSOC);
                                ?>

                                <tr>
                                    <td class = "col-2"> <?php echo $rowtable["courseId"] ?></td>
                                    <td class = "col-3"><?php echo $rowtable["courseName"] ?></td>
                                    <td class = "col-1"><?php echo $rowtable["academicYear"] ?></td>
                                    <td class = "col-1"><?php echo $rowtable["credits"] ?></td>
                                    <td class = "col-1"><?php echo $rowtable["staffId"] ?></td>
                                    <td class = "col-2"><?php echo $row["staffName"] ?></td>
                                    <td class = "col-2">
                                        <i class="fa-solid fa-pen-to-square fa-xl m-2" onclick = "EditCourse(<?php echo $rowtable["courseId"] ?>)"></i>
                                        <i class="fa-solid fa-trash fa-xl m-2" style="color: #c41212;" onclick ="CoutseDel(<?php echo $rowtable["courseId"] ?>)"></i>


                                    </td>



                                </tr>

                                <!-- Table row -->
            <?php
        }
    } else {
        echo "0 results";
    }
}
?>
                </table> 

            </div>
            <br>
            <!-- Table Head -->
           
        </div>

        <!-- Table -->



        <!-- Add Course Details Modal -->
         <form method="post" action="../DashboardPHP/courseAdd.php">
        <div class="modal fade" id="AddCourse" tabindex="-1" aria-labelledby="AddCourse" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="AddCourse">Add Course</h1>
                        <button type="button" class="btn-close" onclick="closeModals()"></button>
                    </div>
                    <div class="modal-body">
                        

                    </div>

                    <div class="modal-footer">

                        <button type="submit" class="btn btn-primary bgcolli" >Add Course</button>

                        <button type="button" class="btn btn-secondary" onclick="closeModals()">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
</form>
        <!-- Add Course Details Modal -->







        <!-- Edit Student Details Modal -->
         <form method="post" action="../DashboardPHP/courseEdit.php">
        <div class="modal fade" id="EditCourseDetail" tabindex="-1" aria-labelledby="EditCourseDetail" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="EditCourseDetail">Edit Course Details</h1>
                        <button type="button" class="btn-close" onclick="closeModals()"></button>
                    </div>
                    <div class="modal-body">



                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary bgcolli" >Save</button>



                        <button type="button" class="btn btn-secondary" onclick="closeModals()">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
         </form>
        <!-- Edit Student Details Modal -->





<?php
// put your code here
?>




        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    </body>
</html>
