<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = 1; // Assume the user is logged in and has user_id 1 for now
    $availability = $_POST['availability'];
    $subjects = $_POST['subjects'];
    $teaching_method = $_POST['teaching_method'];

    $sql = "UPDATE profile SET availability='$availability', subjects='$subjects', teaching_method='$teaching_method' WHERE user_id='$user_id'";

    if ($conn->query($sql) === TRUE) {
        echo "Profile updated successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
