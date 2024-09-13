<?php
// teacherSignUp.php

// Database credentials
$servername = "localhost";
$username = "root"; // Default username for phpMyAdmin
$password = ""; // Default password for phpMyAdmin
$dbname = "EduLinker";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password for security
    $birthday = $_POST['birthday'];
    $qualifications = $_POST['qualifications'];
    $teaching_methods = isset($_POST['teaching-method']) ? implode(',', $_POST['teaching-method']) : '';

    // Handle file upload
    if (isset($_FILES['proof']) && $_FILES['proof']['error'] == 0) {
        $proof = file_get_contents($_FILES['proof']['tmp_name']);
    } else {
        echo "Error uploading proof of qualifications.";
        exit;
    }

    // Insert data into the database
    $stmt = $conn->prepare("INSERT INTO teachers (name, address, email, password, birthday, qualifications, proof, teaching_method) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssbss", $name, $address, $email, $password, $birthday, $qualifications, $proof, $teaching_methods);

    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
