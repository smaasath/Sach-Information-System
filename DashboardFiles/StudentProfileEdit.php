<?php
require '../classes/DBConnector.php';

use classes\DBConnector;

$dbcon = new DBConnector();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Student profile</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="../Profile/student-form/style.css">
    </head>
    <body>
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $studentID = ($_POST['studentID']);
            $studentName = ($_POST['studentName']);
            $entrollmentNumber = ($_POST['entrollmentNumber']);
            $studentDOB = ($_POST['studentDOB']);
            $gender = ($_POST['gender']);
            $address = ($_POST['address']);
            $phoneNo = ($_POST['phoneNo']);
            $coinValue = ($_POST['coinValue']);
            $email = ($_POST['email']);

            try {
                $con = $dbcon->getConnection();
                $query = "UPDATE student SET studentName=?, entrollmentNumber=?, studentDOB=?, gender=?, address=?, phoneNo=?, coinValue=? WHERE `student`.`studentId` = ?";

                $pstmt1 = $con->prepare($query);
                $pstmt1->bindValue(1, $studentName);
                $pstmt1->bindValue(2, $entrollmentNumber);
                $pstmt1->bindValue(3, $studentDOB);
                $pstmt1->bindValue(4, $gender);
                $pstmt1->bindValue(5, $address);
                $pstmt1->bindValue(6, $phoneNo);
                $pstmt1->bindValue(7, $coinValue);
                $pstmt1->bindValue(8, $studentID);
                $pstmt1->execute();

                $query = "UPDATE user SET email=? WHERE `user`.`studentId` = ?";

                $pstmt2 = $con->prepare($query);
                $pstmt2->bindValue(1, $email);
                $pstmt2->bindValue(2, $studentID);
                $pstmt2->execute();
                if (($pstmt1->rowCount() > 0) || ($pstmt2->rowCount() > 0)) {
                    header("Location: ../Dashboards/studentDadhboard.php");
                    exit;
                }
                //If user didn't do any changes but clicked update button.
                else {
                    header("Location: ../Dashboards/studentDadhboard.php");
                    exit;
                }
            } catch (PDOException $exc) {
                echo $exc->getMessage();
            }
        } else {

            $studentID = $_GET["id"];
            try {
                $con = $dbcon->getConnection();
                $query = "SELECT * FROM student WHERE studentID=?";
                $pstmt1 = $con->prepare($query);
                $pstmt1->bindValue(1, $studentID);
                $pstmt1->execute();
                $rs1 = $pstmt1->fetch(PDO::FETCH_OBJ);
                $instituteId = $rs1->instituteId;
                $degreeId = $rs1->degreeId;

                $query = "SELECT instituteName FROM institute WHERE instituteId=?";
                $pstmt2 = $con->prepare($query);
                $pstmt2->bindValue(1, $instituteId);
                $pstmt2->execute();
                $rs2 = $pstmt2->fetch(PDO::FETCH_OBJ);

                $query = "SELECT degreeName FROM degree WHERE degreeId=?";
                $pstmt3 = $con->prepare($query);
                $pstmt3->bindValue(1, $degreeId);
                $pstmt3->execute();
                $rs3 = $pstmt3->fetch(PDO::FETCH_OBJ);

                $query = "SELECT email FROM user WHERE studentId=?";
                $pstmt4 = $con->prepare($query);
                $pstmt4->bindValue(1, $studentID);
                $pstmt4->execute();
                $rs4 = $pstmt4->fetch(PDO::FETCH_OBJ);
            } catch (PDOException $exc) {
                echo $exc->getMessage();
            }
            ?> 
            <div class="container py-md-5">
                <div class="card shadow mb-3">
                    <div class="card-header py-3 text-center">
                        <p class="m-0 fw-bold ">STUDENT PROFILE</p>
                    </div>            
                    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <input type="hidden" name="studentID" value="<?php echo $studentID; ?>"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">                                
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="Department"><strong>Institute Name</strong></label><input class="form-control" name="instituteName" type="text" value="<?php echo $rs2->instituteName; ?>" readonly/></div>
                                </div>
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="Degree"><strong>Degree</strong></label><input class="form-control" name="degreeName" type="text" value="<?php echo $rs3->degreeName; ?>" readonly></div>
                                </div>
                            </div>
                            <div class="mb-3"></div>                                
                        </div>
                        <div class="card-body">                                
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" ><strong>Name</strong></label><input class="form-control" name="studentName" type="text" value="<?php echo $rs1->studentName; ?>"></div>
                                </div>
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="last_name"><strong>Entrollment Number</strong></label><input class="form-control" name="entrollmentNumber" type="text" value="<?php echo $rs1->entrollmentNumber; ?>"></div>
                                </div>
                            </div>
                            <div class="mb-3"></div>                                
                        </div>
                        <div class="card-body">                                
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="DOB"><strong>DOB</strong></label><input class="form-control" name="studentDOB" type="date" value="<?php echo $rs1->studentDOB; ?>"></div>
                                </div>
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="Gender"><strong>Gender</strong></label><input class="form-control" name="gender" type="text" value="<?php echo $rs1->gender; ?>">
                                    </div>
                                </div>
                            </div>                                
                        </div>
                        <div class="card-body">                                
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="tel"><strong>Address</strong></label></div><input class="form-control" name="address" type="text" value="<?php echo $rs1->address; ?>">
                                </div>
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="email"><strong>Contact Number</strong></label></div><input class="form-control" name="phoneNo" type="text" value="<?php echo $rs1->phoneNo; ?>">
                                </div>
                            </div>                                
                        </div>
                        <div class="card-body">                                
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="Address"><strong>Coin Value</strong></label></div><input class="form-control" name="coinValue" type="tel" value="<?php echo $rs1->coinValue; ?>" readonly="">
                                </div>
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="User"><strong>Email Address</strong></label></div><input class="form-control" name="email" type="email" value="<?php echo $rs4->email; ?>">
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
                                    <a href="../Dashboards/studentDadhboard.php">
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








