<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

if (isset($_POST["std_ID"])) {
    include '../DashboardPHP/connection.php';
     $sqlStudent = "DELETE FROM `student` WHERE `student`.`studentID` =".$_POST["std_ID"];

    if (mysqli_query($conn, $sqlStudent)) {
        $student_id = $conn->insert_id;
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
}