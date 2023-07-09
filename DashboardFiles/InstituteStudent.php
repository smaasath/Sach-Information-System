<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
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

            <div id= "resimage" class="p-1 w-50 d-block d-sm-none">
                <a href="#">
                    <img src="../Images/Logo.png" alt="Home" class="img-fluid" style="width: 20%">
                </a>
            </div>
        </div>

        <!--  nav bar end-->
        <br>

        <div class="container w-25 mt-5" >
            <div class="backcolor m-2 admincount p-2 mb-4 rounded-4 ">
                <div class="row">
                    <div class="col-1 text-center">   
                        <i  href="" class="fa-solid fa-users fa-2xl p-5 ps-1"></i>
                    </div>
                    <div class="col-8 ps-5 d-flex justify-content-center align-items-center flex-column"> 
                        <h7>Students</h7>
                        <h2>1234</h2>
                    </div>
                </div> 
            </div> 
        </div>
        <br>
        <div class="text-center" >
            <button type="button" class="btn btn-primary">Add Student</button>
        </div>
        <br> 
        <div class="p-5 ">

            <div class="bg-black" style="padding-left: 12px;padding-right: 22px;">

                <table class="table mb-0">


                    <tr class="table-dark">

                        <th class="col-1">ID</th>
                        <th class="col-3">Name</th>
                        <th class="col-2">Gender</th>
                        <th class="col-3">Contact No</th>
                        <th class="col-1">View</th>
                        <th class="col-1">Edit</th>

                    </tr>


                </table>

            </div>

            <div class="container bg-white mt-0" style=" max-height: 373px; overflow: scroll;">
                <table class="table">


                    <tr>
                        <td class="col-1">0001</td>
                        <td class="col-3">Mohamed Aasath</td>
                        <td class="col-2">Male</td>
                        <td class="col-3">0755701765</td>
                        <td class="col-1"><button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#StudentDetail">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary">Edit</button></td>
                    </tr>



                </table> 

            </div>
            <br>
            <div class="text-end" >
                <button type="button" class="btn btn-success">Save</button>
            </div>
        </div>




        <!-- Student Details Modal -->
        <div class="modal fade" id="StudentDetail" tabindex="-1" aria-labelledby="StudentDetail" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="StudentDetail">Student Details</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-4">
                                    <h6>Department</h6>
                                </div>
                                <div class="col-8">
                                    <p>Computer Science And Informatics</p>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-4">
                                    <h6>Enrollment Number</h6>
                                </div>
                                <div class="col-8">
                                    <p>UWU/CST/20/031</p>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-4">
                                    <h6>Year</h6>
                                </div>
                                <div class="col-8">
                                    <p>Second Year</p>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-4">
                                    <h6>First Name</h6>
                                </div>
                                <div class="col-8">
                                    <p>Mohamed</p>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-4">
                                    <h6>Last Name</h6>
                                </div>
                                <div class="col-8">
                                    <p>Aasath</p>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-4">
                                    <h6>DOB</h6>
                                </div>
                                <div class="col-8">
                                    <p>2000/12/11</p>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-4">
                                    <h6>Gender</h6>
                                </div>
                                <div class="col-8">
                                    <p>Male</p>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-4">
                                    <h6>Contact</h6>
                                </div>
                                <div class="col-8">
                                    <p>0755701765</p>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-4">
                                    <h6>Email</h6>
                                </div>
                                <div class="col-8">
                                    <p>aasadh2000@gmail.com</p>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-4">
                                    <h6>Address</h6>
                                </div>
                                <div class="col-8">
                                    <p>185,A/1,Hajiyar Road Sainthamaruthu-13</p>
                                </div>
                            </div> 






                        </div>
                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-primary" id="openModal2" >Guardian Details</button>
                        <button type="button" class="btn btn-primary">Course Details</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Student Details Modal -->
        
        
        
        
        
        <!-- Guardian Details Modal -->
        <div class="modal fade" id="GuardianDetail" tabindex="-1" aria-labelledby="GuardianDetail" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="GuardianDetail">Guardian Detail</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-4">
                                    <h6>Full Name</h6>
                                </div>
                                <div class="col-8">
                                    <p>Seeni Muhammadhu Amiza Umma</p>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-4">
                                    <h6>Relationship</h6>
                                </div>
                                <div class="col-8">
                                    <p>Mother</p>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-4">
                                    <h6>Contact NO</h6>
                                </div>
                                <div class="col-8">
                                    <p>0755701347</p>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-4">
                                    <h6>Email</h6>
                                </div>
                                <div class="col-8">
                                    <p>N/A</p>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-4">
                                    <h6>Address</h6>
                                </div>
                                <div class="col-8">
                                    <p>185,A/1,Hajiyar Road Sainthamaruthu-13</p>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-4">
                                    <h6>Occupation</h6>
                                </div>
                                <div class="col-8">
                                    <p>Taylor</p>
                                </div>
                            </div> 

                            





                        </div>
                    </div>
                    <div class="modal-footer">

                        
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Close</button>
                    </div>
                </div>
            </div>
        </div>
       <!-- Guardian Details Modal -->
        <?php
        // put your code here
        ?>
    </body>
</html>
