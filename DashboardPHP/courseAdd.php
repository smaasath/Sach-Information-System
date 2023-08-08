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


    $degreeId = sanitizeInput($_POST["degreeId"]);
    $staffId = sanitizeInput($_POST["staffId"]);
    $acedemicYear = sanitizeInput($_POST["acedemicYear"]);
    $courseName = sanitizeInput($_POST["courseName"]);
    $credits = sanitizeInput($_POST["credits"]);
    $Instituteid = sanitizeInput($_POST["Instituteid"]);
}


include '../DashboardPHP/connection.php';

// Construct and execute the query using a prepared statement
$query = "INSERT INTO `course` (`courseId`, `staffId`, `degreeId`, `InstituteId10`, `courseName`,`academicYear`,`credits`) VALUES (NULL, :staffId, :degreeId, :InstituteId10, :courseName, :academicYear, :credits)";
$stmt = $conn->prepare($query);
$stmt->bindParam(':staffId', $staffId);
$stmt->bindParam(':degreeId', $degreeId);
$stmt->bindParam(':InstituteId10', $Instituteid);
$stmt->bindParam(':courseName', $courseName);
$stmt->bindParam(':academicYear', $acedemicYear);
$stmt->bindParam(':credits', $credits);

if ($stmt->execute()) {
    $course_id = $conn->lastInsertId();
    echo "New course created successfully" . $course_id;

    $queryGetTable = "SELECT studentID from student WHERE instituteId= :userID || degreeId= :degreeId || acedemicYear= :acedemicYear";

// Prepare and execute the query using a prepared statement
    $stmtGetTable = $conn->prepare($queryGetTable);
    $stmtGetTable->bindParam(':userID', $Instituteid, PDO::PARAM_INT);
    $stmtGetTable->bindParam(':degreeId', $degreeId, PDO::PARAM_INT);
    $stmtGetTable->bindParam(':acedemicYear', $acedemicYear, PDO::PARAM_INT);

    $stmtGetTable->execute();

    if ($stmtGetTable) {
        // Fetch results
        $resultTable = $stmtGetTable->fetchAll(PDO::FETCH_ASSOC);

        if ($resultTable) {
            // Output data of each row
            foreach ($resultTable as $rowtable) {

                $query = "INSERT INTO `coursestudent` (`courseId`, `studentId`) VALUES (:courseId, :studentId)";
                $stmt = $conn->prepare($query);
                $stmt->bindParam(':courseId', $course_id);
                $stmt->bindParam(':studentId', $rowtable["studentID"]);
                $stmt->execute();
            }
        }
    }
} else {
    echo "Error creating record: " . $stmt->errorInfo()[2];
}

// Close the statement
$stmt = null;
