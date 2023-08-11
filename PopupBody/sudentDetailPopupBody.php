<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

if (isset($_POST["std_ID"])) {
    include '../DashboardPHP/connection.php';

    $stdID = $_POST["std_ID"]; // Assuming you have the student ID from the form
// Construct and execute the query using a prepared statement
    $query = "SELECT * FROM student WHERE StudentId = :stdID";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':stdID', $stdID, PDO::PARAM_INT);
    $stmt->execute();

    if ($stmt) {
        // Fetch the student data
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            // Fetch the degree name using a new query
            $queryDegree = "SELECT degreeName FROM degree WHERE degreeId = :degreeID";
            $stmtDegree = $conn->prepare($queryDegree);
            $stmtDegree->bindParam(':degreeID', $row["degreeId"], PDO::PARAM_INT);
            $stmtDegree->execute();

            $rowDegree = $stmtDegree->fetch(PDO::FETCH_ASSOC);

            if ($rowDegree) {
                $output = '  
    <div class="container">
    
                            <div class="row">
                                    <div class="col-4">
                                        <h6>Degree</h6>
                                    </div>
                                    <div class="col-8">
                                        <p>' . $rowDegree["degreeName"] . '</p>
                                    </div>
                                </div> 

                                <div class="row">
                                    <div class="col-4">
                                        <h6>Full Name</h6>
                                    </div>
                                    <div class="col-8">
                                        <p>' . $row["studentName"] . '</p>
                                    </div>
                                </div> 

                                <div class="row">
                                    <div class="col-4">
                                        <h6>Entrollment Number</h6>
                                    </div>
                                    <div class="col-8">
                                        <p>' . $row["entrollmentNumber"] . '</p>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-4">
                                        <h6>DOB</h6>
                                    </div>
                                    <div class="col-8">
                                        <p>' . $row["studentDOB"] . '</p>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-4">
                                        <h6>Address</h6>
                                    </div>
                                    <div class="col-8">
                                        <p>' . $row["address"] . '</p>
                                    </div>
                                </div> 

                                <div class="row">
                                    <div class="col-4">
                                        <h6>Phone Number</h6>
                                    </div>
                                    <div class="col-8">
                                        <p>' . $row["phoneNo"] . '</p>
                                    </div>
                                </div> 

                                <div class="row">
                                    <div class="col-4">
                                        <h6>Coins</h6>
                                    </div>
                                    <div class="col-8">
                                        <p>' . $row["coinValue"] . '</p>
                                    </div>
                                </div> 
                                
                                <div class="row">
                                    <div class="col-4">
                                        <h6>Acedemic Year</h6>
                                    </div>
                                    <div class="col-8">
                                        <p>' . $row["acedemicYear"] . '</p>
                                    </div>
                                </div> 







                            </div>
                        </div>';
            }



            echo $output;
            $stmtDegree = null;
        }
          
}

$stmt = null;


    }

    
  