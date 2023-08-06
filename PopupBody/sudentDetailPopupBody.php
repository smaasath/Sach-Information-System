<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

if (isset($_POST["std_ID"])) {
    include '../DashboardPHP/connection.php';

    $query = "SELECT * FROM student WHERE StudentId=" . $_POST["std_ID"];
    $result = $conn->query($query);
    if (!$result) {
        die("Query failed: " . $conn->error);
    }

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $querydegree = "SELECT degreeName FROM degree WHERE degreeId =" . $row["degreeId"];
        $resultdegree = $conn->query($querydegree);
        $rowDegree = $resultdegree->fetch_assoc();
        $output = '  
  <div class="container">
                                <table class="table mb-0 table-hover">


                                    <tr>

                                        <th class="col-3">ID</th>
                                        <th class="col-6">Course Name</th>
                                        <th class="col-3">Score</th>


                                    </tr>

                                    <tr>

                                        <td class="col-3">001</td>
                                        <td class="col-6">Web Application</td>
                                        <td class="col-3">88%</td>


                                    </tr>

                                </table>

                            </div>';
    }

   

    echo $output;
}