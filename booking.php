<?php

session_start();
$sessionName = $_POST["session"];

$user_id = $_SESSION["id"];

$conn = new mysqli("localhost", "root", "", "theraputic_website_users");

if ($conn->connect_error) {
   die("Connection failed please try again later"); 
} else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sql= "INSERT INTO user_bookings (user_id, bookingname) VALUES ('$user_id', '$sessionName')";

        if ($conn->query($sql) === TRUE) {
            echo "Booking stored successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();

?>