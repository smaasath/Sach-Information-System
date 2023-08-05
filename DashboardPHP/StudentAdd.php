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

$query = "SELECT instituteName FROM institute WHERE instituteId=$Instituteid";
$result = $conn->query($query);
if (!$result) {
    die("Query failed: " . $conn->error);
}

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $instituteName = $row["instituteName"];
}

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
    $message .= "You are registered into " . $instituteName . " via Sachini Information System.<br><br>";
    $message .= "Your User Name & password for the System is Given Below <br><br>";
    $message .= "Your User Name :  " . $userName . "<br><br>";
    $message .= "Your password :  " . $passwordch . "<br><br>";
    $message .= "Regards," ."<br>";
    $message .= "Sach Infomation System" ."<br>";

    $mail->Body = $message;

    $mail->send();

    include '../DashboardPHP/connection.php';

    $sqlStudent = "INSERT INTO `student` (`studentID`, `instituteId`, `degreeId`, `studentName`, `entrollmentNumber`, `studentDOB`, `gender`, `address`, `phoneNo`, `coinValue`, `acedemicYear`) VALUES (NULL, '$Instituteid', '$degree', '$studentName', '$entrlmentNumber', '$DOB', '$gender', '$studentAddress', '$studentContactNum','100', '$accedamicYear')";

    if (mysqli_query($conn, $sqlStudent)) {
        $student_id = $conn->insert_id;
        echo "New record created successfully" . $student_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    $sqlgurdian = "INSERT INTO `guardian` (`guardianId`, `studentID`, `name`, `relationShip`, `email`, `phoneNo`, `address`, `occupation`) "
            . "VALUES (NULL, '$student_id', '$guardianName', '$guardianRelation', '$guardianEmail', '$guardianContactNum', '$guardianAddress', '$guardianOccupation')";

    if (mysqli_query($conn, $sqlgurdian)) {

        echo "guadian created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
      $sqluser = "INSERT INTO `user` (`uderId`, `userName`, `institutetId`, `studentId`, `staffId`, `Password`, `email`, `Role`) "
              . "VALUES (NULL, '$userName', NULL, '$student_id', NULL, '$hashedPassword', '$studentEmail', '4')";

    if (mysqli_query($conn, $sqluser)) {

        echo "user created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}




header("Location: ../Dashboards/AdminDashboard.php");
?>





