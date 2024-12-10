<?php

session_start();
if (!isset($_SESSION["name"])) {
    header("Location: T_loginform.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <div class="prof-navigation">
            <a class="logo" href="">
                <img src="images/marcy-stewart-therapy-high-resolution-logo-white.png" alt="Marcy Stewart Logo">
            </a>
            <div class="user-top-info">
                <h3>Welcome</h3> <?php 
                 if (isset($_SESSION["username"])) {?>
                    <h4><?= $_SESSION["username"]?><h4>
                <?php }?>
                <h3>This is Your DASHBOARD</h3></div>
        </div>
    </header>
    <div class="main-content">

    <div class="prof-container">
        <div class="user-info">
            <img src="images/profile-icon-png-909.png" alt="">
            <?php 
                if (isset($_SESSION["name"])) {?>
                    <h3 class="user-name"><?= $_SESSION["name"]?></h3>
                    
                <?php }            
            ?>
        </div>
        <a href="logout.php" class="log-out">Log out</a>

        <div class="user-actions">
            <button id="session-booking">Book Sessions</button>
            <button id="faq-req">FAQs</button>
            <button id="articles-btn">Articles</button>
            <button id="sessions-booked">Sessions Booked</button>
        </div>
    </div>
    
    <div class="content">
    <div class="faq-questions">
    <h2>FAQs</h2>
    <div class="faq">
     <h4><span>What does therapy Entail</span> <i class="fa-solid fa-angle-right"></i></h4>
     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, nihil in? Itaque corrupti nisi vitae minus repellendus quos, vero obcaecati veniam ex voluptate nemo dicta expedita necessitatibus praesentium, cupiditate quidem!</p>
    </div>
    <div class="faq">
     <h4><span>What is Cognitive Behavioral Therapy</span> <i class="fa-solid fa-angle-right"></i></h4>
     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, nihil in? Itaque corrupti nisi vitae minus repellendus quos, vero obcaecati veniam ex voluptate nemo dicta expedita necessitatibus praesentium, cupiditate quidem!</p>
    </div>
    <div class="faq">
     <h4><span>What steps to take after a session</span> <i class="fa-solid fa-angle-right"></i></h4>
     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, nihil in? Itaque corrupti nisi vitae minus repellendus quos, vero obcaecati veniam ex voluptate nemo dicta expedita necessitatibus praesentium, cupiditate quidem!</p>
    </div>
    <div class="faq">
     <h4><span>What does therapy Entail</span> <i class="fa-solid fa-angle-right"></i></h4>
     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, nihil in? Itaque corrupti nisi vitae minus repellendus quos, vero obcaecati veniam ex voluptate nemo dicta expedita necessitatibus praesentium, cupiditate quidem!</p>
    </div>
    </div>
    </div>
    </div>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="profile.js"></script>
</body>
</html>