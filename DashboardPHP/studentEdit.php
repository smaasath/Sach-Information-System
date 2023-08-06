<?php


function sanitizeInput($input) {
    return htmlspecialchars(trim($input));
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {



    $id=sanitizeInput($_POST["std_id"]);
    $studentName = sanitizeInput($_POST["studentName"]);
    $entrlmentNumber = sanitizeInput($_POST["entrlmentNumber"]);
    $DOB = sanitizeInput($_POST["DOB"]);
    $studentContactNum = sanitizeInput($_POST["studentContactNum"]);
    $studentEmail = sanitizeInput($_POST["studentEmail"]);
    $studentAddress = sanitizeInput($_POST["studentAddress"]);
    $userName = sanitizeInput($_POST["userName"]);
    
    









    include 'connection.php';

    $sqlStudent = "UPDATE `student` SET `studentName` = '$studentName',`entrollmentNumber` = '$entrlmentNumber',`studentDOB` = '$DOB',`address` = '$studentAddress',`phoneNo` = '$studentContactNum' WHERE `studentID` =".$id;

    if (mysqli_query($conn, $sqlStudent)) {
        $student_id = $conn->insert_id;
        echo "New record created successfully" . $student_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    
      $sqluser = "UPDATE `user` SET `userName` = '$userName',`email` = '$studentEmail'  WHERE `studentID` =" .$id;

    if (mysqli_query($conn, $sqluser)) {

        echo "user created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}




header("Location: ../Dashboards/AdminDashboard.php");







