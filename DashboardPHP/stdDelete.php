<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

if (isset($_POST["std_ID"])) {
    include '../DashboardPHP/connection.php';
    $stdID = $_POST["std_ID"]; // Assuming you have the student ID from the form
// Delete student data using a prepared statement
    $sqlStudent = "DELETE FROM `student` WHERE `student`.`studentID` = :stdID";
    $stmtStudent = $conn->prepare($sqlStudent);
    $stmtStudent->bindParam(':stdID', $stdID, PDO::PARAM_INT);

    if ($stmtStudent->execute()) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $stmtStudent->errorInfo()[2];
    }

// Close the statement
    $stmtStudent = null;
   
}