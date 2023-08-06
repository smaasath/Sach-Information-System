<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

if (isset($_POST["std_ID"])) {
    include '../DashboardPHP/connection.php';

    $query = "SELECT courseId,courseMarks FROM coursestudent WHERE studentId=" . $_POST["std_ID"];

    $result = mysqli_query($conn, $query);
      $output1 = '
            <table class="table table-hover">
            <tr>

            <th class = "col-3">Course ID</th>
            <th class = "col-6">Course Name</th>
            <th class = "col-3">Course Marks</th>


            </tr>';
        
    if (mysqli_num_rows($result) > 0) {
      
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
       


            $querycourse = "SELECT courseName FROM course WHERE courseId=" . $row["courseId"];
            $resultcourse = $conn->query($querycourse);
            $rowcourse = $resultcourse->fetch_assoc();
$output = '
            <tr>

            <td class = "col-3">'. $row["courseId"].'</td>
            <td class = "col-6">'. $rowcourse["courseName"].'</td>
            <td class = "col-3">'.$row["courseMarks"].'</td>


            </tr></table>';
        }
        
        
        
        
        echo $output1;
        echo $output;
        
    } else {
        echo 'not entrolled into courses';    
    }


    

   

    
  
}
    ?>