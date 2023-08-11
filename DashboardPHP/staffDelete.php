<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

if (isset($_POST["staffId"])) {
    include '../DashboardPHP/connection.php';
    $staffId = $_POST["staffId"]; // Assuming you have the staff ID from the form
// Delete staff data using a prepared statement
    $sqlStaff = "DELETE FROM `staff` WHERE `staffId` = :staffId";
    $stmt = $conn->prepare($sqlStaff);
    $stmt->bindParam(':staffId', $staffId, PDO::PARAM_INT);

    if ($stmt->execute()) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $stmt->errorInfo()[2];
    }

// Close the statement
    $stmt = null;
}