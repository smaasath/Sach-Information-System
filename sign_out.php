<?php
session_start();
unset($_SESSION["user_role"]);
session_destroy();
header("Location: LOGIN/LOGIN/Login.php");

