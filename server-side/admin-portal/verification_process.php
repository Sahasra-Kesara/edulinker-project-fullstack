<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $teacher_id = $_POST['teacher_id'];
    $status = $_POST['verification_status'];

    $query = "UPDATE teachers SET verified = '$status' WHERE id = $teacher_id";

    if ($conn->query($query) === TRUE) {
        echo "Teacher verification status updated.";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
