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
    <select class="form-select"  name="degreeId" aria-label="Default select example">';
    echo $output;
    $insID = $_POST["Ins_ID"]; // Assuming you have the institute ID from the form
// Construct and execute the query using a prepared statement
    $queryGetDegree = "SELECT degreeName, degreeId FROM degree WHERE instituteId = :insID";
    $stmtGetDegree = $conn->prepare($queryGetDegree);
    $stmtGetDegree->bindParam(':insID', $insID, PDO::PARAM_INT);
    $stmtGetDegree->execute();

    if ($stmtGetDegree) {
        // Fetch results
        $resultDegree = $stmtGetDegree->fetchAll(PDO::FETCH_ASSOC);

        if ($resultDegree) {
            // Output options for select dropdown
            foreach ($resultDegree as $rowDegree) {
                echo '<option value="' . $rowDegree["degreeId"] . '">' . $rowDegree["degreeName"] . '</option>';
            }
        } else {
            echo "No degree options found.";
        }
    } else {
        echo "Query failed.";
    }

// Close the statement
    $stmtGetDegree = null;

    $output2 = ' 
</select></div></div>
                                <div class="row align-items-center">
                            <div class="col-3">
                                <h6>Staff</h6>
                            </div>
                            <div class="col-9 p-3">
                                 <select class="form-select"  name="staffId"  aria-label="Default select example">';
    
    
     echo $output2;
    $insID = $_POST["Ins_ID"]; // Assuming you have the institute ID from the form
// Construct and execute the query using a prepared statement
    $queryGetStaff = "SELECT * FROM staff WHERE institudeID = :insID";
    $stmtGetStaff = $conn->prepare($queryGetStaff);
    $stmtGetStaff->bindParam(':insID', $insID, PDO::PARAM_INT);
    $stmtGetStaff->execute();

    if ($stmtGetStaff) {
        // Fetch results
        $resultStaff = $stmtGetStaff->fetchAll(PDO::FETCH_ASSOC);

        if ($resultStaff) {
            // Output options for select dropdown
            foreach ($resultStaff as $rowStaff) {
                echo '<option value="' . $rowStaff["staffId"] . '">' . $rowStaff["staffName"] . '</option>';
            }
        } else {
            echo "No degree options found.";
        }
    } else {
        echo "Query failed.";
    }

// Close the statement
    $stmtGetDegree = null;

    
    
    
    
    
    $output3='
                                 
                                </select>
                            </div>
                        </div>
            <div class="row align-items-center">
                            <div class="col-3">
                                <h6>Acedemic Year</h6>
                            </div>
                            <div class="col-9 p-3">
                                 <select class="form-select"  name="acedemicYear"  aria-label="Default select example">';
    

    
    echo $output3;
    $insID = $_POST["Ins_ID"]; // Assuming you have the institute ID from the form
// Construct and execute the query using a prepared statement
    $queryGetyear = "SELECT DISTINCT acedemicYear FROM student WHERE instituteId  = :insID";
    $stmtGetyear = $conn->prepare($queryGetyear);
    $stmtGetyear->bindParam(':insID', $insID, PDO::PARAM_INT);
    $stmtGetyear->execute();

    if ($stmtGetyear) {
        // Fetch results
        $resultyear = $stmtGetyear->fetchAll(PDO::FETCH_ASSOC);

        if ($resultyear) {
            // Output options for select dropdown
            foreach ($resultyear as $rowyear) {
                echo '<option value="' . $rowyear["acedemicYear"] . '">' . $rowyear["acedemicYear"] . '</option>';
            }
        } else {
            echo "No degree options found.";
        }
    } else {
        echo "Query failed.";
    }

// Close the statement
    $stmtGetDegree = null;

    
    
    
    
$output4='
          </select>
                            </div>
                        </div>
                       

                        <div class="row align-items-center pb-3">
                            <div class="col-3">
                                <h6>Course Name</h6>
                            </div>
                            <div class="col-9">
                                <input type="text" name="courseName" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                        </div>

                       

                        <div class="row align-items-center pb-3">
                            <div class="col-3">
                                <h6>Credits</h6>
                            </div>
                            <div class="col-9">
                                <input type="number" name="credits" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                        </div>
 <input type="hidden" name="Instituteid" value=' . $_POST["Ins_ID"] . '>                                

';

    echo $output4;
} else {
    echo 'parent not added';
}









        