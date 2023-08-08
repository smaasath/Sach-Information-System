<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

if (isset($_POST["Ins_ID"])) {
    include '../DashboardPHP/connection.php';

    $output = '  
     
                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Title</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="text"  name="title" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>
                                
   <div class="row align-items-center">
         <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Status</h6>
                                    </div>
                    <div class="col-9">                 
    <select class="form-select"  name="Status" aria-label="Default select example">
    <option value="Active">Active</option>
  <option value="Inactive">Two</option>
</select></div></div>

                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Description</h6>
                                    </div>
                                    <div class="col-9">
                                         <textarea class="form-control" name="description" rows="4" required></textarea>
                                    </div>
                                </div>

                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Date</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="date"   name="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>

                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Time</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="time"  name="time" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>

                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Registration Deadline</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="date"  name="regDeadline" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>

                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Webinar Link</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="text"  name="webinarLink" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>

                               
                                <div class="row align-items-center pb-3">
                                    <div class="col-3">
                                        <h6>Coin Value</h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="number"  name="coinValue" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                </div>

                               
                                <input type="hidden" name="Instituteid" value=' . $_POST["Ins_ID"] . '>                                

';

    echo $output;
} else {
    echo 'Course not added';
}









        