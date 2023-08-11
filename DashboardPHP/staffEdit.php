<?php

function sanitizeInput($input) {
    return htmlspecialchars(trim($input));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {



    $id = sanitizeInput($_POST["staffId"]);
    $staffName = sanitizeInput($_POST["staffName"]);
    $staffContactNum = sanitizeInput($_POST["phoneNo"]);
    $staffEmail = sanitizeInput($_POST["email"]);
    $staffPosition = sanitizeInput($_POST["position"]);

    include 'connection.php';

    // Update student data using a prepared statement
    $sqlStaff = "UPDATE `staff` SET `staffName` = :staffName, `position` = :position, `phoneNo` = :phoneNo  WHERE `staffId` = :id";
    $stmt = $conn->prepare($sqlStaff);
    $stmt->bindParam(':staffName', $staffName);
    $stmt->bindParam(':position', $staffPosition);
    $stmt->bindParam(':phoneNo', $staffContactNum);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        echo "Student record updated successfully";
    } else {
        echo "Error updating student record: " . $stmt->errorInfo()[2];
    }

// Update user data using a prepared statement
    $sqlUser = "UPDATE `user` SET `email` = :email WHERE `staffId` = :id";
    $stmtUser = $conn->prepare($sqlUser);
    $stmtUser->bindParam(':email', $staffEmail);
    $stmtUser->bindParam(':id', $id);

    if ($stmtUser->execute()) {
        echo "User record updated successfully";
    } else {
        echo "Error updating user record: " . $stmtUser->errorInfo()[2];
    }





    header("Location: ../Dashboards/AdminDashboard.php");
}



