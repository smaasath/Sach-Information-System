<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

function sanitizeInput($input) {
return htmlspecialchars(trim($input));
}

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {


$instituteId = sanitizeInput($_POST["instituteId"]);
$instituteName = sanitizeInput($_POST["instituteName"]);
$Address = sanitizeInput($_POST["Address"]);
$phoneNo = sanitizeInput($_POST["phoneNo"]);
$mission = sanitizeInput($_POST["mission"]);
$vission = sanitizeInput($_POST["vission"]);
$email = sanitizeInput($_POST["email"]);




include '../DashboardPHP/connection.php';
if($_POST["Logo"]==null){
    $query = "UPDATE `institute` SET `instituteName` = :instituteName, `Address` = :Address, `phoneNo` = :phoneNo, `mission` = :mission, `vission` = :vission  WHERE `instituteId` = :instituteId";

$stmt = $conn->prepare($query);

// Bind parameters
$stmt->bindParam(':instituteId', $instituteId);
$stmt->bindParam(':instituteName', $instituteName);
$stmt->bindParam(':Address', $Address);
$stmt->bindParam(':phoneNo', $phoneNo);
$stmt->bindParam(':mission', $mission);
$stmt->bindParam(':vission', $vission);

if ($stmt->execute()) {
$ins_id = $conn->lastInsertId();
echo "New record created successfully with ID: " . $ins_id;
} else {
echo "Error creating record: " . $stmt->errorInfo()[2];
}
} else {
    
$Logo = file_get_contents($_FILES['Logo']['tmp_name']); 
// Construct and execute the query using a prepared statement
$query = "UPDATE `institute` SET `instituteName` = :instituteName, `Address` = :Address, `phoneNo` = :phoneNo, `Logo` = :Logo, `mission` = :mission, `vission` = :vission  WHERE `instituteId` = :instituteId";

$stmt = $conn->prepare($query);

// Bind parameters
$stmt->bindParam(':instituteId', $instituteId);
$stmt->bindParam(':instituteName', $instituteName);
$stmt->bindParam(':Address', $Address);
$stmt->bindParam(':phoneNo', $phoneNo);
$stmt->bindParam(':Logo', $Logo, PDO::PARAM_LOB);
$stmt->bindParam(':mission', $mission);
$stmt->bindParam(':vission', $vission);

if ($stmt->execute()) {
$ins_id = $conn->lastInsertId();
echo "New record created successfully with ID: " . $ins_id;
} else {
echo "Error creating record: " . $stmt->errorInfo()[2];
}


// Close the statement
$stmt = null;
}


// Update user data using a prepared statement
$sqlUser = "UPDATE `user` SET `email` = :email WHERE `institutetId` = :institutetId";
$stmtUser = $conn->prepare($sqlUser);

$email = "new@example.com"; // Replace with the actual email
$instituteId = 123; // Replace with the actual institute ID

$stmtUser->bindParam(':email', $email);
$stmtUser->bindParam(':institutetId', $instituteId);

if ($stmtUser->execute()) {
    echo "User record updated successfully";
} else {
    echo "Error updating user record: " . $stmtUser->errorInfo()[2];
}






// Close the statement
$stmtUser = null;

}



header("Location: ../Dashboards/SuperAdminDashboard.php");

