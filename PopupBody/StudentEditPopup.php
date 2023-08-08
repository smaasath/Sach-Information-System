<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

if (isset($_POST["std_ID"])) {
    include '../DashboardPHP/connection.php';

    $stdID = $_POST["std_ID"]; // Assuming you have the student ID from the form
// Construct and execute the query using a prepared statement
    $queryStudent = "SELECT * FROM student WHERE StudentId = :stdID";
    $stmtStudent = $conn->prepare($queryStudent);
    $stmtStudent->bindParam(':stdID', $stdID, PDO::PARAM_INT);
    $stmtStudent->execute();

    if ($stmtStudent) {
        // Fetch the student data
        $rowStudent = $stmtStudent->fetch(PDO::FETCH_ASSOC);

        if ($rowStudent) {
            // Process student data here
            // Construct and execute the query to get user data
            $queryUser = "SELECT * FROM user WHERE StudentId = :stdID";
            $stmtUser = $conn->prepare($queryUser);
            $stmtUser->bindParam(':stdID', $stdID, PDO::PARAM_INT);
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
                                    <input name="studentName" type="text" value="' . $rowStudent["studentName"] . '" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                </div>
                            </div>

                           
                            <div class="row align-items-center pb-3">
                                <div class="col-3">
                                    <h6>Entrollment Number</h6>
                                </div>
                                <div class="col-9">
                                    <input name="entrollmentNumber" type="text" Value="' . $rowStudent["entrollmentNumber"] . '" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                </div>
                            </div>

                            <div class="row align-items-center pb-3">
                                <div class="col-3">
                                    <h6>DOB</h6>
                                </div>
                                <div class="col-9">
                                    <input name="DOB" type="date" value="' . $rowStudent["studentDOB"] . '" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                </div>
                            </div>

                            <div class="row align-items-center pb-3">
                                <div class="col-3">
                                    <h6>Address</h6>
                                </div>
                                <div class="col-9">
                                    <input name="studentAddress" type="text" value="' . $rowStudent["address"] . '" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                </div>
                            </div>

                            <hr>
                            <div class="row align-items-center pb-3">
                                <div class="col-3">
                                    <h6>Phone Number</h6>
                                </div>
                                <div class="col-9">
                                    <input name="studentContactNum" type="text" value="' . $rowStudent["phoneNo"] . '" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                </div>
                            </div>
                            
                            <div class="row align-items-center pb-3">
                                <div class="col-3">
                                    <h6>User Name</h6>
                                </div>
                                <div class="col-9">
                                    <input name="userName" type="text" value="' . $rowUser["userName"] . '" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                </div>
                            </div>
                            
                            <div class="row align-items-center pb-3">
                                <div class="col-3">
                                    <h6>Email</h6>
                                </div>
                                <div class="col-9">
                                    <input name="studentEmail" type="email" value="' . $rowUser["email"] . '" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                </div>
                            </div>
                            
                             
                                    <input hidden name="std_id" type="text" value="' . $_POST["std_ID"] . '" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                             

                           
                            
';
                    echo $output;
                } else {
                    echo 'User not found.';
                }
            } else {
                echo "User query failed.";
            }
        } else {
            echo 'Student not found.';
        }
    } else {
        echo "Student query failed.";
    }

// Close the statements
    $stmtStudent = null;
    $stmtUser = null;
}









            