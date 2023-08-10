<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

if (isset($_POST["Ins_Id"])) {
    include '../DashboardPHP/connection.php';
    
// Delete student data using a prepared statement
    $sqlStudent = "DELETE FROM `institute` WHERE `instituteId` = :instituteId";
    $stmtStudent = $conn->prepare($sqlStudent);
    $stmtStudent->bindParam(':instituteId', $_POST["Ins_Id"], PDO::PARAM_INT);

    if ($stmtStudent->execute()) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $stmtStudent->errorInfo()[2];
    }

// Close the statement
    $stmtStudent = null;
   
}