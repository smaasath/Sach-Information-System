<?php

function sanitizeInput($input) {
    return htmlspecialchars(trim($input));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {



    $id = sanitizeInput($_POST["std_id"]);
    $studentName = sanitizeInput($_POST["studentName"]);
    $entrollmentNumber = sanitizeInput($_POST["entrollmentNumber"]);
    $DOB = sanitizeInput($_POST["DOB"]);
    $studentContactNum = sanitizeInput($_POST["studentContactNum"]);
    $studentEmail = sanitizeInput($_POST["studentEmail"]);
    $studentAddress = sanitizeInput($_POST["studentAddress"]);
    $userName = sanitizeInput($_POST["userName"]);

    include 'connection.php';

    // Update student data using a prepared statement
    $sqlStudent = "UPDATE `student` SET `studentName` = :studentName, `entrollmentNumber` = :entrollmentNumber, `studentDOB` = :DOB, `address` = :studentAddress, `phoneNo` = :studentContactNum WHERE `studentID` = :id";
    $stmtStudent = $conn->prepare($sqlStudent);
    $stmtStudent->bindParam(':studentName', $studentName);
    $stmtStudent->bindParam(':entrollmentNumber', $entrollmentNumber);
    $stmtStudent->bindParam(':DOB', $DOB);
    $stmtStudent->bindParam(':studentAddress', $studentAddress);
    $stmtStudent->bindParam(':studentContactNum', $studentContactNum);
    $stmtStudent->bindParam(':id', $id);

    if ($stmtStudent->execute()) {
        echo "Student record updated successfully";
    } else {
        echo "Error updating student record: " . $stmtStudent->errorInfo()[2];
    }

// Update user data using a prepared statement
    $sqlUser = "UPDATE `user` SET `userName` = :userName, `email` = :studentEmail WHERE `studentID` = :id";
    $stmtUser = $conn->prepare($sqlUser);
    $stmtUser->bindParam(':userName', $userName);
    $stmtUser->bindParam(':studentEmail', $studentEmail);
    $stmtUser->bindParam(':id', $id);

    if ($stmtUser->execute()) {
        echo "User record updated successfully";
    } else {
        echo "Error updating user record: " . $stmtUser->errorInfo()[2];
    }





    header("Location: ../Dashboards/AdminDashboard.php");
}



