<?php

$name = $_POST["name"];
$email = $_POST["email"];
$password = password_hash($_POST["password"], PASSWORD_BCRYPT);
$age = $_POST["age"];
$phone = $_POST["phone"];

$conn = new mysqli("localhost", "root", "", "theraputic_website_users");

if ($conn->connect_error) {
    die("Connection failed, please try again later");
}else{
    if ($_SERVER["REQUEST_METHOD"]=='POST') {
        $query = mysqli_query($conn, "SELECT * FROM clients WHERE email='$email'");
        if (mysqli_num_rows($query)>0) {
        echo "<h2>Email Already in use <i class='fa-solid fa-circle-xmark'></i></h2>";
    }else{
        $stmt = $conn->prepare("INSERT INTO clients (name, email, password, age, phone) VALUES (?,?,?,?,?)");
        $stmt->bind_param("sssii", $name, $email, $password, $age, $phone);
        $stmt->execute();
        $result = $stmt->get_result();
    
        $_SESSION["name"]=$name;
        
        header("Location: T_loginform.php");
        $conn->close();
    }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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