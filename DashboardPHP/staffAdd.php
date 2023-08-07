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


    $Instituteid = sanitizeInput($_POST["Instituteid"]);
    $staffName = sanitizeInput($_POST["staffName"]);
    $phoneNo = sanitizeInput($_POST["phoneNo"]);
    $email = sanitizeInput($_POST["email"]);
    $position = sanitizeInput($_POST["position"]);
    $userName = sanitizeInput($_POST["userName"]);
    $Password = sanitizeInput($_POST["Password"]);
}
$passwordch = htmlentities($Password);
// Hash the password
$hashedPassword = password_hash($Password, PASSWORD_BCRYPT);
echo $passwordch;

include '../DashboardPHP/connection.php';

// Construct and execute the query using a prepared statement
$query = "SELECT instituteName FROM institute WHERE instituteId = :instituteId";
$stmt = $conn->prepare($query);
$stmt->bindParam(':instituteId', $Instituteid, PDO::PARAM_INT);
$stmt->execute();

if ($stmt) {
    // Fetch the institute name
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        $InstituteName = $row["instituteName"];
    } else {
        echo "No institute found.";
    }
} else {
    echo "Query failed.";
}

// Close the statement
$stmt = null;

try {



    require '../mail/Exception.php';
    require '../mail/PHPMailer.php';
    require '../mail/SMTP.php';

//Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth = true;                                   //Enable SMTP authentication
    $mail->Username = 'sachinformationsystem@gmail.com';                     //SMTP username
    $mail->Password = 'upyjmbtlcfckzoke';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    //Recipients
    $mail->setFrom('aststore39@gmail.com');
    $mail->addAddress($email);     //Add a recipient             //Name is optional
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Staff Registration';
    $message = "Dear " . $staffName . ",<br><br>";
    $message .= "You are registered into " . $InstituteName . " via Sachini Information System As a .$position.<br><br>";
    $message .= "Your User Name & password for the System is Given Below <br><br>";
    $message .= "Your User Name :  " . $userName . "<br><br>";
    $message .= "Your password :  " . $passwordch . "<br><br>";
    $message .= "Regards," . "<br>";
    $message .= "Sach Infomation System" . "<br>";

    $mail->Body = $message;

    $mail->send();

    include '../DashboardPHP/connection.php';

    // Construct and execute the query using a prepared statement
    $query = "INSERT INTO `staff` (`staffId`, `staffName`, `position`, `phoneNo`, `institudeID`) VALUES (NULL, :staffName, :position, :phoneNo, :instituteID)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':instituteID', $Instituteid);
    $stmt->bindParam(':staffName', $staffName);
    $stmt->bindParam(':position', $position);
    $stmt->bindParam(':phoneNo', $phoneNo);

    if ($stmt->execute()) {
        $staff_id = $conn->lastInsertId();
        echo "New record created successfully" . $staff_id;
    } else {
        echo "Error creating record: " . $stmt->errorInfo()[2];
    }

// Close the statement
    $stmt = null;

    // Prepare the SQL query
    $sqluser = "INSERT INTO `user` (`uderId`, `userName`, `institutetId`, `studentId`, `staffId`, `Password`, `email`, `Role`) "
            . "VALUES (NULL, :userName, NULL, NULL,:staff_id, :hashedPassword, :email, '3')";
    $stmtUser = $conn->prepare($sqluser);

    // Bind parameters
    $stmtUser->bindParam(':userName', $userName);
    $stmtUser->bindParam(':staff_id', $staff_id);
    $stmtUser->bindParam(':hashedPassword', $hashedPassword);
    $stmtUser->bindParam(':email', $email);

    if ($stmtUser->execute()) {
        echo "User created successfully";
    } else {
        echo "Error creating user: " . $stmtUser->errorInfo()[2];
    }

// Close the statement
    $stmtUser = null;
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}




header("Location: ../Dashboards/AdminDashboard.php");

