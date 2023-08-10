<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

if (isset($_POST["course_id"])) {
    include '../DashboardPHP/connection.php';
    $queryGetTable = "SELECT * FROM course WHERE courseId = :userID";

// Prepare and execute the query using a prepared statement
    $stmtGetTable = $conn->prepare($queryGetTable);
    $stmtGetTable->bindParam(':userID', $_POST["course_id"], PDO::PARAM_INT);
    $stmtGetTable->execute();
    $rowCourse = $stmtGetTable->fetch(PDO::FETCH_ASSOC);
 
   

    $output2 = ' 

                                <div class="row align-items-center">
                            <div class="col-3">
                                <h6>Staff</h6>
                            </div>
                            <div class="col-9 p-3">
                                 <select class="form-select"  name="staffId"  aria-label="Default select example">';

    echo $output2;
    $insID = $rowCourse["InstituteId10"];  // Assuming you have the institute ID from the form
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

    $output3 = '
                                 
                                </select>
                            </div>
                        </div>
            ';

    echo $output3;


    $output4 = '
         
                       

                        <div class="row align-items-center pb-3">
                            <div class="col-3">
                                <h6>Course Name</h6>
                            </div>
                            <div class="col-9">
                                <input type="text" value="'.$rowCourse["courseName"].'" name="courseName" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                        </div>

                       

                        <div class="row align-items-center pb-3">
                            <div class="col-3">
                                <h6>Credits</h6>
                            </div>
                            <div class="col-9">
                                <input type="number" value="'.$rowCourse["credits"].'" name="credits" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                        </div>
 <input type="hidden" name="courseID" value=' . $_POST["course_id"] . '>                                

';

    echo $output4;
} else {
    echo 'parent not added';
}









        