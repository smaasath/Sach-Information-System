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
                text-align:center;
                
            }
            .darken-image{
                filter: brightness(60%);
            }
            .last-para{
                color:white;
            }
            .icon{
                color:white;
            }
                    a.last-para:hover {
                color:#19a7cd;
                text-decoration: none;
            }
    
            .course-btn{
                color:white;
                background-color: rgb(20, 108, 148);
                height:38px;
                width:70px;
                border-radius: 5px;
            }
            .card{
                box-shadow: 0 0 30px rgba(0,0,0,0.5);
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
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                      <ul class="navbar-nav">
                        <li class="nav-item">
                          <a class="nav-link" href="#" style="color:rgb(20, 108, 148)">Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item" >
                          <a class="nav-link" href="#" style="color:rgb(20, 108, 148)">About</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#" style="color:rgb(20, 108, 148)">Webinar</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#" style="color:rgb(20, 108, 148)">Join Now</a>
                        </li>
                        <form class="form-inline my-2 my-lg-0">
                          <button class="btn btn btn-primary my-2 my-sm-0" type="submit" style="color:white;background-color: rgb(20, 108, 148);">Sign In</button>
                        </form>
                    </div>
                  </nav>
              </div>
            </div>
          </div>

          <div class="container-fluid p-0 mt-2" >
            <div class="row">
                <div class="col-md-12">
                    <div class="image-container">
                        <img src="https://images.ctfassets.net/2htm8llflwdx/6LK9MCbEafyPhE3YB5HLW0/c0fe08b894d0cff8a6838f9172d1a61c/Graduation_StudentsGroup_Smiling_Outdoor_GettyImages-907837926.jpg"
                            alt="Background Image" class="img-fluid darken-image">
                        <div class="text-overlay mt-5 pt-5">
                            <h4 class="" >PROFESSIONAL DEVELOPMENT WEBINARS</h4>
                            <p><small>Explore our comprehensive educational resources and unlock a world of knowledge.</small></p>
                        </div>
                    </div>
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
                                        <a href="#" class="btn card-link bgcol" data-bs-toggle="modal" data-bs-target="#webinardetail1">View</a>
                                    </div>
                                    <div class="row p-2">

                                        <a href="LOGIN/LOGIN/Login.php" class="btn card-link bgcol">Enroll</a>

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
                                        <a href="#" class="btn card-link bgcol" data-bs-toggle="modal" data-bs-target="#webinardetail1">View</a>
                                    </div>
                                    <div class="row p-2">

                                        <a href="LOGIN/LOGIN/Login.php" class="btn card-link bgcol">Enroll</a>

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
                                        <a href="#" class="btn card-link bgcol" data-bs-toggle="modal" data-bs-target="#webinardetail1">View</a>
                                    </div>
                                    <div class="row p-2">

                                        <a href="LOGIN/LOGIN/Login.php" class="btn card-link bgcol">Enroll</a>

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
                                        <a href="#" class="btn card-link bgcol" data-bs-toggle="modal" data-bs-target="#webinardetail1">View</a>
                                    </div>
                                    <div class="row p-2">

                                        <a href="LOGIN/LOGIN/Login.php" class="btn card-link bgcol">Enroll</a>

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
                                        <a href="#" class="btn card-link bgcol" data-bs-toggle="modal" data-bs-target="#webinardetail1">View</a>
                                    </div>
                                    <div class="row p-2">

                                        <a href="LOGIN/LOGIN/Login.php" class="btn card-link bgcol">Enroll</a>

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
                                        <a href="#" class="btn card-link bgcol" data-bs-toggle="modal" data-bs-target="#webinardetail1">View</a>
                                    </div>
                                    <div class="row p-2">

                                        <a href="LOGIN/LOGIN/Login.php" class="btn card-link bgcol">Enroll</a>

                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                
                
                

               
                
                

          
                
                






                
           
            </div>
        </div>


        <!-- Webinar Details Modal -->
        <div class="modal fade" id="webinardetail1" tabindex="-1" aria-labelledby="webinardetail1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="webinardetail1">Webinar Details</h1>
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
                                    <h6>Link</h6>
                                </div>
                                <div class="col-8">
                                    <a href="https://www.w3schools.com/">Visit W3Schools.com!</a>
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

        
        <?php
        // put your code here
        ?>


       
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

         <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </body>

</html>