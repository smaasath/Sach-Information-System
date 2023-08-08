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
                   


                    <div class="col-3 "> 
                        <button type="button" class="btn btn-primary bgcol" onclick="Addwebinar(<?php echo $userID; ?>)">Add Webinar</button>
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

                        <th class="col-1 bgcol p-2">Id</th>
                        <th class="col-3 bgcol p-2">Title</th>
                        <th class="col-2 bgcol p-2">Date</th>
                         <th class="col-2 bgcol p-2">Deadline</th>
                         <th class="col-1 bgcol p-2">Status</th>
                         <th class="col-1 bgcol p-2">Coin Value</th>
                        <th class="col-2 bgcol p-2"></th>
                        

                    </tr>
                    <!-- Table row -->
                     <?php
                    $queryGetTable = "SELECT * FROM webinar WHERE instituteId  = :userID";

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
                                ?>

                                <tr>
                                    <td class = "col-1"> <?php echo $rowtable["webinarId"] ?></td>
                                    <td class = "col-3"><?php echo $rowtable["title"] ?></td>
                                    <td class = "col-2"><?php echo $rowtable["date"] ?></td>
                                    <td class = "col-2"><?php echo $rowtable["regDeadline"] ?></td>
                                    <td class = "col-1"><?php echo $rowtable["status"] ?></td>
                                    <td class = "col-1"><?php echo $rowtable["coinValue"] ?></td>
                                    <td class = "col-2">
                                        <i class="fa-solid fa-user-graduate fa-xl m-2" onclick = "OpenStaffStaff(<?php echo $rowtable["webinarId"] ?>)"></i>
                                        
                                        <i class="fa-solid fa-user-pen fa-xl m-2" onclick = "EditStaff(<?php echo $rowtable["webinarId"] ?>)"></i>
                                        <i class="fa-solid fa-trash fa-xl m-2" style="color: #c41212;" onclick ="staffDel(<?php echo $rowtable["webinarId"] ?>)"></i>


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
                        </tbody>
                    </table>
                </div>

            <br>
            

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
                        
                    </div>
                    <div class="modal-footer">


                       
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
                        
                    </div>
                    <div class="modal-footer">

                        <button class="btn btn-primary bgcolli" data-bs-target="#StaffDetail" data-bs-toggle="modal">Back</button>
                        <button type="button" class="btn btn-secondary" onclick="closeModals()" >Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Course Details Modal -->






        <!-- Add Webinar Details Modal -->
               <form method="post" action="../DashboardPHP/AddWeninar.php" >
        <div class="modal fade" id="AddWebinar" tabindex="-1" aria-labelledby="AddWebinar" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="AddWebinar">Add Webinar</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        
                    </div>
                    <div class="modal-body">
                      

                    </div>

                    <div class="modal-footer">


                        <button type="submit" class="btn btn-primary bgcolli">Add Webinar</button>
                         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
               </form>
        <!-- Add Webinar Modal -->








        <!-- Edit Staff Details Modal -->
         <form method="post" action="../DashboardPHP/staffEdit.php" id="editform">
        <div class="modal fade" id="EditStaffDetail" tabindex="-1" aria-labelledby="EditStaffDetail" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="EditStaffDetail">Edit Staff Details</h1>
                        <button type="button" class="btn-close" onclick="closeModals()"></button>
                    </div>
                    <div class="modal-body">
                        
                    </div>


                        <div class="modal-footer">
                             <button type="submit" class="btn btn-primary bgcolli"  >Save</button>



                            <button type="button" class="btn btn-secondary" onclick="closeModals()">Cancel</button>
                        </div>
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
