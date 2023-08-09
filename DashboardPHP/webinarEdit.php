<?php
// ... (Previous code)
function sanitizeInput($input) {
    return htmlspecialchars(trim($input));
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize form inputs
    $title = sanitizeInput($_POST['title']);
    $Status = sanitizeInput($_POST["Status"]);
    $description = sanitizeInput($_POST["description"]);
    $date = sanitizeInput($_POST["date"]);
    $time = sanitizeInput($_POST["time"]);
    $regDeadline = sanitizeInput($_POST["regDeadline"]);
    $webinarLink = sanitizeInput($_POST["webinarLink"]);
    $coinValue = sanitizeInput($_POST["coinValue"]);
    $webinarId = sanitizeInput($_POST["webinarId"]);
   
    include '../DashboardPHP/connection.php';

    // Construct and execute the query using a prepared statement
    $query = "UPDATE `webinar` SET `title` = :title, `description` = :description, `date` = :date, `time` = :time, `regDeadline` = :regDeadline, `webinarLink` = :webinarLink, `status` = :status, `coinValue` = :coinValue WHERE `webinarId` = :webinarId";
 
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':date', $date);
    $stmt->bindParam(':time', $time);
    $stmt->bindParam(':regDeadline', $regDeadline);
    $stmt->bindParam(':webinarLink', $webinarLink);
    $stmt->bindParam(':status', $Status);
    $stmt->bindParam(':coinValue', $coinValue);
    $stmt->bindParam(':webinarId', $webinarId); // Bind the webinarId parameter

    if ($stmt->execute()) {
        echo 'Webinar updated successfully';
    } else {
        echo "Error updating record: " . $stmt->errorInfo()[2];
    }

    // Close the statement
    $stmt = null;
}
header("Location: ../Dashboards/AdminDashboard.php");
?>
