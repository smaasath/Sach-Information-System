<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

if (isset($_POST["staffId"])) {
    include '../DashboardPHP/connection.php';

    

  
   
    
    
    
$staffId = $_POST["staffId"]; // Assuming you have the student ID from the form

// Construct and execute the query using a prepared statement
$query = "SELECT * FROM course WHERE staffId = :staffId";
$stmt = $conn->prepare($query);
$stmt->bindParam(':staffId', $staffId, PDO::PARAM_INT);
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
          


            </tr>';
        
   // Output data of each row
        foreach ($result as $row) {
         
$output = '
            <tr>

            <td class = "col-3">'. $row["courseId"].'</td>
            <td class = "col-6">'. $row["courseName"].'</td>
            


            </tr></table>';
        }
        
        
        
        
        echo $output1;
        echo $output;
        
                // Process course data and output
            }else {
   echo "No Course found.";
} 
    
} 

// Close the statements
$stmt = null;
$stmtCourse = null;

    

   
}
    
  
