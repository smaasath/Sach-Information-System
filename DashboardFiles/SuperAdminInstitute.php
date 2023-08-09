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

        $userID = $_COOKIE['admin'];
        ?>
        <!--  nav bar start-->
        <div class="navbardah fixed-top d-flex  align-items-center justify-content-end">

            <div id= "resimage" class="p-1 w-50 d-block d-sm-none">
                <a href="#">
                    <img src="../Images/Logo.png" alt="Home" class="img-fluid" style="width: 20%">
                </a>
            </div>

            <h6 class="p-3" href="#">
                Super Admin  
            </h6>





            <div class="col-1">
                <a class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">

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
                        <h7>Institutes</h7>
                        <h2>
                            <?php
                            // Construct and execute the query using a prepared statement
                            $queryWebinarCount = "SELECT COUNT(*) AS institutecount FROM institute";
                            $stmtWebinarCount = $conn->prepare($queryWebinarCount);

                            $stmtWebinarCount->execute();

// Fetch the result
                            $rowWebinarCount = $stmtWebinarCount->fetch(PDO::FETCH_ASSOC);

                            if ($rowWebinarCount && isset($rowWebinarCount["institutecount"])) {
                                echo $rowWebinarCount["institutecount"];
                            } else {
                                echo "ins not found count not found.";
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
                        <button type="button" class="btn btn-primary bgcol" data-bs-toggle="modal" data-bs-target="#AddIns">Add Institute</button>
                    </div>
                </div>


            </div>


            <!-- Table body -->
            <div class="container bg-white mt-0" style=" max-height: 373px; overflow: scroll;">
                <table class="table table-hover">
                    <tr class="sticky-top">

                        <th class="col-1 bgcol p-2">Id</th>
                        <th class="col-4 bgcol p-2">Institute Name</th>
                        <th class="col-3 bgcol p-2">Address</th>
                        <th class="col-2 bgcol p-2">phoneNo</th>
                        <th class="col-2 bgcol p-2"></th>
                        <th class="col-1 bgcol p-2"></th>


                    </tr>
                    <!-- Table row -->
                    <?php
                    $queryGetTable = "SELECT * FROM institute;";

// Prepare and execute the query using a prepared statement
                    $stmtGetTable = $conn->prepare($queryGetTable);
                    $stmtGetTable->execute();

                    if ($stmtGetTable) {
                        // Fetch results
                        $resultTable = $stmtGetTable->fetchAll(PDO::FETCH_ASSOC);

                        if ($resultTable) {
                            // Output data of each row

                            foreach ($resultTable as $rowtable) {
                                ?>
                                <tr>
                                    <td class="col-1"><?php echo $rowtable["instituteId"] ?></td>
                                    <td class="col-4"><?php echo $rowtable["instituteName"] ?></td>
                                    <td class="col-3"><?php echo $rowtable["Address"] ?></td>
                                    <td class="col-2"><?php echo $rowtable["phoneNo"] ?></td>

                                    <td class="col-2">
                                        <i class="fa-solid fa-user-graduate fa-xl m-2" data-bs-toggle="modal" data-bs-target="#InstituteDetail_<?php echo $rowtable["instituteId"] ?>"></i>
                                        <i class="fa-solid fa-user-pen fa-xl m-2" data-bs-toggle="modal" data-bs-target="#InsEdit_<?php echo $rowtable["instituteId"] ?>"></i>
                                        <i class="fa-solid fa-trash fa-xl m-2" style="color: #c41212;" onclick ="InsDel(<?php echo $rowtable["instituteId"] ?>)"></i>

                                    </td>






                                    <td>

                                        <!-- Institute Details Modal -->
                                        <div class="modal fade" id="InstituteDetail_<?php echo $rowtable["instituteId"] ?>" tabindex="-1" aria-labelledby="InstituteDetail_<?php echo $rowtable["instituteId"] ?>" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="InstituteDetail_<?php echo $rowtable["instituteId"] ?>">Instotute Details</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row align-items-center pb-3">
                                                            <div class="col-3">
                                                                <h6>Institute Name</h6>
                                                            </div>
                                                            <div class="col-9">
                                                                <?php echo $rowtable["instituteName"] ?>
                                                            </div>
                                                        </div>

                                                        <div class="row align-items-center pb-3">
                                                            <div class="col-3">
                                                                <h6>Address</h6>
                                                            </div>
                                                            <div class="col-9">
                                                                <?php echo $rowtable["Address"] ?>
                                                            </div>
                                                        </div>

                                                        <div class="row align-items-center pb-3">
                                                            <div class="col-3">
                                                                <h6>Phone No</h6>
                                                            </div>
                                                            <div class="col-9">
                                                                <?php echo $rowtable["phoneNo"] ?>
                                                            </div>
                                                        </div>



                                                        <div class="row align-items-center pb-3">
                                                            <div class="col-3">
                                                                <h6>Mission</h6>
                                                            </div>
                                                            <div class="col-9">
                                                                <?php echo $rowtable["mission"] ?>

                                                            </div>
                                                        </div>

                                                        <div class="row align-items-center pb-3">
                                                            <div class="col-3">
                                                                <h6>Vision</h6>
                                                            </div>
                                                            <div class="col-9">
                                                                <?php echo $rowtable["vission"] ?>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row align-items-center pb-3">
                                                            <div class="col-3">
                                                                <h6>Email</h6>
                                                            </div>
                                                            <div class="col-9">
                                                                <?php
                                                                $queryUser = "SELECT email FROM user WHERE institutetId = :institutetId";
                                                                $stmtUser = $conn->prepare($queryUser);
                                                                $stmtUser->bindParam(':institutetId', $rowtable["instituteId"], PDO::PARAM_INT);
                                                                $stmtUser->execute();

                                                                $rowUser = $stmtUser->fetch(PDO::FETCH_ASSOC);
                                                                 echo  $rowUser['email']  ?>
                                                            </div>
                                                        </div>




                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Institute Details Modal -->














                                        <!-- Edit Institute Details Modal -->
                                        <form method="POST" action="../DashboardPHP/EditIns.php" id="InsEditform_<?php echo $rowtable["instituteId"] ?>">
                                            <div class="modal fade" id="InsEdit_<?php echo $rowtable["instituteId"] ?>" tabindex="-1" aria-labelledby="InsEdit_<?php echo $rowtable["instituteId"] ?>" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="InsEdit_<?php echo $rowtable["instituteId"] ?>">Edit Institute Details</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>

                                                        <div class="modal-body">

                                                             <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Institute Name</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="text" value="<?php echo $rowtable["instituteName"] ?>" name="instituteName" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>

                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Address</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="text" value="<?php echo $rowtable["Address"] ?>"  name="Address" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>

                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Phone No</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="text" value="<?php echo $rowtable["phoneNo"] ?>" name="phoneNo" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>

                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Logo</h6>
                                    </div>
                                    <div class="col-9">

                                        <input type="file" accept="image/jpeg"  name="Logo" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        <p>only .jpg</p>

                                    </div>
                                </div>

                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Mission</h6>
                                    </div>
                                    <div class="col-9">
                                        <textarea class="form-control"  name="mission"  rows="4" required><?php echo $rowtable["mission"] ?></textarea>

                                    </div>
                                </div>

                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Vision</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="text" value="<?php echo $rowtable["vission"] ?>"  name="vission" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>
                                <hr>
                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Email</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="email" value="<?php echo $rowUser["email"] ?>" name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>

                                

                                                            <input type="hidden" name="instituteId" value="<?php echo $rowtable["instituteId"] ?>"> 

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" form="InsEditform_<?php echo $rowtable["instituteId"] ?>" class="btn btn-primary bgcolli">Save</button>
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </td>
                                </tr>



                                <!-- Edit Institute Details Modal -->




                                <?php
                            }
                        }
                    }
                    ?>

                    </tbody>
                </table>
            </div>

            <!-- Add Institute Details Modal -->

            <div class="modal fade" id="AddIns" tabindex="-1" aria-labelledby="AddIns" aria-hidden="true">
                <form method="post" action="../DashboardPHP/addIns.php" enctype="multipart/form-data" >
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="AddIns">Add Institute</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                            </div>
                            <div class="modal-body">

                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Institute Name</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="text"  name="instituteName" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>

                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Address</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="text"  name="Address" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>

                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Phone No</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="text" name="phoneNo" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>

                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Logo</h6>
                                    </div>
                                    <div class="col-9">

                                        <input type="file" accept="image/jpeg"  name="Logo" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                        <p>only .jpg</p>

                                    </div>
                                </div>

                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Mission</h6>
                                    </div>
                                    <div class="col-9">
                                        <textarea class="form-control"  name="mission"  rows="4" required></textarea>

                                    </div>
                                </div>

                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Vision</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="text"  name="vission" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>
                                <hr>
                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Email</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="email"  name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>

                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>User Name</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="text"  name="userName" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>

                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Password</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="text"  name="Password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>

                            </div>

                            <div class="modal-footer">


                                <button type="submit" class="btn btn-primary bgcolli">Add Institute</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Add Institute Modal -->
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    </body>
</html>
