<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

if (isset($_POST["Ins_ID"])) {
    include '../DashboardPHP/connection.php';
    

   
        $output = '  
        <div class="row align-items-center">
         <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Degree</h6>
                                    </div>
                    <div class="col-9">                 
    <select class="form-select"  name="degree" id="degree" aria-label="Default select example">';
                            echo $output;
                            $queryGetdegree = "SELECT degreeName,degreeId FROM degree WHERE instituteId=".$_POST["Ins_ID"];
                            $resultDegree = $conn->query($queryGetdegree);
                            if (!$resultDegree) {
                                die("Query failed: " . $conn->error);
                            }

                            while ($rowdeg = $resultDegree->fetch_assoc()) {
                                echo '<option  value="' . $rowdeg["degreeId"] . '">' . $rowdeg["degreeName"] . '</option>';
                            }
                           


                       $output2= ' 
</select></div></div>
                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Full Name</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="text"  name="studentName" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>

                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Entrollment No</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="text"   name="entrlmentNumber" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>

                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Accedamic Year</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="number"   name="accedamicYear" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>

                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>DOB</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="Date"  name="DOB" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>

                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Contact No</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="text"  name="studentContactNum" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>

                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Email</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="email"  name="studentEmail" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>

                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Gender</h6>
                                    </div>
                                    <div class="col-9">
                                        <select  name="gender" class="form-select" aria-label="Default select example" required>

                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Address</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="text"  name="studentAddress" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>

                                <hr>
                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>User Name</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="text"  name="userName" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>

                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Password</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="Password"  name="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>
                                
<hr>
<h5>Gurdian Details </h5>
<div class="row align-items-center pb-3 mt-3">
                                    <div class="col-3">
                                        <h6>Full Name</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="text" name="guardianName" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>

                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Relationship</h6>
                                    </div>
                                    <div class="col-9">
                                        <select  name="guardianRelation" class="form-select" aria-label="Default select example" required>
                                            <option value="Father">Father</option>
                                            <option value="Mother">Mother</option>
                                            <option value="Guardian">Guardian</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Contact No</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="text" name="guardianContactNum" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>





                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Email</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="email" name="guardianEmail" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>

                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Address</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="text" name="guardianAddress" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>


                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Occupation</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="text" name="guardianOccupation" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>
 <input type="hidden" name="Instituteid" value='.$_POST["Ins_ID"].'>                                

';
       
        echo $output2;
    } else {
        echo 'parent not added';
    
    }









