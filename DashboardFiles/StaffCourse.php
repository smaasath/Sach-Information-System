<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="../CSS/StudentDashboard.css">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

        <!--css-->
        <style>

        </style>

        <!--icon css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Staff Course</title>
    </head>
    <body>

        <?php
        include '../DashboardPHP/connection.php';

        $userID = $_COOKIE['staff_login'];
        ?> 

        <!--  nav bar start-->
        <div class="navbardah fixed-top d-flex flex-row-reverse">
            <a class="p-3" href="#" style="margin-right: 30px;">
                <i class="fa-solid fa-user fa-lg" style="color: #24457f;"></i>
            </a>

            <h6 class="p-3" href="#">
                User Name
            </h6>

            <div id="resimage" class="p-1 w-50 d-block d-sm-none">
                <a href="#">
                    <img src="../Images/Logo.png" alt="Home" class="img-fluid" style="width: 20%">
                </a>
            </div>
        </div>

        <!--  nav bar end-->




        <div class="container rounded-5 mt-5 shadow-sm p-3 mb-5 bgwebcour ">
            <div class="row">
                <div class="col-lg-9">
                    <h2><b>Lorem Ipsum is simply dummy text</b></h2>
                    <p class="mt-4">we are committed to providing exclusive access and tailored resources specifically designed to support and enhance the educational journey of students. Our platform is dedicated to empowering students by offering a comprehensive range of tools, information, and services necessary for their academic success.
                        Our student information system is designed with the purpose of enhancing the educational experience and empowering students to reach their full potential.
                    </p>
                </div>
                <div class="col-md-3 d-none d-sm-block">
                    <img src="../Images/studentdashboradhhomeimage.png" class="img-fluid w-100" alt="...">
                </div>
            </div>
        </div>



        <div class="container mt-4 mb-5">
            <div class="row">

                <?php
                $query = "SELECT * FROM course WHERE staffId = :staffId";
                $stmt = $conn->prepare($query);
                $stmt->bindParam(':staffId', $userID, PDO::PARAM_INT);
                $stmt->execute();

                if ($stmt) {
                    // Fetch results
                    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    if ($result) {
                        
                        // Output data of each row
                        foreach ($result as $row) {
                            ?>

                            <div class="col-lg-4 mt-2 mb-4 ">
                                <div class="card rounded-4 web backcolor" style="width: 22rem;">
                                    <div class="card-body">
                                        <h5 class="card-title"><b><?php echo $row["courseName"]; ?></b></h5>

                                        <div class="row">


                                            <div class="col-8">

                                                <a href="#" class="btn card-link course-btn bgcol" onclick="opencoursedetailss(<?php echo $row["courseId"]; ?>)">View</a>

                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>



        <?php } ?> 




                    </div>















                </div>




        <?php
        echo '</table>';
        // Process course data and output
    } else {
        echo "No Course found.";
    }
}
?>  



        <?php
        // put your code here
        ?>




        <script src="../JS/StaffDashboard.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


    </body>
</html>
