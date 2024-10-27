<?php
include("./includes/homeheader.php");

function generateBackground($symbol) {
    $background = "";
    for ($i = 0; $i < 30; $i++) {
        $x = rand(0, 100); 
        $y = rand(0, 100); 
        $opacity = rand(10, 20) / 100;
        $background .= "<span style='position:absolute; top:{$y}%; left:{$x}%; opacity:{$opacity}; font-size: 5rem; color: black;'>$symbol</span>";
    }
    return $background;
}
?>

<style>
    body {
        font-family: 'Poppins', sans-serif;
    }
    /* Footer */
    .footer {
        background-color: #465775; /* Softer navy blue */
        color: #E1E8ED; 
        padding: 20px 0;
        text-align: center;
    }

    .footer a {
        color: #D1E4E5;
        text-decoration: none;
        margin: 0 15px;
        transition: color 0.3s;
    }

    .footer a:hover {
        color: #94C9A9; /* Soft green */
    }

    .footer .social-icons a {
        margin: 0 10px;
        font-size: 20px;
    }

    /* Section styling */
    .section {
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 100vh;
        padding: 20px;
        color: #2E4053; /* Dark slate gray for contrast */
        text-align: left;
        position: relative;
        overflow: hidden;
        background-size: cover;
        background-position: center;
    }

    /* Background and text colors */
    .section-addition, .section-multiplication {
        background-color: #F7F9FB; /* Light blue-gray */
    }

    .section-subtraction, .section-division {
        background-color: #E8EFF5; /* Soft lavender */
        color: #333;
    }

    /* Content and heading styling */
    .text-content {
        flex: 1;
        padding: 0 20px;
    }

    .text-content h2 {
        font-family: ;
        font-size: 3.5rem;
        color: #3A506B; /* Rich dark blue */
        text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.3);
    }

    .text-content p {
        font-size: 1.7rem;
        line-height: 1.6;
        color: #2E4053;
    }

    .text-content .trivia {
        font-size: 1.4rem;
        color: #6A8EAE; /* Subtle slate blue */
        margin-top: 15px;
        font-weight: bold;
        font-style: italic;
    }

    /* Button styling */
    .start-btn {
        display: inline-block;
        padding: 12px 24px;
        margin-top: 20px;
        background-color: #A3D2CA; /* Soft aqua green */
        color: #2E4053;
        font-size: 1.3rem;
        font-weight: bold;
        border-radius: 30px;
        text-decoration: none;
        transition: background-color 0.3s;
    }

    .start-btn:hover {
        background-color: #88C6B1; /* Darker aqua */
    }

    /* Symbol background */
    .symbol-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
    }
</style>

<section class="section section-addition">
    <div class="symbol-bg">
        <?php echo generateBackground('+'); ?>
    </div>
    <div class="text-content">
        <h2>Addition</h2>
        <p>Addition is where math magic begins! You can count, add numbers together, and see how big numbers can grow. Whether it’s adding up points in a game or finding totals, addition makes everything more fun!</p>
        <div class="trivia">Did you know? Adding numbers helps keep your brain sharp, and it’s the first step to solving bigger problems!</div>
        <a href="learning/addition.php" class="start-btn">Start Learning ➔</a>
    </div>
    <div class="image-holder">
        <img src="resources/images/8.png" alt="Addition Image" style="width: 400px; height: 400px;">
    </div>
</section>

<section class="section section-subtraction">
    <div class="symbol-bg">
        <?php echo generateBackground('−'); ?>
    </div>
    <div class="text-content">
        <h2>Subtraction</h2>
        <p>Subtraction lets you find what’s left after taking something away. It’s like magic! Subtracting numbers can help you keep track of your stuff, like toys, snacks, or points in a game. Let’s practice “taking away” and see what we get!</p>
        <div class="trivia">Fun Fact: Subtracting can help you get ready for puzzles and mystery games, where every clue counts!</div>
        <a href="learning/subtraction.php" class="start-btn">Start Learning ➔</a>
    </div>
    <div class="image-holder">
        <img src="resources/images/6.png" alt="Subtraction Image"  style="width: 400px; height: 400px;">
    </div>
</section>

<section class="section section-multiplication">
    <div class="symbol-bg">
        <?php echo generateBackground('×'); ?>
    </div>
    <div class="text-content">
        <h2>Multiplication</h2>
        <p>Multiplication is super cool! It’s like addition but faster. Instead of adding the same number again and again, we can multiply. It’s a great way to count quickly, like finding the total number of chocolates in a big box or stars in the sky!</p>
        <div class="trivia">Cool Tip: Multiplying can make you faster at calculations and helps with anything that comes in groups!</div>
        <a href="learning/multiplication.php" class="start-btn">Start Learning ➔</a>
    </div>
    <div class="image-holder">
        <img src="resources/images/1.png" alt="Multiplication Image"  style="width: 400px; height: 400px;">
    </div>
</section>

<section class="section section-division">
    <div class="symbol-bg">
        <?php echo generateBackground('÷'); ?>
    </div>
    <div class="text-content">
        <h2>Division</h2>
        <p>Division is like sharing! When you have a lot of things and want to share them equally, division helps you out. It’s perfect for things like sharing cookies with friends or splitting points in a game. Let’s learn to share like a pro!</p>
        <div class="trivia">Did you know? Division can help with fair sharing, making it easier to split things equally with friends!</div>
        <a href="learning/division.php" class="start-btn">Start Learning ➔</a>
    </div>
    <div class="image-holder">
        <img src="resources/images/4.png" alt="Division Image"  style="width: 400px; height: 400px;">
    </div>
</section>

<footer class="footer">
    <div class="container">
        <div>
            <a href="#about">About Us</a>
            <a href="#services">Services</a>
            <a href="#contact">Contact</a>
            <a href="#privacy">Privacy Policy</a>
            <a href="#terms">Terms of Service</a>
        </div>
        <div class="social-icons mt-3">
            <a href="#" title="Facebook"><i class="fab fa-facebook-square"></i></a>
            <a href="#" title="Twitter"><i class="fab fa-twitter-square"></i></a>
            <a href="#" title="Instagram"><i class="fab fa-instagram-square"></i></a>
            <a href="#" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
        </div>
        <div class="mt-3">
            &copy; <?php echo date("Y"); ?> Do Math & Conquer. All rights reserved.
        </div>
    </div>
</footer>
