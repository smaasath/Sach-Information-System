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

        <link rel="stylesheet" href="../Profile/Institute-form/style.css">
    </head>
    <body>
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $instituteId = ($_POST['instituteId']);
            $instituteName = ($_POST['instituteName']);
            $Address = ($_POST['Address']);
            $phoneNo = ($_POST['phoneNo']);
            $Logo = ($_POST['Logo']);
            $mission = ($_POST['mission']);
            $vission = ($_POST['vission']);
            $email = ($_POST['email']);

            try {
                $con = $dbcon->getConnection();
                $query = "UPDATE institute SET instituteName=?, Address=?, phoneNo=?, Logo=?, mission=?, vission=? WHERE `institute`.`instituteId` = ?";

                $pstmt1 = $con->prepare($query);
                $pstmt1->bindValue(1, $instituteName);
                $pstmt1->bindValue(2, $address);
                $pstmt1->bindValue(3, $phoneNo);
                $pstmt1->bindValue(4, $Logo);
                $pstmt1->bindValue(5, $mission);
                $pstmt1->bindValue(6, $vission);
                $pstmt1->bindValue(7, $instituteId);
                $pstmt1->execute();

                $query = "UPDATE user SET email=? WHERE `user`.`institutetId` = ?";

                $pstmt2 = $con->prepare($query);
                $pstmt2->bindValue(1, $email);
                $pstmt2->bindValue(2, $instituteId);
                $pstmt2->execute();
                if (($pstmt1->rowCount() > 0) || ($pstmt2->rowCount() > 0)) {
                    header("Location: ../Dashboards/AdminDashboard.php");
                    exit;
                }
                //If user didn't do any changes but clicked update button.
                else {
                    header("Location: ../Dashboards/AdminDashboard.php");
                    exit;
                }
            } catch (PDOException $exc) {
                echo $exc->getMessage();
            }
        } else {

            $instituteId = $_GET["id"];
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
            <div class="container py-md-5">
                <div class="card shadow mb-3">
                    <div class="card-header py-3 text-center">
                        <p class="m-0 fw-bold ">INSTITUTE PROFILE</p>
                    </div>            
                    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <input type="hidden" name="instituteId" value="<?php echo $instituteId; ?>"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">                                
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="Department"><strong>Institute Name</strong></label><input class="form-control" name="instituteName" type="text" value="<?php echo $rs1->instituteName; ?>" /></div>
                                </div>                               
                            </div>
                            <div class="mb-3"></div>                                
                        </div>                    
                        <div class="card-body">                                
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="tel"><strong>Address</strong></label></div><input class="form-control" name="Address" type="text" value="<?php echo $rs1->Address; ?>">
                                </div>
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="email"><strong>Contact Number</strong></label></div><input class="form-control" name="phoneNo" type="text" value="<?php echo $rs1->phoneNo; ?>">
                                </div>
                            </div>                                
                        </div>
                        <div class="card-body">                                
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" ><strong>Vission</strong></label><input class="form-control" name="vission" type="text" value="<?php echo $rs1->vission; ?>"></div>
                                </div>                               
                            </div>
                            <div class="mb-3"></div>                                
                        </div>
                        <div class="card-body">                                
                            <div class="row">                                
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="last_name"><strong>Mission</strong></label><textarea class="form-control" name="mission" type="text" value="<?php echo $rs1->mission; ?>" ></textarea></div>
                                </div>
                            </div>
                            <div class="mb-3"></div>                                
                        </div>
                        <div class="card-body">                                
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="Address"><strong>Logo</strong></label></div><textarea class="form-control" name="Logo" type="text" value="<?php echo $rs1->Logo; ?>" ></textarea>
                                </div>
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="User"><strong>Email Address</strong></label></div><input class="form-control" name="email" type="email" value="<?php echo $rs2->email; ?>">
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
                                    <a href="../Dashboards/AdminDashboard.php">
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








