<?php
require '../classes/DBConnector.php';

use classes\DBConnector;

$dbcon = new DBConnector();
?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Institute profile</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="../Profile/Institute/style.css">
    </head>
    <body>
        <?php
        $instituteId = $_COOKIE['Ins_Login'];
        ?>      

        <?php
        include '../DashboardPHP/connection.php';
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
                $query = "SELECT instituteName FROM institute WHERE instituteId=1";
                $result = $conn->query($query);
                if (!$result) {
                    die("Query failed: " . $conn->error);
                }

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo $row["instituteName"];
                }
                ?>   
            </h6>





            <div class="col-1">
                <a class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php
                    $imageId = 1; // Replace with the actual ID of the image you want to retrieve

                    $queryUserImage = "SELECT Logo FROM institute WHERE instituteId=1";
                    $resultUserImage = $conn->query($queryUserImage);

                    if ($resultUserImage->num_rows > 0) {
                        $row = $resultUserImage->fetch_assoc();
                        $imageData = $row["Logo"];
                        echo '<img src="data:image/jpeg;base64,' . base64_encode($imageData) . '" style="width:30%">';
                    } else {
                        echo "Image not found.";
                    }
                    ?>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1" style="">

                    <li><a class="dropdown-item" href="../index.php">Sign out</a></li>
                </ul>
            </div>

        </div>

        <!--  nav bar end-->

        <div class="container py-md-5">
            <div class="row d-flex align-items-top">       
                <div class="col-sm-3 p-3 bg-white text-center">
                    <div class="card mb-3">
                        <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4 img-fluid d-none d-sm-block" src="../Profile/Institute/institute.jpg"></div>
                    </div>
                </div>                
                <div class="col-sm-9 text-center text-md-start">
                    <div class="card shadow mb-3">
                        <div class="card-header py-3 text-center">
                            <p class="m-0 fw-bold">INSTITUTE PROFILE</p>
                        </div>
                        <?php
                        try {
                            $con = $dbcon->getConnection();
                            $query = "SELECT * FROM institute WHERE instituteId=?";
                            $pstmt1 = $con->prepare($query);
                            $pstmt1->bindValue(1, $instituteId);
                            $pstmt1->execute();
                            $rs1 = $pstmt1->fetch(PDO::FETCH_OBJ);

                            $query = "SELECT email FROM user WHERE institutetId=?";
                            $pstmt2 = $con->prepare($query);
                            $pstmt2->bindValue(1, $instituteId);
                            $pstmt2->execute();
                            $rs2 = $pstmt2->fetch(PDO::FETCH_OBJ);
                        } catch (PDOException $exc) {
                            echo $exc->getMessage();
                        }
                        ?>                            
                        <div class="card-body">                                
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="Department"><strong>Institute Name</strong></label><textarea class="form-control" type="text" placeholder="<?php echo $rs1->instituteName; ?>" readonly></textarea></div>
                                </div>                            
                            </div>
                            <div class="mb-3"></div>                                
                        </div>                                       
                        <div class="card-body">                                
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="tel"><strong>Address</strong></label></div><textarea class="form-control" type="text" placeholder="<?php echo $rs1->Address; ?>" readonly></textarea>
                                </div>
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="email"><strong>Contact Number</strong></label></div><textarea class="form-control" type="text" placeholder="<?php echo $rs1->phoneNo; ?>" readonly></textarea>
                                </div>
                            </div>                                
                        </div>
                        <div class="card-body">                                
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="Department"><strong>Vission</strong></label><textarea class="form-control" type="text" placeholder="<?php echo $rs1->vission; ?>" readonly></textarea></div>
                                </div>                            
                            </div>
                            <div class="mb-3"></div>                                
                        </div>
                        <div class="card-body">                                
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="Department"><strong>Mission</strong></label><textarea class="form-control" type="text" placeholder="<?php echo $rs1->mission; ?>" readonly></textarea></div>
                                </div>                            
                            </div>
                            <div class="mb-3"></div>                                
                        </div>
                        <div class="card-body">                                
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="Address"><strong>Logo</strong></label></div><textarea class="form-control" type="text" placeholder="<?php echo $rs1->Logo; ?>" readonly></textarea>
                                </div>
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="User"><strong>Email Address</strong></label></div><textarea class="form-control" type="text" placeholder="<?php echo $rs2->email; ?>" readonly></textarea>
                                </div>                                        
                            </div>
                            <br>

                            <a href="../DashboardFiles/InstituteAdminProfileEdit.php?id=<?php echo $instituteId; ?>">
                                <button class="Submit-Btn" type="button" >EDIT</button>
                            </a> 
                        </div>
                        </form>

                    </div>
                </div>               
            </div>
        </div>           
    </body>
</html>










