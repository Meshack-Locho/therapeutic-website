<?php
session_start();

if (!isset($_SESSION["name"])) {
    header("Location: T_lofinform.php");
}

$user_id = $_SESSION["id"];
$conn = new mysqli("localhost", "root", "", "theraputic_website_users");

if ($conn->connect_error) {
    die("Connection failed");
}else{
    $result = $conn->query("SELECT * FROM user_bookings WHERE user_id = '$user_id'");

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ?>
            <div class="subscription">
                <h3><?php echo $row["bookingname"]?></h3>
                <h5><?php echo $row["date"]?></h5>
            </div><?php
        }
    }else{
        echo "No bookigs yet";
    }
}

?>