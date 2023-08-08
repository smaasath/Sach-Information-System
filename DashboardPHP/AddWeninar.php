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


    $title = sanitizeInput($_POST["title"]);
    $Status = sanitizeInput($_POST["Status"]);
    $description = sanitizeInput($_POST["description"]);
    $date = sanitizeInput($_POST["date"]);
    $time = sanitizeInput($_POST["time"]);
    $regDeadline = sanitizeInput($_POST["regDeadline"]);
    $webinarLink = sanitizeInput($_POST["webinarLink"]);
    $coinValue = sanitizeInput($_POST["coinValue"]);
    $Instituteid = sanitizeInput($_POST["Instituteid"]);
   
}


include '../DashboardPHP/connection.php';

// Construct and execute the query using a prepared statement
$query = "INSERT INTO `webinar` (`webinarId`, `instituteId`, `title`, `description`, `date`,`time`,`regDeadline`,`webinarLink`,`status`,`coinValue`) VALUES (NULL, :instituteId, :title, :description, :date, :time, :regDeadline, :webinarLink, :status, :coinValue)";
$stmt = $conn->prepare($query);
$stmt->bindParam(':instituteId', $Instituteid);
$stmt->bindParam(':title', $title);
$stmt->bindParam(':description', $description);
$stmt->bindParam(':date', $date);
$stmt->bindParam(':time', $time);
$stmt->bindParam(':regDeadline', $regDeadline);
$stmt->bindParam(':webinarLink', $webinarLink);
$stmt->bindParam(':status', $Status);
$stmt->bindParam(':coinValue', $coinValue);

if ($stmt->execute()) {
    echo 'webinar added successfully';
} else {
    echo "Error creating record: " . $stmt->errorInfo()[2];
}

// Close the statement
$stmt = null;
//header("Location: ../Dashboards/AdminDashboard.php");
