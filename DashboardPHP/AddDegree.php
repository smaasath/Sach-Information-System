<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

function sanitizeInput($input) {
    return htmlspecialchars(trim($input));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $degreeName = sanitizeInput($_POST["degreeName"]);
     $Instituteid = sanitizeInput($_POST["Instituteid"]);
   
}


include '../DashboardPHP/connection.php';

// Construct and execute the query using a prepared statement
$query = "INSERT INTO `degree` (`degreeId`, `degreeName`, `instituteId`) VALUES (NULL, :degreeName, :instituteId)";
$stmt = $conn->prepare($query);
$stmt->bindParam(':instituteId', $Instituteid);
$stmt->bindParam(':degreeName', $degreeName);
;

if ($stmt->execute()) {
    echo 'Degree added successfully';
} else {
    echo "Error creating record: " . $stmt->errorInfo()[2];
}

// Close the statement
$stmt = null;
header("Location: ../Dashboards/AdminDashboard.php");
