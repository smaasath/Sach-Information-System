<?php
require_once './classes/DBConnector.php';

use classes\DBConnector;

$con = DBConnector::getConnection();
$query = "SELECT * FROM webinar";

try {
    $pstmt = $con->query($query);
    $pstmt->execute();
} catch (PDOException $e) {
    die("Error in database: " . $e->getMessage());
}


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="CSS/StudentDashboard.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!--jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <title>Webinar Page</title>
</head>

<body>
    <style>
        .image-container {
            position: relative;
            height: 480px;
        }

        .image-container img {
            object-fit: cover;
            height: 100%;
            width: 100%;
        }

        .text-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 24px;
            text-align: center;

        }

        .darken-image {
            filter: brightness(60%);
        }

        .last-para {
            color: white;
        }

        .icon {
            color: white;
        }

        a.last-para:hover {
            color: #19a7cd;
            text-decoration: none;
        }

        .course-btn {
            color: white;
            background-color: rgb(20, 108, 148);
            height: 38px;
            width: 70px;
            border-radius: 5px;
        }

        .card {
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
            overflow: hidden;
            border-radius: 15px;
        }

        .centered-text {
            text-align: center;
        }
    </style>

    <!--icon css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>SACH Student Information System</title>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white m-0">
                        <a class="navbar-brand" href="#">
                            <img src="./Images/Logo.png" width="70" height="70" alt="logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php" style="color:rgb(20, 108, 148)">Home<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about us page\about us.html" style="color:rgb(20, 108, 148)">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="WebinarHome.php" style="color:rgb(20, 108, 148)">Webinar</a>
                                </li>
                                <form class="form-inline my-2 my-lg-0" action="LOGIN\Login.php" method="get">
                                    <button class="btn btn my-2 my-sm-0" type="submit" style="color:white;background-color: rgb(20, 108, 148);">Log In</button>
                                </form>

                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <div class="container-fluid p-0 mt-2">
            <div class="row">
                <div class="col-md-12">
                    <div class="image-container">
                        <img src="https://images.ctfassets.net/2htm8llflwdx/6LK9MCbEafyPhE3YB5HLW0/c0fe08b894d0cff8a6838f9172d1a61c/Graduation_StudentsGroup_Smiling_Outdoor_GettyImages-907837926.jpg" alt="Background Image" class="img-fluid darken-image">
                        <div class="text-overlay mt-5 pt-5">
                            <h4 class="">PROFESSIONAL DEVELOPMENT WEBINARS</h4>
                            <p><small>Explore our comprehensive educational resources and unlock a world of knowledge.</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <br>

        <div class="container mt-4 mb-5">
            <div class="row equal-height-cards">
                <?php
                if ($pstmt->rowCount() > 0) {
                    while ($webiarRow = $pstmt->fetch(PDO::FETCH_ASSOC)) {
                        $webinar_id = $webiarRow["webinarId"];
                        $webinar_title = $webiarRow["title"];
                        $webinar_description = $webiarRow["description"];
                        $coinValue = $webiarRow["coinValue"];

                        echo '<div class="col-lg-4 mt-2 mb-4 ">';
                        echo '<div class="card rounded-4 web backcolor d-flex flex-column h-100" style="width: 22rem;">';
                        echo ' <div class="card-body d-flex flex-column">';
                        echo '<h5 class="card-title"><b>' . $webinar_title . '</b></h5>';
                        echo '<p class="card-text flex-grow-1">' . $webinar_description . '</p>';

                        echo '<div class="row">';
                        echo '<div class="col-8">';
                        echo '<div class="shadow p-3 mb-4 rounded-3" style="background-color: #64CCC5;">';
                        echo '<div class="row align-items-center">';
                        echo '<div class="col-3">';
                        echo '<i class="fa-solid fa-coins fa-2xl" style="color: white;"></i>';
                        echo ' </div>';
                        echo '<div class="col-9" style="color: white;">';
                        echo '<h4>' . $coinValue . '</h4>';
                        echo ' </div>';
                        echo ' </div>';
                        echo ' </div>';
                        echo ' </div>';

                        echo '<div class="col-4">';
                        echo '<div class="row p-2">';
                        echo '<a href="#" class="btn card-link bgcol custom-view-button" data-bs-toggle="modal" data-bs-target="#webinardetail1" data-webinar-id="' . $webinar_id . '">View</a>';
                        echo '</div>';
                        echo '<div class="row p-2">';
                        echo '<a href="#" class="btn card-link bgcol custom-enroll-button" data-webinar-id="' . $webinar_id . '">Enroll</a>';
                        echo ' </div>';
                        echo ' </div>';
                        echo ' </div>';
                        echo ' </div>';
                        echo ' </div>';
                        echo ' </div>';
                    }
                }
                ?>


                <!-- Webinar Details Modal -->
                <div class="modal fade" id="webinardetail1" tabindex="-1" aria-labelledby="webinardetail1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="webinardetail1">Webinar Details</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Webinar Details Modal -->

                <script>
                    $('a.custom-view-button').click(function() {
                        var webinarId = $(this).attr('data-webinar-id');
                        $.ajax({
                            url: "get_webinar_details.php",
                            method: 'POST',
                            data: {
                                webinar_id: webinarId
                            },
                            success: function(result) {
                                $(".modal-body").html(result);
                                $('#webinardetail1').modal("show");
                            }
                        });

                    });

                    $('a.custom-enroll-button').click(function() {
                        var webinarId = $(this).attr('data-webinar-id');
                        $.ajax({
                            url: "enroll_webinar.php", 
                            method: 'POST',
                            data: {
                                webinar_id: webinarId
                            },
                            success: function(response) {
                                alert(response); 
                            }
                        });
                    });
                </script>
    </body>

</html>