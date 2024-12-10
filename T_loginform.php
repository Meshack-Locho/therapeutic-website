<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <form action="T_login.php" method="post">
            <div class="input-classes">
                <label for="email">Email</label>
                <span><input type="email" name="email" id="email" required placeholder="Enter your email, eg myemail@gmail.com"> <i class="fa-solid fa-envelope"></i></span>
            </div>

            <div class="input-classes">
                <label for="password">Password</label>
                <span>
                <input type="password" name="password" id="password" required placeholder="Enter your password"> <i class="fa-solid fa-eye-slash" style="cursor: pointer;" title="show password"></i>    
            </span>
            </div>

            <input type="submit" value="Log in">
        </form>
        <p>Don't have an account? <a href="T_signupform.php">Sign up</a></p>
    </div>
</body>
</html>