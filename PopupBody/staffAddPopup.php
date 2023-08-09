<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

if (isset($_POST["Ins_ID"])) {
 

    $output = '  
        <div class="row align-items-center">';                
    

    $output2 = ' 

                                 <div class="row align-items-center pb-3">
                            <div class="col-3">
                                <h6>Name</h6>
                            </div>
                            <div class="col-9">
                                <input name="staffName" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm required">
                            </div>
                        </div>






                        <div class="row align-items-center pb-3">
                            <div class="col-3">
                                <h6>Contact No</h6>
                            </div>
                            <div class="col-9">
                                <input name="phoneNo" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm required">
                            </div>
                        </div>

                        <div class="row align-items-center pb-3">
                            <div class="col-3">
                                <h6>Email</h6>
                            </div>
                            <div class="col-9">
                                <input name="email" type="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm required">
                            </div>
                        </div>

                        <div class="row align-items-center pb-3">
                            <div class="col-3">
                                <h6>Position</h6>
                            </div>
                            <div class="col-9">
                                <input name="position" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm required">
                            </div>
                        </div>

                       

                        <hr>
                        <div class="row align-items-center pb-3">
                            <div class="col-3">
                                <h6>User Name</h6>
                            </div>
                            <div class="col-9">
                                <input name="userName" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm required">
                            </div>
                        </div>

                        <div class="row align-items-center pb-3">
                            <div class="col-3">
                                <h6>Password</h6>
                            </div>
                            <div class="col-9">
                                <input name="Password" type="Password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm required">
                            </div>
                        </div>
 <input type="hidden" name="Instituteid" value=' . $_POST["Ins_ID"] . '>                                

';

    echo $output2;
} else {
    echo 'parent not added';
}









        