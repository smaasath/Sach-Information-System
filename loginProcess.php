<?php
session_start();
require_once './classes/DBConnector.php';
require_once './classes/User.php';

use classes\DBConnector;
use classes\User;

if(isset($_POST["username"],$_POST["password"])){
    if(empty($_POST["username"]) || empty($_POST["password"])){
        $location = "LOGIN/LOGIN/Login.php?status=1";
    }
    else{
        $username = $_POST["username"];
        $password = $_POST["password"];

        $user = new User($username,$password);

        if($user->login(DBConnector::getConnection())){
            $_SESSION["user_role"] = $user->getRole();

            switch($_SESSION["user_role"]){
                case 1:
                    $location = "Dashboards/SuperAdminDashboard.php";
                    break;
                case 2:
                    $_SESSION["user_instituteId"] = $user->getInstituteId();
                    $location = "Dashboards/AdminDashboard.php";
                    break;
                case 3:
                    $_SESSION["user_staffId"] = $user->getStaffId();
                    $location = "Dashboards/StaffDashboard.php";
                    break;
                case 4:
                    $_SESSION["user_studentId"] = $user->getStudentId();
                    $location = "Dashboards/studentDadhboard.php";
                    break;
                default:
                    $location = "LOGIN/LOGIN/Login.php?status=3";
                    break;
            }

            
           
        }
        else{
            $location = "LOGIN/LOGIN/Login.php?status=2"; 
        }
    }
}
else{
    $location = "LOGIN/LOGIN/Login.php?status=0";
}
header("Location: ".$location);
