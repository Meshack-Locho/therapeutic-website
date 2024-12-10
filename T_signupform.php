<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <form action="T_signup.php" method="post">
            <div class="input-classes">
                <label for="name">Name</label>
                <span><input type="text" name="name" id="name" required placeholder="Enter your name" autocomplete="off"> <i class="fa-solid fa-user"></i></span>
            </div>
            <div class="input-classes">
                <label for="email">Email</label>
                <span><input type="email" name="email" id="email" required placeholder="Enter your email, eg myemail@gmail.com" autocomplete="off"> <i class="fa-solid fa-envelope"></i></span>
            </div>
            <div class="input-classes">
                <label for="password">Password</label>
                <span>
                <input type="password" name="password" id="password" required placeholder="Enter your password" autocomplete="off"> <i class="fa-solid fa-eye-slash" style="cursor: pointer;" title="show password"></i>    
            </span>
            </div>
            <div class="input-classes">
                 <label for="age">Age</label>
                 <span><input type="number" name="age" id="age" required placeholder="Enter your age" autocomplete="off"> <i class="fa-solid fa-calendar"></i></span>
            </div>
            <div class="input-classes">
                 <label for="phone">Phone Number</label>
                 <span>
                 <input type="tel" name="phone" id="phone" required placeholder="Enter your phone number" autocomplete="off"> <i class="fa-solid fa-phone"></i>
                 </span>
            </div>
            <input type="submit" value="Sign up">
        </form>
        <p>Already have an account? <a href="T_loginform.php">Log in</a></p>
    </div>
</body>
</html>