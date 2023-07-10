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


        <div class="container rounded-5 mt-5 shadow-sm p-3 mb-5 bgweb ">
            <div class="row">
                <div class="col-lg-9">
                    <h2><b>PROFESSIONAL DEVELOPMENT WEBINARS</b></h2>
                    <p class="mt-4">we are committed to providing exclusive access and tailored resources specifically designed to support and enhance the educational journey of students. Our platform is dedicated to empowering students by offering a comprehensive range of tools, information, and services necessary for their academic success.
                        Our student information system is designed with the purpose of enhancing the educational experience and empowering students to reach their full potential.
                    </p>
                </div>
                <div class="col-md-3 d-none d-sm-block">
                    <img src="../Images/studentdashboradhhomeimage.png" class="img-fluid w-100" alt="...">
                </div>
            </div>
        </div>
        <br>
        <div class="container mt-4 mb-5">
            <div class="row">
                <div class="col-lg-4 mt-2 mb-4 ">
                    <div class="card rounded-4 web backcolor" style="width: 22rem;">
                        <div class="card-body">
                            <h5 class="card-title"><b>Web Development Program</b></h5>

                            <p class="card-text">Join our comprehensive web development program, encompassing both web design and development, to enhance your skills and create stunning, functional websites.</p>
                            <div class="row">
                                <div class="col-8">
                                    <div class="shadow p-3 mb-4 rounded-3" style="background-color: #64CCC5;">
                                        <div class="row align-items-center">
                                            <div class="col-3">
                                                <i class="fa-solid fa-coins fa-2xl" style="color: white;"></i>
                                            </div> 

                                            <div class="col-9" style="color: white;">
                                                <h4> 10000</h4>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="row p-2">
                                        <a href="#" class="btn card-link course-btn bgcol" onclick="openwebinardetails()">View</a>
                                    </div>
                                    <div class="row p-2">
                                        <a href="#" class="btn card-link course-btn bgcol" onclick="enrollstudent()">Enroll</a>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                
                
                
               
                
                
                <div class="col-lg-4 mt-2 mb-4 ">
                    <div class="card rounded-4 web backcolor" style="width: 22rem;">
                        <div class="card-body">
                            <h5 class="card-title"><b>Web Development Program</b></h5>

                            <p class="card-text">Join our comprehensive web development program, encompassing both web design and development, to enhance your skills and create stunning, functional websites.</p>
                            <div class="row">
                                <div class="col-8">
                                    <div class="shadow p-3 mb-4 rounded-3" style="background-color: #64CCC5;">
                                        <div class="row align-items-center">
                                            <div class="col-3">
                                                <i class="fa-solid fa-coins fa-2xl" style="color: white;"></i>
                                            </div> 

                                            <div class="col-9" style="color: white;">
                                                <h4> 10000</h4>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="row p-2">
                                        <a href="#" class="btn card-link course-btn bgcol" onclick="openwebinardetails()">View</a>
                                    </div>
                                    <div class="row p-2">
                                        <a href="#" class="btn card-link course-btn bgcol" onclick="enrollstudent()">Enroll</a>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
              
                
                
                
                
              
                
                <div class="col-lg-4 mt-2 mb-4 ">
                    <div class="card rounded-4 web backcolor" style="width: 22rem;">
                        <div class="card-body">
                            <h5 class="card-title"><b>Web Development Program</b></h5>

                            <p class="card-text">Join our comprehensive web development program, encompassing both web design and development, to enhance your skills and create stunning, functional websites.</p>
                            <div class="row">
                                <div class="col-8">
                                    <div class="shadow p-3 mb-4 rounded-3" style="background-color: #64CCC5;">
                                        <div class="row align-items-center">
                                            <div class="col-3">
                                                <i class="fa-solid fa-coins fa-2xl" style="color: white;"></i>
                                            </div> 

                                            <div class="col-9" style="color: white;">
                                                <h4> 10000</h4>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="row p-2">
                                        <a href="#" class="btn card-link course-btn bgcol" onclick="openwebinardetails()">View</a>
                                    </div>
                                    <div class="row p-2">
                                        <a href="#" class="btn card-link course-btn bgcol" onclick="enrollstudent()">Enroll</a>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                
                


                <div class="col-lg-4 mt-2 mb-4 ">
                    <div class="card rounded-4 web backcolor" style="width: 22rem;">
                        <div class="card-body">
                            <h5 class="card-title"><b>Web Development Program</b></h5>

                            <p class="card-text">Join our comprehensive web development program, encompassing both web design and development, to enhance your skills and create stunning, functional websites.</p>
                            <div class="row">
                                <div class="col-8">
                                    <div class="shadow p-3 mb-4 rounded-3" style="background-color: #64CCC5;">
                                        <div class="row align-items-center">
                                            <div class="col-3">
                                                <i class="fa-solid fa-coins fa-2xl" style="color: white;"></i>
                                            </div> 

                                            <div class="col-9" style="color: white;">
                                                <h4> 10000</h4>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="row p-2">
                                        <a href="#" class="btn card-link course-btn bgcol" onclick="openwebinardetails()">View</a>
                                    </div>
                                    <div class="row p-2">
                                        <a href="#" class="btn card-link course-btn bgcol" onclick="enrollstudent()">Enroll</a>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

                
           
            </div>
        </div>


        <!-- Webinar Details Modal -->
        <div class="modal fade" id="webinardetail" tabindex="-1" aria-labelledby="webinardetail" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="webinardetail">Webinar Details</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">

                            <div class="row">
                                <div class="col-4">
                                    <h6>Title</h6>
                                </div>
                                <div class="col-8">
                                    <p>Web Development Program</p>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-4">
                                    <h6>Institute</h6>
                                </div>
                                <div class="col-8">
                                    <p>Uva Wellassa University Of SriLanka</p>
                                </div>
                            </div> 


                            <div class="row">
                                <div class="col-4">
                                    <h6>Description</h6>
                                </div>
                                <div class="col-8">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-4">
                                    <h6>Date</h6>
                                </div>
                                <div class="col-8">
                                    <p>2023/08/09</p>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-4">
                                    <h6>Time</h6>
                                </div>
                                <div class="col-8">
                                    <p>9.00am</p>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-4">
                                    <h6>Registration Deadline</h6>
                                </div>
                                <div class="col-8">
                                    <p>2023/12/11</p>
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
                                    <p>Active</p>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-4">
                                    <h6>Coin Value</h6>
                                </div>
                                <div class="col-8">
                                    <p>50</p>
                                </div>
                            </div> 








                        </div>
                    </div>
                    <div class="modal-footer">


                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Webinar Details Modal -->

        <!-- Webinar edit Details Modal -->
        <div class="modal fade" id="webinareditdetail" tabindex="-1" aria-labelledby="webinareditdetail" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="webinareditdetail">Webinar Enroll</h1>
                        <button type="button" class="btn-close" onclick="closeModals()"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">

                            <div class="row">
                                <div class="col-4">
                                    <h6>Title</h6>
                                </div>
                                <div class="col-8">
                                    <p>Web Development Program</p>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-4">
                                    <h6>Institute</h6>
                                </div>
                                <div class="col-8">
                                    <p>Uva Wellassa University Of SriLanka</p>
                                </div>
                            </div> 


                            <div class="row">
                                <div class="col-4">
                                    <h6>Description</h6>
                                </div>
                                <div class="col-8">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-4">
                                    <h6>Date</h6>
                                </div>
                                <div class="col-8">
                                    <p>2023/08/09</p>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-4">
                                    <h6>Time</h6>
                                </div>
                                <div class="col-8">
                                    <p>9.00am</p>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-4">
                                    <h6>Registration Deadline</h6>
                                </div>
                                <div class="col-8">
                                    <p>2023/12/11</p>
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
                                    <p>Active</p>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-4">
                                    <h6>Coin Value</h6>
                                </div>
                                <div class="col-8">
                                    <p>50</p>
                                </div>
                            </div> 








                        </div>
                    </div>
                    <div class="modal-footer">


                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Webinar Details edit Modal -->


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