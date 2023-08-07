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

        <!-- add button -->

        <!-- Table -->

        <div class="p-5 ">


            <div class="rounded-top-4 p-0 border border-dark-subtle" style="padding-left: 12px;padding-right: 22px;">
                <div class="row align-items-center">
                    <div class="col-3">           
                        <div class="input-group rounded p-3">
                            <input type="search" class="form-control rounded" placeholder="Search ID" aria-label="Search" aria-describedby="search-addon" >



                        </div>
                    </div>
                    <div class="col-3"> 
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



                    <div class="col-3 "> 
                        <button type="button" class="btn btn-primary bgcol" onclick="AddStaff(<?php echo $userID; ?>)">Add Staff</button>
                    </div>
                </div>



                <!-- Table Head -->
                <table class="table mb-0">





                </table>
                <!-- Table Head -->
            </div>
            <!-- Table body -->
            <div class="container bg-white mt-0" style=" max-height: 373px; overflow: scroll;">
                <table class="table table-hover">
                    <tr class="sticky-top">

                        <th class="col-1 bgcol p-2">ID</th>
                        <th class="col-3 bgcol p-2">Name</th>
                        <th class="col-2 bgcol p-2">Email</th>
                        <th class="col-2 bgcol p-2">Position</th>
                        <th class="col-2 bgcol p-2">Phone</th>
                        <th class="col-1 bgcol p-2">View</th>
                        <th class="col-1 bgcol p-2">Edit</th>

                    </tr>
                    <!-- Table row -->
                    <tr>
                        <td class="col-1">0001</td>
                        <td class="col-3">Mohamed Aasath</td>
                        <td class="col-2">aasadh200@gmail.com</td>
                        <td class="col-2">Lecturer</td>
                        <td class="col-2">0755701765</td>
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="OpenStaffStaff()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary" onclick="EditStaff()">Edit</button></td>
                    </tr>

                   

                    <!-- Table row -->

                </table> 

            </div>
            <br>
            <!-- Table Head -->
            <div class="text-end" >
                <button type="button" class="btn btn-success">Save</button>
            </div>
        </div>

        <!-- Table -->




        <!-- Staff Details Modal -->
        <div class="modal fade" id="StaffDetail" tabindex="-1" aria-labelledby="StaffDetail" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="StaffDetail">Staff Details</h1>
                        <button type="button" class="btn-close" onclick="closeModals()"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-4">
                                    <h6>Department</h6>
                                </div>
                                <div class="col-8">
                                    <p>Computer Science And Informatics</p>
                                </div>
                            </div> 


                            <div class="row">
                                <div class="col-4">
                                    <h6>Name</h6>
                                </div>
                                <div class="col-8">
                                    <p>Mohamed Aasath</p>
                                </div>
                            </div> 



                            <div class="row">
                                <div class="col-4">
                                    <h6>Position</h6>
                                </div>
                                <div class="col-8">
                                    <p>Lecturer</p>
                                </div>
                            </div> 



                            <div class="row">
                                <div class="col-4">
                                    <h6>Contact</h6>
                                </div>
                                <div class="col-8">
                                    <p>0755701765</p>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-4">
                                    <h6>Email</h6>
                                </div>
                                <div class="col-8">
                                    <p>aasadh2000@gmail.com</p>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-4">
                                    <h6>Qualification</h6>
                                </div>
                                <div class="col-8">
                                    <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs</p>
                                </div>
                            </div> 






                        </div>
                    </div>
                    <div class="modal-footer">


                        <button type="button" class="btn btn-primary bgcolli" onclick="openstaffCourseDetail()">Course Details</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Staff Details Modal -->







        <!-- Course Details Modal -->
        <div class="modal fade" id="StaffCourseDetail" tabindex="-1" role="dialog" aria-labelledby="StaffCourseDetail" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="StaffCourseDetail">Course Detail</h1>
                        <button type="button" class="btn-close" onclick="closeModals()"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <table class="table mb-0 table-hover">


                                <tr>

                                    <th class="col-3">ID</th>
                                    <th class="col-6">Course Name</th>



                                </tr>

                                <tr>

                                    <td class="col-3">001</td>
                                    <td class="col-6">Web Application</td>



                                </tr>

                                <tr>

                                    <td class="col-3">001</td>
                                    <td class="col-6">Web Application</td>



                                </tr>

                                <tr>

                                    <td class="col-3">001</td>
                                    <td class="col-6">Web Application</td>



                                </tr>

                                <tr>

                                    <td class="col-3">001</td>
                                    <td class="col-6">Web Application</td>



                                </tr>

                                <tr>

                                    <td class="col-3">001</td>
                                    <td class="col-6">Web Application</td>



                                </tr>





                            </table>








                        </div>
                    </div>
                    <div class="modal-footer">

                        <button class="btn btn-primary bgcolli" data-bs-target="#StaffDetail" data-bs-toggle="modal">Back</button>
                        <button type="button" class="btn btn-secondary" onclick="closeModals()" >Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Course Details Modal -->






        <!-- Add Staff Details Modal -->
        <div class="modal fade" id="AddStaffDetail" tabindex="-1" aria-labelledby="AddStaffDetail" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="AddStaffDetail">Add Staff Details</h1>
                        <button type="button" class="btn-close" onclick="closeModals()"></button>
                    </div>
                    <div class="modal-body">
                      

                    </div>

                    <div class="modal-footer">


                        <button type="button" class="btn btn-primary bgcolli" id="AddStaff" onclick="savestudent()" >Save Student</button>
                        <button type="button" class="btn btn-secondary" onclick="closeModals()">Cancel</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Staff Details Modal -->








        <!-- Edit Staff Details Modal -->
        <div class="modal fade" id="EditStaffDetail" tabindex="-1" aria-labelledby="EditStaffDetail" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="EditStaffDetail">Edit Staff Details</h1>
                        <button type="button" class="btn-close" onclick="closeModals()"></button>
                    </div>
                    <div class="modal-body">


                        <div class="modal-body">



                            <div class="row align-items-center pb-3">
                                <div class="col-3">
                                    <h6>Name</h6>
                                </div>
                                <div class="col-9">
                                    <input type="text" value="Aasath" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>






                            <div class="row align-items-center pb-3">
                                <div class="col-3">
                                    <h6>Contact No</h6>
                                </div>
                                <div class="col-9">
                                    <input type="text" value="0755701765" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>

                            <div class="row align-items-center pb-3">
                                <div class="col-3">
                                    <h6>Email</h6>
                                </div>
                                <div class="col-9">
                                    <input type="email" value="aasadh200@gmail.com" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>

                            <div class="row align-items-center pb-3">
                                <div class="col-3">
                                    <h6>Position</h6>
                                </div>
                                <div class="col-9">
                                    <input type="text" value="Lecturer" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>

                            <div class="row align-items-center pb-3">
                                <div class="col-3">
                                    <h6>Qualification</h6>
                                </div>
                                <div class="col-9">
                                    <input type="text" value="Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>


                            <hr>
                            <div class="row align-items-center pb-3">
                                <div class="col-3">
                                    <h6>User Name</h6>
                                </div>
                                <div class="col-9">
                                    <input type="text" value="sm_aasath" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>

                            <div class="row align-items-center pb-3">
                                <div class="col-3">
                                    <h6>Password</h6>
                                </div>
                                <div class="col-9">
                                    <input type="Password" value="aasath" id="mypass" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    <input type="checkbox" onclick="showpassword()">Show Password
                                </div>
                            </div>








                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary bgcolli" id="EditStudent" onclick="savestudent()" >Save</button>



                            <button type="button" class="btn btn-secondary" onclick="closeModals()">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Edit Student Details Modal -->





        <?php
        // put your code here
        ?>




        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    </body>
</html>
