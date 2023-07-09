<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../CSS/StudentDashboard.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!--css-->
    <style>
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
    </style>

    <!--icon css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>SACH Student Information System</title>
</head>

<body>
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


    <div class="container mt-5 pt-3 mb-5 pb-3">
        <div class="row">
            <div class="col-lg-7 mt-5 pt-5">
                <h2><b>PROFESSIONAL DEVELOPMENT WEBINARS</b></h2>
                <p class="mt-4">we are committed to providing exclusive access and tailored resources specifically designed to support and enhance the educational journey of students. Our platform is dedicated to empowering students by offering a comprehensive range of tools, information, and services necessary for their academic success.
                    Our student information system is designed with the purpose of enhancing the educational experience and empowering students to reach their full potential.
                </p>
            </div>
            <div class="col-md-5">
                <img src="../Images/studentdashboradhhomeimage.png" class="img-fluid" alt="...">
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-4 mt-2">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><b>Web Development Program</b></h5>
                        <p class="card-text">Join our comprehensive web development program, encompassing both web design and development, to enhance your skills and create stunning, functional websites.</p>
                        <a href="#" class="btn card-link course-btn ml-4" data-toggle="modal" data-target="#myModa1">View</a>
                        <a href="#" class="btn card-link course-btn">Enroll</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-2">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><b>Java Programming professional Program</b></h5>
                        <p class="card-text">Embark on a comprehensive Java programming course, designed to equip students with the knowledge and skills needed to master the intricacies of Java and build robust, scalable applications.</p>
                        <a href="#" class="btn card-link course-btn ml-4" data-toggle="modal" data-target="#myModa2">View</a>
                        <a href="#" class="btn card-link course-btn">Enroll</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-2">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><b>Software Quality Assurance Program</b></h5>
                        <p class="card-text">Enroll in our Software Quality Assurance Professional Program, where you'll gain in-depth knowledge to ensure the highest standards of software quality, testing, and validation.</p>
                        <a href="#" class="btn card-link course-btn ml-4" data-toggle="modal" data-target="#myModa3">View</a>
                        <a href="#" class="btn card-link course-btn">Enroll</a>
                    </div>
                </div>
            </div>

            <!-- The Modal for 1st card-->
            <div class="modal" id="myModa1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Course Title</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p>Course details</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- The Modal for 2nd card-->
            <div class="modal" id="myModa2">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Course Title</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p>Course details</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- The Modal for 3rd card-->
            <div class="modal" id="myModa3">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Course Title</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p>Course details</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-4 mt-2">
                <div class="card " style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><b>Web Test Automation - Selenium and TestNG</b></h5>
                        <p class="card-text">Join our webinar and delve into the world of Web Test Automation using Selenium and TestNG. Gain hands-on experience and learn the essential skills to automate web testing, ensuring efficient and reliable software delivery.</p>
                        <a href="#" class="btn card-link course-btn ml-4" data-toggle="modal" data-target="#myModa4">View</a>
                        <a href="#" class="btn card-link course-btn">Enroll</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-2">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><b>Graphics Design and Multimedia Professional Program</b></h5>
                        <p class="card-text">Join our program and learn the principles of design, typography, color theory, layout, and mastering industry-standard software tools like Adobe Photoshop, Illustrator, and InDesign. </p>
                        <a href="#" class="btn card-link course-btn ml-4" data-toggle="modal" data-target="#myModa5">View</a>
                        <a href="#" class="btn card-link course-btn">Enroll</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-2 ">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><b>Cyber Security and Digital Forensics</b></h5>
                        <p class="card-text">Explore the fascinating realm of Cyber Security and Digital Forensics as you unravel the mysteries of cyber threats, safeguarding sensitive data, and uncovering digital evidence in our comprehensive program.</p>
                        <a href="#" class="btn card-link course-btn ml-4" id="" data-toggle="modal" data-target="#myModa6">View</a>
                        <a href="#" class="btn card-link course-btn">Enroll</a>

                    </div>
                </div>
            </div>
            <!-- The Modal for 1st card-->
            <div class="modal" id="myModa4">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Course Title</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p>Course details</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- The Modal for 2nd card-->
            <div class="modal" id="myModa5">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Course Title</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p>Course details</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- The Modal for 3rd card-->
            <div class="modal" id="myModa6">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Course Title</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p>Course details</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-4 mt-2">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><b>Cloud Computing with Microsoft Windows Server Administration Programme</b></h5>
                        <p class="card-text">Enroll in our Cloud Computing with Microsoft Windows Server Administration Programme, where you'll gain comprehensive knowledge and practical skills</p>
                        <a href="#" class="btn card-link course-btn ml-4" data-toggle="modal" data-target="#myModa7">View</a>
                        <a href="#" class="btn card-link course-btn">Enroll</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-2">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><b>Modern Web Application Design and Development Program</b></h5>
                        <p class="card-text">
                        <p class="card-text">Discover the world of modern web application design and development through our comprehensive program. Dive into the latest industry trends, best practices.</p>
                        </p>
                        <a href="#" class="btn card-link course-btn ml-4" data-toggle="modal" data-target="#myModa8">View</a>
                        <a href="#" class="btn card-link course-btn">Enroll</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-2">

            </div>
            <!-- The Modal for 1st card-->
            <div class="modal" id="myModa7">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Course Title</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p>Course details</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- The Modal for 2nd card-->
            <div class="modal" id="myModa8">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Course Title</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p>Course details</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <section class="container-fluid last-info" style="background-color:rgb(20, 108, 148) ;">
        <div class="row ml-5 pt-5 ">
            <div class="col-md-4 pb-2">
                <div class="row"><img src="../Images/Logo.png" width="70" height="70" alt="logo"></div>
                <div class="row">
                    <P style="color:#fff" clas="text-center">SACH STUDENT INFORMATION SYSTEM</P>
                </div>
            </div>

            <div class="col-md-2 pl-2 pb-4">
                <p class="last-para"><b>Quick Links</b></p>
                <a class=" last-para" href="#">Home</a><br>
                <a class=" last-para" href="#">About</a><br>
                <a class=" last-para" href="#">Webinar</a><br>
                <a class=" last-para" href="#">Sign in</a>

            </div>
            <div class="col-md-6 pl-2">
                <p class="last-para"><b>Contact us</b></p>
                <dl class="row">
                    <dt class="col-1 col-sm-auto icon"><i class="fas fa-phone"></i></dt>
                    <dd class="col-11 col-sm-auto mt-0 pt-0">
                        <a class=" last-para" href="#">Telephone</a><br>
                    </dd>
                    <dt class="col-1 col-sm-auto icon"><i class="fas fa-envelope"></i></dt>
                    <dd class="col-11 col-sm-auto mt-0 pt-0">
                        <a class=" last-para" href="#">Email</a><br>
                    </dd>
                    <dt class="col-1 col-sm-auto icon"><i class="fab fa-facebook"></i></dt>
                    <dd class="col-11 col-sm-auto mt-0 pt-0">
                        <a class=" last-para" href="#">Facebook</a><br>
                    </dd>
                    <dt class="col-1 col-sm-auto icon"><i class="fab fa-twitter"></i></dt>
                    <dd class="col-11 col-sm-auto mt-0 pt-0">
                        <a class=" last-para" href="#">Twitter</a><br>
                    </dd>

                </dl>


            </div>

        </div>
    </section>

    <div class="container">
    </div>
    <footer class="py-1 " style="background-color: rgb(20, 108, 148)">
        <div class="container text-light text-center pt-3 pb-2">
            <small class="text-white-50">&copy; Copyright. All right reserved</small>
        </div>
    </footer>

    <?php
    // put your code here
    ?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>