<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = 1; // Assume the user is logged in and has user_id 1 for now
    $booking_id = $_POST['booking_id'];
    $response = $_POST['response'];

    $sql = "UPDATE bookings SET response='$response' WHERE id='$booking_id' AND user_id='$user_id'";

    if ($conn->query($sql) === TRUE) {
        echo "Response updated successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
