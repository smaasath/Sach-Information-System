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
                        <i  href="" class="a-sharp fa-solid fa-building-columns fa-2xl p-5 ps-1"></i>
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
                        <button type="button" class="btn btn-primary bgcol" data-bs-toggle="modal" data-bs-target="#AddDegree">Add Degree</button>
                    </div>
                </div>


            </div>


            <!-- Table body -->
            <div class="container bg-white mt-0" style=" max-height: 373px; overflow: scroll;">
                <table class="table table-hover">
                    <tr class="sticky-top">

                        <th class="col-3 bgcol p-2">Id</th>
                        <th class="col-6 bgcol p-2">Degree Name</th>

                        <th class="col-2 bgcol p-2"></th>
                        <th class="col-1 bgcol p-2"></th>


                    </tr>
                    <!-- Table row -->
                    <?php
                    $queryGetTable = "SELECT * FROM degree WHERE instituteId  = :userID";

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
                                    <td class="col-3"><?php echo $rowtable["degreeId"] ?></td>
                                    <td class="col-6"><?php echo $rowtable["degreeName"] ?></td>

                                    <td class="col-2">

                                        <i class="fa-solid fa-pen-to-square fa-xl m-2" data-bs-toggle="modal" data-bs-target="#EditDegree_<?php echo $rowtable["degreeId"] ?>"></i>
                                        <i class="fa-solid fa-trash fa-xl m-2" style="color: #c41212;" onclick ="DegDel(<?php echo $rowtable["degreeId"] ?>)"></i>

                                    </td>






                                    <td>

                                      







                                        <!-- Edit Staff Details Modal -->
                                        <form method="POST" action="../DashboardPHP/EditDegree.php" id="EditDegreeForm_<?php echo $rowtable["degreeId"]?>">
                                            <div class="modal fade" id="EditDegree_<?php echo $rowtable["degreeId"]?>" tabindex="-1" aria-labelledby="EditDegree_<?php echo $rowtable["degreeId"]?>" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="EditDegree_<?php echo $rowtable["degreeId"]?>">Edit Degree</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>

                                                        <div class="modal-body">

                                                            <div class="row align-items-center pb-3">
                                                                <div class="col-4">
                                                                    <h6>Degree Name</h6>
                                                                </div>
                                                                <div class="col-8">
                                                                    <input type="text" value="<?php echo $rowtable["degreeName"] ?>"  name="degreeName" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                                                </div>
                                                            </div>

                                                           
                                                            <input type="hidden" name="degreeId" value="<?php echo $rowtable["degreeId"] ?>"> 

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" form="EditDegreeForm_<?php echo $rowtable["degreeId"]?>" class="btn btn-primary bgcolli">Save</button>
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </td>
                                </tr>



                                <!-- Edit Webinar Details Modal -->




                                <?php
                            }
                        }
                    }
                    ?>

                    </tbody>
                </table>
            </div>

            <!-- Add Webinar Details Modal -->
            <form method="post" action="../DashboardPHP/AddDegree.php" >
                <div class="modal fade" id="AddDegree" tabindex="-1" aria-labelledby="AddDegree" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="AddDegree">Add Degree</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                            </div>
                            <div class="modal-body">

                                <div class="row align-items-center pb-3">
                                    <div class="col-4">
                                        <h6> Degree Name</h6>
                                    </div>
                                    <div class="col-8">
                                        <input type="text"  name="degreeName" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>
                                <input type="hidden" name="Instituteid" value=' <?php echo $userID; ?> '>     
                            </div>

                            <div class="modal-footer">


                                <button type="submit" class="btn btn-primary bgcolli">Add Degree</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Add Webinar Modal -->
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    </body>
</html>
