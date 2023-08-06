<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

if (isset($_POST["std_ID"])) {
    include '../DashboardPHP/connection.php';

    $query = "SELECT * FROM guardian WHERE StudentId=" . $_POST["std_ID"];
    $result = $conn->query($query);
    if (!$result) {
        echo 'Gaurdian not Added';
    }

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $output = '  
   <div class="container">
                                <div class="row">
                                    <div class="col-4">
                                        <h6>Full Name</h6>
                                    </div>
                                    <div class="col-8">
                                        <p>'.$row["name"].'</p>
                                    </div>
                                </div> 

                                <div class="row">
                                    <div class="col-4">
                                        <h6>Relationship</h6>
                                    </div>
                                    <div class="col-8">
                                        <p>'.$row["relationShip"].'</p>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-4">
                                        <h6>Contact NO</h6>
                                    </div>
                                    <div class="col-8">
                                        <p>'.$row["phoneNo"].'</p>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-4">
                                        <h6>Email</h6>
                                    </div>
                                    <div class="col-8">
                                        <p>'.$row["email"].'</p>
                                    </div>
                                </div> 

                                <div class="row">
                                    <div class="col-4">
                                        <h6>Address</h6>
                                    </div>
                                    <div class="col-8">
                                        <p>'.$row["address"].'</p>
                                    </div>
                                </div> 

                                <div class="row">
                                    <div class="col-4">
                                        <h6>Occupation</h6>
                                    </div>
                                    <div class="col-8">
                                        <p>'.$row["occupation"].'</p>
                                    </div>
                                </div> 







                            </div>
                        </div>';
         echo $output;
    }else {
    echo 'parent not added'; 
}

   

   
} 