<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

if (isset($_POST["webid"])) {
    include '../DashboardPHP/connection.php';
    
// Delete student data using a prepared statement
    $sqlStudent = "DELETE FROM `webinar` WHERE `webinarId` = :webid";
    $stmtStudent = $conn->prepare($sqlStudent);
    $stmtStudent->bindParam(':webid', $_POST["webid"], PDO::PARAM_INT);

    if ($stmtStudent->execute()) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $stmtStudent->errorInfo()[2];
    }

// Close the statement
    $stmtStudent = null;
   
}