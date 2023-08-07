<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

if (isset($_POST["std_ID"])) {
    include '../DashboardPHP/connection.php';

    $stdID = $_POST["std_ID"]; // Assuming you have the student ID from the form
// Construct and execute the query using a prepared statement
    $query = "SELECT * FROM guardian WHERE StudentId = :stdID";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':stdID', $stdID, PDO::PARAM_INT);
    $stmt->execute();

    if ($stmt) {
        // Fetch the guardian data
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            $output = '  
   <div class="container">
                                <div class="row">
                                    <div class="col-4">
                                        <h6>Full Name</h6>
                                    </div>
                                    <div class="col-8">
                                        <p>' . $row["name"] . '</p>
                                    </div>
                                </div> 

                                <div class="row">
                                    <div class="col-4">
                                        <h6>Relationship</h6>
                                    </div>
                                    <div class="col-8">
                                        <p>' . $row["relationShip"] . '</p>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-4">
                                        <h6>Contact NO</h6>
                                    </div>
                                    <div class="col-8">
                                        <p>' . $row["phoneNo"] . '</p>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-4">
                                        <h6>Email</h6>
                                    </div>
                                    <div class="col-8">
                                        <p>' . $row["email"] . '</p>
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
                                        <h6>Occupation</h6>
                                    </div>
                                    <div class="col-8">
                                        <p>' . $row["occupation"] . '</p>
                                    </div>
                                </div> 







                            </div>
                        </div>';
            echo $output;
        } else {
        echo 'Guardian not Added';
    }
} else {
    echo "Query failed.";
}


    }    