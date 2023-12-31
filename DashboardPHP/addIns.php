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



    $instituteName = sanitizeInput($_POST["instituteName"]);
    $Address = sanitizeInput($_POST["Address"]);
    $phoneNo = sanitizeInput($_POST["phoneNo"]);
    $Logo = file_get_contents($_FILES['Logo']['tmp_name']); 
    $mission = sanitizeInput($_POST["mission"]);
    $vission = sanitizeInput($_POST["vission"]);
    $userName = sanitizeInput($_POST["userName"]);
    $Password = sanitizeInput($_POST["Password"]);
    $email = sanitizeInput($_POST["email"]);
}
$passwordch = htmlentities($Password);
// Hash the password
$hashedPassword = password_hash($Password, PASSWORD_BCRYPT);
echo $passwordch;

include '../DashboardPHP/connection.php';



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
    $mail->setFrom('sachinformationsystem@gmail.com');
    $mail->addAddress($email);     //Add a recipient             //Name is optional
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Institute Registration';
    $message = "Dear " . $instituteName . ",<br><br>";
    $message .= "You are registered into  Sachini Information System As a Institute.<br><br>";
    $message .= "Your User Name & password for the System is Given Below <br><br>";
    $message .= "Your User Name :  " . $userName . "<br><br>";
    $message .= "Your password :  " . $passwordch . "<br><br>";
    $message .= "Regards," . "<br>";
    $message .= "Sach Infomation System" . "<br>";

    $mail->Body = $message;

    $mail->send();

    include '../DashboardPHP/connection.php';

    // Construct and execute the query using a prepared statement
   $query = "INSERT INTO `institute` (`instituteName`, `Address`, `phoneNo`, `Logo`, `mission`, `vission`) VALUES (:instituteName, :Address, :phoneNo, :Logo, :mission, :vission)";
$stmt = $conn->prepare($query);

// Bind parameters
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

    // Prepare the SQL query
    $sqluser = "INSERT INTO `user` (`uderId`, `userName`, `institutetId`, `studentId`, `staffId`, `Password`, `email`, `Role`) "
            . "VALUES (NULL, :userName, :ins_id, NULL,NULL, :hashedPassword, :email, '2')";
    $stmtUser = $conn->prepare($sqluser);

    // Bind parameters
    $stmtUser->bindParam(':userName', $userName);
    $stmtUser->bindParam(':ins_id', $ins_id);
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




header("Location: ../Dashboards/SuperAdminDashboard.php");

