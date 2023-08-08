<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

if (isset($_POST["std_ID"])) {
    include '../DashboardPHP/connection.php';

    

  
   
    
    
    
$stdID = $_POST["std_ID"]; // Assuming you have the student ID from the form

// Construct and execute the query using a prepared statement
$query = "SELECT courseId, courseMarks FROM coursestudent WHERE studentId = :stdID";
$stmt = $conn->prepare($query);
$stmt->bindParam(':stdID', $stdID, PDO::PARAM_INT);
$stmt->execute();

if ($stmt) {
    // Fetch results
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($result) {
      $output1 = '
            <table class="table table-hover">
            <tr>

            <th class = "col-3">Course ID</th>
            <th class = "col-6">Course Name</th>
            <th class = "col-3">Course Marks</th>


            </tr>';
        
   // Output data of each row
        foreach ($result as $row) {
            // Fetch course name using a new query
            $queryCourse = "SELECT courseName FROM course WHERE courseId = :courseID";
            $stmtCourse = $conn->prepare($queryCourse);
            $stmtCourse->bindParam(':courseID', $row["courseId"], PDO::PARAM_INT);
            $stmtCourse->execute();
            
            $rowCourse = $stmtCourse->fetch(PDO::FETCH_ASSOC);

            if ($rowCourse) {
$output = '
            <tr>

            <td class = "col-3">'. $row["courseId"].'</td>
            <td class = "col-6">'. $rowCourse["courseName"].'</td>
            <td class = "col-3">'.$row["courseMarks"].'</td>


            </tr></table>';
        }else {
        echo "No Course found.";
    }
        
        
        
        
        echo $output1;
        echo $output;
        
                // Process course data and output
            } 
    
} else {
   echo "No Course found.";
}

// Close the statements
$stmt = null;
$stmtCourse = null;

    

   
}
    
  
}
