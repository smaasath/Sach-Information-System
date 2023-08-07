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
    $degree = sanitizeInput($_POST["degree"]);
    $studentName = sanitizeInput($_POST["studentName"]);
    $entrlmentNumber = sanitizeInput($_POST["entrlmentNumber"]);
    $accedamicYear = sanitizeInput($_POST["accedamicYear"]);
    $DOB = sanitizeInput($_POST["DOB"]);
    $studentContactNum = sanitizeInput($_POST["studentContactNum"]);
    $studentEmail = sanitizeInput($_POST["studentEmail"]);
    $gender = sanitizeInput($_POST["gender"]);
    $studentAddress = sanitizeInput($_POST["studentAddress"]);
    $userName = sanitizeInput($_POST["userName"]);
    $password = $_POST["password"];
    $guardianName = sanitizeInput($_POST["guardianName"]);
    $guardianRelation = sanitizeInput($_POST["guardianRelation"]);
    $guardianContactNum = sanitizeInput($_POST["guardianContactNum"]);
    $guardianEmail = sanitizeInput($_POST["guardianEmail"]);
    $guardianAddress = sanitizeInput($_POST["guardianAddress"]);
    $guardianOccupation = sanitizeInput($_POST["guardianOccupation"]);
}
$passwordch = htmlentities($password);
// Hash the password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
echo $passwordch;

include '../DashboardPHP/connection.php';

// Construct and execute the query using a prepared statement
$query = "SELECT instituteName FROM institute WHERE instituteId = :instituteId";
$stmt = $conn->prepare($query);
$stmt->bindParam(':instituteId', $InstituteId, PDO::PARAM_INT);
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
    $mail->addAddress($studentEmail);     //Add a recipient             //Name is optional
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Student Registration';
    $message = "Dear " . $studentName . ",<br><br>";
    $message .= "You are registered into " . $InstituteName . " via Sachini Information System.<br><br>";
    $message .= "Your User Name & password for the System is Given Below <br><br>";
    $message .= "Your User Name :  " . $userName . "<br><br>";
    $message .= "Your password :  " . $passwordch . "<br><br>";
    $message .= "Regards," . "<br>";
    $message .= "Sach Infomation System" . "<br>";

    $mail->Body = $message;

    $mail->send();

    include '../DashboardPHP/connection.php';

    // Construct and execute the query using a prepared statement
    $query = "INSERT INTO `student` (`studentID`, `instituteId`, `degreeId`, `studentName`, `entrollmentNumber`, `studentDOB`, `gender`, `address`, `phoneNo`, `coinValue`, `acedemicYear`) VALUES (NULL, :instituteID, :degreeID, :studentName, :entrollmentNumber, :DOB, :gender, :studentAddress, :studentContactNum, '100', :accedamicYear)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':instituteID', $Instituteid);
    $stmt->bindParam(':degreeID', $degree);
    $stmt->bindParam(':studentName', $studentName);
    $stmt->bindParam(':entrollmentNumber', $entrlmentNumber);
    $stmt->bindParam(':DOB', $DOB);
    $stmt->bindParam(':gender', $gender);
    $stmt->bindParam(':studentAddress', $studentAddress);
    $stmt->bindParam(':studentContactNum', $studentContactNum);
    $stmt->bindParam(':accedamicYear', $accedamicYear);

    if ($stmt->execute()) {
        $student_id = $conn->lastInsertId();
        echo "New record created successfully" . $student_id;
    } else {
        echo "Error creating record: " . $stmt->errorInfo()[2];
    }

// Close the statement
    $stmt = null;

    // Construct and execute the query using a prepared statement
    $queryGuardian = "INSERT INTO `guardian` (`guardianId`, `studentID`, `name`, `relationShip`, `email`, `phoneNo`, `address`, `occupation`) "
            . "VALUES (NULL, :studentID, :guardianName, :guardianRelation, :guardianEmail, :guardianContactNum, :guardianAddress, :guardianOccupation)";
    $stmtGuardian = $conn->prepare($queryGuardian);
    $stmtGuardian->bindParam(':studentID', $student_id);
    $stmtGuardian->bindParam(':guardianName', $guardianName);
    $stmtGuardian->bindParam(':guardianRelation', $guardianRelation);
    $stmtGuardian->bindParam(':guardianEmail', $guardianEmail);
    $stmtGuardian->bindParam(':guardianContactNum', $guardianContactNum);
    $stmtGuardian->bindParam(':guardianAddress', $guardianAddress);
    $stmtGuardian->bindParam(':guardianOccupation', $guardianOccupation);

    if ($stmtGuardian->execute()) {
        echo "Guardian created successfully";
    } else {
        echo "Error creating guardian: " . $stmtGuardian->errorInfo()[2];
    }

// Close the statement
    $stmtGuardian = null;

// Construct and execute the query using a prepared statement
    $queryUser = "INSERT INTO `user` (`uderId`, `userName`, `institutetId`, `studentId`, `staffId`, `Password`, `email`, `Role`) "
            . "VALUES (NULL, :userName, NULL, :studentID, NULL, :hashedPassword, :studentEmail, '4')";
    $stmtUser = $conn->prepare($queryUser);
    $stmtUser->bindParam(':userName', $userName);
    $stmtUser->bindParam(':studentID', $student_id);
    $stmtUser->bindParam(':hashedPassword', $hashedPassword);
    $stmtUser->bindParam(':studentEmail', $studentEmail);

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

