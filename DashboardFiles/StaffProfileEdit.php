<?php
require '../classes/DBConnector.php';

use classes\DBConnector;

$dbcon = new DBConnector();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Staff profile</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="../Profile/STAFF-form/style.css">
    </head>
    <body>
     <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $staffId = ($_POST['staffId']);
            $staffName = ($_POST['staffName']);
            $position = ($_POST['position']);
            $phoneNo = ($_POST['phoneNo']);
            $email = ($_POST['email']);

            try {
                $con = $dbcon->getConnection();
                $query = "UPDATE staff SET staffName=?, position=?, phoneNo=? WHERE `staff`.`staffId` = ?";

                $pstmt1 = $con->prepare($query);
                $pstmt1->bindValue(1, $staffName);
                $pstmt1->bindValue(2, $position);
                $pstmt1->bindValue(3, $phoneNo);
                $pstmt1->bindValue(4, $staffId);              
                $pstmt1->execute();

                $query = "UPDATE user SET email=? WHERE `user`.`staffId` = ?";

                $pstmt2 = $con->prepare($query);
                $pstmt2->bindValue(1, $email);
                $pstmt2->bindValue(2, $staffId);
                $pstmt2->execute();
                if (($pstmt1->rowCount() > 0) || ($pstmt2->rowCount() > 0)) {
                    header("Location: ../DashboardFiles/StaffProfile.php");
                    exit;
                }
                //If user didn't do any changes but clicked update button.
                else {
                    header("Location: ../DashboardFiles/StaffProfile.php");
                    exit;
                }
            } catch (PDOException $exc) {
                echo $exc->getMessage();
            }
        } else {

            $staffId = $_GET["id"];
            try {
                $con = $dbcon->getConnection();
                $query = "SELECT * FROM staff WHERE staffId=?";
                $pstmt1 = $con->prepare($query);
                $pstmt1->bindValue(1, $staffId);
                $pstmt1->execute();
                $rs1 = $pstmt1->fetch(PDO::FETCH_OBJ);
                $instituteId = $rs1->institudeID;  

                $query = "SELECT instituteName FROM institute WHERE instituteId=?";
                $pstmt2 = $con->prepare($query);
                $pstmt2->bindValue(1, $instituteId);
                $pstmt2->execute();
                $rs2 = $pstmt2->fetch(PDO::FETCH_OBJ);
        

                $query = "SELECT email FROM user WHERE staffId=?";
                $pstmt3 = $con->prepare($query);
                $pstmt3->bindValue(1, $staffId);
                $pstmt3->execute();
                $rs3 = $pstmt3->fetch(PDO::FETCH_OBJ);
            } catch (PDOException $exc) {
                echo $exc->getMessage();
            }
            ?> 
            <div class="container py-md-5">
                <div class="card shadow mb-3">
                    <div class="card-header py-3 text-center">
                        <p class="m-0 fw-bold ">STAFF PROFILE</p>
                    </div>            
                    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <input type="hidden" name="staffId" value="<?php echo $staffId; ?>"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">                                
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="Department"><strong>Institute Name</strong></label><input class="form-control" name="instituteName" type="text" value="<?php echo $rs2->instituteName; ?>" readonly/></div>
                                </div>                              
                            </div>
                            <div class="mb-3"></div>                                
                        </div>
                        <div class="card-body">                                
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" ><strong>Name</strong></label><input class="form-control" name="staffName" type="text" value="<?php echo $rs1->staffName; ?>"></div>
                                </div>                              
                            </div>
                            <div class="mb-3"></div>                                
                        </div>            
                        <div class="card-body">                                
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="tel"><strong>Position</strong></label></div><input class="form-control" name="position" type="text" value="<?php echo $rs1->position; ?>">
                                </div>
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="email"><strong>Contact Number</strong></label></div><input class="form-control" name="phoneNo" type="text" value="<?php echo $rs1->phoneNo; ?>">
                                </div>
                            </div>                                
                        </div>
                        <div class="card-body">                                
                            <div class="row">                             
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="User"><strong>Email Address</strong></label></div><input class="form-control" name="email" type="email" value="<?php echo $rs3->email; ?>">
                                </div>                                        
                            </div>
                            <div class="mb-3"></div>
                        </div>
                        <div class="card-body">                                
                            <div class="row">
                                <div class="col">
                                    <button class="Submit-Btn" type="submit">Update</button>
                                </div>
                                <div class="col">
                                    <a href="../DashboardFiles/StaffProfile.php">
                                        <button class="Submit-Btn" type="button" >Cancel</button>
                                    </a>
                                </div>
                            </div>
                            <div class="mb-3"></div>
                        </div>
                    </form>
                </div>
            </div>
        <?php } ?>         
            
    </body>
</html>








