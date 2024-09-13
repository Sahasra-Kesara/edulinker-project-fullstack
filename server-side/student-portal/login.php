<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM students WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            echo "Login successful";
            // Start a session and redirect to the student dashboard
            session_start();
            $_SESSION['student_id'] = $row['id'];
            header("Location: student_dashboard.php");
        } else {
            echo "Invalid password";
        }
    } else {
        echo "No user found with this email";
    }

    $conn->close();
}
?>
