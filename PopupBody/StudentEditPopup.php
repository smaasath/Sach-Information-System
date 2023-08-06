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
        
    }

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $queryuser = "SELECT * FROM user WHERE StudentId=" . $_POST["std_ID"];
        $resultuser = $conn->query($queryuser);
        $rowuser = $resultuser->fetch_assoc();
        $output = '  
        <div class="row align-items-center pb-3">
                                <div class="col-3">
                                    <h6>Name</h6>
                                </div>
                                <div class="col-9">
                                    <input name="studentName" type="text" value="' . $row["studentName"] . '" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                </div>
                            </div>

                           
                            <div class="row align-items-center pb-3">
                                <div class="col-3">
                                    <h6>Entrollment Number</h6>
                                </div>
                                <div class="col-9">
                                    <input name="entrlmentNumber" type="text" Value="' . $row["entrollmentNumber"] . '" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                </div>
                            </div>

                            <div class="row align-items-center pb-3">
                                <div class="col-3">
                                    <h6>DOB</h6>
                                </div>
                                <div class="col-9">
                                    <input name="DOB" type="date" value="' . $row["studentDOB"] . '" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                </div>
                            </div>

                            <div class="row align-items-center pb-3">
                                <div class="col-3">
                                    <h6>Address</h6>
                                </div>
                                <div class="col-9">
                                    <input name="studentAddress" type="text" value="' . $row["address"] . '" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                </div>
                            </div>

                            <hr>
                            <div class="row align-items-center pb-3">
                                <div class="col-3">
                                    <h6>Phone Number</h6>
                                </div>
                                <div class="col-9">
                                    <input name="studentContactNum" type="text" value="' . $row["phoneNo"] . '" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                </div>
                            </div>
                            
                            <div class="row align-items-center pb-3">
                                <div class="col-3">
                                    <h6>User Name</h6>
                                </div>
                                <div class="col-9">
                                    <input name="userName" type="text" value="' . $rowuser["userName"] . '" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                </div>
                            </div>
                            
                            <div class="row align-items-center pb-3">
                                <div class="col-3">
                                    <h6>Email</h6>
                                </div>
                                <div class="col-9">
                                    <input name="studentEmail" type="email" value="' . $rowuser["email"] . '" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                </div>
                            </div>
                            
                             
                                    <input hidden name="std_id" type="text" value="' . $_POST["std_ID"] . '" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                             

                           
                            
';
        echo $output;
    } else {
        echo 'parent not added';
    }
}









