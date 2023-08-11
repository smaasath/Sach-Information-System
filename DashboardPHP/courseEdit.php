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


   
    $staffId = sanitizeInput($_POST["staffId"]);
    $courseName = sanitizeInput($_POST["courseName"]);
    $credits = sanitizeInput($_POST["credits"]);
    $CourseID = sanitizeInput($_POST["courseID"]);
}


include '../DashboardPHP/connection.php';

// Construct and execute the query using a prepared statement
$sqlcourse = "UPDATE `course` SET `staffId` = :staffId, `courseName` = :courseName, `credits` = :credits WHERE `courseId` = :course_id";
$stmt = $conn->prepare($sqlcourse);
$stmt->bindParam(':staffId', $staffId);
$stmt->bindParam(':courseName', $courseName);
$stmt->bindParam(':credits', $credits);
$stmt->bindParam(':course_id', $CourseID);


if ($stmt->execute()) {
    echo "Course recordeeee updated successfully".$CourseID;
} else {
    echo "Error updating course record: " . $stmt->errorInfo()[2];
}

 header("Location: ../Dashboards/AdminDashboard.php");