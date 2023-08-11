<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

if (isset($_POST["staffId"])) {
    include '../DashboardPHP/connection.php';

    $staffID = $_POST["staffId"]; // Assuming you have the student ID from the form
// Construct and execute the query using a prepared statement
    $query = "SELECT * FROM staff WHERE staffId = :staffId";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':staffId', $staffID, PDO::PARAM_INT);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row) {
        // Fetch the student data
        // Fetch the degree name using a new query
        $queryUser = "SELECT email FROM user WHERE staffId = :staffId";
        $stmtUser = $conn->prepare($queryUser);
        $stmtUser->bindParam(':staffId', $row["staffId"], PDO::PARAM_INT);
        $stmtUser->execute();

        $rowUser = $stmtUser->fetch(PDO::FETCH_ASSOC);

        $output = '  
   <div class="container">
                            <div class="row">
                                <div class="col-4">
                                    <h6>Staff Name</h6>
                                </div>
                                <div class="col-8">
                                    <p>' . $row["staffName"] . '</p>
                                </div>
                            </div> 


                            <div class="row">
                                <div class="col-4">
                                    <h6>Position</h6>
                                </div>
                                <div class="col-8">
                                    <p>' . $row['position'] . '</p>
                                </div>
                            </div> 



                            <div class="row">
                                <div class="col-4">
                                    <h6>Contact Number</h6>
                                </div>
                                <div class="col-8">
                                    <p>' . $row['phoneNo'] . '</p>
                                </div>
                            </div> 



                            <div class="row">
                                <div class="col-4">
                                    <h6>Email</h6>
                                </div>
                                <div class="col-8">
                                    <p>' . $rowUser['email'] . '</p>
                                </div>
                            </div> 

                           

                            






                        </div>';

        echo $output;
        $stmtUser = null;
    } else {
        echo 'fail';
    }

    $stmt = null;
}

    
  