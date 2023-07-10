<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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

        <!-- add button -->
        <div class="container w-25 mt-5" >
            <div class="backcolor m-2 admincount p-2 mb-4 rounded-4 ">
                <div class="row">
                    <div class="col-1 text-center">   
                        <i  href="" class="fa-solid fa-graduation-cap fa-2xl p-5 ps-1"></i>
                    </div>
                    <div class="col-8 ps-5 d-flex justify-content-center align-items-center flex-column"> 
                        <h7>Course</h7>
                        <h2>1234</h2>
                    </div>
                </div> 
            </div> 
        </div>

        <!-- add button -->

        <!-- Table -->

        <div class="p-5 ">


            <div class="rounded-top-4 p-0 border border-dark-subtle" style="padding-left: 12px;padding-right: 22px;">
                <div class="row align-items-center">
                    <div class="col-4">           
                        <div class="input-group rounded p-3">
                            <input type="search" class="form-control rounded" placeholder="Search ID" aria-label="Search" aria-describedby="search-addon" >



                        </div>
                    </div>
                    <div class="col-4"> 
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Department</option>
                            <option value="1">Department1</option>
                            <option value="2">Department2</option>
                            <option value="3">Department3</option>
                        </select>
                    </div>


                    <div class="col-4 "> 
                        <button type="button" class="btn btn-primary bgcol" onclick="AddCourse()">Add Course</button>
                    </div>
                </div>



                <!-- Table Head -->
                <table class="table mb-0">


                    <tr>

                        <th class="col-1 bgcol p-2">ID</th>
                        <th class="col-4 bgcol p-2">Course Name</th>

                        <th class="col-2 bgcol p-2">Credits</th>
                        <th class="col-3 bgcol p-2">Lecturer</th>
                       <th class="col-1 bgcol p-2">View</th>
                        <th class="col-1 bgcol p-2">Edit</th>

                    </tr>


                </table>
                <!-- Table Head -->
            </div>
            <!-- Table body -->
            <div class="container bg-white mt-0" style=" max-height: 373px; overflow: scroll;">
                <table class="table table-hover">

                    <!-- Table row -->
                    <tr>
                        <td class="col-1">001</td>
                        <td class="col-4">Web Application</td>

                        <td class="col-2">3</td>
                        <td class="col-3">Mohamed Aasath</td>
                        
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="CourseDetail()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary" onclick="EditCourse()">Edit</button></td>
                    </tr>

                     <tr>
                        <td class="col-1">001</td>
                        <td class="col-4">Web Application</td>

                        <td class="col-2">3</td>
                        <td class="col-3">Mohamed Aasath</td>
                        
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="CourseDetail()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary" onclick="EditCourse()">Edit</button></td>
                    </tr>

                    
                     <tr>
                        <td class="col-1">001</td>
                        <td class="col-4">Web Application</td>

                        <td class="col-2">3</td>
                        <td class="col-3">Mohamed Aasath</td>
                        
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="CourseDetail()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary" onclick="EditCourse()">Edit</button></td>
                    </tr>

                    
                     <tr>
                        <td class="col-1">001</td>
                        <td class="col-4">Web Application</td>

                        <td class="col-2">3</td>
                        <td class="col-3">Mohamed Aasath</td>
                        
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="CourseDetail()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary" onclick="EditCourse()">Edit</button></td>
                    </tr>

                    
                     <tr>
                        <td class="col-1">001</td>
                        <td class="col-4">Web Application</td>

                        <td class="col-2">3</td>
                        <td class="col-3">Mohamed Aasath</td>
                        
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="CourseDetail()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary" onclick="EditCourse()">Edit</button></td>
                    </tr>

                     <tr>
                        <td class="col-1">001</td>
                        <td class="col-4">Web Application</td>

                        <td class="col-2">3</td>
                        <td class="col-3">Mohamed Aasath</td>
                        
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="CourseDetail()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary" onclick="EditCourse()">Edit</button></td>
                    </tr>

                     <tr>
                        <td class="col-1">001</td>
                        <td class="col-4">Web Application</td>

                        <td class="col-2">3</td>
                        <td class="col-3">Mohamed Aasath</td>
                        
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="CourseDetail()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary" onclick="EditCourse()">Edit</button></td>
                    </tr>

                     <tr>
                        <td class="col-1">001</td>
                        <td class="col-4">Web Application</td>

                        <td class="col-2">3</td>
                        <td class="col-3">Mohamed Aasath</td>
                        
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="CourseDetail()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary" onclick="EditCourse()">Edit</button></td>
                    </tr>

                     <tr>
                        <td class="col-1">001</td>
                        <td class="col-4">Web Application</td>

                        <td class="col-2">3</td>
                        <td class="col-3">Mohamed Aasath</td>
                        
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="CourseDetail()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary" onclick="EditCourse()">Edit</button></td>
                    </tr>

                    
                     <tr>
                        <td class="col-1">001</td>
                        <td class="col-4">Web Application</td>

                        <td class="col-2">3</td>
                        <td class="col-3">Mohamed Aasath</td>
                        
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="CourseDetail()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary" onclick="EditCourse()">Edit</button></td>
                    </tr>

                    
                     <tr>
                        <td class="col-1">001</td>
                        <td class="col-4">Web Application</td>

                        <td class="col-2">3</td>
                        <td class="col-3">Mohamed Aasath</td>
                        
                        <td class="col-1"><button type="button" class="btn btn-info" onclick="CourseDetail()">View</button></td>
                        <td class="col-1"><button type="button" class="btn btn-secondary" onclick="EditCourse()">Edit</button></td>
                    </tr>

                    
                    
                    
                    
                    


                    <!-- Table row -->

                </table> 

            </div>
            <br>
            <!-- Table Head -->
            <div class="text-end" >
                <button type="button" class="btn btn-success">Save</button>
            </div>
        </div>

        <!-- Table -->




        <!-- Course Details Modal -->
        <div class="modal fade" id="CourseDetail" tabindex="-1" aria-labelledby="CourseDetail" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="CourseDetail">Course Details</h1>
                        <button type="button" class="btn-close" onclick="closeModals()"></button>
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
                                    <h6>Degree</h6>
                                </div>
                                <div class="col-8">
                                    <p>Computer Science & Technology</p>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-4">
                                    <h6>Lecturer</h6>
                                </div>
                                <div class="col-8">
                                    <p>Mohamed Aasadh</p>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-4">
                                    <h6>Course Name</h6>
                                </div>
                                <div class="col-8">
                                    <p>Web Application</p>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-4">
                                    <h6>Description</h6>
                                </div>
                                <div class="col-8">
                                    <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs</p>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-4">
                                    <h6>Credits</h6>
                                </div>
                                <div class="col-8">
                                    <p>3</p>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-4">
                                    <h6>Student Count</h6>
                                </div>
                                <div class="col-8">
                                    <p>100</p>
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
        <!-- Course Details Modal -->












        <!-- Add Course Details Modal -->
        <div class="modal fade" id="AddCourse" tabindex="-1" aria-labelledby="AddCourse" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="AddCourse">Add Course</h1>
                        <button type="button" class="btn-close" onclick="closeModals()"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row align-items-center">
                            <div class="col-3">
                                <h6>Department</h6>
                            </div>
                            <div class="col-9 p-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Department</option>
                                    <option value="1">Department1</option>
                                    <option value="2">Department2</option>
                                    <option value="3">Department3</option>
                                </select>
                            </div>
                        </div>


                        <div class="row align-items-center">
                            <div class="col-3">
                                <h6>Degree</h6>
                            </div>
                            <div class="col-9 p-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Degree</option>
                                    <option value="1">Degree1</option>
                                    <option value="2">Degree2</option>
                                    <option value="3">Degree3</option>
                                </select>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-3">
                                <h6>Assign Lecturer</h6>
                            </div>
                            <div class="col-9 p-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Lecturer</option>
                                    <option value="1">Lecturer1</option>
                                    <option value="2">Lecturer2</option>
                                    <option value="3">Lecturer3</option>
                                </select>
                            </div>
                        </div>


                        <div class="row align-items-center pb-3">
                            <div class="col-3">
                                <h6>Course Name</h6>
                            </div>
                            <div class="col-9">
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                        </div>

                        <div class="row align-items-center pb-3">
                            <div class="col-3">
                                <h6>Description</h6>
                            </div>
                            <div class="col-9">
                                <textarea class="form-control" id="" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="row align-items-center pb-3">
                            <div class="col-3">
                                <h6>Credits</h6>
                            </div>
                            <div class="col-9">
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                        </div>










                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-primary bgcolli" id="Addcourse" onclick="savestudent()" >Add Course</button>

                        <button type="button" class="btn btn-secondary" onclick="closeModals()">Cancel</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Course Details Modal -->







        <!-- Edit Student Details Modal -->
        <div class="modal fade" id="EditCourseDetail" tabindex="-1" aria-labelledby="EditCourseDetail" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="EditCourseDetail">Edit Course Details</h1>
                        <button type="button" class="btn-close" onclick="closeModals()"></button>
                    </div>
                    <div class="modal-body">


                        <div class="row align-items-center">
                            <div class="col-3">
                                <h6>Assign Lecturer</h6>
                            </div>
                            <div class="col-9 p-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Lecturer</option>
                                    <option value="1">Lecturer1</option>
                                    <option value="2">Lecturer2</option>
                                    <option value="3">Lecturer3</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="row align-items-center pb-3">
                            <div class="col-3">
                                <h6>Course Name</h6>
                            </div>
                            <div class="col-9">
                                <input type="text" value="Computer SCience & Technology" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                        </div>

                        <div class="row align-items-center pb-3">
                            <div class="col-3">
                                <h6>Description</h6>
                            </div>
                            <div class="col-9">
                                 <textarea class="form-control" value="Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs" id="" rows="3"></textarea>
                            </div>
                        </div>





                        <div class="row align-items-center pb-3">
                            <div class="col-3">
                                <h6>"Credits</h6>
                            </div>
                            <div class="col-9">
                                <input type="text" Value="3" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                        </div>

                        

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary bgcolli" id="EditStudent" onclick="savestudent()" >Save</button>

                       

                        <button type="button" class="btn btn-secondary" onclick="closeModals()">Cancel</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit Student Details Modal -->





        <?php
        // put your code here
        ?>




        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    </body>
</html>
