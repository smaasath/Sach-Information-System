<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

if (isset($_POST["std_ID"])) {
    include '../DashboardPHP/connection.php';

    $query = "SELECT * FROM student WHERE StudentId=" . $_POST["std_ID"];
    $result = $conn->query($query);
    if (!$result) {
        die("Query failed: " . $conn->error);
    }

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $querydegree = "SELECT degreeName FROM degree WHERE degreeId =" . $row["degreeId"];
        $resultdegree = $conn->query($querydegree);
        $rowDegree = $resultdegree->fetch_assoc();
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
}