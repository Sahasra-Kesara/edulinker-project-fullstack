<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $certification = $_POST['certification'];
    $experience = $_POST['experience'];
    $qualification = $_POST['qualification'];

    $sql = "INSERT INTO users (full_name, email, certification, experience, qualification)
            VALUES ('$full_name', '$email', '$certification', '$experience', '$qualification')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
