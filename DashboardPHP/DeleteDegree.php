<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

if (isset($_POST["degreeId"])) {
    include '../DashboardPHP/connection.php';
    
    if (isset($_POST["degreeId"])) {
    include '../DashboardPHP/connection.php';

    // Delete degree data using a prepared statement
    $sql = "DELETE FROM `degree` WHERE `degreeId` = :degreeId";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':degreeId', $_POST["degreeId"], PDO::PARAM_INT);

    if ($stmt->execute()) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $stmt->errorInfo()[2];
    }
}

}
