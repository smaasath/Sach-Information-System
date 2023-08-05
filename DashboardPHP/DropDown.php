<?php


session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["data"])) {
        $receivedData = $_POST["data"];
        echo "Received data from JavaScript: " . $receivedData;
        echo "<script>var js_variable = \"$receivedData\";</script>";

        // Redirect to the dashboard page
        header("Location: ../DashboardFiles/InstituteStudent.php");
        exit();
    } else {
        echo "No data received.";
    }
}



