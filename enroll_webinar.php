<?php
session_start(); 

require_once './classes/DBConnector.php';
use classes\DBConnector;

if(isset($_POST["webinar_id"])){
    $web_id = $_POST["webinar_id"];
    $studentId = $_SESSION["user_studentId"];

    $con = DBConnector::getConnection();
    $cquery = "SELECT * FROM webinarstudent WHERE webinarId = ? AND studentId = ?";
    $cpstmt = $con->prepare($cquery);
    $cpstmt->bindValue(1, $web_id);
    $cpstmt->bindValue(2, $studentId);
    $cpstmt->execute();

    if($cpstmt->rowCount() > 0) {
        echo "You have already enrolled in this webinar.";
   }else {
      $query = "INSERT INTO webinarstudent(webinarId,studentId) VALUES(?,?)";
      $pstmt = $con->prepare($query);
      $pstmt->bindValue(1,$web_id);
      $pstmt->bindValue(2,$studentId);
    
      if($pstmt->execute()){
        echo "Enrollement successful!";
      }else{
        echo "Enrollement Failed";
      }
   }
}



