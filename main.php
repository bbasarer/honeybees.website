<?php
$db_servername = "yourservername";
$db_username = "yourusername";
$db_password = "yourpassword";
$db_name = "yourdbname";

// Connection
$conn = mysqli_connect($db_servername, $db_username, $db_password, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
