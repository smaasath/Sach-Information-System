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
        <link rel="stylesheet" href="../Profile/Admin/style.css">
    </head>
    <body>
        <?php
        $uderId = $_COOKIE['admin'];
        ?>
        <!--  nav bar start-->
        <div class="navbardah fixed-top d-flex flex-row-reverse">
            <a class="p-3" href="#" style="margin-right: 30px;">
                <i class="fa-solid fa-user fa-lg" style="color: #24457f;"></i>
            </a>

            <h6 class="p-3" href="#">
                User Name
            </h6>

            <div id= "resimage" class="p-1 w-50 d-block d-sm-none">
                <a href="#">
                    <img src="../Images/Logo.png" alt="Home" class="img-fluid" style="width: 20%">
                </a>
            </div>
        </div>

        <!--  nav bar end-->

        <div class="container py-md-5">
            <div class="row d-flex align-items-top">       
                <div class="col-sm-3 p-3 bg-white text-center">
                    <div class="card mb-3">
                        <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4 img-fluid d-none d-sm-block" src="../Profile/Admin/admin.jpg"></div>
                    </div>
                </div>                
                <div class="col-sm-9 text-center text-md-start">
                    <div class="card shadow mb-3">
                        <div class="card-header py-3 text-center">
                            <p class="m-0 fw-bold">ADMIN PROFILE</p>
                        </div>
                        <?php
                        
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
                        <div class="card-body">                                
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="Department"><strong>User Name</strong></label><textarea class="form-control" type="text" placeholder="<?php echo $rs1->userName; ?>" readonly></textarea></div>
                                </div>                                
                            </div>
                            <div class="mb-3"></div>                                
                        </div>                      
                        <div class="card-body">                                
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="User"><strong>Email Address</strong></label></div><textarea class="form-control" type="text" placeholder="<?php echo $rs1->email; ?>" readonly></textarea>
                                </div>                                        
                            </div>
                            <br>
                            <a href="../DashboardFiles/SuperAdminProfileEdit.php?id=<?php echo $uderId; ?>">
                                <button class="Submit-Btn" type="button" >EDIT</button>
                            </a> 
                        </div>                        
                    </div>
                </div>               
            </div>
        </div>  
            
    </body>
</html>








