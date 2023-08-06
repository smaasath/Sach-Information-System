<?php
session_start();
require_once './classes/DBConnector.php';
require_once './classes/User.php';

use classes\DBConnector;
use classes\User;

if(isset($_POST["email"],$_POST["password"])){
    if(empty($_POST["email"]) || empty($_POST["password"])){
        $location = "LOGIN/LOGIN/Login.php?status=1";
    }
    else{
        $email = $_POST["email"];
        $password = $_POST["password"];

        $user = new User($email,$password);

        if($user->login(DBConnector::getConnection())){
            $_SESSION["user_role"] = $user->getRole(); 

            switch($_SESSION["user_role"]){
                case 1:
                    $location = "Dashboards/SuperAdminDashboard.php";
                    break;
                case 2:
                    $location = "Dashboards/AdminDashboard.php";
                    break;
                case 3:
                    $location = "Dashboards/StaffDashboard.php";
                    break;
                case 4:
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