<?php

// ... (Previous code)
function sanitizeInput($input) {
    return htmlspecialchars(trim($input));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize form inputs
    $degreeId = sanitizeInput($_POST['degreeId']);
    $degreeName = sanitizeInput($_POST["degreeName"]);

    include '../DashboardPHP/connection.php';

// Construct and execute the query using a prepared statement
    $query = "UPDATE `degree` SET `degreeName` = :degreeName WHERE `degreeId` = :degreeId";

    $stmt = $conn->prepare($query);
    $stmt->bindParam(':degreeName', $degreeName);
    $stmt->bindParam(':degreeId', $degreeId); // Add this line

    if ($stmt->execute()) {
        echo 'Degree updated successfully';
    } else {
        echo "Error updating record: " . $stmt->errorInfo()[2];
    }

// Close the statement
    $stmt = null;
}
header("Location: ../Dashboards/AdminDashboard.php");
?>
