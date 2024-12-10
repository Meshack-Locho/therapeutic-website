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
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header id="header">
        <div class="navigation">
            <a class="logo" href="">
                <img src="images/marcy-stewart-therapy-high-resolution-logo-white.png" alt="Marcy Stewart Logo">
            </a>
            <nav>
                <ul>
                    <li><a href="">Home</a></li>
                    <li class="sessions"><a href="">Sessions <i class="fa-solid fa-angle-down"></i></a>
                    <div class="sub-sessions">
                        <a href="">Cognitive Behavioral Therapy</a>
                        <a href="">Psychodynamic Therapy</a>
                        <a href="">Supportive Therapy</a>
                        <a href="">Dialectical Behavior Therapy</a>
                        <a href="">Acceptance & Commitment Therapy</a>
                        <a href="">Interpersonal Therapy </a>
                    </div>
                    </li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">Blog</a></li>
                    <li style="display: flex;align-items:center;gap:10px;color: rgb(0, 255, 128);">
                      <?php
                      if (isset($_SESSION["name"])) {?>
                       <h3> <?=$_SESSION["name"]?> <i class="fa-solid fa-user"></i></h3>
                       <a href="logout.php" style="color: rgb(0, 255, 128);">Log out</a>
                       </li>
                      <?php }else{?>
                      <li>
                        <a href="T_loginform.php" style="color: rgb(0, 255, 128);">Log in</a></li>
                        <li class="special"><a href="T_signupform.php">Sign up</a></li>
                     <?php }?>  
                </ul>
            </nav>
            <i class="fa-solid fa-bars" style="font-size: 35px;color:aliceblue;"></i>
        </div>

        <div class="middle-header">
            <h1>Marcy Stewart</h1>
            <h4>Hi there, Am Marcy Stewart and welcome to my space, where healing begins and transformation unfolds. Let's turn on a new LEAF, shall we?</h4>
            <a href="">Book Session</a>
        </div>

        <img src="images/therapist1.jpg" alt="Marcy stewart - therepist" class="header-bg-img">
        <div class="header-overlay"></div>
    </header>

    <main>
        <section class="section1">
            <p>Welcome to Marcy Stewart's therapy practice, where healing begins and transformation unfolds. With compassion, empathy, and expertise, Marcy provides a safe and supportive space for individuals seeking personal growth and emotional well-being. Specializing in various modalities, including cognitive-behavioral therapy (CBT), mindfulness-based approaches, and solution-focused therapy, Marcy empowers her clients to overcome challenges, navigate life transitions, and cultivate resilience. Whether you're struggling with anxiety, depression, relationship issues, or simply seeking guidance and support, Marcy is here to accompany you on your journey towards healing and self-discovery. Take the first step towards a brighter tomorrow with Marcy Stewart Therapy.</p>
            <figure>
            <img src="images/therapist listening.jpg" alt="Marcy Stewart in a therapy session">
            <figcaption>Marcy Stewart</figcaption>
            </figure>
            <img src="images/decorative shapes.png" alt="decorative shapes" class="decorators">
        </section>

        <section class="section2">
            <div style="border-right: 1px solid black;">
                <h3>Over <span class="counter">0</span>+ Countries reached with online sessions</h3>
            </div>

            <div>
                <h3><span class="counter">0</span>% client satisfaction</h3>
            </div>
        </section>

        <section class="section3">
            <figure>
                <img src="images/therapist writing.jpg" alt="Marcy Stewart talking in a therapy session">
                <figcaption>
                    <h2>Marcy Stewart</h2>
                    <p>"Your journey to healing begins with the courage to embrace your vulnerability and the willingness to explore the depths of your own heart."</p>
                </figcaption>
            </figure>
        </section>

        <a href="" class="main-links">Book your Session</a>

        <h1>Why choose Marcy Stewart</h1>

        <section class="section4">
            <div>
                <i class="fa-solid fa-user"></i>
                <h2>Empowerment and Growth</h2>
                <p>I am committed to empowering you to tap into your inner strength, resilience, and potential for growth. Through my guidance and support, you'll cultivate the skills and insights needed to thrive in all areas of your life.</p>
            </div>
            <div>
                <i class="fa-solid fa-shield"></i>
                <h2>Safe and Confidential Space</h2>
                <p>Rest assured that confidentiality and privacy are top priorities at Marcy Stewart Therapy. You can trust that your personal information will be kept secure, and your sessions will remain confidential.</p>
            </div>
            <div>
                <i class="fa-regular fa-face-smile-beam"></i>
                <h2>Positive Results</h2>
                <p>With my guidance and support, many clients have experienced profound positive changes in their lives, from increased self-awareness and improved coping skills to greater emotional resilience and fulfillment.</p>
            </div>
        </section>

        <h1>Latest from my Blog</h1>

        <section class="section5">
            <div>
                <img src="images/blog banner d88e1ffe-441c-45ed-9508-ea4fd74e4a2b.png" alt="Beautiful landscape">
                <h3>What's affecting your progress?</h3>
                <p>Are you feeling a little bit of lately, like there is something going on that you don't understand? You though you were making progress but something just feels... <a href="">Continue reading</a></p>
            </div>
            <div>
                <img src="images/blog banner d88e1ffe-441c-45ed-9508-ea4fd74e4a2b.png" alt="Beautiful landscape">
                <h3>What's affecting your progress?</h3>
                <p>Are you feeling a little bit of lately, like there is something going on that you don't understand? You though you were making progress but something just feels... <a href="">Continue reading</a></p>
            </div>
            <div>
                <img src="images/blog banner d88e1ffe-441c-45ed-9508-ea4fd74e4a2b.png" alt="Beautiful landscape">
                <h3>What's affecting your progress?</h3>
                <p>Are you feeling a little bit of lately, like there is something going on that you don't understand? You though you were making progress but something just feels... <a href="">Continue reading</a></p>
            </div>
        </section>

        <h1>What my Clients are saying</h1>

        <section class="section6">
            <div class="ratings">
                <img src="images/lady1.jpg" alt="">
                <div>
                <h3>Jane.S.Taylor</h3>
                <p>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur ducimus explicabo molestias doloremque quibusdam id perferendis tenetur neque laborum! Iure maxime laborum sapiente at ipsa unde libero vel, odit nemo."</p>
                </div>
            </div>
            <div class="ratings">
                <img src="images/person3.jpg" alt="">
                <div>
                <h3>Kevin Miller</h3>
                <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima quo placeat esse accusamus dolore quasi, consequuntur illo, voluptate deleniti tenetur adipisci. Architecto maxime tempora voluptate porro deleniti quod vero sed!"</p>
                </div>
            </div>
            <div class="ratings">
                <img src="images/person1.jpg" alt="">
                <div>
                <h3>Sam.D.Smith</h3>
                <p>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit repudiandae beatae facere officia? Earum mollitia nulla corporis sed harum ipsa, voluptates fugit ratione at, aspernatur eveniet aut quasi tenetur quaerat?"</p>
                </div>
            </div>
            
            <a href="" class="main-links">All Reviews</a>
        </section>

        <section class="section7">
            <form action="" method="post">
                <div class="input-side">
                    <h2>Subscribe to my Newsletter</h2>
                <div>
                    <label for="email">Your Email:</label>
                    <span>
                        <input type="email" name="email" id="email" required autocomplete="off">
                        <input type="submit" value="Subscribe">
                    </span>
                </div>
                </div>
                <img src="images/therapist talking.jpg" alt="">
            </form>
        </section>
    </main>

    <footer>
        <div>
            <a href="">Contact</a>
            <a href="">About</a>
            <a href="">Blog</a>
            <a href="">Sessions</a>
            <a href="">Back to top</a>
        </div>
        <div>
            <a href="">Facebook <i class="fa-brands fa-facebook"></i></a>
            <a href="">Twitter <i class="fa-brands fa-x-twitter"></i></a>
            <a href="">marcystewart@gmail.com <i class="fa-solid fa-envelope"></i></a>
            <a href="">+1(012) 345 658 <i class="fa-solid fa-phone"></i></a>
            <a href="">Instagram <i class="fa-brands fa-instagram"></i></a>
        </div>

        <hr>
        <div>
            <h3>Marcy Stewart</h3>
            <p>All rights Reserved 2024&copy;</p>
        </div>
    </footer>
    
    <script src="index.js"></script>
</body>
</html>