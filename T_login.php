<?php
session_start();

$conn = new mysqli("localhost", "root", "", "theraputic_website_users");

$email=$_POST["email"];
$password=$_POST["password"];
$id = $_GET["id"];


if ($conn->connect_error) {
    die("Connection failed, please try again later");
}else{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $stmt = $conn->prepare("SELECT * FROM clients WHERE email=?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result=$stmt->get_result();
        if ($result->num_rows == 1) {
            $acceptPass= $result->fetch_assoc();
            if (password_verify($password, $acceptPass["password"])) {
                echo "<h2><span>Success<span> <i class='fa-solid fa-circle-check'></i></h2> <script>document.title='Success'</script>";
                $_SESSION["name"]=$email;
                $_SESSION["username"] = $acceptPass["name"];
                $_SESSION['user_id'] = $acceptPass['id'];
                $_SESSION["id"] = $acceptPass["id"];
                header("Location: profile.php?id=". $acceptPass["id"]);
            }else{
                echo "<h2><span>Password is Incorrect</span> <i class='fa-solid fa-circle-xmark'></i></h2> <script>document.title='Error - Incorrect Password'</script>";
            }
        }else{
            echo "<h2>Invalid Email or Password <i class='fa-solid fa-circle-xmark'></i></h2>";
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body{
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        h2{
            width: 70%;
            height: 100px;
            display: flex;
            gap: 30px;
            align-items: center;
            justify-content: center;
            box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.3);
            
        }
        .fa-circle-check{
            color: #0a8349;
            font-size: 30px;
        }
        .fa-circle-xmark{
            color: red;
            font-size: 30px;
        }
    </style>
</head>
<body>
    
</body>
</html>