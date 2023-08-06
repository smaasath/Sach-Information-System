<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

if (isset($_POST["std_ID"])) {
    include '../DashboardPHP/connection.php';

    $query = "SELECT courseId FROM coursestudent WHERE studentId=" . $_POST["std_ID"];

    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
       
 echo $row["courseId"];

            $querycourse = "SELECT courseName FROM course WHERE courseId=" . $row["courseId"];
            $resultcourse = $conn->query($querycourse);
            $rowcourse = $resultcourse->fetch_assoc();
$output = '
            <tr>

            <td class = "col-3">'. $row["courseId"].'</td>
            <td class = "col-6">'. $rowcourse["courseName"].'</td>
            <td class = "col-3">88%</td>


            </tr>';
        }
        
        echo $output;
    } else {
        echo 'not entrolled into courses';    
    }


    

   

    
  
}
    ?>