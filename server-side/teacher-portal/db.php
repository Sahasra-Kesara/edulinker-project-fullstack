<?php
$servername = "localhost";
$username = "root"; // default username for localhost
$password = ""; // default password is empty for localhost
$dbname = "teacher_portal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
