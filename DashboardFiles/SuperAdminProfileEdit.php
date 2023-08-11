<?php
require '../classes/DBConnector.php';

use classes\DBConnector;

$dbcon = new DBConnector();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin profile</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="../Profile/Admin-form/style.css">
    </head>
    <body>

        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $uderId = ($_POST['uderId']);
            $userName = ($_POST['userName']);
            $email = ($_POST['email']);          

            try {
                $con = $dbcon->getConnection();
                $query = "UPDATE user SET userName=?, email=? WHERE `user`.`uderId` = ?";

                $pstmt = $con->prepare($query);
                $pstmt->bindValue(1, $userName);
                $pstmt->bindValue(2, $email);
                $pstmt->bindValue(3, $uderId);                
                $pstmt->execute();
            
                if ($pstmt->rowCount() > 0){
                    header("Location: ../DashboardFiles/SuperAdminProfile.php");
                    exit;
                }
                //If user didn't do any changes but clicked update button.
                else {
                    header("Location: ../DashboardFiles/SuperAdminProfile.php");
                    exit;
                }
            } catch (PDOException $exc) {
                echo $exc->getMessage();
            }
        } else {

            $uderId = $_GET["id"];
            try {
                $con = $dbcon->getConnection();
                $query = "SELECT * FROM user WHERE uderId=?";
                $pstmt1 = $con->prepare($query);
                $pstmt1->bindValue(1, $uderId);
                $pstmt1->execute();
                $rs1 = $pstmt1->fetch(PDO::FETCH_OBJ);

            } catch (PDOException $exc) {
                echo $exc->getMessage();
            }
            ?> 
            <div class="container py-md-5">
                <div class="card shadow mb-3">
                    <div class="card-header py-3 text-center">
                        <p class="m-0 fw-bold ">ADMIN PROFILE</p>
                    </div>            
                    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <input type="hidden" name="uderId" value="<?php echo $uderId; ?>"/>
                                    </div>
                                </div>
                            </div>
                        </div>               
                        <div class="card-body">                                
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" ><strong>User Name</strong></label><input class="form-control" name="userName" type="text" value="<?php echo $rs1->userName; ?>"></div>
                                </div>                              
                            </div>
                            <div class="mb-3"></div>                                
                        </div>          
                        <div class="card-body">                                
                            <div class="row">                             
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="User"><strong>Email Address</strong></label></div><input class="form-control" name="email" type="email" value="<?php echo $rs1->email; ?>">
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
                                    <a href="../DashboardFiles/SuperAdminProfile.php">
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








