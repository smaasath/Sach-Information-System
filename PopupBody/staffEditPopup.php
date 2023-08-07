<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

if (isset($_POST["staffId"])) {
    include '../DashboardPHP/connection.php';

    $staffId = $_POST["staffId"]; // Assuming you have the student ID from the form
// Construct and execute the query using a prepared statement
    $queryStaff = "SELECT * FROM staff WHERE staffId = :staffId";
    $stmtStaff = $conn->prepare($queryStaff);
    $stmtStaff->bindParam(':staffId', $staffId, PDO::PARAM_INT);
    $stmtStaff->execute();

    if ($stmtStaff) {
        // Fetch the student data
        $rowstaff = $stmtStaff->fetch(PDO::FETCH_ASSOC);

        if ($rowstaff) {
            // Process student data here
            // Construct and execute the query to get user data
            $queryUser = "SELECT * FROM user WHERE staffId = :staffId";
            $stmtUser = $conn->prepare($queryUser);
            $stmtUser->bindParam(':staffId', $staffId, PDO::PARAM_INT);
            $stmtUser->execute();

            if ($stmtUser) {
                // Fetch the user data
                $rowUser = $stmtUser->fetch(PDO::FETCH_ASSOC);

                if ($rowUser) {
                    $output = '  
         <div class="row align-items-center pb-3">
                                <div class="col-3">
                                    <h6>Name</h6>
                                </div>
                                <div class="col-9">
                                    <input type="text" name="staffName" value="'.$rowstaff["staffName"].'" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                </div>
                            </div>






                            <div class="row align-items-center pb-3">
                                <div class="col-3">
                                    <h6>Contact No</h6>
                                </div>
                                <div class="col-9">
                                    <input type="text" name="phoneNo" value="'.$rowstaff["phoneNo"].'" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                </div>
                            </div>

                            <div class="row align-items-center pb-3">
                                <div class="col-3">
                                    <h6>Email</h6>
                                </div>
                                <div class="col-9">
                                    <input type="email" name="email" value="'.$rowUser["email"].'" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                </div>
                            </div>

                            <div class="row align-items-center pb-3">
                                <div class="col-3">
                                    <h6>Position</h6>
                                </div>
                                <div class="col-9">
                                    <input type="text" name="position" value="'.$rowstaff["position"].'" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                </div>
                            </div>

                            


                                  
                            
                            <input hidden name="staffId" type="text" value="' . $_POST["staffId"] . '" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required required>
                             

                           
                            
';
                    echo $output;
                } else {
                    echo 'User not found.';
                }
            } else {
                echo "User query failed.";
            }
        } else {
            echo 'Staff not found.';
        }
    } else {
        echo "Staff query failed.";
    }

// Close the statements
    $stmtStaff = null;
    $stmtUser = null;
}









            