<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_POST['user_id'];
    $action = $_POST['action'];

    if ($action == 'suspend') {
        $query = "UPDATE users SET status = 'suspended' WHERE id = $user_id";
    } elseif ($action == 'delete') {
        $query = "DELETE FROM users WHERE id = $user_id";
    }
    // Add other actions as needed

    if ($conn->query($query) === TRUE) {
        echo "User action executed successfully.";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
