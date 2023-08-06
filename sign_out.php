<?php
session_start();
unset($_SESSION["user_role"]);
unset($_SESSION["user_instituteId"]);
unset($_SESSION["user_staffId"]);
unset($_SESSION["user_studentId"]);
session_destroy();
header("Location: LOGIN/LOGIN/Login.php");

