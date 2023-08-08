<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

if (isset($_POST["courseId"])) {
    include '../DashboardPHP/connection.php';
    $courseId = $_POST["courseId"]; // Assuming you have the student ID from the form
// Delete student data using a prepared statement
    $sqlcourse = "DELETE FROM `course` WHERE `courseId` = :courseId";
    $sqlCourseStudent = "DELETE FROM `coursestudent` WHERE `courseId` = :courseId";
    $stmtCourse = $conn->prepare($sqlcourse);
    $stmtCourse->bindParam(':courseId', $courseId, PDO::PARAM_INT);

    if ($stmtCourse->execute()) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $stmtCourse->errorInfo()[2];
    }
    
    $stmtCourseStudent = $conn->prepare($sqlCourseStudent);
    $stmtCourseStudent->bindParam(':courseId', $courseId, PDO::PARAM_INT);

    if ($stmtCourseStudent->execute()) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $stmtCourseStudent->errorInfo()[2];
    }

// Close the statement
    $stmtStudent = null;
   
}