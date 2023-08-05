<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */


$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password, "sachinfo");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
