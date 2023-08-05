<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $instituteName = $_POST["instituteName"];
    $Instituteid = $_POST["Instituteid"];
    $degree = $_POST["degree"];
    $studentName = $_POST["studentName"];
    $entrlmentNumber = $_POST["entrlmentNumber"];
    $accedamicYear = $_POST["accedamicYear"];
    $DOB = $_POST["DOB"];
    $studentContactNum = $_POST["studentContactNum"];
    $studentEmail = $_POST["studentEmail"];
    $gender = $_POST["gender"];
    $studentAddress = $_POST["studentAddress"];
    $userName = $_POST["userName"];
    $password = $_POST["password"];
    $guardianName = $_POST["guardianName"];
    $guardianRelation = $_POST["guardianRelation"];
    $guardianContactNum = $_POST["guardianContactNum"];
    $guardianEmail = $_POST["guardianEmail"];
    $guardianAddress = $_POST["guardianAddress"];
    $guardianOccupation = $_POST["guardianOccupation"];
}

echo $instituteName;

include '../DashboardPHP/connection.php';

$sqlStudent = "INSERT INTO `student` (`studentID`, `instituteId`, `degreeId`, `studentName`, `entrollmentNumber`, `studentDOB`, `gender`, `address`, `phoneNo`, `coinValue`, `acedemicYear`) VALUES (NULL, '$Instituteid', '$degree', '$studentName', '$entrlmentNumber', '$DOB', '$gender', '$studentAddress', '$studentContactNum','100', '$accedamicYear')";

if (mysqli_query($conn, $sqlStudent)) {
    $student_id = $conn->insert_id;
    echo "New record created successfully" . $student_id;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sqlgurdian ="INSERT INTO `guardian` (`guardianId`, `studentID`, `name`, `relationShip`, `email`, `phoneNo`, `address`, `occupation`) "
        . "VALUES (NULL, '$student_id', '$guardianName', '$guardianRelation', '$guardianEmail', '$guardianContactNum', '$guardianAddress', '$guardianOccupation')";

if (mysqli_query($conn, $sqlgurdian)) {
   
    echo "guadian created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



//header("Location: ../Dashboards/AdminDashboard.php");
?>



<html>
  <head>
    <title>Test</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <body>
    

<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../mail/Exception.php';
require '../mail/PHPMailer.php';
require '../mail/SMTP.php';







//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
//ast_123_
try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'sachinformationsystem@gmail.com';                     //SMTP username
    $mail->Password   = 'upyjmbtlcfckzoke';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('aststore39@gmail.com');
    $mail->addAddress($studentEmail);     //Add a recipient             //Name is optional


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Student Registration';
    $mail->Body    = "Dear ".$studentName.","."<br> You Are Register into".$instituteName." Via Sachini Information System"
            . "<br> Here Your Details are Attached which are ebtered by the".$instituteName." Admin"
            . "<br> Name:".$studentName.""
            . "<br> Entrollment Number:".$entrlmentNumber.""
            . "<br> DOB:".$DOB.""
            . "<br> Gender:".$gender.""
            . "<br> Address:".$studentAddress.""
            . "<br> Phone Number:".$studentContactNum.""
            . "<br> User Name:".$userName.""
            . "<br> Password:".$password.""
            . "<br>"
            . "If you Need Any changes On this Details Please Contact Your University Admin"
            . "<br> ThankYou!"
            . "<br> Regards,"
            . "<br> Sach Information System";

    $mail->send();
    ?>
   
    <?php

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    ?>
   
    <?php
}
?>

  </body>
</html>