<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $report_type = $_POST['report_type'];
    $user_id = 1; // Assume a logged-in user ID

    $query = "INSERT INTO reports (report_type, generated_by) VALUES ('$report_type', $user_id)";

    if ($conn->query($query) === TRUE) {
        echo "Report generated successfully.";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
