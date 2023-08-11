<?php
require_once './classes/DBConnector.php';
use classes\DBConnector;


if(isset($_POST["webinar_id"]))  {
    $output = '';
    $web_id = $_POST["webinar_id"];

    $con = DBConnector::getConnection();
    $query = "SELECT * FROM webinar WHERE 	webinarId = ?";
    $pstmt = $con->prepare($query);
    $pstmt->bindValue(1,$web_id);
    $pstmt->execute(); 
 
    if ($pstmt->rowCount() > 0){
        $webinarData = $pstmt->fetch(PDO::FETCH_ASSOC);
            
        $webinar_id = $webinarData["webinarId"];
        $instituteId = $webinarData["instituteId"];
        $webinar_title = $webinarData["title"];
        $webinar_description = $webinarData["description"];
        $date = $webinarData["date"];
        $time = $webinarData["time"];
        $regDeadline = $webinarData["regDeadline"];
        $webinarLink = $webinarData["webinarLink"];
        $status = $webinarData["status"];
        $coinValue = $webinarData["coinValue"];

        $iquery = "SELECT instituteName FROM institute WHERE instituteId=?";
        $pstmt = $con->prepare($iquery);
        $pstmt->bindValue(1,$instituteId );
        $pstmt->execute();

        $institute_name = $pstmt->fetch(PDO::FETCH_ASSOC)['instituteName'];

        $output .= '
            <div class="container">

                <div class="row">
                    <div class="col-4">
                        <h6>Title</h6>
                    </div>
                    <div class="col-8">
                        <p>' . $webinar_title . '</p>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-4">
                        <h6>Institute</h6>
                    </div>
                    <div class="col-8">
                        <p>' . $institute_name . '</p>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-4">
                        <h6>Description</h6>
                    </div>
                    <div class="col-8">
                        <p>' . $webinar_description . '</p>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-4">
                        <h6>Link</h6>
                    </div>
                    <div class="col-8">
                        <p>' . $webinarLink . '</p>
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-4">
                        <h6>Date</h6>
                    </div>
                    <div class="col-8">
                        <p>' . $date . '</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <h6>Time</h6>
                    </div>
                    <div class="col-8">
                        <p>' . $time . '</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <h6>Registration Deadline</h6>
                    </div>
                    <div class="col-8">
                        <p>' . $regDeadline . '</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <h6>Recording</h6>
                    </div>
                    <div class="col-8">
                        <p>Available</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <h6>Status</h6>
                    </div>
                    <div class="col-8">
                        <p>' . $status . '</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <h6>Coin Value</h6>
                    </div>
                    <div class="col-8">
                        <p>' . $coinValue . '</p>
                    </div>
                </div>
            </div>
       


            '; 
            
    } 
    echo $output;  
}






