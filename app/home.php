<?php
include("./includes/homeheader.php");

function generateBackground($symbol) {
    $background = "";
    for ($i = 0; $i < 30; $i++) {
        $x = rand(0, 100); 
        $y = rand(0, 100); 
        $opacity = rand(10, 40) / 100;
        $background .= "<span style='position:absolute; top:{$y}%; left:{$x}%; opacity:{$opacity}; font-size: 5rem;'>$symbol</span>";
    }
    return $background;
}
?>

<style>

    .footer {
        background-color: #37AFE1;
        color: white;
        padding: 20px 0;
        text-align: center;
    }

    .footer a {
        color: white;
        text-decoration: none;
        margin: 0 15px;
        transition: color 0.3s;
    }

    .footer a:hover {
        color: #FFD700;
    }

    .footer .social-icons a {
        margin: 0 10px;
        font-size: 20px;
    }

    .section {
        display: flex;
        justify-content: space-between; /* Align content on the sides */
        align-items: center; /* Center items vertically */
        flex-direction: row; /* Use row direction */
        height: 130vh;
        padding: 20px;
        color: white;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        text-align: left; /* Align text to the left */
        position: relative;
        overflow: hidden; 
        background-size: cover;
        background-position: center;
    }

    .section-addition, .section-multiplication {
        background-color: #37AFE1;
    }

    .section-subtraction, .section-division {
        color: black;
        background-color: #FFFECB;
    }

    .text-content {
        flex: 1;
        padding: 0;
    }

    .image-holder {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .text-content h2 {
        font-family: 'DejaVu Sans Mono', monospace;
        font-size: 4.7rem;
        font-weight: bold;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
        margin-bottom: 10px;
    }

    .text-content p {
        font-size: 2.5rem;
        font-weight: 500;
        width: 80%;
        max-width: 1000px;
        margin-bottom: 20px;
    }

    .text-content .trivia {
        font-size: 1.7rem;
        color: #333333;
        font-weight: bold;
        font-style: italic;
        margin-top: 15px;
        max-width: 600px;
    }

    .start-btn {
        margin: 20px auto; 
        padding: 8px 16px;
        background-color: #FF5733;
        color: white;
        font-size: 1.5rem;
        border-radius: 30px;
        text-decoration: none;
        font-weight: bold;
        display: flex;
        width: 50%;
        max-width: 600px;
        align-items: center;
    }

    .start-btn:hover {
        background-color: #e04b29;
    }

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
        <img src="resources/images/8.png" alt="Addition Image" style="width: 1000px; height: 1000px;">
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
        <img src="resources/images/6.png" alt="Subtraction Image"  style="width: 600px; height: 600px;">
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
        <img src="resources/images/1.png" alt="Multiplication Image"  style="width: 600px; height: 600px;">
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
        <img src="resources/images/4.png" alt="Division Image"  style="width: 600px; height: 600px;">
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